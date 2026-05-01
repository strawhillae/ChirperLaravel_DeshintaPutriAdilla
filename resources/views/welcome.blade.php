<!DOCTYPE html>
<html>
<head>
    <title>Chirper</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-black text-white flex flex-col min-h-screen">

    <!-- NAVBAR -->
    <div class="flex justify-between items-center px-6 py-4 border-b border-gray-800 bg-black">
        
        <!-- Logo -->
        <div class="flex items-center gap-2">
            <div class="w-8 h-8 bg-indigo-500 rounded-full flex items-center justify-center font-bold">
                C
            </div>
            <h1 class="text-lg font-semibold">Chirper</h1>
        </div>

        <!-- Button -->
        <div class="space-x-3">
            <button class="text-gray-300 hover:text-white transition">
                Sign In
            </button>
            <button class="bg-slate-200 text-black px-4 py-2 rounded-full font-semibold hover:bg-slate-300 transition">
                Sign Up
            </button>
        </div>
    </div>

    <!-- MAIN -->
    <div class="flex-grow px-6 py-10 flex justify-center">

        <div class="max-w-6xl w-full grid grid-cols-1 md:grid-cols-3 gap-6">

            <!-- LEFT: WELCOME -->
            <div class="bg-gradient-to-b from-slate-600 to-indigo-600 p-6 rounded-2xl flex flex-col justify-between shadow-lg">

                <div>
                    <p class="text-xs text-slate-200 mb-2">● ACTIVE V1.1</p>

                    <h1 class="text-3xl font-bold mb-4">
                        Welcome to <br> Chirper ✨
                    </h1>

                    <p class="text-sm text-slate-200 mb-6">
                        A place where your thoughts go live,
                        stories unfold, and connections happen in real-time.
                    </p>
                </div>

                <button class="w-full bg-slate-200 text-black py-2 rounded-full font-semibold hover:bg-slate-300 transition">
                    Explore Now
                </button>
            </div>

            <!-- RIGHT: 3 BOX -->
            <div class="md:col-span-2 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

                <!-- BOX 1 -->
                <div class="bg-gray-900 p-6 rounded-xl border border-gray-800 text-center hover:scale-105 transition">
                    <div class="w-12 h-12 mx-auto mb-3 bg-indigo-500 rounded-full flex items-center justify-center font-bold">
                        S
                    </div>
                    <h2 class="font-semibold text-lg">Skylar Beneatha</h2>
                    <p class="text-sm text-gray-400">
                        "Letting my thoughts flow freely in this cozy spacer ✨"
                    </p>
                </div>

                <!-- BOX 2 -->
                <div class="bg-gray-900 p-6 rounded-xl border border-gray-800 text-center hover:scale-105 transition">
                    <div class="w-12 h-12 mx-auto mb-3 bg-slate-500 rounded-full flex items-center justify-center font-bold">
                        F
                    </div>
                    <h2 class="font-semibold text-lg">Feingard Agmoth</h2>
                    <p class="text-sm text-gray-400">
                        "Fragments of ideas, drifting into meaningful connections 🚀"
                    </p>
                </div>

                <!-- BOX 3 -->
                <div class="bg-gray-900 p-6 rounded-xl border border-gray-800 text-center hover:scale-105 transition">
                    <div class="w-12 h-12 mx-auto mb-3 bg-gray-500 rounded-full flex items-center justify-center font-bold">
                        W
                    </div>
                    <h2 class="font-semibold text-lg">Withney Ornaith</h2>
                    <p class="text-sm text-gray-400">
                        "A quiet space where my ideas can gently exist and grow 💫"
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