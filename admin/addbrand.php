<?php
 include 'layout/header.php';
 include 'dashboard.php';
 include '../dbconnect/config.php';
 if($_SERVER['REQUEST_METHOD'] == "POST"){
    if(isset($_POST['brandname'])){
        $brandname=$_POST['brandname']?$_POST['brandname']:'';
        $query="insert into brand(brandname) values('$brandname')";
        $result=mysqli_query($con,$query);
        if($result){
            echo "<script>
                alert('brand inserted successfully');
                window.location.href='brand.php';
            </script>";
        }else{
            echo mysqli_error($result);
        }
    }
 }
 ?>
<div class="row">
    <h2 class="text-center">Add Brand</h2>
    <div class="col-lg-4"></div>
    <div class="col-lg-6">
        <form action="" method="post">
            <div class="mb-3">
                <label for="catname" class="form-label fw-bold">BrandName:</label>
                <input type="text" class="form-control" name="brandname" placeholder="Enter your brandname">
            </div>
            <input type="submit" class="btn btn-dark rounded-pill" name="addcategory" value="Add Brand">
        </form>
    </div>
    <div class="col-lg-2"></div>
</div>
<?php
 include 'layout/footer.php';
?>