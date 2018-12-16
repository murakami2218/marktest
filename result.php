<!DOCTYPE html>
<html　lang="ja">
<head>
<meta charset="UTF-8">
<title>数学摩天楼</title>
</head>
<body>
<h1>成績</h1>
<?php
$name1_1 = $_POST["1-1"];
$name1_2 = $_POST["1-2"];
$name2_1 = $_POST["2-1"];
$name2_2 = $_POST["2-2"];

$name1 = $name1_1 + $name1_2;
$name2 = $name2_1 + $name2_2;
echo $name1 + $name2;
?>
</body>
</html>
