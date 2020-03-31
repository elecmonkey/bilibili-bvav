<?php

    $table = 'fZodR9XQDSUm21yCkr6zBqiveYah8bt4xsWpHnJE7jL5VG3guMTKNPAwcF';

    $tr = [];
    $s = [11,10,3,8,4,6];
    $xor = 177451812;
    $add = 8728348608;
    for ($i = 0; $i < 58; $i ++) {
        $tr[$table[$i]] = $i;
    }

    function dec($x) {
        global $table;
        global $tr;
        global $add;
        global $s;
        global $xor;
        $r = 0;
        for ($i = 0; $i < 6; $i ++) {
            $r = $r + $tr[$x[$s[$i]]] * pow (58, $i);
        }
        return ($r - $add) ^ $xor;
    }

    function enc($x) {
        global $table;
        global $tr;
        global $add;
        global $s;
        global $xor;
        $x = ($x ^ $xor) + $add;
        $r = ['B','V','1',' ',' ','4',' ','1',' ','7',' ',' '];
        for ($i = 0; $i < 6; $i ++) {
            $r [$s [$i]] = $table [floor ($x / (pow (58, $i))) % 58];
        }
        return join('', $r);
    }

    echo dec('BV1zs411S7sz');
    echo "\r\n";
    echo enc(2129461);
    echo "\r\n";

?>