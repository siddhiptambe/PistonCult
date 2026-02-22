<?php
include 'backend/conn.php';

if (isset($_POST['submit'])) {
    $id=$_COOKIE['id'];
    $s_name = $_POST['name'];
    $s_email = $_POST['email'];
    $s_phone = $_POST['phone'];
    $brand = mysqli_real_escape_string($conn, $_POST['brand']);
    $model = mysqli_real_escape_string($conn, $_POST['model']);
    $price = "₹" . $_POST['price'];
    $year = $_POST['year'];
    $registered = $_POST['registered'];
    $running = $_POST['running'];
    $mileage = $_POST['mileage'];
    $s_description =  $_POST['description-short'];
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    

    // Upload directory
    $uploadDir = "uploads/";
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    // Handling multiple file uploads
    $imagePaths = [];
    foreach ($_FILES['images']['tmp_name'] as $key => $tmp_name) {
        $imageName = basename($_FILES['images']['name'][$key]);
        $targetPath = $uploadDir . time() . "_" . $imageName; // Unique filename
        if (move_uploaded_file($tmp_name, $targetPath)) {
            $imagePaths[] = $targetPath; // Store file path
        }
    }

    // Convert array to comma-separated string
    $image = $imagePaths[0];
    $imagesString = implode(",", $imagePaths);

    // Insert data into database
    $query = "INSERT INTO sell_cars (ID_SELLER, Sell_name, Sell_email, Sell_phone, brand, model, price, year, registered, running, mileage, s_description, description, images) 
              VALUES ('$id', '$s_name', '$s_email', '$s_phone', '$brand', '$model', '$price', '$year', '$registered', '$running', '$mileage', '$s_description', '$description', '$imagesString')";

    $query1 = "INSERT INTO car (company, NAME, IMAGE, Price, Description) 
              VALUES ('$brand', '$model', '$image', '$price', '$s_description')";

    if (mysqli_query($conn, $query)) {
       if(mysqli_query($conn,$query1)){
            header("Location: login.php");
            exit();
       }
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
