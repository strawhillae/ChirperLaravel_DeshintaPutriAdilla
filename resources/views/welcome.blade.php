<!DOCTYPE html>
<html>
<head>
    <title>Chirper</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#2b1f1a] text-[#1a120f] flex flex-col min-h-screen">

    <!-- NAVBAR -->
    <nav class="bg-[#3a2a24] px-6 py-4 flex justify-between items-center border-b border-[#4a342c]">

        <a href="/" class="text-lg font-semibold text-[#f2d6b3]">
            Chirper
        </a>

        <div class="space-x-4">
            <a href="#" class="text-[#f2d6b3] hover:text-white transition">Sign Up</a>
            <a href="#" class="bg-[#a66a4a] text-white px-4 py-2 rounded-md text-sm hover:opacity-90 transition">
                Sign In
            </a>
        </div>
    </nav>

    <!-- MAIN -->
    <main class="flex-grow max-w-4xl mx-auto w-full px-4 py-10">

        <div class="space-y-6">

            <!-- BOX 1 -->
            <div class="bg-[#f2d6b3] p-5 rounded-xl shadow-md hover:shadow-lg transition">

                <div class="flex items-center gap-3 mb-2">

                    <div class="w-10 h-10 bg-[#a66a4a] rounded-full flex items-center justify-center text-[#f2d6b3] font-bold">
                        S
                    </div>

                    <div>
                        <p class="font-semibold text-[#2b1f1a]">Skylar Beneatha</p>
                    </div>

                </div>

                <p class="text-[#2b1f1a]">
                    Just a tiny space for my thoughts to bloom and shine ✨
                </p>
            </div>

            <!-- BOX 2 -->
            <div class="bg-[#f2d6b3] p-5 rounded-xl shadow-md hover:shadow-lg transition">

                <div class="flex items-center gap-3 mb-2">

                    <div class="w-10 h-10 bg-[#c97b63] rounded-full flex items-center justify-center text-[#f2d6b3] font-bold">
                        F
                    </div>

                    <div>
                        <p class="font-semibold text-[#2b1f1a]">Feingard Agmoth</p>
                    </div>

                </div>

                <p class="text-[#2b1f1a]">
                    Fragments of ideas, drifting into meaningful connections 🚀
                </p>
            </div>

            <!-- BOX 3 -->
            <div class="bg-[#f2d6b3] p-5 rounded-xl shadow-md hover:shadow-lg transition">

                <div class="flex items-center gap-3 mb-2">

                    <div class="w-10 h-10 bg-[#a66a4a] rounded-full flex items-center justify-center text-[#f2d6b3] font-bold">
                        W
                    </div>

                    <div>
                        <p class="font-semibold text-[#2b1f1a]">Withney Ornaith</p>
                    </div>

                </div>

                <p class="text-[#2b1f1a]">
                    Letting my thoughts flow freely in this cozy space 💻
                </p>
            </div>

        </div>

    </main>

    <!-- FOOTER -->
    <footer class="text-center text-[#f2d6b3] text-sm py-6 border-t border-[#4a342c]">
        © 2026 <span class="font-semibold">Chirper</span> — Built with Laravel ❤️ by Deshinta Putri Adilla (240170099)
    </footer>

</body>
</html>