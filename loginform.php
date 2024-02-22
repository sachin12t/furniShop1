<?php include 'layout/header.php'; 
include 'dbconnect/config.php';
$emailerr=$passerr=$failer="";
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['login'])){
        if(empty($_POST['email']) || $_POST['email']==''){
            $emailerr="*Please Enter your email";
        }else if(empty($_POST['password']) || $_POST['password']==''){
            $passerr="*Please Enter your password";
        }
        else{
            $email=$_POST['email'];
            $password=$_POST['password'];

            $query="select * from users where email='$email' && password='$password'";
            $result=mysqli_query($con,$query);
            //print_r($result);
            if(mysqli_num_rows($result)==1){
                $data=mysqli_fetch_assoc($result);
                session_start();
                $_SESSION['name']=$data['firstname'].''.$data['lastname'];
                $_SESSION['email']=$data['email'];
                $_SESSION['phone']=$data['phone'];
                $_SESSION['role']=$data['role'];
                $_SESSION['id']=$data['id'];
                if($data['role']=='admin'){
                    header('Location:admin/dashboard.php');
                }
                else{
                    header('Location:dashboard.php');
                }
            }else{
                $failer="You are entering worng data";
            }
        }
    }
}
?>
<section class="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <h2 class="text-center">Login Form</h2>
                <p class="text-center" style="color:red"><?=$failer; ?></p>
                <div class="col-lg-12 contact-info">
                    <form class="row mt-4" method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
                        <div class="col-lg-12 col-md-6 col-sm-12">
                            <label for="email">Email</label>
                            <input type="text" class="form-control new-field" id="email" name="email">
                        </div>
                        <div class="col-lg-12 col-md-6 col-sm-12">
                            <label for="password">Password</label>
                            <input type="text" class="form-control new-field" id="password" name="password">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <input class="btn btn-dark mt-4 mb-5 px-5 py-2 rounded-pill " name="login" value="Sign In"
                                type="submit">
                            <a href="signup.php" class="ms-2 justify-content-end">If you have not any account</a>
                        </div>

                    </form>
                </div>
            </div>
            <div class="col-lg-3"></div>
        </div>
    </div>
</section>
<?php include 'layout/footer.php' ?>