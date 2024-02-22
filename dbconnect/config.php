<?php
$con=mysqli_connect("localhost","root",'',"furniture");
if(!$con){
    die("connection is not established").mysqli_error($con);
}