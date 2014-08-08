<?php
require_once 'bootstrap.php';
// simple email validation method
function is_valid_email ($mail)
{
    return filter_var($mail, FILTER_VALIDATE_EMAIL) && (! preg_match('/@\[[^\]]++\]\z/', $mail));
}
// simple phone validation method
function is_valid_phone ($phone)
{
    // 13 as a maximum phone length include dash
    $phonelen = mb_strlen($phone, 'UTF-8');
    return $phonelen === 10 or $phonelen === 11;
}
//
// convert Zenkaku to Hankaku
$phone = mb_convert_kana(Arr::get($_POST, 'phone'), 'a', 'UTF-8');
$phone = preg_replace('/\D/', '', $phone);
Arr::set($_POST, 'phone', $phone);
$mail = mb_convert_kana(Arr::get($_POST, 'mail'), 'a', 'UTF-8');
Arr::set($_POST, 'mail', $mail);
Session::write('posted', $_POST);

$required = array(
    'name' => '氏名を入力してください',
    'university' => '大学名を入力してください',
    'faculty' => '学部、学科を入力してください',
    'graduating' => '卒業予定年度を入力してください',
    'phone' => '電話番号を入力してください',
    'mail' => 'メールアドレスを入力してください',
    'role' => '役割を入力してください',
    'sex' => '性別を入力してください',
    'enthusiasm' => '意気込みを入力してください',
);
$failed = array();

/**
 * validate missing input
 */
foreach ($required as $key => $errmsg) {
    $val = Arr::get($_POST, $key, "");
    if ($val === "") $failed[$key] = $errmsg;
}

// 電話番号の扱いをどうするか？
if ((! isset($failed['phone'])) and (! is_valid_phone($phone))) {
    $failed['phone'] = '電話番号として不正な値です。もう一度ご確認ください';
}

if ((! isset($failed['mail'])) and (! is_valid_email($mail))) {
    $failed['mail'] = 'メールの形式に誤りがあるか、既に登録されています';
}

/** メールの重複チェック. DB登録がある場合はコメントアウトして下さい.
if (! isset($failed['mail'])) {
    $dbconn = Dbmanage::connect();
    $dbtable = Dbmanage::$table;
    $stmt = $dbconn->prepare("SELECT id from {$dbtable} WHERE `mail` = :mail;");
    $stmt->bindValue(':mail', Arr::get($_POST, 'mail'), PDO::PARAM_STR);
    try {
        $stmt->execute();
    } catch (PDOException $e) {
        $failed['mail'] = 'メールの形式に誤りがあるか、既に登録されています';
    }

    if ($stmt->fetchColumn() !== false) {
        $failed['mail'] = 'メールの形式に誤りがあるか、既に登録されています';
    }
}
 */

if (! empty($failed)) {
    Session::write('failed', $failed);
    return header('Location: index.php#entry');
}

return header('Location: confirm.php');
