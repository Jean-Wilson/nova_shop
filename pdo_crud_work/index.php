<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Awesome Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg,rgb(179, 156, 157), #fad0c4);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .form-container {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 350px;
            text-align: center;
        }
        h2 {
            margin-bottom: 20px;
            color: #333;
        }
        .form-group {
            margin-bottom: 15px;
            text-align: left;
        }
        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }
        input {
            width: 93%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }
        input:focus {
            border-color: #ff758c;
            outline: none;
        }
        .btn {
            background:rgb(85, 10, 22);
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            width: 100%;
            margin-top: 10px;
        }
        .btn:hover {
            background: #ff527a;
        }
    </style>
</head>
<body>

    <div class="form-container">
        <h2> Student form</h2>
        <form method="POST">
            <div class="form-group">
                <label for="firstname">First Name</label>
                <input type="text" id="firstname" name="firstname" placeholder="Enter your first name" required>
            </div>
            <div class="form-group">
                <label for="lastname">Last Name</label>
                <input type="text" id="lastname" name="lastname" placeholder="Enter your last name" required>
            </div>
            <button type="submit" name="submit" class="btn">Submit</button>
        </form>
    </div>

</body>
</html>


<?php

if(isset($_POST['submit'])){
// print_r($_POST);

try{
    $con= new PDO("mysql:host=localhost;dbname=wilson",'root','',[]);
    // echo"connection done";

    $insert1 = $con->prepare("INSERT INTO student(firstname, lastname)
     VALUES(?,?)");
    $data1=[$_POST['lastname'],$_POST['firstname']];

    $insert2 = $con->prepare("INSERT INTO student(firstname, lastname)
    VALUES(:firstname, :lastname)");
   $data2=["lastname"=>$_POST['lastname'],"firstname"=>$_POST['firstname']];

    // $insert1->execute($data1);
    $insert2->execute($data2);
    header("location: select.php");
}

catch(PDOException $e){
    echo "Not connected".$e->getMessage();
}

}

?>