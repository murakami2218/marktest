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
<h1>平方完成No.1</h1>
<a href="No1.php">問題を解く</a>
<a href="index.php">戻る</a>
</body>
</html>
