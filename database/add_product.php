<?php
session_start();


if (!isset($_SESSION['user_id'])) {
    header('Location: login.html');
    exit();
}

include_once 'database.php';
$database = new Database();
$db = $database->getConnection();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $productName = $_POST['product_name'];
    $productPrice = $_POST['product_price'];
    $productImage = $_FILES['product_image'];

  
    if (empty($productName) || empty($productPrice) || empty($productImage)) {
        echo json_encode(['error' => 'All fields are required.']);
        exit();
    }

    
    $targetDir = "uploads/";
    $targetFile = $targetDir . basename($productImage["name"]);
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    
    if (!getimagesize($productImage["tmp_name"])) {
        echo json_encode(['error' => 'File is not an image.']);
        exit();
    }

  
    if ($productImage["size"] > 5000000) {
        echo json_encode(['error' => 'Sorry, your file is too large.']);
        exit();
    }


    if ($imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png" && $imageFileType != "gif") {
        echo json_encode(['error' => 'Sorry, only JPG, JPEG, PNG & GIF files are allowed.']);
        exit();
    }

   
    if (!move_uploaded_file($productImage["tmp_name"], $targetFile)) {
        echo json_encode(['error' => 'Sorry, there was an error uploading your file.']);
        exit();
    }


    $query = "INSERT INTO products (name, price, image) VALUES (:name, :price, :image)";
    $stmt = $db->prepare($query);
    $stmt->bindParam(':name', $productName);
    $stmt->bindParam(':price', $productPrice);
    $stmt->bindParam(':image', $targetFile);

    try {
        $stmt->execute();
        echo json_encode(['success' => 'Product added successfully.']);
    } catch (PDOException $e) {
        echo json_encode(['error' => 'Error: ' . $e->getMessage()]);
    }
}
?>
