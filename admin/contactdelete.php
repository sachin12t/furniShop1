<?php
include '../dbconnect/config.php';
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sel="delete from usercontact where id=$id";
    $res=mysqli_query($con,$sel);
    if($res){
        echo "<script>
            alert('contact deleted successfully');
            window.location.href='usercontact.php';
        </script>";
    }else{
        echo mysqli_error($res);
    }
}