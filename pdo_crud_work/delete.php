<?php
try {
    // Establish a connection to the database
    $con = new PDO("mysql:host=localhost;dbname=wilson", 'root', 'wordpass', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);

    // Check if the 'id' parameter exists in the URL
    if (isset($_GET['id']) && is_numeric($_GET['id'])) {
        $id = $_GET['id'];

        // Prepare the DELETE query
        $query = $con->prepare("DELETE FROM student WHERE id = :id");
        $query->bindParam(':id', $id, PDO::PARAM_INT);

        // Execute the query
        if ($query->execute()) {
            // Redirect back to the main page after deletion
            header("Location: select.php?message=Record deleted successfully");
            exit();
        } else {
            echo "Error deleting record.";
        }
    } else {
        echo "Invalid ID.";
    }
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
