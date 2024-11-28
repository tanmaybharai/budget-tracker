<?php
    $name=$_POST['username'];
    $email=$_POST['email'];
    $pass=$_POST['password'];

    $conn = new mysqli('localhost','root','','prac1');
    if($conn->connect_error){
        die('connection failed'.$conn->connect_error);
    }else{
        $stmt=$conn->prepare('insert into prac1(username,email,password)values(?,?,?)');
        $stmt->bind_param("si",$name,$email,$pass);
        $stmt->execute();
        echo "done";
        $stmt->close();
        $conn->close();
    }
?>