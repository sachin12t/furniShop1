<?php include 'layout/header.php';
include 'dashboard.php';
include '../dbconnect/config.php';


if(isset($_POST['update'])){
    $id = $_POST['id'];
    $firstname=$_POST['first_name'];
    $last=$_POST['last_name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $phone=$_POST['phone'];
    $role=$_POST['role'];
    $query="update users set firstname='$firstname',lastname='$last',email='$email',phone='$phone',password='$password',role='$role' where id=$id";
    $result = mysqli_query($con,$query);
    if($result){
        echo "<script>
            alert('your data updated successfully');
            window.location.href='userlist.php';
        </script>";
    }else{
        echo mysqli_error($result);
    }
}

if(isset($_GET['id'])){
    $id=$_GET['id'];
    $select="select * from users where id=$id";
    $selectresult=mysqli_query($con,$select);
    if(mysqli_num_rows($selectresult)){
        $row=mysqli_fetch_assoc($selectresult);
            
?>
<section class="contact-section">
    <div class="container">
        <div class="row">
        <h2 class="text-center">userupdate</h2>
            <div class="col-lg-2 "></div>
            <div class="col-lg-8 contact-info">
                <form class="row g-3 mt-4" method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <label for="first_name">First name</label>
                        <input type="hidden" value="<?=$row['id']?>" name="id">
                        <input type="text" value="<?=$row['firstname']?>" class="form-control new-field" id="first_name" name="first_name">
                    </div>
                    
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <label for="last_name">Last name</label>
                        <input type="text" value="<?=$row['lastname']?>" class="form-control new-field" id="last_name" name="last_name">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <label for="inputPassword2">Email</label>
                        <input type="text" value="<?=$row['email']?>" class="form-control new-field" id="inputPassword2" name="email">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <label for="inputPassword2">Phone</label>
                        <input type="number" value="<?=$row['phone']?>" class="form-control new-field" id="inputPassword2" name="phone">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <label for="inputPassword2">Password</label>
                        <input type="password" value="<?=$row['password']?>" class="form-control new-field" id="inputPassword2" name="password">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <label for="c_password">Role</label>
                        <select name="role" id="">
                            <option <?php echo $row['role']=='user'?'selected':'' ?> value="user">user</option>
                            <option <?php echo $row['role']=='admin'?'selected':'' ?> value="admin">admin</option>
                        </select>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <input class="btn btn-dark mt-4 mb-5 px-5 py-2 rounded-pill " name="update" value="Update" type="submit">
                    </div>
                </form>
            </div>
            <div class="col-lg-2"></div>
        </div>
    </div>
</section>
<?php 
    }
}else{
    header('Location:userlist.php');
}
include 'layout/footer.php' ?>