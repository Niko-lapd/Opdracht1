<?php
session_start();

$users = array(
    "Bismak" => array("pwd" => "123123", "rol" => "Administrator"),
    "Piet" => array("pwd" => "123234", "rol" => "Gebruiker"),
    "Florence" => array("pwd" => "123345", "rol" => "Administrator"),
    "Bert" => array("pwd" => "123456", "rol" => "Gebruiker"),
    "Jans" => array("pwd" => "123567", "rol" => "Administrator"),
);

if (isset($_GET["loguit"])) {
    $_SESSION = array();
    session_destroy();
    $message = 'U are successfully logged out';
} else if (isset($_POST['knop'])
    && isset($users[$_POST["login"]])
    && $users[$_POST["login"]] ["pwd"] == $_POST['pwd']) {
    $_SESSION["user"] = array("naam" => $_POST["login"],
                                "pwd" => $users[ $_POST["login"]]['pwd'],
                                "rol" => $users[ $_POST["login"]]['rol']);
    $message = "Welcome " . $_SESSION["user"]['naam'];
} else {
    $message = "Incorrect username or password combination";
}

?>
<html>
<body>
<h1><?php echo $message; ?></h1>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <div class="form-group">
        <label for="login">login:</label>
        <input type="text" name="login" value="">
    </div>
    <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" name="pwd" value="">
    </div>
    <input type="submit" name="knop" value="GODVERDOMME">

</form>
<p></p><a href="website.php" Website></a></p>
<p></p><a href="admin.php" Admingedeelte website></a></p>
<p><a href="index.php?loguit">uitloggen</a></p>
</body>
</html>