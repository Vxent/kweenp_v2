<?php
session_start(); // Start the session

// Check if the user is logged in
$isLoggedIn = isset($_SESSION['user_id']); // Adjust this based on your session setup
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kween P Sports</title>
    <!-- tailwind css cdn -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="shortcut icon" href="logo1.png" type="image/x-icon">
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Red+Hat+Display:wght@500;700;800&display=swap" rel="stylesheet">
   <!-- FONTS ZEN DOTS -->
    <link href="https://fonts.googleapis.com/css2?family=Zen+Dots&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
</head>
<style>
   h1{
  font-family: 'Zen Dots', cursive;
}
.drop {
    
  font-family: 'Zen Dots', cursive;
}
.your {
    font-family: 'Zen Dots', cursive;
}
</style>
<body>

    <nav class="bg-black shadow-md top-0 left-0 w-full z-50">  
        <div class="container mx-auto px-4 ">
            <div class="flex justify-between items-center py-2 ">
                <div class="flex-1 flex justify-start">
                    <div class="hidden md:flex space-x-4 p-2">
                        <a href="#Main" class="hidden md:inline-block font-abhaya-libre uppercase text-white tracking-wider px-4 xl:px-8 py-2 text-lg hover:underline">Home</a>
                        <a href="#varieties" class="hidden md:inline-block text-gray-700 px-2 py-1  font-abhaya-libre uppercase text-white tracking-wider px-4 xl:px-8 py-2 text-lg hover:underline">Sports</a>
                        <a href="#about" class="hidden md:inline-block text-gray-700 px-2 py-1 font-abhaya-libre uppercase text-white tracking-wider px-4 xl:px-8 py-2 text-lg hover:underline">About</a>
                    </div>
                </div>
                <div class="flex-1 flex justify-center">
                    <div class="text-center">
                        <img src="images/logo1.png" alt="Ricehub Logo" width="200px" class="h-20">
                    </div>
                </div>
                <div class="flex-1 flex justify-end">
                    <div class="hidden md:flex space-x-4 p-2">
                        <a href="#threats" class="hidden md:inline-block text-gray-700 px-2 py-1 font-abhaya-libre uppercase text-white tracking-wider px-4 xl:px-8 py-2 text-lg hover:underline">Services</a>
                        <a href="contacts.html" class="hidden md:inline-block text-gray-700 px-2 py-1 font-abhaya-libre uppercase text-white tracking-wider px-4 xl:px-8 py-2 text-lg hover:underline">Contacts</a>
                        <?php if ($isLoggedIn): ?>
                            <a href="logout.php" class="border-2 border-white bg-black text-white py-2 px-4 rounded">Logout</a>
                        <?php else: ?>
                            <a href="login.php" class="border-2 border-white bg-black text-white py-2 px-4 rounded">Login</a>
                        <?php endif; ?>
                    </div>
            <div id="navbar-menu" class="navbar-menu md:hidden">
                <a href="#Main" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Home</a>
                <a href="#varieties" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Sports</a>
                <a href="#about" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">About</a>
                <a href="contacts.html" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Contacts</a>
                <a href="logout.php"
                    class="inline-block font-bold bg-orange-400 text-white py-2 px-6 rounded hover:bg-orange-300 transition">Logout</a>
            </div>
          </div>
     </nav>
    <!-- NAVBARCODE -->
      <script>
       document.getElementById('navbar-toggle').addEventListener('click', function() {
          var menu = document.getElementById('navbar-menu');
          menu.style.display = menu.style.display === 'none' || menu.style.display === '' ? 'block' : 'none';
        });
        
      </script>

            <!-- 3d Section or Headers -->
      <section id="home" style="background-image: url(images/bg.png); background-size: cover; background-repeat: no-repeat;">
        <div class="max-w-7xl h-full mx-auto p-20">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 ">
                <!-- Text Section -->
                <div class="text-center lg:text-left">
                    <h1 class="text-2xl text-white your pb-5">
                        WELCOME TO KWEEN P
                    </h1>
                    <main class="container">                       
                        <h2  class="your text-5xl">Customized Your:</h2>
                        <div class="animation" style="">
                          <div class="first text-yellow-500"><div>TEAM</div></div>
                          <div class="second text-yellow-500"><div>GAME</div></div>
                          <div class="third text-yellow-500"><div>JERSEY</div></div>
                  
                        </div>  
                    <div class="pt-14">
                      <a href="login.php" class="inline-block bg-black text-white py-2 px-4 rounded hover:bg-orange-300 transition">3D Customization &rarr;</a>
                   </div>   
                 
                </div>
                
                <!-- Image Section -->
                <div class="flex justify-center lg:justify-end">
                    <img src="images/header.gif" alt="Sportswear" class="w-full h-96">
                </div>
            </div>
        </div>
        
      </section>
      <section>
         <!-- Quality -->
  <section class="container mx-auto px-4 py-10 bg-black">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center shadow-lg pb-2">
        <div class="transform transition-transform hover:scale-105">
            <div class="flex justify-center mb-4">
                <div class=" ">
                    <i class="fas fa-check fa-2x"></i>
                </div>
            </div>
            <h2 class="text-2xl mb-2">Quality Measure</h2>
           
            <p class="text-2xl font-bold">100%</p><br>
        </div>
        
        <div class="transform transition-transform hover:scale-105">
            <div class="flex justify-center mb-4">
                <div class="">
                    <i class="fas fa-heart fa-2x"></i>
                </div>
            </div>
            <h2 class="text-2xl mb-2">Product Quality</h2>
            
            <p class="text-2xl font-bold">100%</p>
        </div>
        <div class="transform transition-transform hover:scale-105">
            <div class="flex justify-center mb-4">
                <div class="">
                    <i class="fas fa-star fa-2x"></i>
                </div>
            </div>
            <h2 class="text-2xl mb-2">Excellent Service</h2>
         
            <p class="text-2xl font-bold">100%</p>
        </div>
    </div>
    
      </div>

      <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
    
      </section>
      <!-- ABOUT SECTION -->
       <section class="" id="about">
        <!-- component -->
                <div class="py-16 bg-white">  
                    <div class="container m-auto px-6 text-gray-600 md:px-12 xl:px-6">
                        <div class="space-y-6 md:space-y-0 md:flex md:gap-6 lg:items-center lg:gap-12">
                        <div class="md:5/12 lg:w-5/12">
                            <img src="https://img.ws.mms.shopee.ph/9d19fa579abc8ce4be3d0d24fba33a1f" alt="image" loading="lazy" width="" height="">
                        </div>
                        <div class="md:7/12 lg:w-6/12">
                            <h2 class="text-2xl text-gray-900 font-bold md:text-4xl">Nuxt development is carried out by passionate developers</h2>
                            <p class="mt-6 text-gray-600">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eum omnis voluptatem accusantium nemo perspiciatis delectus atque autem! Voluptatum tenetur beatae unde aperiam, repellat expedita consequatur! Officiis id consequatur atque doloremque!</p>
                            <p class="mt-4 text-gray-600"> Nobis minus voluptatibus pariatur dignissimos libero quaerat iure expedita at? Asperiores nemo possimus nesciunt dicta veniam aspernatur quam mollitia.</p>
                        </div>
                         
                        </div>
                        <div class="pt-14">
                      <a href="v" class="inline-block bg-black text-white py-2 px-4 rounded hover:bg-orange-300 transition">SHOP NOW </a>
                   </div> 
                    </div>
                </div>
       </section>
      
      


    



