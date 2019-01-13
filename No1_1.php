<!DOCTYPE html>
<html　lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="http://cdn.mathjax.org/mathjax/latest/MathJax.js" type="text/javascript">    
    MathJax.Hub.Config({
        HTML: ["input/TeX","output/HTML-CSS"],
        TeX: {
            Macros: {
                    bm: ["\\boldsymbol{#1}", 1],
                    argmax: ["\\mathop{\\rm arg\\,max}\\limits"],
                    argmin: ["\\mathop{\\rm arg\\,min}\\limits"]},
            extensions: ["AMSmath.js","AMSsymbols.js"],
            equationNumbers: { autoNumber: "AMS" } },
        extensions: ["tex2jax.js"],
        jax: ["input/TeX","output/HTML-CSS"],
        tex2jax: { inlineMath: [ ['$','$'], ["\\(","\\)"] ],
                displayMath: [ ['$$','$$'], ["\\[","\\]"] ],
                processEscapes: true },
        "HTML-CSS": { availableFonts: ["TeX"],
                    linebreaks: { automatic: true } },
    TeX: {
        extensions: ["color.js"]
        }
    });
</script>
<title>数学摩天楼</title>
</head>
<body>
<h1>平方完成No.1</h1>
<p style="font-size: 18px;">【1】次の2次関数を平方関数せよ。</p><br>
<p style="padding:0 0 0 37px;">(1)</p>
<p>$$\begin{array}{rcl}y &=& x^{2}+4x-1 \\
    &=& (x+\fbox{ 1 })^{2}-\fbox{ 2 } \end{array}$$
</p> 
<br>
<br>

<form action="No1_2.php" method="POST">
    <table>
        <tr>
            <td>1</td>
            <td>
                <?php
                selectCreate("1-1");
                ?>
            </td>
        </tr>
        <tr>
            <td>2</td>
            <td>
                <?php
                selectCreate("1-2");
                ?>
            </td>
        </tr>
    </table>
    <input type="submit" value="次へ">
    <a href="index.html">戻る</a>
</form>
<br>
<br>
<?php
function selectCreate($name) {
    echo "<select name=$name>";
    for ($i=0; $i < 10; $i++) {
        echo "<option value=$i>$i</option>";
    }
    echo "</select>";
}
?>
</body>
</html>