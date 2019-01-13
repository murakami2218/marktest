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
    var_dump(${"value_".$i});
}
$total = 0;
// 問１の採点
if ($value_1 == 2 && $value_2 == 5) {
    $total += 20;
}
// 問２の採点
if ($value_3 == 1 && $value_4 == 1) {
    $total += 20;
}
echo $total;
?>
</body>
</html>
