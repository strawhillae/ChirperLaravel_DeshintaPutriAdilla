<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chirper</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-pink-50 text-gray-800">

    <!-- Navbar -->
    <div class="flex justify-between items-center px-8 py-5 bg-white shadow-sm">
        <h1 class="text-xl font-bold text-pink-500">Chirper 🌸</h1>
        <div class="space-x-4">
            <button class="text-gray-600 hover:text-pink-500">Sign In</button>
            <button class="bg-pink-400 text-white px-4 py-2 rounded-full hover:bg-pink-500 transition">
                Sign Up
            </button>
        </div>
    </div>

    <div class="flex gap-6 p-8">

        <!-- Left Section -->
        <div class="w-1/3 bg-gradient-to-br from-pink-200 to-purple-200 p-6 rounded-2xl shadow">
            <p class="text-xs text-pink-600 mb-2">✨ ACTIVE PLATFORM</p>

            <h2 class="text-2xl font-bold mb-3">
                Welcome to Chirper 💬
            </h2>

            <p class="text-sm text-gray-700 mb-6">
                Share your thoughts, connect with others, and express yourself in a soft & cozy space 💖
            </p>

            <div class="flex justify-between mb-6">
                <div>
                    <p class="text-lg font-bold">1.2K</p>
                    <p class="text-xs text-gray-600">POSTS</p>
                </div>
                <div>
                    <p class="text-lg font-bold">400+</p>
                    <p class="text-xs text-gray-600">USERS</p>
                </div>
            </div>

            <button class="w-full bg-white text-pink-500 py-2 rounded-full font-semibold hover:bg-pink-100 transition">
                Explore Now
            </button>
        </div>

        <!-- Right Section -->
        <div class="w-2/3">

            <h2 class="text-2xl font-bold mb-6 text-pink-500">
                Latest Chirps 💕
            </h2>

            <!-- Chirp Card -->
            <div class="bg-white p-5 rounded-xl mb-4 shadow hover:scale-[1.01] transition">
                <div class="flex items-center gap-3 mb-2">
                    <div class="bg-pink-300 text-white w-10 h-10 flex items-center justify-center rounded-full font-bold">
                        J
                    </div>
                    <div>
                        <p class="font-semibold">Jane Doe</p>
                        <p class="text-xs text-gray-400">5 minutes ago</p>
                    </div>
                </div>
                <p>Just deployed my first Laravel app! 🌸✨</p>
            </div>

            <div class="bg-white p-5 rounded-xl mb-4 shadow hover:scale-[1.01] transition">
                <div class="flex items-center gap-3 mb-2">
                    <div class="bg-purple-300 text-white w-10 h-10 flex items-center justify-center rounded-full font-bold">
                        J
                    </div>
                    <div>
                        <p class="font-semibold">John Smith</p>
                        <p class="text-xs text-gray-400">1 hour ago</p>
                    </div>
                </div>
                <p>Laravel makes everything easier 💜</p>
            </div>

            <div class="bg-white p-5 rounded-xl shadow hover:scale-[1.01] transition">
                <div class="flex items-center gap-3 mb-2">
                    <div class="bg-pink-400 text-white w-10 h-10 flex items-center justify-center rounded-full font-bold">
                        A
                    </div>
                    <div>
                        <p class="font-semibold">Alice</p>
                        <p class="text-xs text-gray-400">3 hours ago</p>
                    </div>
                </div>
                <p>Working on something cute today 💖</p>
            </div>

        </div>
    </div>

</body>
</html>