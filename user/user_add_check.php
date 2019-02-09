<?php
/*
session_start();
session_regenerate_id(true);
if (isset($_SESSION['login']) == false) {
    print 'ログインされていません。<br>';
    print '<a href="../user_login/user_login.html">ログイン画面へ</a>';
    exit();
} else {
    print $_SESSION['nickname'];
    print 'さんログイン中<br>';
    print '<br>';
}
*/
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>数学摩天楼</title>
</head>
<body>

<?php
$login_id = $_POST['login_id'];
$login_pw = $_POST['login_pw'];
$login_pw2 = $_POST['login_pw2'];
$nickname = $_POST['nickname'];

$login_id = htmlspecialchars($login_id, ENT_QUOTES, 'UTF-8');
$login_pw = htmlspecialchars($login_pw, ENT_QUOTES, 'UTF-8');
$login_pw2 = htmlspecialchars($login_pw2, ENT_QUOTES, 'UTF-8');
$nickname = htmlspecialchars($nickname, ENT_QUOTES, 'UTF-8');

if ($login_id == '') {
    print "ログインIDが入力されていません。<br>";
} else {
    print "ログインID：";
    print $login_id;
    print "<br>";
}
if ($nickname == '') {
    print "ニックネームが入力されていません。<br>";
} else {
    print "ニックネーム：";
    print $nickname;
    print "<br>";
}
if ($login_pw == '') {
    print "パスワードが入力されていません。<br>";
}

if ($login_pw != $login_pw2) {
    print "パスワードが一致しません。<br>";
}

if ($login_id=='' || $nickname=='' || $login_pw=='' || $login_pw!=$login_pw2) {
    print '<form>';
    print '<input type="button" onclick="history.back()" value="戻る">';
    print '</form>';
} else {
    $login_pw = md5($login_pw);
    print '<form method="post" action="user_add_done.php">';
    print '<input type="hidden" name="login_id" value="'.$login_id.'">';
    print '<input type="hidden" name="login_pw" value="'.$login_pw.'">';
    print '<input type="hidden" name="nickname" value="'.$nickname.'">';
    print '<br>';
    print '<input type="button" onclick="history.back()" value="戻る">';
    print '<input type="submit" value="OK">';
    print '</form>';
}
?>

</body>
</html>