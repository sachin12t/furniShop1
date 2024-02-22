<?php
include '../dbconnect/config.php';
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $query="Delete from users where id=$id";
    $result=mysqli_query($con,$query);
    if($result){
        echo "<script>
            alert('your data deleted');
            window.location.href='userlist.php';
        </script>";
    }
    else{
        echo "something went wrong".mysqli_error($con);
    }
}else{
    header('location:userlist.php');
}