<?php

include_once 'database.php';


$database = new Database();
$db = $database->getConnection();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
 
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $confirmPassword = trim($_POST['confirm-password']);
    $defaultRole = 'user'; // Default role for new users

    
    $errors = [];
    if (empty($name)) {
        $errors[] = "Emri është i detyrueshëm!";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Ju lutem shkruani një email të saktë!";
    }

    if (strlen($password) < 6) {
        $errors[] = "Fjalëkalimi duhet të jetë të paktën 6 karaktere!";
    }

    if ($password !== $confirmPassword) {
        $errors[] = "Fjalëkalimet nuk përputhen!";
    }

   
    if (empty($errors)) {
      
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

      
        $query = "INSERT INTO users (name, email, password, role) VALUES (:name, :email, :password, :role)";
        $stmt = $db->prepare($query);

       
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $hashedPassword);
        $stmt->bindParam(':role', $defaultRole);

        try {
           
            if ($stmt->execute()) {
                echo "Regjistrimi u krye me sukses!";
            } else {
                echo "Diçka shkoi keq, ju lutem provoni përsëri.";
            }
        } catch (PDOException $e) {
            if ($e->getCode() == 23000) { // Duplicate entry
                echo "Ky email është tashmë i regjistruar!";
            } else {
                echo "Gabim: " . $e->getMessage();
            }
        }
    } else {
      
        foreach ($errors as $error) {
            echo "<p style='color:red;'>$error</p>";
        }
    }
} else {
    echo "Kërkesa nuk është e vlefshme!";
}
?>
