<?php

    $conn = mysqli_connect("localhost","id11488282_root","123456","id11488282_foundation");

    if(isset($_GET['name'])){
        
        $name = $_GET['name'];
        
        $sql = "DELETE FROM register_form WHERE user_name = '{$name}' LIMIT 1";
        
        $result = mysqli_query($conn,$sql);
        
        if($result==1){
             echo "<script type='text/javascript'>alert('Deleted Successfully');
                window.location='admin_manage_member.php';
        
        </script>";
        }
        
        else{
             "<script type='text/javascript'>alert('not deleted');</script>";
        }
    }



?>