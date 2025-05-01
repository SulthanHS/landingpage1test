<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Portfolio')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            background-color: #1b2124;
            scroll-behavior: smooth;
            padding-top: 64px; /* Add padding to account for fixed navbar */
        }

        /* Ensure smooth scrolling for all browsers */
        html {
            scroll-behavior: smooth;
        }

        /* Prevent scroll chaining */
        body {
            overscroll-behavior-y: none;
        }

        /* Smooth transitions for all scrollable elements */
        * {
            scroll-behavior: smooth;
        }

        /* Navbar styles */
        nav {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 50;
        }
    </style>
</head>
<body class="text-white">
    <!-- Navigation -->
    <nav class="bg-[#1b2124]/80 backdrop-blur-md shadow-lg w-full border-b border-gray-800">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex justify-between">
                <!-- Primary Navigation -->
                <div class="hidden md:flex items-center space-x-6">
                    <a href="#hero" class="py-4 px-2 text-white font-semibold hover:text-yellow-300 transition duration-300">M Sulthan HS</a>
                    <a href="#about" class="py-4 px-2 text-gray-300 font-semibold hover:text-yellow-300 transition duration-300">About</a>
                    <a href="#skills" class="py-4 px-2 text-gray-300 font-semibold hover:text-yellow-300 transition duration-300">Skills</a>
                    <a href="#projects" class="py-4 px-2 text-gray-300 font-semibold hover:text-yellow-300 transition duration-300">Projects</a>
                    <a href="#blog" class="py-4 px-2 text-gray-300 font-semibold hover:text-yellow-300 transition duration-300">Blog</a>
                    <a href="#resume" class="py-4 px-2 text-gray-300 font-semibold hover:text-yellow-300 transition duration-300">Resume</a>
                    <a href="#contact" class="py-4 px-2 text-gray-300 font-semibold hover:text-yellow-300 transition duration-300">Contact</a>
                </div>
                <!-- Mobile menu button -->
                <div class="md:hidden flex items-center">
                    <button class="outline-none mobile-menu-button">
                        <svg class="w-6 h-6 text-gray-300 hover:text-yellow-300"
                            fill="none"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <!-- Mobile Menu -->
        <div class="hidden mobile-menu">
            <ul class="">
                <li><a href="#hero" class="block text-sm px-2 py-4 text-white font-semibold hover:bg-yellow-300/10 hover:text-yellow-300 transition duration-300">M Sulthan HS</a></li>
                <li><a href="#about" class="block text-sm px-2 py-4 text-gray-300 hover:bg-yellow-300/10 hover:text-yellow-300 transition duration-300">About</a></li>
                <li><a href="#skills" class="block text-sm px-2 py-4 text-gray-300 hover:bg-yellow-300/10 hover:text-yellow-300 transition duration-300">Skills</a></li>
                <li><a href="#projects" class="block text-sm px-2 py-4 text-gray-300 hover:bg-yellow-300/10 hover:text-yellow-300 transition duration-300">Projects</a></li>
                <li><a href="#blog" class="block text-sm px-2 py-4 text-gray-300 hover:bg-yellow-300/10 hover:text-yellow-300 transition duration-300">Blog</a></li>
                <li><a href="#resume" class="block text-sm px-2 py-4 text-gray-300 hover:bg-yellow-300/10 hover:text-yellow-300 transition duration-300">Resume</a></li>
                <li><a href="#contact" class="block text-sm px-2 py-4 text-gray-300 hover:bg-yellow-300/10 hover:text-yellow-300 transition duration-300">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-[#1b2124] border-t border-gray-800 mt-8">
        <div class="max-w-6xl mx-auto px-4 py-6">
            <div class="text-center">
                <p class="text-gray-300">&copy; 2024 M Sulthan HS. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    @stack('scripts')

    <!-- JavaScript for mobile menu -->
    <script>
        const btn = document.querySelector("button.mobile-menu-button");
        const menu = document.querySelector(".mobile-menu");

        btn.addEventListener("click", () => {
            menu.classList.toggle("hidden");
        });
    </script>
</body>
</html>
