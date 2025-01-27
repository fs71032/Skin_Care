<?php
session_start();

// Include the Database class
include_once 'database.php';

$database = new Database();
$db = $database->getConnection();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get user inputs
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $rememberMe = isset($_POST['remember-me']) ? true : false;

    // Input validation
    $errors = [];
    if (empty($email)) {
        $errors[] = "Email is required!";
    }

    if (empty($password)) {
        $errors[] = "Password is required!";
    }

    if (empty($errors)) {
        // Prepare SQL query to fetch user by email
        $query = "SELECT * FROM users WHERE email = :email";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':email', $email);

        try {
            // Execute the query
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                $user = $stmt->fetch(PDO::FETCH_ASSOC);

                // Verify the password
                if (password_verify($password, $user['password'])) {
                    // Set session variables
                    $_SESSION['user_id'] = $user['id'];
                    $_SESSION['user_name'] = $user['name'];
                    $_SESSION['user_email'] = $user['email'];
                    $_SESSION['user_role'] = $user['role'];

                    // If "Remember me" is selected, set a cookie
                    if ($rememberMe) {
                        setcookie('user_email', $email, time() + (86400 * 30), "/"); // 30 days
                        setcookie('user_password', $password, time() + (86400 * 30), "/");
                    }

                    // Check if the user is an admin
                    if ($_SESSION['user_role'] !== 'admin') {
                        // Redirect to index.html if the user is not an admin
                        header('Location: ../index.html');
                        exit();
                    }else{
                    header('Location: ../dashboard.html');
                    exit();
                    }
                } else {
                    $errors[] = "Incorrect password!";
                }
            } else {
                $errors[] = "No user found with that email!";
            }
        } catch (PDOException $e) {
            $errors[] = "Error: " . $e->getMessage();
        }
    }

    // Display any errors
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<p style='color:red;'>$error</p>";
        }
    }
} else {
    echo "Invalid request!";
}
?>