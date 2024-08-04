<?php
    $name=$_POST['name'];
    $pass=$_POST['pass'];

    $conn = new mysqli('localhost','root','','prac1');
    if($conn->connect_error){
        die('connection failed'.$conn->connect_error);
    }else{
        $stmt=$conn->prepare('insert into prac1(username,password)values(?,?)');
        $stmt->bind_param("si",$name,$pass);
        $stmt->execute();
        echo "done";
        $stmt->close();
        $conn->close();
    }
?>