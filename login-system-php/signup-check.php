<?php
session_start();

include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password']) ){
    
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);

    $re_pass = validate($_POST['re_password']);
    $name = validate($_POST['name']);

    $user_data = 'uname=' . $unmae. '&name'. $name;

    if (empty($uname)){
        header("Location: signup.php?error=Username is Required&$user_data");
        exit();
    }elseif (empty($pass)){
        header("Location: signup.php?error=Password is Required&$user_data");
        exit();
    }elseif (empty($re_pass)){
        header("Location: signup.php?error=Retype Password is Required&$user_data");
        exit();
    }elseif (empty($name)){
            header("Location: signup.php?error=Name is Required&$user_data");
            exit();
    }elseif ($pass !== $re_pass){
            header("Location: signup.php?error=Password does not match&$user_data");
            exit();
    }else{
        
        // hash password
        $pass = md5($pass);

        $sql = "SELECT * FROM users WHERE user_name= '$uname'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0){
                header("Location: signup.php?error=Username is taken try another");
                exit();
        }else{
                $sql2 = "INSERT INTO users (user_name, password, name) VALUES ('$uname', '$pass', '$name' )";
                $result2 = mysqli_query($conn, $sql2);
                if($result2){
                    header("Location: signup.php?success=You created and account");
                    exit();
                }else{
                    header("Location: signup.php?error=Unknown error occured&$user_data");
                    exit();

                }
            }

    }


}else{
    header("Location: signup.php?error");
    exit();
}

