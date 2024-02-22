<?php
 include 'layout/header.php';
 include 'dashboard.php';
 include '../dbconnect/config.php';
 if($_SERVER['REQUEST_METHOD'] == "POST"){
    if(isset($_POST['brandname'])){
        $id=$_POST['id']?$_POST['id']:'';
        $brandname=$_POST['brandname']?$_POST['brandname']:'';
        $query="update brand set brandname='$brandname' where id=$id";
        $result=mysqli_query($con,$query);
        if($result){
            echo "<script>
                alert('brand updated successfully');
                window.location.href='brand.php';
            </script>";
        }else{
            echo mysqli_error($result);
        }
    }
 }
 if(isset($_GET['id'])){
    $id=$_GET['id'];
    $query="select * from brand where id=$id";
    $res=mysqli_query($con,$query);
    if(mysqli_num_rows($res)){
        $row=mysqli_fetch_assoc($res);
         
 ?>
<div class="row">
    <h2 class="text-center">Add Brand</h2>
    <div class="col-lg-4"></div>
    <div class="col-lg-6">
        <form action="" method="post">
            <div class="mb-3">
                <input type="hidden" value="<?= $row['id']?>" name="id">
                <label for="catname" class="form-label fw-bold">BrandName:</label>
                <input type="text" class="form-control" value="<?= $row['brandname'];?>" name="brandname" placeholder="Enter your brandname">
            </div>
            <input type="submit" class="btn btn-dark rounded-pill" name="addcategory" value="Add Brand">
        </form>
        <?php
    }
}
        ?>
    </div>
    <div class="col-lg-2"></div>
</div>
<?php
 include 'layout/footer.php';
?>