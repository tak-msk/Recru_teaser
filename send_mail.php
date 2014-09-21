<?php
require_once 'bootstrap.php';
$logger = Logger::getLogger('default');
$posted = Session::read('posted', null);
if ($posted === null) return header('Location: index.php');
$logger->info($posted);
/** Databaseへの登録. 
 * DB登録が失敗した時用に $dbfailed という変数にエラーメッセージが格納されます.
 * コメントアウトを忘れずに.
 *
 * またメール送信エラーの時のために rollback と commit がファイルの終り付近にあるので、
 * DB機能を使う場合はそちらのコメントアウトも忘れずに.
 $dbconn = Dbmanage::connect();;
$dbtable = Dbmanage::$table;
$dbconn->beginTransaction();
$stmt = $dbconn->prepare(
	"INSERT INTO `{$dbtable}` (`name`, `university`, `faculty`, `graduating`, `sex`, `phone`, `mail`, `device`, `created_at`) ".
	"VALUES (:name, :university, :faculty, :graduating, :sex, :phone, :mail, 'PC', NOW());"
);
$stmt->bindValue(':name', Arr::get($posted, 'name'), PDO::PARAM_STR);
$stmt->bindValue(':university', Arr::get($posted, 'university'), PDO::PARAM_STR);
$stmt->bindValue(':faculty', Arr::get($posted, 'faculty'), PDO::PARAM_STR);
$stmt->bindValue(':graduating', Arr::get($posted, 'graduating'), PDO::PARAM_INT);
$stmt->bindValue(':sex', Arr::get($posted, 'sex'), PDO::PARAM_STR);
$stmt->bindValue(':phone', Arr::get($posted, 'phone'), PDO::PARAM_STR);
$stmt->bindValue(':mail', Arr::get($posted, 'mail'), PDO::PARAM_STR);

$dbfailed = "";
try {
	$stmt->execute();
} catch (PDOException $e) {
	$dbfailed =
		"※※データベースへの登録中にエラーが発生したため、サーバー側にデータがありません。※※\n".
		"※※このメールは削除しないようにしてください。※※\n\n".
		"";
}
 */

$mail = new PHPMailer();
$mail->isMail();
$mail->CharSet = Mailconfig::$charset;
$mail->From = Mailconfig::$from;
$mail->FromName = Mailconfig::$fromname;

// to user
$mail->addAddress(Arr::get($posted, 'mail'), Arr::get($posted, 'mail'));
$mail->Subject = '【RECRU】事前登録が完了しました';
$mail->Body = 
	"\nRECRU(リクルー)の事前登録を受け付けました。\n".
	"\nこの度は就活生同士のクローズドSNS「RECRU(リクルー)」への事前登録\n".
	"誠にありがとうございます。\n".
	"今後、本サービスの開始まで\n".
	"お得な就活情報やサービスリリースに関する情報をお知らせいたしますので、\n".
	"ぜひご活用ください！！\n".
	"\n※このメールはサービスの事前登録受付後、自動送信されております．\n".
	"返信には対応しておりませんので、ご注意くださいませ。\n".
	"\n============================================================\n".
	"RECRU(リクルー)\n".
	"運営事務局\n".
	"http://recru.asia".
	"";
$mailfailed = "";
if (! $mail->send()) {
	$mailfailed =
		"\n事前登録のメールの送信に失敗しました。\n".
		"手動での送信が必要になります\n".
		"以下登録者への完了メール===================\n\n".
		"件名: ". $mail->Subject ."\n".
		"本文:\n". $mail->Body ."\n".
		"\n===============登録者への完了メール内容ここまで\n".
		"";
	$logger->error("ユーザーへのメール送信に失敗しました。");
	$logger->error($mail->ErrorInfo);
}

// to bellpark
$mail->clearAllRecipients();
foreach (Mailconfig::$to as $address => $name) {
	$mail->addAddress($address, $name);
}
foreach (Mailconfig::$cc as $address => $name) {
	$mail->addCC($address, $name);
}
foreach (Mailconfig::$bcc as $address => $name) {
	$mail->addBCC($address, $name);
}

$mail->Subject = '【RECRU】事前登録の受付';
$mail->Body = 
	"\nサービスの事前登録を受け付けました。\n\n".
	// $dbfailed . // db failure message
	$mailfailed .
	"メールアドレス：{$posted['mail']}\n".
	//"\n参加者リストの確認【URL】\n"
	"\n※このメールはサービスの事前登録受付後、自動送信されております．\n".
	"返信には対応しておりませんので、ご注意くださいませ。\n".
	"\n============================================================\n".
	"RECRU(リクルー)\n".
	"運営事務局\n".
	"http://recru.asia".
	"";
if (! $mail->send()) {
	$logger->fatal("管理者へのメール送信に失敗しました。");
	$logger->fatal($mail->ErrorInfo);
	$logger->fatal($mail->Body);
	Session::write('failed.register', "登録処理中にエラーが発生しました。<br/>お手数ですが、登録内容をご確認の上再度ご登録をお願いします。");
	// $dbconn->rollback(); //DB rollback
	return header('Location: index.php');
}

// $dbconn->commit(); //DB commit
Session::delete('posted');
return header('Location: complete.php');
