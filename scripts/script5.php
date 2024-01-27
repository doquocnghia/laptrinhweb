<?php

$arr = array (1, 5, 10, 2, 9, 45, 3, 7);

$chieu_dai_cua_mang = COUNT($arr);

for ($i = 0; $i < $chieu_dai_cua_mang -1; $i++){

    for ($j = $i + 1; $j < $chieu_dai_cua_mang; $j++) {

        $bien_tam = $arr[$i];
        if ($arr[$i] > $arr[$j]) {
            $arr[$i] = $arr[$j];
            $arr[$j] = $bien_tam;
        }

    }
}

for ($i = 0; $i < $chieu_dai_cua_mang; $i++) {
    print $arr[$i] . " ";
}






