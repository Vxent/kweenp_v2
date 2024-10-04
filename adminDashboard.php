<?php
session_start(); // Start the session

// Check if the user is logged in and is an admin
if (!isset($_SESSION['user_id']) || $_SESSION['user_role'] !== 'admin') {
    header('Location: index.php'); // Redirect to homepage
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Responsive Table with Images</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-6">
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
                  <a href="logout.php" class="border-2 border-white bg-black text-white py-2 px-4 rounded">Logout</a>
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
      <section>
        <div>
            <h1 style="font-size: xx-large; font-weight: bold; text-align: center; padding:20px;">WELCOME TO ADMIN DASHBOARD</h1>
        </div>
      </section>

  <div class="container mx-auto">
    <h2 class="text-3xl font-bold mb-4">Order Details</h2>
    <div class="overflow-x-auto">
      <table class="min-w-full bg-white border border-gray-200">
        <thead class="bg-gray-50">
          <tr>
            <th class="py-2 px-4 border-b border-gray-200 text-left text-gray-600 font-bold">Name</th>
            <th class="py-2 px-4 border-b border-gray-200 text-left text-gray-600 font-bold">Address</th>
            <th class="py-2 px-4 border-b border-gray-200 text-left text-gray-600 font-bold">Contact</th>
            <th class="py-2 px-4 border-b border-gray-200 text-left text-gray-600 font-bold">Email address</th>
            <th class="py-2 px-4 border-b border-gray-200 text-left text-gray-600 font-bold">Item</th>
            <th class="py-2 px-4 border-b border-gray-200 text-left text-gray-600 font-bold">Size</th>
            <th class="py-2 px-4 border-b border-gray-200 text-left text-gray-600 font-bold">Image Design</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="py-2 px-4 border-b border-gray-200">John Doe</td>
            <td class="py-2 px-4 border-b border-gray-200">1234 Main St, City, Country</td>
            <td class="py-2 px-4 border-b border-gray-200">123-456-7890</td>
            <td class="py-2 px-4 border-b border-gray-200">john@gmailc.om</td>
            <td class="py-2 px-4 border-b border-gray-200">Basketball Jersey</td>
            <td class="py-2 px-4 border-b border-gray-200">L</td>
            <td class="py-2 px-4 border-b border-gray-200">
              <img src="https://ph-test-11.slatic.net/p/c768b11b5e4babdbf522f336fbc6c56e.jpg" alt="Basketball Jersey" class="w-16 h-16 object-cover">
            </td>
          </tr>
          <tr>
            <td class="py-2 px-4 border-b border-gray-200">Jane Smith</td>
            <td class="py-2 px-4 border-b border-gray-200">5678 Market St, City, Country</td>
            <td class="py-2 px-4 border-b border-gray-200">098-765-4321</td>
            <td class="py-2 px-4 border-b border-gray-200">asdhn@gmailc.om</td>
            <td class="py-2 px-4 border-b border-gray-200">Soccer Jersey</td>
            <td class="py-2 px-4 border-b border-gray-200">M</td>
            <td class="py-2 px-4 border-b border-gray-200">
              <img src="https://ph-test-11.slatic.net/p/720c2976b33c67f306593cc158df9f6b.jpg" alt="Soccer Jersey" class="w-16 h-16 object-cover">
            </td>
          </tr>
          <tr>

          </tr>
            <td class="py-2 px-4 border-b border-gray-200">Jane Smith</td>
            <td class="py-2 px-4 border-b border-gray-200">5678 Market St, City, Country</td>
            <td class="py-2 px-4 border-b border-gray-200">098-765-4321</td>
            <td class="py-2 px-4 border-b border-gray-200">asdhn@gmailc.om</td>
            <td class="py-2 px-4 border-b border-gray-200">Soccer Jersey</td>
            <td class="py-2 px-4 border-b border-gray-200">M</td>
            <td class="py-2 px-4 border-b border-gray-200">
              <img src="https://ph-test-11.slatic.net/p/c768b11b5e4babdbf522f336fbc6c56e.jpg" alt="Soccer Jersey" class="w-16 h-16 object-cover">
            </td>
          </tr>
          <tr></tr>
            <td class="py-2 px-4 border-b border-gray-200">Jane Smith</td>
            <td class="py-2 px-4 border-b border-gray-200">5678 Market St, City, Country</td>
            <td class="py-2 px-4 border-b border-gray-200">098-765-4321</td>
            <td class="py-2 px-4 border-b border-gray-200">asdhn@gmailc.om</td>
            <td class="py-2 px-4 border-b border-gray-200">Soccer Jersey</td>
            <td class="py-2 px-4 border-b border-gray-200">M</td>
            <td class="py-2 px-4 border-b border-gray-200">
              <img src="https://ph-test-11.slatic.net/p/8e27e554c454c44b35c07a7469f332a6.jpg" alt="Soccer Jersey" class="w-16 h-16 object-cover">
            </td>
          </tr>
          <!-- Add more rows as needed -->
        </tbody>
      </table>
    </div>
  </div>
</body>
</html>
