<?php
session_start();
session_regenerate_id(true);
if (isset($_SESSION['login']) == false) {
    print 'ログインされていません。<br>';
    print '<a href="user_login/user_login.html">ログイン画面へ</a>';
    exit();
} else {
    print $_SESSION['nickname'];
    print 'さんログイン中<br>';
    print '<br>';
}
?>

<!DOCTYPE html>
<html　lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>数学摩天楼</title>
</head>
<body>
<h1>2次関数</h1>
<ul>
    <li><a href="No1_ready.php">平方完成No.1</a></li>
    <li><a href="No2_ready.php">平方完成No.2</a></li>
    <li><a href="No3_ready.php">平方完成No.3</a></li>
</ul>
<br>
<a href="user_login/user_logout.php">ログアウト</a><br>
</body>
</html>
