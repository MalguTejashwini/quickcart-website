<?php
session_start();
if (isset($_SESSION['user_id'])) {
    header('Location: dashboard.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Signup - QuickCart</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex items-center justify-center">
        <div class="w-full max-w-md">
            <!-- Tabs -->
            <div class="flex border-b">
                <button id="login-tab" class="flex-1 py-4 font-medium text-center border-b-2 border-green-600 text-green-600">Login</button>
                <button id="signup-tab" class="flex-1 py-4 font-medium text-center text-gray-500">Sign Up</button>
            </div>
            
            <!-- Login Form -->
            <div id="login-form" class="bg-white p-8 rounded-b shadow-md">
                <?php if (isset($_GET['login_error'])): ?>
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                        <?php echo htmlspecialchars($_GET['login_error']); ?>
                    </div>
                <?php endif; ?>
                
                <form action="auth.php" method="POST">
                    <input type="hidden" name="action" value="login">
                    <div class="mb-4">
                        <label class="block text-gray-700 mb-2" for="email">Email</label>
                        <input type="email" name="email" id="email" class="w-full px-3 py-2 border rounded" required>
                    </div>
                    <div class="mb-6">
                        <label class="block text-gray-700 mb-2" for="password">Password</label>
                        <input type="password" name="password" id="password" class="w-full px-3 py-2 border rounded" required>
                    </div>
                    <button type="submit" class="w-full bg-green-600 hover:bg-green-700 text-white py-2 px-4 rounded">Login</button>
                </form>
            </div>
            
            <!-- Signup Form (hidden by default) -->
            <div id="signup-form" class="bg-white p-8 rounded-b shadow-md hidden">
                <?php if (isset($_GET['signup_error'])): ?>
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                        <?php echo htmlspecialchars($_GET['signup_error']); ?>
                    </div>
                <?php endif; ?>
                
                <?php if (isset($_GET['signup_success'])): ?>
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                        <?php echo htmlspecialchars($_GET['signup_success']); ?>
                    </div>
                <?php endif; ?>
                
                <form action="auth.php" method="POST">
                    <input type="hidden" name="action" value="signup">
                    <div class="mb-4">
                        <label class="block text-gray-700 mb-2" for="name">Full Name</label>
                        <input type="text" name="name" id="name" class="w-full px-3 py-2 border rounded" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 mb-2" for="email">Email</label>
                        <input type="email" name="email" id="email" class="w-full px-3 py-2 border rounded" required>
                    </div>
                    <div class="mb-6">
                        <label class="block text-gray-700 mb-2" for="password">Password</label>
                        <input type="password" name="password" id="password" class="w-full px-3 py-2 border rounded" required>
                    </div>
                    <button type="submit" class="w-full bg-green-600 hover:bg-green-700 text-white py-2 px-4 rounded">Sign Up</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        // Tab switching
        document.getElementById('login-tab').addEventListener('click', function() {
            this.classList.add('border-green-600', 'text-green-600');
            this.classList.remove('text-gray-500');
            document.getElementById('signup-tab').classList.remove('border-green-600', 'text-green-600');
            document.getElementById('signup-tab').classList.add('text-gray-500');
            document.getElementById('login-form').classList.remove('hidden');
            document.getElementById('signup-form').classList.add('hidden');
        });

        document.getElementById('signup-tab').addEventListener('click', function() {
            this.classList.add('border-green-600', 'text-green-600');
            this.classList.remove('text-gray-500');
            document.getElementById('login-tab').classList.remove('border-green-600', 'text-green-600');
            document.getElementById('login-tab').classList.add('text-gray-500');
            document.getElementById('signup-form').classList.remove('hidden');
            document.getElementById('login-form').classList.add('hidden');
        });
    </script>
</body>
</html>