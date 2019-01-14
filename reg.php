<?php
    $servername = "localhost";
    $username = "root";
    $password = "yq123...";
    // $Database = "user";
    //创建连接
    $conn = mysqli_connect($servername,$username,$password);
    
    //检测连接
    if(!$conn){
        die("Connection failed:".mysqli_connect_error());
    }

    //创建数据库
    $sql = "CREATE DATABASE user";
    if($coon -> query($sql) === TRUE){
        echo"数据库创建成功";
    }else{
        echo"Error creating database:".$coon -> error;
    }

    $name = $_POST["userName"];
    $pass = $_POST["userPass"];
    $sex = $_POST["userSex"];
    $email = $_POST["userEmail"];

    echo $name;
    echo $pass;
    echo $sex;
    echo $email;

?>