<?php include 'layout/header.php';
    include 'dashboard.php';
    include '../dbconnect/config.php';
?>
<div class="productlist">
    <div class="container">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-10">
                <h3 class="text-center pt-3">User Message List</h3>
                <table class="table" border="1">
                    <thead>
                        <tr>
                            <th scope="col">Contact ID</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Message</th>
                            <th scope="col">Response</th>
                            <th scope="col">Created_at</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <?php
                        $query='select * from usercontact';
                        $result=mysqli_query($con,$query);
                        if(mysqli_num_rows($result)){
                            while($row=mysqli_fetch_assoc($result)){
                    ?>
                    <tbody>
                        <tr>
                            <th scope="row"><?=$row['id']?></th>
                            <td><?=$row['fname']?></td>
                            <td><?=$row['lname']?></td>
                            <td><?=$row['email']?></td>
                            <td><?=$row['message']?></td>
                            <td><?=$row['response']?></td>
                            <td><?=$row['created_at']?></td>
                            <td><a href="<?php echo "contactupdate.php?id=$row[id]"; ?>" class="mx-2"><i class="fa-solid fa-pen"></i></a>
                            <a href="<?php echo "contactdelete.php?id=$row[id]"; ?>" class="mx-2"><i class="fa-regular fa-trash-can"></i></a></td>
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