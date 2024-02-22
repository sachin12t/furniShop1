<?php include 'layout/header.php';
include '../dbconnect/config.php';
$slidernameerr=$contenterr=$titleerr=$imageerr=$buttonerr='';
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['addslider'])){
        if(empty($_POST['slidername']) || $_POST['slidername']==''){
            $slidernameerr="*Please Enter your Slider name";
        }else if(empty($_POST['content']) || $_POST['content']==''){
            $contenterr="*Please Enter your Content";
        }else if(empty($_POST['title']) || $_POST['title']==''){
            $titleerr="*Please Enter your title";
        }else if(empty($_POST['button']) || $_POST['button']==''){
            $buttonerr="* Please Enter Button";
        }else if((empty($_FILES['image']['name']) || $_FILES['image']['name']=='')){
            $imageerr="*Please Enter your product image";
        }
        else{
            $imagename = $_FILES['image']['name'];
            $tmpname = $_FILES['image']['tmp_name'];
            move_uploaded_file( $tmpname,'productimage/'.$imagename);
            $slidername = $_POST['slidername'];
            $content = $_POST['content'];
            $title = $_POST['title'];
            $button = $_POST['button'];
            $query = "INSERT INTO slider(sliderName,image,content,title,button) VALUES('$slidername','$imagename','$content','$title','$button')";
            $result = mysqli_query($con,$query);
            if($result){
                echo "<script>
                    alert('Your slider add successfully');
                    window.location.href='slider.php';
                </script>";
                // print_r('$result');
            }else{
                echo "Something went wrong".mysqli_error($con);
            }
        }
    }
}
?>

<div class="addproduct">
    <div class="container ">
        <div class="row">
            <div class="col-lg-8">
                <h3 class="text-center">AddSlider</h3>
                <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="slider1" class="form-label fw-bold">SliderName:</label>
                        <input type="text" id="slider1" class="form-control" name="slidername"
                            placeholder="Enter your Slider name">
                            <small><?php echo $slidernameerr; ?></small>
                    </div>
                    <div class="mb-3">
                        <label for="sliderimg2" class="form-label  fw-bold">Slider image</label>
                        <input type="file" id="sliderimg2" name="image" class="form-control">
                        <small><?php echo $imageerr; ?></small>
                    </div>
                   
                    <div class="mb-3">
                        <label for="content" class="form-label  fw-bold">Content</label>
                        <input type="text" id="content" class="form-control" name="content"
                            placeholder="Enter your content ">
                        <small><?php echo $contenterr; ?></small>
                    </div>
                    <div class="mb-3">
                        <label for="title" class="form-label  fw-bold">Title</label>
                        <input type="text" id="title" class="form-control" name="title"
                            placeholder="Enter your title">
                    </div>
                    <div class="mb-3">
                        <label for="button" class="form-label  fw-bold">Button</label>
                        <input type="text" id="button" class="form-control" name="button"
                            placeholder="Enter your Button">
                    </div>
                    <input type="submit" class="btn btn-primary" value="Add Slider" name="addslider">
                </form>
            </div>
        </div>
    </div>
</div>
<?php include 'layout/footer.php' ?>