<?php
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    //Database connection
    $conn= new mysqli('localhost','root','','test');
    if($conn->connect_error){
        die('Connection Failed : ',$conn->connect_error);
    }
    else
    {
        $stmt =$conn->prepare("insert into signup(Name,Email,Password) values(?,?,?)");
        $stmt->bind_param("sss",$name,$email,$password);
        $stmt->execute();
        echo "Registration successfully...";
        $stmt->close();
        $conn->close();
    }
?>
