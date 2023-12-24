<?php 

    $hname = 'localhost';
    $uname = 'root';
    $pass = '';
    $db = 'hbwebsite';

    $con = mysqli_connect($hname, $uname, $pass,$db);

    if (!$con) {
        die("Cannot connect to database" .mysqli_connect_error());
    }

    function filteration ($data){
        foreach($data as $key => $value){
            $data[$key] = trim($value); // bo khoang trang 
            $data[$key] = stripcslashes($value); // loại bỏ các ký tự backslash (\) từ một chuỗi
            $data[$key] = htmlspecialchars($value); //chuyển đổi các ký tự đặc biệt thành các entity HTML tương ứng
            $data[$key] = strip_tags($value); // loại bỏ các thẻ HTML và PHP từ một chuỗi. 
        }
        return $data ;
    }
    
    function select($sql,$value,$datatype) {
        $con = $GLOBALS["con"]; // GLOBALS : biến này là biến toán cục 
        if ($stmt = mysqli_prepare($con, $sql)) {
            mysqli_stmt_bind_param($stmt, $datatype,...$value); 
            // toán tử ... có nghĩa như là khai báo 1 mảng và có thể sử dụng lại cái biến sau 3 chấm. lên chat giải thích rõ hơn 
           if(mysqli_stmt_execute($stmt)) {
                $res = mysqli_stmt_get_result($stmt);
                mysqli_stmt_close($stmt);
                return $res;
            }else {
                mysqli_stmt_close($stmt);
                die (" Query cannot be executed - select");
            }
        }else {
            die (" Query cannot be prepared - select"); // không thể prepared:chuẩn bị - chọn 
        }
    }

?> 