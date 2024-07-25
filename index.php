<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login and Signup</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-900 text-white">
  <div class="flex min-h-screen items-center justify-center">
    <div class="max-w-md w-full space-y-8">
      <!-- Login Form -->
      <div class="bg-gray-800 p-8 rounded-lg shadow-lg">
        <h2 class="text-center text-2xl font-bold mb-4">Login</h2>
        <form action="login1.php" method="post">
          <div class="mb-4">
            <label for="login-name" class="block mb-2">Name</label>
            <input type="text" name="name" class="w-full p-2 bg-gray-700 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
          </div>
          <div class="mb-4">
            <label for="login-password" class="block mb-2">Password</label>
            <input type="password" name="password" class="w-full p-2 bg-gray-700 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
          </div>
          <button type="submit" name="submit" class="w-full py-2 px-4 bg-blue-600 rounded hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">Login</button>
        </form>
        <a href="singin.php"> <button type="submit" class="w-full py-2 mt-4 px-4 bg-yellow-600 rounded hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">New Account</button></a>
      </div>
    </div>
  </div>
</body>
</html>
