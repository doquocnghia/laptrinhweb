<?php
$arr = [15, 25, 5, 7, 9, 4, 8, 10, 15];
// Tìm các số lẻ trong mảng
$oddNumbers = array_filter($arr, function($num) {
    return $num % 2 !== 0;
});
// Sắp xếp các số lẻ tăng dần
sort($oddNumbers);
// Cập nhật mảng gốc với các số lẻ
foreach ($arr as $key => $value) {
    if ($value % 2 !== 0) {
        $arr[$key] = array_shift($oddNumbers);
    }
}
// Hiển thị mảng sau khi sắp xếp
print_r($arr);
?>