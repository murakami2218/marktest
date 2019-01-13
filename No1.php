<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>数学摩天楼</title>
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
    <script src="./js/jquery.min.js"></script>
    <style>
        .view_field {
            height: 710px;
            width: 880px;
            margin: 0 auto;
            overflow: hidden;
        }
        .nav-link-left {
            float: left;
            text-align: left;
        }
        .nav-link-right {
            float: right;
            text-align: right;
        }
        .submit-button {
            display: block;
            margin: 0 0 0 auto;
        }
    </style>
</head>

<body>
<div class="view_field">
    <form method="post" action="result.php">
    <div id="1_1">
        <br>
        <h1>平方完成No.1</h1>
        <p style="font-size: 18px;">次の2次関数を平方関数せよ。</p><br>
        <p style="padding:0 0 0 37px;">(1)</p>
        <p>$$\begin{array}{rcl}y &=& x^{2}+4x-1 \\
            &=& (x+\fbox{ 1 })^{2}-\fbox{ 2 } \end{array}$$
        </p>
        <br>
        <br>
        <br>
        <br>
        <div style="width: 550px; margin: 88px auto;">
            <table>
                <tr>
                    <td>【1】</td>
                    <td>
                        <?php
                        radioCreate("1");
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>【2】</td>
                    <td>
                        <?php
                        radioCreate("2");
                        ?>
                    </td>
                </tr>
            </table>
        </div>
        <a class="nav-link-right contact" href="#1_2"><p>次へ</p></a>
    </div>
    <br>
    <br>
    <br>
    <div id="1_2">
        <br>
        <h1>平方完成No.1</h1>
        <p style="font-size: 18px;">次の2次関数を平方関数せよ。</p><br>
        <p style="padding:0 0 0 37px;">(2)</p>
        <p>
        $$\begin{array}{rcl}y &=& 2x^{2}-4x+3 \\
            &=& 2(x-\fbox{ 3 })^{2}+\fbox{ 4 } \end{array}$$
        </p>
        <br>
        <br>
        <br>
        <br>
        <div style="width: 550px; margin: 88px auto;">
            <table>
                <tr>
                    <td>【3】</td>
                    <td>
                        <?php
                        radioCreate("3");
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>【4】</td>
                    <td>
                        <?php
                        radioCreate("4");
                        ?>
                    </td>
                </tr>
            </table>
        </div>
        <a class="nav-link-left contact" href="#1_1"><p>前へ</p></a>
        <a class="nav-link-right contact" href="#1_3"><p>次へ</p></a>
    </div>
    <br>
    <br>
    <br>
    <div id="1_3">
        <br>
        <h1>平方完成No.1</h1>
        <p style="font-size: 18px;">次の2次関数を平方関数せよ。</p><br>
        <p style="padding:0 0 0 37px;">(3)</p>
        <p>
        $$\begin{array}{rcl}y &=& 2x^{2}-3x+4 \\
            &=& 2(x-\displaystyle \frac{\fbox{ 5 }}{\fbox{ 6 }})^{2}+\frac{\fbox{ 7 | 8 }}{\fbox{ 9 }} \end{array}$$
        </p>
        <div style="width: 550px; margin: 88px auto;">
            <table>
                <tr>
                    <td>【5】</td>
                    <td>
                        <?php
                        radioCreate("5");
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>【6】</td>
                    <td>
                        <?php
                        radioCreate("6");
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>【7】</td>
                    <td>
                        <?php
                        radioCreate("7");
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>【8】</td>
                    <td>
                        <?php
                        radioCreate("8");
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>【9】</td>
                    <td>
                        <?php
                        radioCreate("9");
                        ?>
                    </td>
                </tr>
            </table>
        </div>
        <a class="nav-link-left contact" href="#1_2"><p>前へ</p></a>
        <a class="nav-link-right contact" href="#1_4"><p>次へ</p></a>
    </div>
    <br>
    <br>
    <br>
    <div id="1_4">
        <br>
        <h1>平方完成No.1</h1>
        <p style="font-size: 18px;">次の2次関数を平方関数せよ。</p><br>
        <p style="padding:0 0 0 37px;">(4)</p>
        <p>
        $$\begin{array}{rcl}y &=& -3x^{2}+3x+1 \\
            &=& -3(x-\displaystyle \frac{\fbox{ 10 }}{\fbox{ 11 }})^{2}+\frac{\fbox{ 12 }}{\fbox{ 13 }} \end{array}$$
        </p>
        <br>
        <div style="width: 550px; margin: 88px auto;">
            <table>
                <tr>
                    <td>【10】</td>
                    <td>
                        <?php
                        radioCreate("10");
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>【11】</td>
                    <td>
                        <?php
                        radioCreate("11");
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>【12】</td>
                    <td>
                        <?php
                        radioCreate("12");
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>【13】</td>
                    <td>
                        <?php
                        radioCreate("13");
                        ?>
                    </td>
                </tr>
            </table>
        </div>
        <a class="nav-link-left contact" href="#1_3"><p>前へ</p></a>
        <a class="nav-link-right contact" href="#1_5"><p>次へ</p></a>
    </div>
    <br>
    <br>
    <br>
    <div id="1_5">
        <br>
        <h1>平方完成No.1</h1>
        <p style="font-size: 18px;">次の2次関数を平方関数せよ。</p><br>
        <p style="padding:0 0 0 37px;">(5)</p>
        <p>
        $$\begin{array}{rcl}y &=& \displaystyle \frac{1}{2}x^{2}+x-\frac{1}{4} \\
            &=& \displaystyle \frac{1}{2}(x+\fbox{ 14 })^{2}-\frac{\fbox{ 15 }}{\fbox{ 16 }} \end{array}$$
        </p>
        <div style="width: 550px; margin: 88px auto;">
            <table>
                <tr>
                    <td>【14】</td>
                    <td>
                        <?php
                        radioCreate("14");
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>【15】</td>
                    <td>
                        <?php
                        radioCreate("15");
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>【16】</td>
                    <td>
                        <?php
                        radioCreate("16");
                        ?>
                    </td>
                </tr>
            </table>
        </div>
        <a class="nav-link-left contact" href="#1_4"><p>前へ</p></a>
        <button class="submit-button" type="submit" value="">採点</button>
    </div>
    </form>
</div><!-- view_field -->



<script>
$(function(){
    var url = $(location).attr('href');
    if (url.indexOf("?id=") == -1) {
        /* スムーズスクロール以外の処理（必要時のみ）*/
    }else{
        /* スムーズスクロールの処理 */
        var url_sp = url.split("?id=");
        var hash = '#' + url_sp[url_sp.length - 1];
        var tgt = $(hash);
        var pos = tgt.offset().top;
        $("html, body").animate({scrollTop:position}, 400, "swing");
    }
});

</script>
<?php
function radioCreate($name) {
    for ($i=0; $i < 10; $i++) {
        echo "<input type='radio' name=$name value='$i'>";
        echo $i."\n";
    }
}
?>
</body>
</html>