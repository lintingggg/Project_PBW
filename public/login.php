<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login | Filmyfy</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="../assets/style/style.css" />
    <!-- <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet"> -->
  </head>
  <body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg max-w-md w-full">
      <h1 class="text-3xl font-bold mb-6 text-center text-blue-600">
        Login to Filmyfy
      </h1>
      <form action="login_process.php" method="post">
        <div class="mb-6">
          <label for="username" class="block text-sm font-medium text-gray-700"
            >Username</label
          >
          <input
            type="text"
            name="username"
            class="mt-1 p-2 w-full border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent"
            required
          />
        </div>
        <div class="mb-6">
          <label for="password" class="block text-sm font-medium text-gray-700"
            >Password</label
          >
          <input
            type="password"
            name="password"
            class="mt-1 p-2 w-full border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent"
            required
          />
        </div>
        <button
          type="submit"
          class="bg-blue-500 hover:bg-blue-600 text-white p-3 w-full rounded-md mt-4 font-semibold transition duration-300"
        >
          Login
        </button>
      </form>
      <p class="mt-4 text-center text-sm text-gray-600">
        Don't have an account?
        <a href="register.html" class="text-blue-500 hover:text-blue-700"
          >Sign up</a
        >
      </p>
    </div>

    <!-- Popup Error -->
    <?php if (isset($_GET['error'])): ?>
    <div class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-75 z-50">
      <div class="bg-white p-6 rounded-lg shadow-lg max-w-sm w-full">
        <h2 class="text-lg font-bold text-red-600 mb-4">Error</h2>
        <p class="mb-4"><?= htmlspecialchars($_GET['error']) ?></p>
        <button
          onclick="document.getElementById('errorPopup').classList.add('hidden')"
          class="btn btn-primary w-full"
        >
          Close
        </button>
      </div>
    </div>
    <?php endif; ?>
  </body>
</html>
