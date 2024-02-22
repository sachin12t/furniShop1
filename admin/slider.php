<?php include 'layout/header.php';
include '../dbconnect/config.php';
include 'dashboard.php';
 ?>
<div class="productlist pt-5">
    <div class="container p-5">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-11">
                <h3 class="text-center pt-3">Slider Table</h3>
                <table class="table" border="1">
                    <button class="btn btn-primary  m-2"><a href="addSlider.php"style="color:#fff;text-decoration:none;">Add Slider</a></button>
                    <thead>
                        <tr>
                            <th scope="col">Slider ID</th>
                            <th scope="col">Slider Name</th>
                            <th scope="col">Slider Image</th>
                            <th scope="col">Content</th>
                            <th scope="col">Title</th>
                            <th scope="col">Button</th>
                            <th scope="col">Create Time</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query="SELECT * FROM slider";
                        $result=mysqli_query($con,$query);
                        if(mysqli_num_rows($result)){
                            while($row=mysqli_fetch_assoc($result)){
                                //  print_r($row);
                          
                        ?>
                        <tr>
                            <td scope="row"><?php echo $row['s_id'];?></td>
                            <td><?php echo $row['sliderName'];?></td>
                            <td><img src="productimage/<?php echo $row['image'];?>" alt="" height="50px" width="50px">
                            </td>
                            <td><?php echo $row['content'];?></td>
                            <td><?php echo $row['title'];?></td>
                            <td><?php echo $row['button'];?></td>
                            <td><?php echo $row['created_at'];?></td>
                            <td>
                                <div class="btn-group">
                                    <a href="<?php echo "sliderupdate.php?id=$row[s_id]"; ?>" class="btn btn-primary"><i
                                            class="fa-solid fa-pen-nib"></i></a>
                                    <a href="<?php echo "sliderdelete.php?id=$row[s_id]";?>" class="btn btn-danger"><i
                                            class="fa-solid fa-trash"></i></a>
                                </div>
                            </td>
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
<?php include 'layout/footer.php'?>