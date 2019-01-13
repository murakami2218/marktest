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
$total = str_replace(" ", "&nbsp;&nbsp;", str_pad($total, 3, " ", STR_PAD_LEFT));
echo "<br>";
echo "合計 {$total}&nbsp;点";
?>
<a href="index.php">戻る</a>
</body>
</html>
