<?php
$a = 10;
$b = 20;
$c = -30; //Khởi tạo các biến
$delta = $b * $b - 4 * $a * $c; //Tính giá trị của delta (b^2 - 4ac)

if ($delta > 0) {
    // nếu delta > 0 thì có hai nghiệm thực phân biệt
    $x1 = (-$b + sqrt($delta)) / (2 * $a);
    $x2 = (-$b - sqrt($delta)) / (2 * $a);
    echo "Nghiệm của phương trình là $x1 và $x2";
} elseif ($delta == 0) {
    //Nếu delta = 0 thì nó có 1 nghiệm kép
    $x = -$b / (2 * $a);
    echo "Nghiệm của phương trình là $x";
} else {
    // Trường hợp còn lại, delta < 0, không có nghiệm thực.
    echo "Không có nghiệm thực";
}
?>
