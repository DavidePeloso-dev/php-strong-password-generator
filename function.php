<?php
function pwGenerator($len)
{
    if ($len <= 40 && $len >= 8) {
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
    } else {
        return 'You must digit a number lower or equal to 40 and at least greater or equal to 8';
    }
}
