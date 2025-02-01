    <?php
  
    include_once 'database.php';

    
    $database = new Database();
    $db = $database->getConnection();

    
    if ($db) {
        echo "Connection successful!";
    } else {
        echo "Connection failed!";
    }
    ?>
