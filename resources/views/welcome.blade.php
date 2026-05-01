<!DOCTYPE html>
<html>
<head>
    <title>Chirper</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen text-white flex flex-col bg-gradient-to-br from-[#0f172a] via-[#111827] to-[#020617] relative overflow-hidden">

    <!-- BACKGROUND GLOW -->
    <div class="absolute top-0 left-0 w-72 h-72 bg-indigo-500 opacity-20 blur-3xl"></div>
    <div class="absolute bottom-0 right-0 w-72 h-72 bg-purple-500 opacity-20 blur-3xl"></div>

    <div class="relative z-10 flex flex-col min-h-screen">

        <!-- NAVBAR -->
        <div class="flex justify-between items-center px-8 py-4 border-b border-gray-800">
            
            <!-- LOGO CLICKABLE -->
            <a href="/" class="flex items-center gap-2 hover:opacity-80 transition">
                <div class="w-9 h-9 bg-indigo-500 rounded-full flex items-center justify-center">
                    <!-- ICON -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 10h.01M12 14h.01M16 10h.01M21 12c0 4.418-4.03 8-9 8a9.77 9.77 0 01-4-.8L3 20l1.2-3.6A7.7 7.7 0 013 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                    </svg>
                </div>
                <h1 class="text-xl font-semibold tracking-wide">Chirper</h1>
            </a>

            <!-- BUTTON -->
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

                <!-- CENTER: BOX -->
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

    </div>

</body>
</html>