<?php
include 'layout/header.php';
include 'dashboard.php';
include '../dbconnect/config.php';
//update or set//
$slidernameerr=$imageerr=$contenterr=$titleerr=$buttonerr=$descriptionerr='';
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['updateslider'])){
        $id=$_POST['s_id'];
        print_r($id);
             if($_FILES['image']['name'] != ''){
             $imagename=$_FILES['image']['name'];
                $tmpname=$_FILES['image']['tmp_name'];
                move_uploaded_file($tmpname,'productimage/'.$imagename);
             }else{
                $imagename=$_POST['oldimage'];
             }
    
        if(empty($_POST['slidername']) || $_POST['slidername']==''){
            $slidernameerr="*Please Enter your slider name";
        }else if((empty($_FILES['image']['name']) || $_FILES['image']['name']=='')){
            $imageerr="*Please Enter your slider image";
        }else if(empty($_POST['content']) || $_POST['content']==''){
            $contenterr="*Please Enter your content";
        }else if(empty($_POST['title']) || $_POST['title']==''){
            $titleerr="*Please Enter your title";
        }else if(empty($_POST['button']) || $_POST['button']==''){
            $buttonerr="*Please Enter button";
        }else{
            $slidername = $_POST['slidername'];
            $content = $_POST['content'];
            $title = $_POST['title'];
            $button = $_POST['button'];
            // $created_at = $_POST['created_at'];
            $query="UPDATE  slider SET sliderName='$slidername',content='$content',title='$title',image='$imagename',button='$button' WHERE s_id=$id";
            $result=mysqli_query($con,$query);
            if($result){
                echo "<script>
                    alert('Your slider update successfully');
                    window.location.href='slider.php';
                </script>";
            }else{
                echo "something went wrong".mysqli_error($con);
            }
        }
    }
}
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $select="SELECT * FROM slider WHERE s_id=$id";
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
                <h3 class="text-center">UpdateSlider</h3>
                <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="slidername" class="form-label fw-bold">SliderName:</label>
                        <input type="text" value="<?= $row['sliderName'];?>" class="form-control" id="slidername"
                            name="slidername" placeholder="Enter your slider name">
                        <input type="hidden" value="<?= $row['s_id']?>" name="s_id">
                        <small style="color:red"><?= $slidernameerr?></small>
                    </div>
            <!-- --------------------Slider Image--------------------------------------------------------- -->
                    <div class="mb-3">
                        <label for="sliderimage" class="form-label  fw-bold">Slider Image:</label>
                        <input type="file" value="<?= $row['image']?>" name="image" id="sliderimage"
                            class="form-control" />
                        <input type="hidden" value="<?= $row['image'];?>" name="oldimage" />
                        <img src="productimage/<?= $row['image'];?>" height="50px" width="80px" alt="">
                    </div>
            <!-- ----------------------------------------------------------------------------------------- -->
                    <div class="mb-3">
                        <label for="content" class="form-label  fw-bold">Content</label>
                        <input type="text" value="<?= $row['content']?>" id="content" class="form-control"
                            name="content" placeholder="Enter your content ">
                        <small style="color:red"> <?= $contenterr ?></small>
                    </div>

                    <div class="mb-3">
                        <label for="title" class="form-label  fw-bold">Title</label>
                        <input type="text" value="<?= $row['title']?>" id="title" class="form-control" name="title"
                            placeholder="Enter your title name">
                        <small style="color:red"> <?= $titleerr;?></small>
                    </div>
                    <div class="mb-3">
                        <label for="button" class="form-label  fw-bold">Button</label>
                        <input type="text" value="<?= $row['button']?>" id="button" class="form-control" name="button"
                            placeholder="Enter your button name">
                        <small style="color:red"> <?= $titleerr;?></small>
                    </div>

                    <input type="submit" class="btn btn-primary" name="updateslider" value="UpdateSlider">
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