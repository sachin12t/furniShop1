<?php include 'layout/header.php';
    include 'dashboard.php';
    include '../dbconnect/config.php';
?>
<div class="productlist">
    <div class="container">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-10">
                <h3 class="text-center pt-3">Brand List</h3>
                <a href="addbrand.php" class="btn btn-primary">AddBrand</a>
                <table class="table" border="1">
                    <thead>
                        <tr>
                            <th scope="col">User ID</th>
                            <th scope="col">CategoryList</th>
                            <th scope="col">Timestamp</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <?php
                        $query='select * from brand';
                        $result=mysqli_query($con,$query);
                        if(mysqli_num_rows($result)){
                            while($row=mysqli_fetch_assoc($result)){
                    ?>
                    <tbody>
                        <tr>
                            <th scope="row"><?=$row['id']?></th>
                            <td><?=$row['brandname']?></td>
                            <td><?=$row['created_at']?></td>
                            <td><a href="<?php echo "updatebrand.php?id=$row[id]"; ?>" class="mx-2"><i class="fa-solid fa-pen"></i></a>
                            <a href="<?php echo "deletebrand.php?id=$row[id]"; ?>" class="mx-2"><i class="fa-regular fa-trash-can"></i></a></td>
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