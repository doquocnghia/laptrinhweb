<?php

$arr = array (1, 5, 10, 2, 9, 45, 3, 7, 16);

$chieu_dai_cua_mang = COUNT($arr);


$la_so_chinh_phuong = 0;
//0: khong phai la so chinh phuong
//1: la so chinh phuong

for ($i = 0; $i < $chieu_dai_cua_mang; $i++) {

    $la_so_chinh_phuong = 0;
    //Kiem tra so $arr[$i]
    for ($j = 1; $j <= $arr[$i]; $j++) {

        $tich = $j * $j;
        if ($tich == $arr[$i]) {
            $la_so_chinh_phuong = 1;
        }

    }
    ////////////////////////////
    if ($la_so_chinh_phuong == 1) {
        print  $arr[$i] . " ";
    }

}