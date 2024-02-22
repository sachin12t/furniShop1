<?php
include 'layout/header.php';
include 'dashboard.php';
include '../dbconnect/config.php';
$pnameerr=$caterr=$branderr=$priceerr=$descriptionerr='';
if(isset($_POST['updateproduct'])){
    $id=$_POST['pid'];
    if($_SERVER['REQUEST_METHOD']=='POST'){
        if($_FILES['image']['name'] != ''){
            $imagename=$_FILES['image']['name'];
            $tmpname=$_FILES['image']['tmp_name'];
            move_uploaded_file($tmpname,'productimage/'.$imagename);
        }else{
            $imagename=$_POST['oldimage'];
        }
    // print_r($_POST);
    if(empty($_POST['productname']) || $_POST['productname']==''){
        $pnameerr="*Please Enter your product name";
    }else if(empty($_POST['category']) || $_POST['category']==''){
        $caterr="*Please Enter your category";
    }else if(empty($_POST['brand']) || $_POST['brand']==''){
        $branderr="*Please Enter your brand";
    }else if((empty($_POST['price']) || $_POST['price']=='')){
        $priceerr="*Please Enter your price";
    }else{
        print_r($_POST);
        $productname = $_POST['productname'];
        $category = $_POST['category'];
        $brand = $_POST['brand'];
        $price = $_POST['price'];
        $description = $_POST['description'];
        // $created_at = $_POST['created_at'];
        $query="update  product set productname='$productname',category='$category',brand='$brand',price='$price',description='$description',image='$imagename' where pid=$id";
        $result=mysqli_query($con,$query);
        if($result){
            echo "<script>
                alert('Your product addded successfully');
                window.location.href='product.php';
            </script>";
        }else{
            echo "something went wrong".mysqli_error($con);
        }
    }
    }
}

if(isset($_GET['id'])){
    $id=$_GET['id'];
    $select="select * from product where pid=$id";
    $result=mysqli_query($con,$select);
    // print_r($result);
    if(mysqli_num_rows($result)){
        $row=mysqli_fetch_assoc($result);
?>
<div class="addproduct">
    <div class="container">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <h3 class="text-center">UpdateProduct</h3>
                <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label fw-bold">PoroductName:</label>
                        <input type="text" value="<?=$row['productname'];?>" class="form-control" name="productname"
                            placeholder="Enter your product name">
                        <input type="hidden" value="<?=$row['pid']?>" name="pid">
                        <small style="color:red" <?=$pnameerr?>></small>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label  fw-bold">Product Image:</label>
                        <input type="file" value="<?=$row['image']?>" name="image" class="form-control" />
                        <input type="hidden" value="<?=$row['image'];?>" name="oldimage" />
                        <img src="productimage/<?=$row['image'];?>" height="50px" width="80px" alt="">

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label  fw-bold">Category:</label>
                            <select name="category" id="">
                                <?php 
                                $query='select * from addcategory';
                                $result=mysqli_query($con,$query);
                                if(mysqli_num_rows($result)){
                                    while($addcategory=mysqli_fetch_assoc($result)){
                                ?>
                                <option <?php echo $row['category']==$addcategory['categoryname']?'selected':'' ?> value="<?= $addcategory['categoryname']?>"><?= $addcategory['categoryname']?></option>
                                <?php
                                    }
                                }
                            ?>
                            </select>
                            <small style="color:red" <?=$caterr?>></small>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label  fw-bold">Brand:</label>
                            <select name="brand" id="">
                                <?php 
                                $query='select * from brand';
                                $result=mysqli_query($con,$query);
                                if(mysqli_num_rows($result)){
                                    while($brandname=mysqli_fetch_assoc($result)){
                                ?>
                                <option <?php echo $row['brand']==$brandname['brandname']?'selected':'' ?> value="<?= $brandname['brandname']?>"><?= $brandname['brandname']?></option>
                                <?php
                                    }
                                }
                                ?>
                            </select>
                            <small style="color:red" <?=$branderr?>></small>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label  fw-bold">TotalPrice:</label>
                            <input type="text" value="<?=$row['price']?>" class="form-control" name="price"
                                placeholder="Enter your productprice name">
                            <small style="color:red" <?=$priceerr?>></small>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label  fw-bold">Description:</label>
                            <input type="text" value="<?=$row['description']?>" class="form-control" name="description"
                                placeholder="Enter your description name">
                            <small style="color:red" <?=$descriptionerr?>></small>
                        </div>
                        <input type="submit" class="btn btn-primary" name="updateproduct" value="Updateproduct">
                </form>
                <?php
                  }
                }
                ?>
            </div>
        </div>
    </div>
</div>
<?php
include 'layout/footer.php';
?>