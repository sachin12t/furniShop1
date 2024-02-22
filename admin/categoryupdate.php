<?php
 include 'layout/header.php';
 include 'dashboard.php';
 include '../dbconnect/config.php';
 if($_SERVER['REQUEST_METHOD'] == "POST"){
    if(isset($_POST['updatecategory'])){
        $catname=$_POST['catname']?$_POST['catname']:'';
        $id=$_POST['id']?$_POST['id']:'';
        $query="update addcategory set categoryname='$catname' where id=$id";
        $result=mysqli_query($con,$query);
        if($result){
            echo "<script>
                alert('Category Update                                                                                                                                                                                                                        successfully');
                window.location.href='category.php';
            </script>";
        }else{
            echo mysqli_error($result);
        }
    }
 }
 if(isset($_GET['id'])){
    $id=$_GET['id'];
    $query="select * from addcategory where id=$id";
    $res=mysqli_query($con,$query);
    if(mysqli_num_rows($res)){
        $row=mysqli_fetch_assoc($res);
     
 ?>
<div class="row">
    <h2 class="text-center">Update Category</h2>
    <div class="col-lg-4"></div>
    <div class="col-lg-6">
        <form action="" method="post">
            <div class="mb-3">
                <input type="hidden" name="id" value="<?= $row['id']?>">
                <label for="catname" class="form-label fw-bold">CategoryName:</label>
                <input type="text" class="form-control" value="<?= $row['categoryname']?>" name="catname">
            </div>
            <input type="submit" class="btn btn-dark rounded-pill" name="updatecategory" value="Update Category">
        </form>
    </div>
    <?php
        }
    }
    ?>
    <div class="col-lg-2"></div>
</div>
<?php
 include 'layout/footer.php';
?>