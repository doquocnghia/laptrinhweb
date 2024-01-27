<?php
$arr = array(1, 5, 10, 2, 9, 45, 3, 7);
rsort($arr); // Sắp xếp mảng theo thứ tự giảm dần
// Hiển thị các phần tử trong mảng đã sắp xếp
//Dùng vòng lặp foreach để duyệt qua từng phần tử trong mảng và hiển thị trên màn hình.
foreach ($arr as $value) {
    echo $value . ' ';
}
?>
