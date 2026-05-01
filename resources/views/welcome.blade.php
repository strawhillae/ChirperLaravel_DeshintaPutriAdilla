<!DOCTYPE html>
<html>
<head>
    <title>Chirper</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 text-gray-900 flex flex-col min-h-screen">

    <!-- NAVBAR -->
    <nav class="bg-white border-b border-gray-200 px-6 py-4 flex justify-between items-center">
        
        <a href="/" class="text-lg font-semibold">
            Chirper
        </a>

        <div class="space-x-4">
            <a href="#" class="text-gray-600 hover:text-black">Log in</a>
            <a href="#" class="bg-black text-white px-4 py-2 rounded-md text-sm">
                Register
            </a>
        </div>
    </nav>

    <!-- MAIN -->
    <main class="flex-grow max-w-4xl mx-auto w-full px-4 py-10">

        <div class="space-y-6">

            <!-- BOX 1 -->
            <div class="bg-white p-5 rounded-xl border border-gray-200">
                <div class="flex items-center gap-3 mb-2">
                    <div class="w-10 h-10 bg-gray-300 rounded-full"></div>
                    <div>
                        <p class="font-semibold">Skylar Beneatha</p>
                        <p class="text-xs text-gray-500">2 minutes ago</p>
                    </div>
                </div>
                <p>Sharing my first chirp on Chirper ✨</p>
            </div>

            <!-- BOX 2 -->
            <div class="bg-white p-5 rounded-xl border border-gray-200">
                <div class="flex items-center gap-3 mb-2">
                    <div class="w-10 h-10 bg-gray-300 rounded-full"></div>
                    <div>
                        <p class="font-semibold">Feingard Agmoth</p>
                        <p class="text-xs text-gray-500">10 minutes ago</p>
                    </div>
                </div>
                <p>Laravel makes everything easier 🚀</p>
            </div>

            <!-- BOX 3 -->
            <div class="bg-white p-5 rounded-xl border border-gray-200">
                <div class="flex items-center gap-3 mb-2">
                    <div class="w-10 h-10 bg-gray-300 rounded-full"></div>
                    <div>
                        <p class="font-semibold">Withney Ornaith</p>
                        <p class="text-xs text-gray-500">1 hour ago</p>
                    </div>
                </div>
                <p>Working on my Chirper project 💻</p>
            </div>

        </div>

    </main>

    <!-- FOOTER -->
    <footer class="text-center text-gray-500 text-sm py-6">
        © 2026 Chirper — Built with Laravel ❤️
    </footer>

</body>
</html>