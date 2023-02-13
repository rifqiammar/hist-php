<?php  
include_once "data.php";
// Pengecekan Jika USER ingin mengakses halaman kopi tanpa data
if( !isset($_GET["id"]) ){
    // redirect
    header("Location: index.php");
    exit;
}
$id = $_GET["id"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Kopi</title>
</head>
<body>
    <ul>
        <?php foreach($kopi as $value):?>
            <?php if($value["id"] == $id): ?>
                <li><?= $value["nama"]; ?></li>
                <li><?= $value["jenis"]; ?></li>
                <li><?= $value["roasting"]; ?></li>
            <?php endif; ?>
        <?php endforeach;?>
    </ul>
</body>
</html>