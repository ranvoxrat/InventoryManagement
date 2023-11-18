<?php

error_reporting(0);
session_start();

    $host="localhost";
    $name="root";
    $password="";
    $db="infomax";

    $data = mysqli_connect($host, $name, $password, $db);

    if($data===false)
    {
        die("connection error");
    }

    if ($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $name = $_POST['email'];
        $password = $_POST['password'];

        $sql="SELECT * FROM userdata WHERE email='".$name."' AND 
        password= '".$password."'LIMIT 1 ";

        $result=mysqli_query($data,$sql);

        $row=mysqli_fetch_array($result);

        if($row["user_type"]=="admin")

        {
            $_SESSION['email'] = $name;

            $_SESSION['user_type']="admin";

            header("location:pages/index.php");

        } elseif($row["user_type"]=="sales_staff") {

            $_SESSION['email'] = $name;

            $_SESSION['user_type']="sales_staff";

            header("location:salesstaff/index.php");
        }
        elseif($row["user_type"]=="inventory_staff") {

            $_SESSION['email'] = $name;

            $_SESSION['user_type']="inventory_staff";

            header("location:inventorystaff/index.php");
        }else{

           $message="username or password do not match";

           $_SESSION['loginMessage']=$message;
           header("location:log_in.php");
           exit(0);
        }
    }
?>