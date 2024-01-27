<?php
$arr = array(1, 5, 10, 2, 9, 45, 3, 7); //Khởi tạo bản.....
// để hiển thị các số chẵn trong mảng
foreach ($arr as $value) {
    // Kiểm tra xem giá trị có phải là số chẵn hay không
    if ($value % 2 == 0) {
        // Nếu là số chẵn, hiển thị giá trị ra màng hình
        echo $value . ' ';
    }
}
?>
