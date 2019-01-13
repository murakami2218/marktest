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
            height: 650px;
            width: 880px;
            margin: 0 auto;
            overflow: hidden;
        }
        .nav-link-left {
            float: left;
            text-align: left;
        }
        .nav-link-right {
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
        <div style="width: 550px; margin: 88px auto;">
            <table>
                <tr>
                    <td>【1】</td>
                    <td>
                        <?php
                        radioCreate("1-1");
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>【2】</td>
                    <td>
                        <?php
                        radioCreate("1-2");
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
        <p>$$\begin{array}{rcl}y &=& x^{2}+4x-1 \\
            &=& (x+\fbox{ 1 })^{2}-\fbox{ 2 } \end{array}$$
        </p>
        <br>
        <br>
        <div style="width: 550px; margin: 88px auto;">
            <table>
                <tr>
                    <td>【1】</td>
                    <td>
                        <?php
                        radioCreate("2-1");
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>【2】</td>
                    <td>
                        <?php
                        radioCreate("2-2");
                        ?>
                    </td>
                </tr>
            </table>
        </div>
        <a class="nav-link-left contact" href="#1_1" class=""><p>前へ</p></a>
        <a class="nav-link-right contact" href="#1_3" class=""><p>次へ</p></a>
    </div>
    <br>
    <br>
    <br>
    <div id="1_3">
        <br>
        <h1>平方完成No.1</h1>
        <p style="font-size: 18px;">次の2次関数を平方関数せよ。</p><br>
        <p style="padding:0 0 0 37px;">(3)</p>
        <p>$$\begin{array}{rcl}y &=& x^{2}+4x-1 \\
            &=& (x+\fbox{ 1 })^{2}-\fbox{ 2 } \end{array}$$
        </p>
        <br>
        <br>
        <div style="width: 550px; margin: 88px auto;">
            <table>
                <tr>
                    <td>【1】</td>
                    <td>
                        <?php
                        radioCreate("3-1");
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>【2】</td>
                    <td>
                        <?php
                        radioCreate("3-2");
                        ?>
                    </td>
                </tr>
            </table>
        </div>
        <a class="nav-link-left contact" href="#1_2" class=""><p>前へ</p></a>
        <a class="nav-link-right contact" href="#1_4" class=""><p>次へ</p></a>
    </div>
    <br>
    <br>
    <br>
    <div id="1_4">
        <br>
        <h1>平方完成No.1</h1>
        <p style="font-size: 18px;">次の2次関数を平方関数せよ。</p><br>
        <p style="padding:0 0 0 37px;">(4)</p>
        <p>$$\begin{array}{rcl}y &=& x^{2}+4x-1 \\
            &=& (x+\fbox{ 1 })^{2}-\fbox{ 2 } \end{array}$$
        </p>
        <br>
        <br>
        <div style="width: 550px; margin: 88px auto;">
            <table>
                <tr>
                    <td>【1】</td>
                    <td>
                        <?php
                        radioCreate("4-1");
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>【2】</td>
                    <td>
                        <?php
                        radioCreate("4-2");
                        ?>
                    </td>
                </tr>
            </table>
        </div>
        <a class="nav-link-left contact" href="#1_3" class=""><p>前へ</p></a>
        <a class="nav-link-right contact" href="#1_5" class=""><p>次へ</p></a>
    </div>
    <br>
    <br>
    <br>
    <div id="1_5">
        <br>
        <h1>平方完成No.1</h1>
        <p style="font-size: 18px;">次の2次関数を平方関数せよ。</p><br>
        <p style="padding:0 0 0 37px;">(5)</p>
        <p>$$\begin{array}{rcl}y &=& x^{2}+4x-1 \\
            &=& (x+\fbox{ 1 })^{2}-\fbox{ 2 } \end{array}$$
        </p>
        <br>
        <br>
        <div style="width: 550px; margin: 88px auto;">
            <table>
                <tr>
                    <td>【1】</td>
                    <td>
                        <?php
                        radioCreate("5-1");
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>【2】</td>
                    <td>
                        <?php
                        radioCreate("5-2");
                        ?>
                    </td>
                </tr>
            </table>
        </div>
        <a class="nav-link-left contact" href="#1_4" class=""><p>前へ</p></a>
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
        echo $i."\n";
        echo "<input type='radio' name=$name value='$i'>";
    }
}
?>
</body>
</html>