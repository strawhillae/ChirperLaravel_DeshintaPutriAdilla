<!DOCTYPE html>
<html>
<head>
    <title>Chirper</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-black text-white flex items-center justify-center min-h-screen">

    <div class="max-w-5xl w-full px-6">

        <!-- WELCOME SECTION -->
        <div class="bg-gradient-to-r from-pink-600 to-purple-700 p-8 rounded-2xl shadow mb-8 text-center">
            <h1 class="text-3xl font-bold mb-3">
                Welcome to Chirper ✨
            </h1>
            <p class="text-gray-200 text-sm">
                A place where your thoughts go live, stories unfold,
                and connections happen in real-time.
            </p>
        </div>

        <!-- 3 BOX SECTION -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

            <!-- BOX 1 -->
            <div class="bg-gray-900 p-6 rounded-xl border border-gray-800 text-center hover:scale-105 transition">
                <div class="w-12 h-12 mx-auto mb-3 bg-pink-500 rounded-full flex items-center justify-center font-bold">
                    A
                </div>
                <h2 class="font-semibold text-lg">Alice</h2>
                <p class="text-sm text-gray-400">
                    "Sharing my first moment on Chirper ✨"
                </p>
            </div>

            <!-- BOX 2 -->
            <div class="bg-gray-900 p-6 rounded-xl border border-gray-800 text-center hover:scale-105 transition">
                <div class="w-12 h-12 mx-auto mb-3 bg-purple-500 rounded-full flex items-center justify-center font-bold">
                    B
                </div>
                <h2 class="font-semibold text-lg">Brian</h2>
                <p class="text-sm text-gray-400">
                    "Building something cool with Laravel 🚀"
                </p>
            </div>

            <!-- BOX 3 -->
            <div class="bg-gray-900 p-6 rounded-xl border border-gray-800 text-center hover:scale-105 transition">
                <div class="w-12 h-12 mx-auto mb-3 bg-pink-400 rounded-full flex items-center justify-center font-bold">
                    C
                </div>
                <h2 class="font-semibold text-lg">Cindy</h2>
                <p class="text-sm text-gray-400">
                    "Late night thoughts & soft vibes 💫"
                </p>
            </div>

        </div>

    </div>

</body>
</html>