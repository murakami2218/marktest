<?php
try {
    $login_id = $_POST['login_id'];
    $login_pw = $_POST['login_pw'];

    $login_id = htmlspecialchars($login_id, ENT_QUOTES, 'UTF-8');
    $login_pw = htmlspecialchars($login_pw, ENT_QUOTES, 'UTF-8');

    $login_pw = md5($login_pw);

    $dsn = 'mysql:dbname=marktest;host=localhost';
    $user = 'root';
    $password = '1234qwer';
    $dbh = new PDO($dsn, $user, $password);
    $dbh->query('SET NAMES utf8');

    $sql = 'SELECT nickname FROM user_info WHERE login_id=? AND login_pw=?';
    $stmt = $dbh->prepare($sql);
    $data[] = $login_id;
    $data[] = $login_pw;
    $stmt->execute($data);

    $dbh = null;

    $rec = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($rec == false) {
        print 'ログインIDかパスワードが間違っています。<br>';
        print '<a href="user_login.html">戻る</a>';
    } else {
        session_start();
        $_SESSION['login'] = 1;
        $_SESSION['login_id'] = $login_id;
        $_SESSION['nickname'] = $rec['nickname'];
        header('Location:../index.php');
        exit();
    }
} catch (Exception $e) {
    print 'ただいま障害により大変ご迷惑をお掛けしております。';
    exit();
}
?>