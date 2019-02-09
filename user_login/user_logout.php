<?php
session_start();
$_SESSION = array();
if (isset($_COOKIE[session_name()]) == true) {
    setcookie(session_name(), '', time()-42000, '/');
}
session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>数学摩天楼</title>
</head>
<body>

ログアウトしました。<br>
<br>
<a href="../user_login/user_login.html">ログイン画面へ</a>
</body>
</html>