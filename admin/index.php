<?php 
    require('inc/db_config.php')

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login Panel Control </title>
    <?php require('inc/links.php') ?>

    <style>
        .login-form{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 400px;

        }
    </style>

</head>

<body class="bg-light">

    <div class="login-form text-center rounded bg-white shadow overflow-hidden">
        <form  method="POST">
            <h4 class="bg-dark text-white py-3">Admin Login Panel</h4>
            <div class="p-4">
                <div class="mb-3">
                    <input name="admin_name" required type="text" class="form-control shadow-none text-center" placeholder="Admin Name ">
                </div>
                <div class="mb-4">
                    <input name="admin_pass" required type="password" class="form-control shadow-none text-center" placeholder="Password ">
                </div>
            </div>
            <button name="login" type="submit" class="btn mb-4 text-white custom-bg shadow-none rounded">Login</button>

        </form>
    </div>

    <?php 
        if(isset($_POST["login"])){
            $frm_data = filteration ($_POST);
            $query = "SELECT * FROM  `admin_cred` where `admin_name`=? and `admin_pass`=?   ";
            $value = [$frm_data["admin_name"],$frm_data["admin_pass"]];
            $datatypes = "ss";

            $res = select($query , $value , $datatypes);
            print_r($res);

        }   

    ?>




    <?php require('inc/scripts.php') ?>
</body>

</html>