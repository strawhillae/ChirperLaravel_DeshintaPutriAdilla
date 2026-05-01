<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Chirper</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-black text-white flex flex-col min-h-screen">

    <!-- NAVBAR -->
    <div class="flex justify-between items-center px-6 py-4 border-b border-gray-800 bg-black">
        
        <!-- Logo -->
        <div class="flex items-center gap-2">
            <div class="w-8 h-8 bg-pink-500 rounded-full flex items-center justify-center font-bold">
                C
            </div>
            <h1 class="text-lg font-semibold">Chirper</h1>
        </div>

        <!-- Button -->
        <div class="space-x-3">
            <button class="text-gray-300 hover:text-white transition">
                Sign In
            </button>
            <button class="bg-white text-black px-4 py-2 rounded-full font-semibold hover:scale-105 transition">
                Sign Up
            </button>
        </div>

    </div>

    <!-- MAIN CONTENT -->
    <div class="flex-grow flex items-center justify-center px-6 py-10">

        <div class="max-w-5xl w-full">

            <!-- WELCOME -->
            <div class="bg-gradient-to-r from-pink-600 to-purple-700 p-8 rounded-2xl shadow mb-8 text-center">
                <h1 class="text-3xl font-bold mb-3">
                    Welcome to Chirper ✨
                </h1>
                <p class="text-gray-200 text-sm">
                    A place where your thoughts go live, stories unfold,
                    and connections happen in real-time.
                </p>
            </div>

            <!-- 3 BOX -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                <!-- BOX 1 -->
                <div class="bg-gray-900 p-6 rounded-xl border border-gray-800 text-center hover:scale-105 transition">
                    <div class="w-12 h-12 mx-auto mb-3 bg-pink-500 rounded-full flex items-center justify-center font-bold">
                        S
                    </div>
                    <h2 class="font-semibold text-lg">Skylar Beneatha</h2>
                    <p class="text-sm text-gray-400">
                        "Sharing my first moment on Chirper ✨"
                    </p>
                </div>

                <!-- BOX 2 -->
                <div class="bg-gray-900 p-6 rounded-xl border border-gray-800 text-center hover:scale-105 transition">
                    <div class="w-12 h-12 mx-auto mb-3 bg-purple-500 rounded-full flex items-center justify-center font-bold">
                        F
                    </div>
                    <h2 class="font-semibold text-lg">Feingard Agmoth</h2>
                    <p class="text-sm text-gray-400">
                        "Building something cool with Laravel 🚀"
                    </p>
                </div>

                <!-- BOX 3 -->
                <div class="bg-gray-900 p-6 rounded-xl border border-gray-800 text-center hover:scale-105 transition">
                    <div class="w-12 h-12 mx-auto mb-3 bg-pink-400 rounded-full flex items-center justify-center font-bold">
                        W
                    </div>
                    <h2 class="font-semibold text-lg">Withney Ornaith</h2>
                    <p class="text-sm text-gray-400">
                        "Late night thoughts & soft vibes 💫"
                    </p>
                </div>

            </div>

        </div>

    </div>

    <!-- FOOTER -->
    <footer class="border-t border-gray-800 py-6 text-center text-gray-400 text-sm">
        © 2026 <span class="text-white font-semibold">Chirper</span> — Built with 
        <span class="text-pink-500">Laravel</span> and ❤️ by 
        <span class="text-white">Deshinta Putri Adilla (240170099)</span>
    </footer>

</body>
</html>