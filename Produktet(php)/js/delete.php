<?php
include 'connect.php';

if(isset($_GET['delete'])){
    $delete_id=$_GET['delete'];
    $delete_query=mysqli_query($conn,"Delete from product where id=$delete_id")or die("Query failed");
    if($delete_query){
        echo "Produkti u fshi";
        header('location:view_product.php');

    }else{
        echo "Prdukti nuk u fshi";
        header('location:view_product.php');
    }
}