<?php include 'layout/header.php';
    include 'dbconnect/config.php';
    $fnameerr=$cpasserr=$emailerr=$passerr=$phoneerr="";
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['signup'])){
        if(empty($_POST['first_name']) || $_POST['first_name']==''){
            $fnameerr="*Please Enter your first name";
        }else if(empty($_POST['email']) || $_POST['email']==''){
            $emailerr="*Please Enter your email";
        }else if(empty($_POST['phone']) || $_POST['phone']==''){
            $phoneerr="*Please Enter your email";
        }else if(empty($_POST['password']) || $_POST['password']==''){
            $passerr="*Please Enter your password";
        }else if((empty($_POST['c_password']) || $_POST['c_password']=='')){
            $cpasserr="*Please Enter your confirm password";
        }else if($_POST['c_password']!=$_POST['password']){
            $cpasserr="*Your confirm password is not same as password";
        }
        else{
            $firstname = $_POST['first_name'];
            $lastname = $_POST['last_name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $password = $_POST['password'];
            $query = "INSERT INTO users (firstname,lastname,email,phone,password,role) values('$firstname','$lastname','$email','$phone','$password','user')";
            $result = mysqli_query($con,$query);
            if($result){
                echo "<script>
                    alert('Your account Created successfully');
                    window.location.href='loginform.php';
                </script>";
            }
        }
    }
}
?>
<section class="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 text-center"><h2>SignUp</h2></div>
            <div class="col-lg-8 contact-info">
                <form class="row g-3 mt-4" method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <label for="first_name">First name</label>
                        <input type="text" class="form-control new-field" id="first_name" name="first_name">
                        <small style="color:red"><?php echo $fnameerr;?></small>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <label for="last_name">Last name</label>
                        <input type="text" class="form-control new-field" id="last_name" name="last_name">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <label for="inputPassword2">Email</label>
                        <input type="text" class="form-control new-field" id="inputPassword2" name="email">
                        <small style="color:red"><?php echo $emailerr;?></small>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <label for="inputPassword2">Phone</label>
                        <input type="number" class="form-control new-field" id="inputPassword2" name="phone">
                        <small style="color:red"><?php echo $phoneerr;?></small>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <label for="inputPassword2">Password</label>
                        <input type="password" class="form-control new-field" id="inputPassword2" name="password">
                        <small style="color:red"><?php echo $passerr;?></small>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <label for="c_password">Confirm Password</label>
                        <input type="password" class="form-control new-field" id="c_password" name="c_password">
                        <small style="color:red"><?php echo $cpasserr;?></small>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <input class="btn btn-dark mt-4 mb-5 px-5 py-2 rounded-pill " name="signup" value="Sign Up" type="submit">
                    </div>
                </form>
            </div>
            <div class="col-lg-2"></div>
        </div>
    </div>
</section>
<?php include 'layout/footer.php'; ?>