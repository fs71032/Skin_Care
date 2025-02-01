<?php
session_start();


include_once 'database.php';

$database = new Database();
$db = $database->getConnection();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get user inputs
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $rememberMe = isset($_POST['remember-me']) ? true : false;

   
    $errors = [];
    if (empty($email)) {
        $errors[] = "Email is required!";
    }

    if (empty($password)) {
        $errors[] = "Password is required!";
    }

    if (empty($errors)) {
       
        $query = "SELECT * FROM users WHERE email = :email";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':email', $email);

        try {
            
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                $user = $stmt->fetch(PDO::FETCH_ASSOC);

                if (password_verify($password, $user['password'])) {
                   
                    $_SESSION['user_id'] = $user['id'];
                    $_SESSION['user_name'] = $user['name'];
                    $_SESSION['user_email'] = $user['email'];
                    $_SESSION['user_role'] = $user['role'];

                    
                    if ($rememberMe) {
                        setcookie('user_email', $email, time() + (86400 * 30), "/"); // 30 days
                        setcookie('user_password', $password, time() + (86400 * 30), "/");
                    }

                   
                    if ($_SESSION['user_role'] !== 'admin') {
                        
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

  
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<p style='color:red;'>$error</p>";
        }
    }
} else {
    echo "Invalid request!";
}
?>
