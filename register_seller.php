<?php
include 'backend/conn.php';

if (isset($_POST['submit'])) {
    $id = $_COOKIE['id'];
    $fn = trim($_POST['full_name']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $aadhar = trim($_POST['aadhar']);
    $state = trim($_POST['state']);
    $address = trim($_POST['address']);


    // Check for existing user
    $checkQuery = $conn->prepare("SELECT * FROM seller WHERE NAME = ? OR Email = ? OR Mobile = ?");
    $checkQuery->bind_param("sss", $fn, $email, $phone);
    $checkQuery->execute();
    $result = $checkQuery->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if ($row['Username'] === $Username) {
            echo '<script>alert("Username Already in Use!!!!"); window.open("../register.php", "_self");</script>';
        } elseif ($row['Email'] === $Email) {
            echo '<script>alert("Email Already in Use!!!!"); window.open("../register.php", "_self");</script>';
        } elseif ($row['Mobile'] === $Mobile) {
            echo '<script>alert("Mobile Number Already in Use!!!!"); window.open("../register.php", "_self");</script>';
        }
        exit();
    }

    // Insert data into database
    $query = "INSERT INTO seller (ID_SELLER, NAME, EMAIL, Mobile, Aadhar, State, Address) 
              VALUES ('$id', '$fn', '$email', '$phone', '$aadhar', '$state', '$address')";

    if (mysqli_query($conn, $query)) {
        header("Location: sell.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
