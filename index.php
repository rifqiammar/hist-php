<?php  

include_once "data.php";

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
<ul>
    <?php foreach($kopi as $value): ?>
    <li>
        <a href="kopi.php?id=<?=$value["id"]?>"><?= $value["nama"]; ?></a>
    </li>
    <?php endforeach;?>
</ul>
        
</body>
</html>