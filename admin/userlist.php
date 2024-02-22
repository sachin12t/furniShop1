<?php include 'layout/header.php';
    include 'dashboard.php';
    include '../dbconnect/config.php';
?>
<div class="productlist">
    <div class="container">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-10">
                <h3 class="text-center pt-3">User List</h3>
                <table class="table" border="1">
                    <thead>
                        <tr>
                            <th scope="col">User ID</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone No.</th>
                            <th scope="col">Role</th>
                            <th scope="col">Timestamp</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <?php
                        $query='select * from users';
                        $result=mysqli_query($con,$query);
                        if(mysqli_num_rows($result)){
                            while($row=mysqli_fetch_assoc($result)){
                    ?>
                    <tbody>
                        <tr>
                            <th scope="row"><?=$row['id']?></th>
                            <td><?=$row['firstname']?></td>
                            <td><?=$row['lastname']?></td>
                            <td><?=$row['email']?></td>
                            <td><?=$row['phone']?></td>
                            <td><?=$row['role']?></td>
                            <td><?=$row['timestamp']?></td>
                            <td><a href="<?php echo "userupdate.php?id=$row[id]"; ?>" class="mx-2"><i class="fa-solid fa-pen"></i></a>
                            <a href="<?php echo "userdelete.php?id=$row[id]"; ?>" class="mx-2"><i class="fa-regular fa-trash-can"></i></a></td>
                        </tr>
                        <?php  
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php include 'layout/footer.php' ?>