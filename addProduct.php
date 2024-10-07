<?php
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database connection
$servername = "localhost";
$username = "root"; // replace with your database username
$password = ""; // replace with your database password
$dbname = "capstoneloginver2"; // your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get data from the form
$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];

// Handle image upload
$image_url = '';
if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
    $target_dir = "uploads/"; // The uploads directory
    $target_file = $target_dir . basename($_FILES['image']['name']);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    
    // Debugging: Print file information
    echo "File Name: " . $_FILES['image']['name'] . "<br>";
    echo "File Type: " . $_FILES['image']['type'] . "<br>";
    echo "File Size: " . $_FILES['image']['size'] . "<br>";
    echo "Error Code: " . $_FILES['image']['error'] . "<br>";

    // Check if image file is a valid image
    $check = getimagesize($_FILES['image']['tmp_name']);
    if ($check !== false) {
        // Check file type
        if (in_array($imageFileType, ['jpg', 'jpeg', 'png'])) {
            if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
                $image_url = $target_file; // Save the path for the database
                echo "File uploaded successfully: " . $image_url . "<br>";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        } else {
            echo "Sorry, only JPG, JPEG, & PNG files are allowed.";
        }
    } else {
        echo "File is not an image.";
    }
} else {
    echo "No file uploaded or an error occurred: " . $_FILES['image']['error'];
}

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO products (name, description, price, image_url) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssds", $name, $description, $price, $image_url);

// Execute the query
if ($stmt->execute()) {
    echo "New product added successfully";
} else {
    echo "Error: " . $stmt->error;
}

// Close connections
$stmt->close();
$conn->close();

// Redirect back to myProducts.php (or wherever you want)
header("Location: myProducts.php");
exit();
?>
