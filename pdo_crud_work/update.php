<?php
try {
    // Establish a connection to the database
    $con = new PDO("mysql:host=localhost;dbname=wilson", 'root', 'wordpass', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);

    // Initialize variables
    $id = $firstname = $lastname = "";

    // Check if 'id' is set in the URL and is numeric
    if (isset($_GET['id']) && is_numeric($_GET['id'])) {
        $id = $_GET['id'];

        // Fetch the student record based on ID
        $query = $con->prepare("SELECT * FROM student WHERE id = :id");
        $query->bindParam(':id', $id, PDO::PARAM_INT);
        $query->execute();
        $student = $query->fetch(PDO::FETCH_ASSOC);

        if ($student) {
            $firstname = $student['firstname'];
            $lastname = $student['lastname'];
        } else {
            die("Record not found.");
        }
    } else {
        die("Invalid ID.");
    }

    // Handle form submission to update the record
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];

        // Update the record in the database
        $updateQuery = $con->prepare("UPDATE student SET firstname = :firstname, lastname = :lastname WHERE id = :id");
        $updateQuery->bindParam(':firstname', $firstname);
        $updateQuery->bindParam(':lastname', $lastname);
        $updateQuery->bindParam(':id', $id, PDO::PARAM_INT);

        if ($updateQuery->execute()) {
            header("Location: select.php?message=Record updated successfully");
            exit();
        } else {
            echo "Error updating record.";
        }
    }
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Student</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body class="bg-gray-100 py-10">
    <div class="max-w-md mx-auto bg-white p-6 shadow-lg rounded-lg">
        <h2 class="text-2xl font-bold text-center mb-4">Update Student</h2>
        <form method="POST">
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2">First Name:</label>
                <input type="text" name="firstname" value="<?php echo htmlspecialchars($firstname); ?>" required class="w-full p-2 border border-gray-300 rounded">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2">Last Name:</label>
                <input type="text" name="lastname" value="<?php echo htmlspecialchars($lastname); ?>" required class="w-full p-2 border border-gray-300 rounded">
            </div>
            <div class="flex justify-between">
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">
                    <i class="fas fa-save"></i> Update
                </button>
                <a href="cancel.php" class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded">
                    <i class="fas fa-arrow-left"></i> Cancel
                </a>
            </div>
        </form>
    </div>
</body>
</html>
