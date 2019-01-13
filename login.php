<link rel="stylesheet" type="text/css" href="form.css"><?php
// ユーザーとパスワードの一覧
$users = array(
    // ユーザー名 => パスワード(SHA1でハッシュ化)
    "takeshi"=>"a94a8fe5ccb19ba61c4c0873d391e987982fbbd3",//←test
    "yutaka" =>"ee3f7d52ca341c51c694af9288701f4ce43be0ad",//←rabit
    "akiko"  =>"f91a8ee646a277a2f1359709604b99c1b32d9f24" //←panda
);
$script = $_SERVER["SCRIPT_NAME"]; // このPHPファイルのパス
$savefile = dirname(__FILE__).'/log.txt';
// セッションを開始する
session_start();
//--------------------------------------------------------------------
// ログインフォームからの入力があるか？
if (isset($_POST["user"])) {
    check_login();             // ログインできるかチェック
} else {
    show_login_form();         // ログインフォームを表示
}
//--------------------------------------------------------------------
// ログインフォームを表示
function show_login_form() {
    global $script;
    echo <<< __FORM__
<div id="loginform">
<form action="$script" method="POST"><h3>ログインしてください</h3>
<label>ユーザー名</label><input type="text" name="user" />
<label>パスワード</label><input type="password" name="pass" />
<button type="submit">ログイン</button>
</form></div>
__FORM__;
}
// ログインするかチェック
function check_login() {
    global $users, $script;
    // 入力を検証する
    if (empty($_POST["pass"])) {
        echo "パスワードが入力されていません。"; exit;
    }
    $user = trim($_POST["user"]);
    $pass = trim($_POST["pass"]);
    if (empty($users[$user])) {
        echo "ユーザーが存在しないかパスワードが違います。"; exit;
    }
    // パスワードが合致しているかチェック
    $pass_correct = $users[$user];
    if (sha1($pass) != $pass_correct) {
        echo "ユーザーが存在しないかパスワードが違います。"; exit;
    }
    // ログインしたことをセッションに記録
    $_SESSION["login"] = array("user" => $user);
    echo "<a href='index.php'>ログインしました！</a>";
}
//--------------------------------------------------------------------
// ログアウト処理を行う
function show_logout() {
    global $script;
    unset($_SESSION["login"]);
    echo "<a href='$script'>ログアウトしました</a>";
    exit;
}
//--------------------------------------------------------------------
