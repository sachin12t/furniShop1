<?php
 include 'layout/header.php';
 include 'dashboard.php';
 include '../dbconnect/config.php';
 if($_SERVER['REQUEST_METHOD'] == "POST"){
    if(isset($_POST['addcategory'])){
        $catname=$_POST['catname']?$_POST['catname']:'';
        $query="insert into addcategory(categoryname) values('$catname')";
        $result=mysqli_query($con,$query);
        if($result){
            echo "<script>
                alert('category inserted successfully');
                window.location.href='category.php';
            </script>";
        }else{
            echo mysqli_error($result);
        }
    }
 }
 ?>
<div class="row">
    <h2 class="text-center">Add Category</h2>
    <div class="col-lg-4"></div>
    <div class="col-lg-6">
        <form action="" method="post">
            <div class="mb-3">
                <label for="catname" class="form-label fw-bold">CategoryName:</label>
                <input type="text" class="form-control" name="catname" placeholder="Enter your Category Name">
            </div>
            <input type="submit" class="btn btn-dark rounded-pill" name="addcategory" value="Add Category">
        </form>
    </div>
    <div class="col-lg-2"></div>
</div>
<?php
 include 'layout/footer.php';
?>