<?php
require_once 'bootstrap.php';
// simple email validation method
function is_valid_email ($mail)
{
    return filter_var($mail, FILTER_VALIDATE_EMAIL) && (! preg_match('/@\[[^\]]++\]\z/', $mail));
}
$required = array(
    'mail' => 'メールアドレスを入力してください',
);
$failed = array();

/**
 * validate missing input
 */
foreach ($required as $key => $errmsg) {
    $val = Arr::get($_POST, $key, "");
    if ($val === "") $failed[$key] = $errmsg;
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
    return header('Location: index.php');
}

return header('Location: send_mail.php');
