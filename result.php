<?php
session_start();
session_regenerate_id(true);
if (isset($_SESSION['login']) == false) {
    print 'ログインされていません。<br>';
    print '<a href="user_login/user_login.html">ログイン画面へ</a>';
    exit();
} else {
    print $_SESSION['nickname'];
    print 'さんの成績(*^_^*)<br>';
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
<h1>成績</h1>
<?php
for ($i=1; $i<17; $i++) {
    ${"value_".$i} = $_POST[$i];
    //var_dump(${"value_".$i});
}
// 問１の採点
if ($value_1 == 2 && $value_2 == 5) {
    $ans_1 = 20;
} else {
    $ans_1 = 0;
}
// 問２の採点
if ($value_3 == 1 && $value_4 == 1) {
    $ans_2 = 20;
} else {
    $ans_2 = 0;
}
// 問３の採点
if ($value_5 == 3 && $value_6 == 4 && $value_7 == 2 && $value_8 == 3 && $value_9 == 8) {
    $ans_3 = 20;
} else {
    $ans_3 = 0;
}
// 問４の採点
if ($value_10 == 1 && $value_11 == 2 && $value_12 == 7 && $value_13 == 4) {
    $ans_4 = 20;
} else {
    $ans_4 = 0;
}
// 問５の採点
if ($value_14 == 1 && $value_15 == 3 && $value_16 == 4) {
    $ans_5 = 20;
} else {
    $ans_5 = 0;
}
// 合計得点の計算と得点の表示
$total = 0;
for ($i=1; $i<6; $i++) {
    $total += ${"ans_".$i};
    if (${"ans_".$i} == 0) {
        $temp = str_replace(" ", "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;", str_pad(${"ans_".$i}, 2, " ", STR_PAD_LEFT));
        echo "問{$i} $temp\n点"."<br>";
    } else {
        echo "問{$i} &nbsp;&nbsp;&nbsp;${"ans_".$i}\n点"."<br>";
    }
}
//$total = str_replace(" ", "&nbsp;&nbsp;", str_pad($total, 3, " ", STR_PAD_LEFT));
echo "<br>";
echo "合計 {$total}&nbsp;点";
$completion = '';
if ($total >= 60) {
    $completion = '合格';
} else if ($total < 60) {
    $completion = '不合格';
}
echo "<br>";
echo " {$completion} です";
?>
<?php
try {
    $login_id = $_SESSION['login_id'];
    $login_id = htmlspecialchars($login_id, ENT_QUOTES, 'UTF-8');
    $dsn = 'mysql:dbname=marktest;host=localhost';
    $user = 'root';
    $password = '1234qwer';
    $dbh = new PDO($dsn, $user, $password);
    $dbh->query('SET NAMES utf8');
    $sql = 'SELECT id FROM user_info WHERE login_id=?';
    $stmt = $dbh->prepare($sql);
    $data[] = $login_id;
    $stmt->execute($data);
    $rec = $stmt->fetch(PDO::FETCH_ASSOC);
    $id = $rec['id'];
    $dbh = null;

    $dsn = 'mysql:dbname=marktest;host=localhost';
    $user = 'root';
    $password = '1234qwer';
    $dbh = new PDO($dsn, $user, $password);
    $dbh->query('SET NAMES utf8');
    $sql = 'INSERT INTO result_test(id, result, completion) VALUES(?,?,?)';
    $stmt = $dbh->prepare($sql);
    $data = [];
    $data[] = $id;
    $data[] = $total;
    $data[] = $completion;
    $stmt->execute($data);

    $dbh = null;

} catch (Exception $e) {
    print 'ただいま障害により大変ご迷惑をお掛けしております。';
    exit();
}
?>
<a href="index.php">戻る</a>
</body>
</html>
