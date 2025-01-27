    <?php
    // Include the Database class
    include_once 'database.php';

    // Create a new Database object
    $database = new Database();
    $db = $database->getConnection();

    // Check if the connection was successful
    if ($db) {
        echo "Connection successful!";
    } else {
        echo "Connection failed!";
    }
    ?>
