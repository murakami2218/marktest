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
try {
    $login_id = $_POST['login_id'];
    $login_pw = $_POST['login_pw'];
    $nickname = $_POST['nickname'];

    $login_id = htmlspecialchars($login_id, ENT_QUOTES, 'UTF-8');
    $login_pw = htmlspecialchars($login_pw, ENT_QUOTES, 'UTF-8');
    $nickname = htmlspecialchars($nickname, ENT_QUOTES, 'UTF-8');

    $dsn = 'mysql:dbname=marktest;host=localhost';
    $user = 'root';
    $password = '1234qwer';
    $dbh = new PDO($dsn, $user, $password);
    $dbh->query('SET NAMES utf8');

    $sql = 'INSERT INTO user_info(login_id, login_pw, nickname) VALUES (?,?,?)';
    $stmt = $dbh->prepare($sql);
    $data[] = $login_id;
    $data[] = $login_pw;
    $data[] = $nickname;
    $stmt->execute($data);

    $dbh = null;

    print $nickname;
    print 'さんのアカウントの登録が完了しました<br>';
} catch (Exception $e) {
    print 'ただいま障害により大変ご迷惑をお掛けしております。';
    exit();
}
?>
<a href="../user_login/user_login.html">ログイン画面へ</a>
</body>
</html>