<?php 
session_start();
if (isset($_POST["submit"])) {

    if($_POST["username"] == "ammar" && $_POST["password"] == "admin") {
        $_SESSION["LOGIN"] = true;

        header("Location: index.php");
        exit;
    }else{
        
        $error = true;
    }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Silahkan Masuk</h1>

    <?php if($error): ?>
    <div class="error" style="color:red; font-style:italic;">
        <p>username / password salah!</p>
    </div>
    <?php endif; ?>

    <form action="" method="POST">
        <label for="username">username</label>
        <input type="text" name="username" id="username">
        <label for="password">password</label>
        <input type="password" name="password" id="password">
        <button type="submit" name="submit">Login</button>
    </form>
</body>
</html>