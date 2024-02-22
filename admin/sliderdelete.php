<?php
include '../dbconnect/config.php';
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $query="DELETE FROM slider WHERE s_id=$id";
    $result=mysqli_query($con,$query);
    if($result){
        echo "<script>
            alert('slider deleted Successfully');
            window.location.href='slider.php';
        </script>";
    }else{
        echo "Something went wrong".mysqli_error($con);
    }
}else{
    header('Location:slider.php');
}
?>