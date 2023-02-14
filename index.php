<?php  
session_start();
if(!isset($_SESSION["LOGIN"])){
    header("Location: login.php");
    exit;
}

include_once "data.php";

$dataJson = file_get_contents("data.json");
$data = json_decode($dataJson, true);

$kopi = $data["kopi"];

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
<body>

<h1>Kopi Beans</h1>
<br>
<h3>Hallo, Assalamu'alaikum <?php echo isset($_POST["nama"]) ? "Mas  {$_POST["username"]} " : "Admin" ?></h3>
<ul>
    <?php foreach($kopi as $value): ?>
    <li>
        <a href="kopi.php?id=<?=$value["id"]?>"><?= $value["nama"]; ?></a>
    </li>
    <?php endforeach;?>
</ul>

<a href="logout.php">Logout</a>
        
</body>
</html>