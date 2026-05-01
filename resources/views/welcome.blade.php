<!DOCTYPE html>
<html>
<head>
    <title>Chirper</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 text-gray-900 flex flex-col min-h-screen">

    <!-- NAVBAR -->
    <nav class="bg-white border-b border-gray-200 px-6 py-4 flex justify-between items-center">
        
        <!-- LOGO -->
        <a href="/" class="text-lg font-semibold">
            Chirper
        </a>

        <!-- AUTH -->
        <div class="space-x-4">
            <a href="#" class="text-gray-600 hover:text-black">Log in</a>
            <a href="#" class="bg-black text-white px-4 py-2 rounded-md text-sm">
                Register
            </a>
        </div>
    </nav>

    <!-- MAIN -->
    <main class="flex-grow max-w-6xl mx-auto w-full px-4 py-8">

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

            <!-- LEFT (kosong biar balance) -->
            <div></div>

            <!-- CENTER (INI INTI CHIRPER) -->
            <div class="space-y-6">

                <!-- FORM -->
                <div class="bg-white p-4 rounded-xl border border-gray-200">
                    <textarea 
                        class="w-full border-gray-300 rounded-lg focus:ring focus:ring-gray-200 p-3"
                        placeholder="What's on your mind?"
                    ></textarea>

                    <div class="flex justify-end mt-3">
                        <button class="bg-black text-white px-4 py-2 rounded-md text-sm">
                            Chirp
                        </button>
                    </div>
                </div>

                <!-- CHIRP 1 -->
                <div class="bg-white p-4 rounded-xl border border-gray-200">
                    <div class="flex items-center gap-3 mb-2">
                        <div class="w-10 h-10 bg-gray-300 rounded-full"></div>
                        <div>
                            <p class="font-semibold">Skylar Beneatha</p>
                            <p class="text-xs text-gray-500">2 minutes ago</p>
                        </div>
                    </div>
                    <p>Sharing my first chirp on Chirper ✨</p>
                </div>

                <!-- CHIRP 2 -->
                <div class="bg-white p-4 rounded-xl border border-gray-200">
                    <div class="flex items-center gap-3 mb-2">
                        <div class="w-10 h-10 bg-gray-300 rounded-full"></div>
                        <div>
                            <p class="font-semibold">Feingard Agmoth</p>
                            <p class="text-xs text-gray-500">10 minutes ago</p>
                        </div>
                    </div>
                    <p>Laravel makes everything easier 🚀</p>
                </div>

                <!-- CHIRP 3 -->
                <div class="bg-white p-4 rounded-xl border border-gray-200">
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

            <!-- RIGHT (kosong / nanti bisa isi) -->
            <div></div>

        </div>

    </main>

    <!-- FOOTER -->
    <footer class="text-center text-gray-500 text-sm py-6">
        © 2026 Chirper — Built with Laravel ❤️
    </footer>

</body>
</html>