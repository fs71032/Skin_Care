<?php
session_start();


if (!isset($_SESSION['user_id'])) {
    header('Location: login.html');
    exit();
}


include_once 'database.php';


$database = new Database();
$db = $database->getConnection();


$query = "SELECT id, name, email, role FROM users";
$stmt = $db->prepare($query);

try {
  
    $stmt->execute();
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

    
    echo json_encode([
        'user_name' => $_SESSION['user_name'],
        'users' => $users
    ]);

} catch (PDOException $e) {
    echo json_encode(['error' => 'Error: ' . $e->getMessage()]);
    exit();
}
?>
