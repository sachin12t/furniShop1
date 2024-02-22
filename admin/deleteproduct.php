<?php
include '../dbconnect/config.php';
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $query="Delete from product where pid=$id";
    $result=mysqli_query($con,$query);
    // print_r($result);
    if($result){
        echo "<script>
            alert('your data deleted');
            window.location.href='product.php';
        </script>";
    }
    else{
        echo "something went wrong".mysqli_error($con);
    }
}else{
    header('location:product.php');
}