<?php include 'layout/header.php';
    include 'dbconnect/config.php';
    $fnameerr=$lnameerr=$emailerr=$messageerr="";
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['send'])){
        if(empty($_POST['fname']) || $_POST['fname']==''){
            $fnameerr="*Please Enter your first name";
        }else if(empty($_POST['lname']) || $_POST['lname']==''){
            $lnameerr="*Please Enter your lname";
        }else if(empty($_POST['email']) || $_POST['email']==''){
            $emailerr="*Please Enter your email";
        }else if(empty($_POST['message']) || $_POST['message']==''){
            $messageerr="*Please Enter your message";
        }
        else{
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $email = $_POST['email'];
            $message = $_POST['message'];
            $query = "INSERT INTO usercontact (fname,lname,email,message) values('$fname','$lname','$email','$message')";
            $result = mysqli_query($con,$query);
            if($result){
                echo "<script>
                    alert('Your account Created successfully');
                    form.reset();
                </script>";
            }
        }
    }
}
?>
<!-- hero section start-->
<section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="hero-content">
                        <h1 class="hero-heading">Contact Us</h1>
                        <p class="hero-para pt-3 pb-3">Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique.</p>
                        <button class="btn btn-warning rounded-pill px-4">Shop Now</button>
                        <button class="btn rounded-pill  px-4 btn-techsima">Explore</button>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="hero-image">
                        <img src="images/couch.png" class="img-fluid" alt="hero-image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- hero section end-->
    <section class="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-2"> </div>
            <div class="col-lg-8 contact-info">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6 d-flex">
                        <div class="row">
                            <div class="col-lg-2 col-md-2 col-sm-6 contact-icon"><span><i class="fa-solid fa-location-dot"></i></span>
                            </div>
                            <div class="col-lg-10">
                                <p class="ps-2"> Darshan Nagar, Kushmaha, Ayodhya,
                                    Uttar Pradesh 224135</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 d-flex">
                        <div class="row">
                            <div class="col-lg-2 col-md-2 col-sm-6 contact-icon"><span><i class="fa-solid fa-envelope"></i></span></div>
                            <div class="col-lg-10">
                                <p class="ps-3">vramashish208@gmail.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 d-flex">
                        <div class="row">
                            <div class="col-lg-2 col-md-2 col-sm-6 contact-icon"><span><i class="fa-solid fa-phone"></i></span></div>
                            <div class="col-lg-10">
                                <p class="ps-3"> +91 9651932317</p>
                            </div>
                        </div>
                    </div>
                </div>
                <form class="row g-3 mt-4" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                    <div class="col-lg- col-md-6 col-sm-12">
                        <label for="fname">First name</label>
                        <input type="text" class="form-control new-field" id="fname" name="fname">
                        <small style="color:red;"><? echo $fnameerr?></small>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <label for="lname">Last name</label>
                        <input type="text" class="form-control new-field" id="lname" name="lname">
                        <small style="color:red;"><? echo $lnameerr?></small>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <label for="email">Email</label>
                        <input type="text" class="form-control new-field" id="email" name="email">
                        <small style="color:red;"><? echo $emailerr?></small>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <label for="message">Message</label>
                        <textarea class="form-control" rows="5" id="message" rows="3" name="message" style="resize:none"></textarea>
                        <small style="color:red;"><? echo $messageerr?></small>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                    <input class="btn btn-dark mt-4 mb-5 px-5 py-2 rounded-pill " name="send" value="Send Message" type="submit">
                    </div>
                </form>
            </div>
            <div class="col-lg-2"></div>
        </div>
    </div>
</section>
<?php include 'layout/footer.php' ?>