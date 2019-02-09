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

アカウントの登録<br>
<br>
<form method="post" action="user_add_check.php">
    ログインIDを入力してください。<br>
    <input type="text" name="login_id" style="width:200px"><br>
    ニックネームを入力してください。<br>
    <input type="text" name="nickname" style="width:100px"><br>
    パスワードを入力してください。<br>
    <input type="password" name="login_pw" style="width:100px"><br>
    パスワードをもう１度入力してください。<br>
    <input type="password" name="login_pw2" style="width:100px"><br>
    <br>
    <input type="button" onclick="history.back()" value="戻る">
    <input type="submit" value="OK">
</div>
</body>
</html>