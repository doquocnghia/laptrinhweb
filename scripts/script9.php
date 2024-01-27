<?php
// Định nghĩa hàm kiểm tra số nguyên tố: Tạm Ghi chú cho dòng định nghĩa này là hàm BKC.
function BKC($num)
{
    // Nếu số nhỏ hơn 2, không phải là số nguyên tố
    if ($num < 2) {
        return false;
    }
    // Duyệt qua các ước từ 2 đến căn bậc hai của số
    for ($i = 2; $i <= sqrt($num); $i++) {
        // Nếu có ước, không phải là số nguyên tố
        if ($num % $i == 0) {
            return false;
        }
    }
     // Nếu không có ước, là số nguyên tố
    return true;
}

$arr = array(1, 5, 10, 2, 9, 45, 3, 7);
// Hiển thị các số nguyên tố trong mảng
foreach ($arr as $value) {
    // Gọi hàm kiểm tra giá trị nó có phải là số nguyên tố hay không
    if (BKC($value)) {
        //Nếu nó Là số nguyên thì sẽ hiển thi
        echo $value . ' ';
    }
}
?>