<!-- footer section -->
 <!-- component -->
<!-- This is an example component -->
<div class=" bg-gray-900">
  <div class="max-w-2xl mx-auto text-white py-10">
      <div class="text-center">
          <h3 class="text-3xl mb-3"> Download our fitness app </h3>
          <p> Stay fit. All day, every day. </p>
          <div class="flex justify-center my-10">
              <div class="flex items-center border w-auto rounded-lg px-4 py-2 w-52 mx-2">
                  <img src="https://cdn-icons-png.flaticon.com/512/888/888857.png" class="w-7 md:w-8">
                  <div class="text-left ml-3">
                      <p class='text-xs text-gray-200'>Download on </p>
                      <p class="text-white text-sm md:text-base"> Google Play Store </p>
                  </div>
              </div>
              <div class="flex items-center border w-auto rounded-lg px-4 py-2 w-44 mx-2">
                  <img src="https://cdn-icons-png.flaticon.com/512/888/888841.png" class="w-7 md:w-8">
                  <div class="text-left ml-3">
                      <p class='text-xs text-gray-200'>Download on </p>
                      <p class="text-white text-sm md:text-base"> Apple Store </p>
                  </div>
              </div>
          </div>
      </div>
      <div class="mt-28 flex flex-col md:flex-row md:justify-between items-center text-white text-sm text-gray-400">
          <p class="order-2 md:order-1 mt-8 md:mt-0"> &copy; Beautiful Footer, 2021. </p>
          <div class="order-1 md:order-2">
              <span class="px-2">About us</span>
              <span class="px-2 border-l">Contact us</span>
              <span class="px-2 border-l">Privacy Policy</span>
          </div>
      </div>
  </div>
</div>
    <!-- <footer class="text-center pt-5 mt-5">
        <nav>
    
            <div class="mt-3 md:mt-4">
                <ul class=" white text-sm:flex white text-sm:place-content-center gap-5 ">
                        <li class="pb-2"><a class="hover:text-red-500 text-lg pr-3" href="./index.html">Home</a></li>
                        <li class="pb-2"><a class="hover:text-red-500 text-lg pr-3" href="./pages/explore.html">Explore</a></li>
                        <li class="pb-2"><a class="hover:text-red-500 text-lg pr-3" href="./pages/contact.html">Contact</a></li>
                        <li class="pb-2"><a class="hover:text-red-500 text-lg pr-3" href="./pages/donate.html">Donate</a></li>
                        <li class="pb-2"><a class="hover:text-red-500 text-lg pr-3" href="./pages/about.html">About</a></li>
                </ul>
            </div>
        </nav>
    </footer> -->
</body>
</html>
