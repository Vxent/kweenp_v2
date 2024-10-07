<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php'); // Redirect to login if not logged in
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kween P Shop</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="shortcut icon" href="logo1.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="bg-black shadow-md top-0 left-0 w-full z-50">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center py-2">
                <div class="flex-1 flex justify-start">
                    <div class="hidden md:flex space-x-4 p-2">
                        <a href="index.php" class="text-white tracking-wider px-4 xl:px-8 py-2 text-lg hover:underline">Home</a>
                        <a href="#varieties" class="text-white tracking-wider px-4 xl:px-8 py-2 text-lg hover:underline">Sports</a>
                        <a href="#about" class="text-white tracking-wider px-4 xl:px-8 py-2 text-lg hover:underline">About</a>
                    </div>
                </div>
                <div class="flex-1 flex justify-center">
                    <div class="text-center">
                        <img src="logo1.png" alt="Ricehub Logo" width="200px" class="h-20">  
                    </div>
                </div>
                <div class="flex-1 flex justify-end">
                    <div class="hidden md:flex space-x-4 p-2">
                        <a href="#threats" class="text-white tracking-wider px-4 xl:px-8 py-2 text-lg hover:underline">Services</a>
                        <a href="contacts.html" class="text-white tracking-wider px-4 xl:px-8 py-2 text-lg hover:underline">Contacts</a>
                        <a href="logout.php" class="border-2 border-white bg-black text-white py-2 px-4 rounded">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Your shop content here -->
    <div class="text-center my-8">
        <h2 class="text-3xl font-bold mb-4">READY MADE</h2>
        <div class="flex flex-wrap justify-center">
            <div class="w-full md:w-1/2 lg:w-1/3 p-4">
                <div class="border p-4">
                    <img src="https://ph-test-11.slatic.net/p/c70c2407741d7be5489b80b71e4797ea.jpg" alt="Product Image" class="w-full">
                    <h5 class="text-lg font-bold mt-2">Product Name</h5>
                    <p class="text-xl font-bold">Price</p>
                    <a href=""><button class="bg-blue-500 text-white px-4 py-2 mt-2">BUY NOW</button></a>
                </div>
            </div>
            <!-- Repeat for other products -->
        </div>
    </div>
</body>
</html>
