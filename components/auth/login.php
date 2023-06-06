<!DOCTYPE html>
<html lang="en">
  <?php
      include '../../controls/auth_control/login_con.php';
  ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login your account</title>
    <link rel="stylesheet" href="styles/main.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <div class="flex h-screen justify-center items-center">
        <div class="bg-white shadow-lg rounded-lg px-8 py-10 w-96">
          <h2 class="text-2xl font-bold mb-6">Login</h2>
          <?php echo $msg ?>
          <form method="POST">
            <div class="mb-4">
              <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
              <input type="email" id="email" name="email" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:border-blue-500">
            </div>
            <div class="mb-6">
              <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
              <input type="password" id="password" name="password" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:border-blue-500">
            </div>
            <div class="flex items-center justify-between">
              <button type="submit" name="login" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Sign In
              </button>
              <a href="./forgot.html" class="text-blue-500 text-sm">Forgot Password?</a>
            </div>
          </form>
          <div class="mt-4 text-center">
            <p class="text-sm">Don't have an account? <a href="./register.php" class="text-blue-500 font-bold">Create an Account</a></p>
          </div>
        </div>
      </div>
</body>
</html>