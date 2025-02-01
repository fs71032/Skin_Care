<?php

$conn=mysqli_connect('localhost','root','','shopping');
if($conn){
    echo "Successful";
}else{
    die("Connection failed");
}
?>