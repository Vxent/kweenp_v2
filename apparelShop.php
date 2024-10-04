<!DOCTYPE html>
<html lang="en">
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kween P Shop</title>
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
                  <img src="logo1.png" alt="Ricehub Logo" width="200px" class="h-20">  </div>
              </div>
              <div class="flex-1 flex justify-end">
                <div class="hidden md:flex space-x-4 p-2">
                  <a href="#threats" class="hidden md:inline-block text-gray-700 px-2 py-1 font-abhaya-libre uppercase text-white tracking-wider px-4 xl:px-8 py-2 text-lg hover:underline">Services</a>
                  <a href="contacts.html" class="hidden md:inline-block text-gray-700 px-2 py-1 font-abhaya-libre uppercase text-white tracking-wider px-4 xl:px-8 py-2 text-lg hover:underline">Contacts</a>
                  <a href="index.php" class="border-2 border-white bg-black text-white py-2 px-4 rounded">BACK</a>
                </div>
                <div class="navbar-burger md:hidden flex items-center">
                  <button id="navbar-toggle" class="focus:outline-none">
                    <svg class="w-6 h-6 bg-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h34M4 24h34m-7 6h7"></path>
                    </svg>
                  </button>
                </div>
              </div>
            </div>
            <div id="navbar-menu" class="navbar-menu md:hidden">
              <a href="#Main" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Home</a>
              <a href="#varieties" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Sports</a>
              <a href="#about" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">About</a>
              <a href="#threats" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Services</a>
              <a href="contacts.html" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Contacts</a>
              <a href="logout.php" class="inline-block font-bold bg-orange-400 text-white py-2 px-6 rounded hover:bg-orange-300 transition">Logout</a>
            </div>
          </div>
     </nav>
    
      <script>
        document.getElementById('navbar-toggle').addEventListener('click', function() {
          var menu = document.getElementById('navbar-menu');
          menu.style.display = menu.style.display === 'none' || menu.style.display === '' ? 'block' : 'none';
        });
        
      </script>
   
    <!-- Ready Made Section -->
    <div class="text-center my-8">
      <h2 class="text-3xl font-bold mb-4">READY MADE</h2>
      <div class="flex flex-wrap justify-center">
        <div class="w-full md:w-1/2 lg:w-1/3 p-4">
          <div class="border p-4">
            <img src="https://ph-test-11.slatic.net/p/c70c2407741d7be5489b80b71e4797ea.jpg" alt="Kento Kuzuma's NBA CUT Basketball" class="w-full">
            <h5 class="text-lg font-bold mt-2">Kento Kuzuma's NBA CUT Basketball Sportswear Jersey</h5>
            <p class="text-gray-600">Customized Shirt</p>
            <p class="text-xl font-bold">P 599</p>
            <button class="bg-blue-500 text-white px-4 py-2 mt-2">BUY NOW</button>
          </div>
        </div>
        <div class="w-full md:w-1/2 lg:w-1/3 p-4">
          <div class="border p-4">
            <img src="https://ph-test-11.slatic.net/p/c768b11b5e4babdbf522f336fbc6c56e.jpg" alt="Pilipinas Jersey Shorts Basketball" class="w-full">
            <h5 class="text-lg font-bold mt-2">Pilipinas Jersey Shorts Basketball</h5>
            <p class="text-xl font-bold">P 450</p>
            <button class="bg-blue-500 text-white px-4 py-2 mt-2">BUY NOW</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Jersey's Sublimation Section -->
    <div class="text-center my-8">
      <h2 class="text-3xl font-bold mb-4">JERSEY'S SUBLIMATION</h2>
      <div id="carouselExampleIndicators" class="relative">
        <div class="carousel-inner relative w-full overflow-hidden">
          <!-- First carousel item -->
          <div class="carousel-item active flex justify-center">
            <div class="flex flex-wrap justify-center">
              <div class="w-full md:w-1/4 p-2">
                <div class="border p-2">
                  <img src="https://ph-test-11.slatic.net/p/720c2976b33c67f306593cc158df9f6b.jpg" alt="Jersey 1" class="w-full">
                  <button class="bg-blue-500 text-white w-full py-2 mt-2">BUY NOW</button>
                </div>
              </div>
              <div class="w-full md:w-1/4 p-2">
                <div class="border p-2">
                  <img src="https://ph-test-11.slatic.net/p/8e27e554c454c44b35c07a7469f332a6.jpg" alt="Jersey 2" class="w-full">
                  <button class="bg-blue-500 text-white w-full py-2 mt-2">BUY NOW</button>
                </div>
              </div>
              <div class="w-full md:w-1/4 p-2">
                <div class="border p-2">
                  <img src="https://cf.shopee.ph/file/94bf3e5636b8f497d53999d7c8b6b641" alt="Jersey 3" class="w-full">
                  <button class="bg-blue-500 text-white w-full py-2 mt-2">BUY NOW</button>
                </div>
              </div>
              <div class="w-full md:w-1/4 p-2">
                <div class="border p-2">
                  <img src="https://i.pinimg.com/originals/4c/00/6c/4c006c2e37f0749e2d6c99393306e218.jpg" alt="Jersey 4" class="w-full">
                  <button class="bg-blue-500 text-white w-full py-2 mt-2">BUY NOW</button>
                </div>
              </div>
              
            </div>
          </div>

          <!-- 2nd ROW -->
          <div class="carousel-item active flex justify-center"></div>
            <div class="flex flex-wrap justify-center">
              <div class="w-full md:w-1/4 p-2">
                <div class="border p-2">
                  <img src="https://ph-test-11.slatic.net/p/720c2976b33c67f306593cc158df9f6b.jpg" alt="Jersey 1" class="w-full">
                  <button class="bg-blue-500 text-white w-full py-2 mt-2">BUY NOW</button>
                </div>
              </div>
              <div class="w-full md:w-1/4 p-2">
                <div class="border p-2">
                  <img src="https://ph-test-11.slatic.net/p/8e27e554c454c44b35c07a7469f332a6.jpg" alt="Jersey 2" class="w-full">
                  <button class="bg-blue-500 text-white w-full py-2 mt-2">BUY NOW</button>
                </div>
              </div>
              <div class="w-full md:w-1/4 p-2">
                <div class="border p-2">
                  <img src="https://cf.shopee.ph/file/94bf3e5636b8f497d53999d7c8b6b641" alt="Jersey 3" class="w-full">
                  <button class="bg-blue-500 text-white w-full py-2 mt-2">BUY NOW</button>
                </div>
              </div>
              <div class="w-full md:w-1/4 p-2">
                <div class="border p-2">
                  <img src="https://i.pinimg.com/originals/4c/00/6c/4c006c2e37f0749e2d6c99393306e218.jpg" alt="Jersey 4" class="w-full">
                  <button class="bg-blue-500 text-white w-full py-2 mt-2">BUY NOW</button>
                </div>
              </div>
            </div>
          </div>
          <!-- Add more carousel items as needed -->
        </div>
       
      </div>
    </div>
  </div>

</body>
</html>