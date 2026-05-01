<!DOCTYPE html>
<html>
<head>
    <title>Chirper</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#0f0f0f] text-white flex flex-col min-h-screen">

    <!-- NAVBAR -->
    <div class="flex justify-between items-center px-8 py-4 border-b border-gray-800">
        
        <div class="flex items-center gap-2">
            <div class="w-9 h-9 bg-indigo-500 rounded-full flex items-center justify-center font-bold">
                C
            </div>
            <h1 class="text-xl font-semibold">Chirper</h1>
        </div>

        <div class="space-x-4">
            <button class="text-gray-300 hover:text-white transition">
                Sign In
            </button>
            <button class="bg-indigo-500 px-5 py-2 rounded-full font-semibold hover:bg-indigo-400 transition">
                Sign Up
            </button>
        </div>
    </div>

    <!-- MAIN -->
    <div class="flex-grow px-8 py-12">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-10">

            <!-- LEFT: WELCOME -->
            <div class="bg-gradient-to-br from-indigo-500 to-purple-600 p-10 rounded-3xl flex flex-col justify-between min-h-[420px] shadow-lg">
                
                <div>
                    <p class="text-sm text-white/70 mb-3">● ACTIVE V1.1</p>

                    <h1 class="text-4xl font-bold mb-6 leading-snug">
                        Welcome to <br> Chirper ✨
                    </h1>

                    <p class="text-white/80">
                        A place where your thoughts go live,
                        stories unfold, and connections happen in real-time.
                    </p>
                </div>

                <button class="mt-8 bg-white text-black py-3 rounded-full font-semibold hover:scale-105 transition">
                    Explore Now
                </button>
            </div>

            <!-- RIGHT: BOXES -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">

                <!-- BOX 1 -->
                <div class="bg-[#1a1a1a] p-6 rounded-xl border border-gray-800 hover:border-indigo-500 hover:scale-105 transition">
                    <div class="w-12 h-12 mb-3 bg-indigo-500 rounded-full flex items-center justify-center font-bold">
                        S
                    </div>
                    <h2 class="font-semibold text-lg">Skylar Beneatha</h2>
                    <p class="text-sm text-gray-400 mt-1">
                        "Sharing my first moment on Chirper ✨"
                    </p>
                </div>

                <!-- BOX 2 -->
                <div class="bg-[#1a1a1a] p-6 rounded-xl border border-gray-800 hover:border-purple-500 hover:scale-105 transition">
                    <div class="w-12 h-12 mb-3 bg-purple-500 rounded-full flex items-center justify-center font-bold">
                        F
                    </div>
                    <h2 class="font-semibold text-lg">Feingard Agmoth</h2>
                    <p class="text-sm text-gray-400 mt-1">
                        "Building something cool with Laravel 🚀"
                    </p>
                </div>

                <!-- BOX 3 -->
                <div class="bg-[#1a1a1a] p-6 rounded-xl border border-gray-800 hover:border-indigo-400 hover:scale-105 transition sm:col-span-2">
                    <div class="w-12 h-12 mb-3 bg-indigo-400 rounded-full flex items-center justify-center font-bold">
                        W
                    </div>
                    <h2 class="font-semibold text-lg">Withney Ornaith</h2>
                    <p class="text-sm text-gray-400 mt-1">
                        "Late night thoughts & soft vibes 💫"
                    </p>
                </div>

            </div>

        </div>
    </div>

    <!-- FOOTER -->
    <footer class="border-t border-gray-800 py-6 text-center text-gray-400 text-sm">
        © 2026 <span class="text-white font-semibold">Chirper</span> — Built with 
        <span class="text-indigo-400">Laravel</span> and ❤️ by 
        <span class="text-white">Deshinta Putri Adilla (240170099)</span>
    </footer>

</body>
</html>