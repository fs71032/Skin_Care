<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: login.html'); // Redirect to login page if not logged in
    exit();
}


// Include the Database class
include_once 'database.php';

// Create a new Database object and get the connection
$database = new Database();
$db = $database->getConnection();

// Query to fetch all users
$query = "SELECT id, name, email, role FROM users";
$stmt = $db->prepare($query);

try {
    // Execute the query
    $stmt->execute();
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Respond with the user data in JSON format
    echo json_encode([
        'user_name' => $_SESSION['user_name'],
        'users' => $users
    ]);

} catch (PDOException $e) {
    echo json_encode(['error' => 'Error: ' . $e->getMessage()]);
    exit();
}
?>
