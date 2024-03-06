<?php
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
