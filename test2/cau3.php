<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính Diện Tích Hình Chữ Nhật</title>
    <style>
        .tinhdientich{
            width: 300px;
            height: 350px;
            margin: 20px auto;
            text-align: center;
        }
        .tinhdientich button{
            width: 74px;
            height: 30px;
            border: none;
            border-radius: 5px;
            background-color: #167bff;
            color: white;
        }
        
    </style>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <div class="tinhdientich">
        <h2>Tính diện tích hình chữ nhật</h2>
        <p>Chiều dài <input type="text"></p>
        <br>
        <P>Chiều rộng <input type="text"></P>
        <br>
        <P><button>Diện tích </button>
        <input type="text"></P>
        <p>Thông báo lỗi (nếu có)</p>
          
    </div>
    </form>
    <?php
    $length = $width = "";
    $lengthErr = $widthErr = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["length"])) {
            $lengthErr = "Vui lòng nhập chiều dài";
        } else {
            $length = test_input($_POST["length"]);
            if ($length <= 0) {
                $lengthErr = "Chiều dài phải là số dương";
            }
        }

        if (empty($_POST["width"])) {
            $widthErr = "Vui lòng nhập chiều rộng";
        } else {
            $width = test_input($_POST["width"]);
            if ($width <= 0) {
                $widthErr = "Chiều rộng phải là số dương";
            }
        }

        if ($lengthErr == "" && $widthErr == "") {
            $area = $length * $width;
            echo "<br><br>Diện tích hình chữ nhật là: " . $area . " đơn vị diện tích";
        } else {
            echo "<br><br><span class='error'>Thông báo lỗi ở đây:</span><br>";
            echo $lengthErr . "<br>";
            echo $widthErr;
        }
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

</body>

</html>
