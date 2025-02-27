<?php
try {
    // Establish a connection to the database
    $con = new PDO("mysql:host=localhost;dbname=wilson", 'root', 'wordpass', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
    
    // Prepare the SELECT query
    $query = $con->prepare("SELECT * FROM student");
    $query->execute();
    
    // Fetch all results
    $students = $query->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Records</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body class="bg-gray-100 py-10">
    <div class="max-w-4xl mx-auto bg-white p-6 shadow-lg rounded-lg">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-2xl font-bold">Student Records</h2>
            <a href="index.php" class="bg-green-500 hover:bg-green-600 text-white py-2 px-4 rounded flex items-center">
                <i class="fas fa-plus mr-2"></i> Add Student
            </a>
        </div>
        
        <div class="overflow-x-auto">
            <table class="w-full border-collapse border border-gray-300 rounded-lg shadow-md">
                <thead>
                    <tr class="bg-blue-500 text-white">
                        <th class="border border-gray-300 px-4 py-2">ID</th>
                        <th class="border border-gray-300 px-4 py-2">Firstname</th>
                        <th class="border border-gray-300 px-4 py-2">Lastname</th>
                        <th class="border border-gray-300 px-4 py-2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($students as $student): ?>
                        <tr class="bg-white border-b hover:bg-gray-100">
                            <td class="border border-gray-300 px-4 py-2 text-center"><?php echo htmlspecialchars($student['id']); ?></td>
                            <td class="border border-gray-300 px-4 py-2 text-center"><?php echo htmlspecialchars($student['firstname']); ?></td>
                            <td class="border border-gray-300 px-4 py-2 text-center"><?php echo htmlspecialchars($student['lastname']); ?></td>
                            <td class="border border-gray-300 px-4 py-2 text-center">
                                <a href="update.php?id=<?php echo $student['id']; ?>" class="text-yellow-500 hover:text-yellow-600 text-lg mx-2">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="delete.php?id=<?php echo $student['id']; ?>" class="text-red-500 hover:text-red-600 text-lg mx-2" onclick="return confirm('Are you sure you want to delete this record?');">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
