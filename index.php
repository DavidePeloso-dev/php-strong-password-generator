<?php
$pwLen = $_GET['lenght'];

include __DIR__ . '/function.php';

$password = pwGenerator($pwLen);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="get">
        <label for="lenght">Digit the lenght for your password</label>
        <input type="number" name="lenght" id="lenght">
        <button type="submit">Generate</button>
    </form>
    <div>Your password is: <?= $password ?></div>
</body>

</html>