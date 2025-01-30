<?php include 'connect.php' ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shiko Produktin</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" >
    </head>
</head>
<body>
    <?php include 'header.php' ?>
    <div class="container">
        <section class="display_product">
           <table>
            <thead>
              <th>SI No</th>
              <th>Product Image</th>
              <th>Product Name</th>
              <th>Product Price</th>
              <th>Action</th>
        </thead>
        <tbody>
            <?php
  $display_product=mysqli_query($conn, "Select * from product");
  $num=1;
  if(mysqli_num_rows($display_product)>0){
    while($row=mysqli_fetch_assoc($display_product)){
      
   ?>
    <tr>
                <td><?php echo $num?></td>
                <td><img src="image/<?php echo $row ['image']?>" alt="<?php echo $row['name']?>"></td>
                <td><?php echo $row['name']?></td>
                <td><?php echo $row['price']?></td>
                <td>
                    <a href="delete.php?delete=<?php echo $row['id']?>" class="delete_product_btn" onclick="return confirm('A jeni te sigurt qe deshironi ta fshihni');">
                    <i class="fas fa-trash"></i></a>
                    <a href="update.php?edit=<?php echo $row['id']?>" class="update_product_btn"><i class="fas fa-edit"></i></a>
                </td>
            </tr>
   <?php
   $num++;
    }
  }else{
    echo"<div class='empty_text'>No Product</div>";
  }

            ?>
            
        </tbody>
           </table>
        </section>

    </div>
</body>
</html>