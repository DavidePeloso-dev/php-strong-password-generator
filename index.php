<?php
$pwLen = $_GET['lenght'];


function pwGenerator($len)
{
    $componets = [
        'abcdefghijklmnopqrstuvwxyz',
        'ABCDEFGHIJKLMNOPQRSTUVWXYZ',
        '0123456789',
        '!$%&?#',
    ];
    $pw = '';
    for ($i = 0; $i < $len; $i++) {
        $elemType = rand(0, count($componets) - 1);
        $elem = $componets[$elemType];
        $elemLen = strlen($elem);
        $pwElemRand = rand(0, $elemLen - 1);
        $pwElem = $elem[$pwElemRand];
        //var_dump($elemType, $elem, $elemLen, $pwElemRand);
        $pw .= $pwElem;
    }
    return $pw;
}

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