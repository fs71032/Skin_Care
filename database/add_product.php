<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

header('Content-Type: application/json'); 

include_once 'database.php';

$database = new Database();
$db = $database->getConnection();

$response = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!isset($_FILES['product_image']) || $_FILES['product_image']['error'] != 0) {
        echo json_encode(['success' => false, 'error' => 'File upload failed.']);
        exit();
    }

    $name = $_POST['product_name'] ?? '';
    $price = $_POST['product_price'] ?? '';
    $image = $_FILES['product_image']['name'];

    if (empty($name) || empty($price) || empty($image)) {
        echo json_encode(['success' => false, 'error' => 'All fields are required.']);
        exit();
    }

 
    $target_dir = "../uploads/";
    if (!is_dir($target_dir)) mkdir($target_dir, 0777, true); 

    $target_file = $target_dir . basename($image);
    if (!move_uploaded_file($_FILES["product_image"]["tmp_name"], $target_file)) {
        echo json_encode(['success' => false, 'error' => 'Image upload failed.']);
        exit();
    }

    $query = "INSERT INTO products (name, price, image) VALUES (:name, :price, :image)";
    $stmt = $db->prepare($query);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':price', $price);
    $stmt->bindParam(':image', $image);

    try {
        if ($stmt->execute()) {
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false, 'error' => 'Database insert failed.']);
        }
    } catch (PDOException $e) {
        echo json_encode(['success' => false, 'error' => 'Database error: ' . $e->getMessage()]);
    }
} else {
    echo json_encode(['success' => false, 'error' => 'Invalid request method.']);
}
?> 
