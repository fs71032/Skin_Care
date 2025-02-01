<?php  include 'connect.php';


if(isset($_POST['add_product'])){
    $product_name = mysqli_real_escape_string($conn, $_POST['product_name']);
    $product_price = mysqli_real_escape_string($conn, $_POST['product_price']);
    
    if (isset($_FILES['product_image']) && !empty($_FILES['product_image']['name'])) {
        $product_image = $_FILES['product_image']['name'];
        $product_image_temp_name = $_FILES['product_image']['tmp_name'];
        $product_image_folder = 'image/'.$product_image;
    } else {
        die("Ju lutem zgjidhni një imazh.");
    }


   
    
   

   
    
    if (move_uploaded_file($product_image_temp_name, $product_image_folder)) {
        $insert_query = mysqli_query($conn, "INSERT INTO product (name, price, image) VALUES ('$product_name', '$product_price', '$product_image')") or die(mysqli_error($conn));
    
        if ($insert_query) {
            echo "Product inserted Successfully";
        } else {
            echo "Error inserting product.";
        }
    }else {
        die("Failed to upload image.");
    
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping-Project> </title>

   <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" >
</head>
<body>



<?php include ('header.php') ?>


<div class="container">
    <section>
        <h3 class="heading">Add Products</h3>
        <form action="" class="add_product" method="post" enctype="multipart/form-data">

            <input type="text" name="product_name" placeholder="Enter product name" class="input_fields" required>
            <input type="number" name="product_price" min="0" placeholder="Enter product Price" class="input_fields" required>
            <input type="file" name="product_image" class="input_fields" required accept="image/png, image/jpg, image/jpeg">
            <input type="submit" name="add_product" class="submit_btn" value="Add Product">
        </form>
    </section>

</div>

<script src="js/script.js"></script>
</body>
</html>