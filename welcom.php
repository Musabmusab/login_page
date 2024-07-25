<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome Page</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #1a202c;
      color: white;
      height: 100vh;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }
  </style>
</head>

<body>
  <header class="bg-gray-800 p-4">
    <div class="container mx-auto flex justify-between items-center">
      <h1 class="text-red-500 text-2xl font-bold">My Website</h1>
      <nav>
        <ul class="flex space-x-4">
          <li><a href="welcom.php" class="text-white hover:text-red-500">Home</a></li>
          <li><a href="singin.php" class="text-white hover:text-red-500">Sing in</a></li>
           <!-- logic for one page -->

          <!-- <li><a href='logout.php' class='text-white hover:text-red-500'>logout</a></li>
          <li><a href="index.php" class="text-white hover:text-red-500">login</a></li> -->

          <!-- logic for more page -->

            <?php
            session_start();
            if (!$_SESSION['user']) {
              echo"<li><a href='index.php' class='text-white hover:text-red-500'>login</a></li>";
              header("location:singin.php");
            }else{echo"<li><a href='logout.php' class='text-white hover:text-red-500'>logout</a></li>";}
            ?>  
        </ul>
      </nav>
    </div>
  </header>

  <main class="flex-grow flex items-center justify-center">
    <div class="text-center">
      <h2 class="text-red-500 text-3xl font-bold mb-4">Welcome to <?php echo $_SESSION['user']   ?></h2>
      <p class="text-lg">This is a simple login logout and sing in system using php and my sql.</p>
    </div>
  </main>

  <footer class="bg-gray-800 p-4">
    <div class="container mx-auto text-center">
      <p class="text-white">&copy; 2024 MUSAB ASGHAR. All rights reserved.</p>
    </div>
  </footer>
</body>
</html>
