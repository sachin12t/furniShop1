<?php
include '../dbconnect/config.php';
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $query="delete from brand where id=$id";
    $res=mysqli_query($con,$query);
    if($res){
        echo "<script>
            alert('brand deleted successfully');
            window.location.href='brand.php';
        </script>";
    }else{
        echo mysqli_error($res);
    }
}
?>