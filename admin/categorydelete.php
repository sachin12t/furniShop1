<?php
include '../dbconnect/config.php';
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $query="delete from addcategory where id=$id";
    $res=mysqli_query($con,$query);
    if($res){
        echo "<script>
            alert('category deleted');
            window.location.href='category.php';
        </script>";
    }else{
        echo "something went wrong";
    }
}else{
    header('location:userlist.php');
}