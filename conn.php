<?php
error_reporting(0);
$sn="localhost";
$un="root";
$ps="";
$dbn="ngpc";
$conn=mysqli_connect($sn,$un,$ps,$dbn);
if($conn){
//echo "connection ok";
}
else{
    echo "connection failed".mysqli_connect_error();
}