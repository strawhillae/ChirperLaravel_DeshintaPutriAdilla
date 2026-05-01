<!DOCTYPE html>
<html>
<head>
    <title>Chirper</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-100 text-gray-900 flex flex-col min-h-screen">

    <!-- NAVBAR -->
    <nav class="bg-white border-b border-slate-200 px-6 py-4 flex justify-between items-center">
        
        <a href="/" class="text-lg font-semibold text-slate-800">
            Chirper
        </a>

        <div class="space-x-4">
            <a href="#" class="text-slate-600 hover:text-slate-900">Sign Up</a>
            <a href="#" class="bg-slate-800 text-white px-4 py-2 rounded-md text-sm hover:bg-slate-700 transition">
                Sign In
            </a>
        </div>
    </nav>

    <!-- MAIN -->
    <main class="flex-grow max-w-4xl mx-auto w-full px-4 py-10">

        <div class="space-y-6">

            <!-- BOX 1 -->
            <div class="bg-white p-5 rounded-xl border border-slate-200 shadow-sm hover:shadow-md transition">
                <div class="flex items-center gap-3 mb-2">
                    <div class="w-10 h-10 bg-blue-400 rounded-full"> S </div>
                    <div>
                        <p class="font-semibold text-slate-800">Skylar Beneatha</p>
                    </div>
                </div>
                <p class="text-slate-700">Just a tiny space for my thoughts to bloom and shine ✨</p>
            </div>

            <!-- BOX 2 -->
            <div class="bg-white p-5 rounded-xl border border-slate-200 shadow-sm hover:shadow-md transition">
                <div class="flex items-center gap-3 mb-2">
                    <div class="w-10 h-10 bg-indigo-400 rounded-full"> F </div>
                    <div>
                        <p class="font-semibold text-slate-800">Feingard Agmoth</p>
                    </div>
                </div>
                <p class="text-slate-700">Fragments of ideas, drifting into meaningful connections 🚀</p>
            </div>

            <!-- BOX 3 -->
            <div class="bg-white p-5 rounded-xl border border-slate-200 shadow-sm hover:shadow-md transition">
                <div class="flex items-center gap-3 mb-2">
                    <div class="w-10 h-10 bg-cyan-400 rounded-full"> W </div>
                    <div>
                        <p class="font-semibold text-slate-800">Withney Ornaith</p>
                    </div>
                </div>
                <p class="text-slate-700">Letting my thoughts flow freely in this cozy space 💻</p>
            </div>

        </div>

    </main>

    <!-- FOOTER -->
    <footer class="text-center text-slate-500 text-sm py-6">
        © 2026 <span class="text-slate-700 font-semibold">Chirper</span> — Built with Laravel ❤️ Deshinta Putri Adilla (240170099)
    </footer>

</body>
</html>