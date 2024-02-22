<?php include 'layout/header.php';
include 'dashboard.php';
include '../dbconnect/config.php' ?>
<div class="productlist">
    <div class="container">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-10">
                <h3 class="text-center pt-3">Product List</h3>
                <a href="addproduct.php" class="btn btn-primary rounded-pill">AddProduct</a>
                <table class="table" border="1">
                    <thead>
                        <tr>
                            <th scope="col">Product ID</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Category</th>
                            <th scope="col">Brand</th>
                            <th scope="col">Total Price</th>
                            <th scope="col">productimage</th>
                            <th scope="col">Description</th>
                            <th scope="col">Created_at</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <?php
                        $query="Select * from product";
                        $result=mysqli_query($con,$query);
                        if(mysqli_num_rows($result)){
                            while($row=mysqli_fetch_assoc($result)){  
                                //print_r($row);
                    ?>
                    <tbody>
                        <tr>
                            <td scope="row"><?= $row['pid'];?></td>
                            <td><?= $row['productname'];?></td>
                            <td><?= $row['category'];?></td>
                            <td><?= $row['brand'];?></td>
                            <td><?= $row['price'];?></td>
                            <td><img src="productimage/<?php echo $row['image'];?>" height="50px" width="50px" alt=""/></td>
                            <td><?= $row['description'];?></td>
                            <td><?= $row['created_at'];?></td>
                            <td><a href="<?php echo "updateproduct.php?id=$row[pid]"; ?>" class="mx-2"><i class="fa-solid fa-pen"></i></a>
                            <a href="<?php echo "deleteproduct.php?id=$row[pid]"; ?>" class="mx-2"><i class="fa-regular fa-trash-can"></i></a></td>
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