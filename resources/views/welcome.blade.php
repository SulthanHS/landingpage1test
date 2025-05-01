@extends('layouts.navbar')

@section('title', 'M Sulthan HS - Web Developer')

@section('content')
<!-- Hero Section -->
<div id="hero" class="min-h-screen flex items-center justify-center bg-[#1b2124] overflow-hidden relative">
    <!-- Animated Stars -->
    <div class="stars-container absolute inset-0 z-0">
        <!-- First row of stars -->
        <div class="star-1 absolute top-1/6 -left-4 animate-star-1">
            <svg class="w-4 h-4 text-yellow-200" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
            </svg>
        </div>
        <div class="star-2 absolute top-1/4 -left-4 animate-star-2">
            <svg class="w-3 h-3 text-yellow-100" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
            </svg>
        </div>
        <div class="star-3 absolute top-1/3 -left-4 animate-star-3">
            <svg class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
            </svg>
        </div>
        <!-- Second row of stars -->
        <div class="star-4 absolute top-1/2 -left-4 animate-star-4">
            <svg class="w-3 h-3 text-yellow-200" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
            </svg>
        </div>
        <div class="star-5 absolute top-2/3 -left-4 animate-star-5">
            <svg class="w-4 h-4 text-yellow-100" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
            </svg>
        </div>
        <div class="star-6 absolute top-3/4 -left-4 animate-star-6">
            <svg class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
            </svg>
        </div>
        <!-- Third row of stars -->
        <div class="star-7 absolute top-1/5 -left-4 animate-star-7">
            <svg class="w-3 h-3 text-yellow-200" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
            </svg>
        </div>
        <div class="star-8 absolute top-4/5 -left-4 animate-star-8">
            <svg class="w-4 h-4 text-yellow-100" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
            </svg>
        </div>
        <!-- Additional stars -->
        <div class="star-9 absolute top-2/5 -left-4 animate-star-9">
            <svg class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
            </svg>
        </div>
        <div class="star-10 absolute top-3/5 -left-4 animate-star-10">
            <svg class="w-3 h-3 text-yellow-50" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
            </svg>
        </div>
        <div class="star-11 absolute top-4/5 -left-4 animate-star-11">
            <svg class="w-4 h-4 text-yellow-200" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
            </svg>
        </div>
        <div class="star-12 absolute top-5/6 -left-4 animate-star-12">
            <svg class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
            </svg>
        </div>
    </div>

    <div class="absolute inset-0 bg-gradient-to-br from-indigo-500/5 via-purple-500/5 to-pink-500/5 z-0"></div>
    <div class="container mx-auto px-4 py-16 relative z-10">
        <div class="flex flex-col md:flex-row items-center justify-between">
            <!-- Left Column - Text Content -->
            <div class="md:w-1/2 text-center md:text-left mb-10 md:mb-0">
                <div class="animate-fade-in-up">
                    <h1 class="text-4xl md:text-6xl font-bold text-white mb-4 leading-tight">
                        Hi, I'm <span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-300 to-yellow-500">M Sulthan HS</span>
                    </h1>
                    <h2 class="text-2xl md:text-3xl text-gray-200 mb-6 font-light">
                        Web Developer
                    </h2>
                    <p class="text-lg text-gray-300 mb-8 leading-relaxed max-w-xl">
                         I'm a junior web developer passionate about learning and creating websites with modern technologies.
                        Focused on delivering exceptional user experiences and innovative solutions.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center md:justify-start">
                        <a href="#projects" class="group relative px-8 py-4 bg-gradient-to-r from-yellow-300 to-yellow-500 text-gray-900 font-semibold rounded-lg hover:from-yellow-400 hover:to-yellow-600 transition-all duration-300 shadow-lg hover:shadow-yellow-500/25">
                            View My Work
                            <span class="absolute right-4 top-1/2 transform -translate-y-1/2 group-hover:translate-x-1 transition-transform">
                                →
                            </span>
                        </a>
                        <a href="#contact" class="px-8 py-4 bg-white/5 backdrop-blur-sm text-white font-semibold rounded-lg hover:bg-white/10 transition-all duration-300 border border-white/10 hover:border-white/20">
                            Contact Me
                        </a>
                    </div>
                    <!-- Social Links in Hero Section -->
                    <div class="mt-8 flex gap-4 justify-center md:justify-start">
                        <a href="https://github.com/SulthanHS" target="_blank" rel="noopener noreferrer" class="text-gray-400 hover:text-yellow-300 transition-colors duration-300" title="GitHub">
                            <i class="fab fa-github text-xl"></i>
                        </a>
                        <a href="https://www.linkedin.com/in/m-sulthan-hariz-shiddiq-2015b932a" target="_blank" rel="noopener noreferrer" class="text-gray-400 hover:text-yellow-300 transition-colors duration-300" title="LinkedIn">
                            <i class="fab fa-linkedin text-xl"></i>
                        </a>
                        <a href="https://www.instagram.com/sulthanhrz/" target="_blank" rel="noopener noreferrer" class="text-gray-400 hover:text-yellow-300 transition-colors duration-300" title="Instagram">
                            <i class="fab fa-instagram text-xl"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Right Column - Image/Illustration -->
            <div class="md:w-1/3 flex justify-center animate-fade-in">
                <div class="relative group">
                    <div class="absolute -inset-1 bg-gradient-to-r from-yellow-300 to-yellow-500 rounded-full blur opacity-25 group-hover:opacity-40 transition duration-1000"></div>
                    <div class="relative w-48 h-48 md:w-56 md:h-56 rounded-full overflow-hidden ring-2 ring-yellow-300/20">
                        <img src="{{ asset('images/profilegweh.jpg') }}" alt="M Sulthan HS" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- About Section -->
<section id="about" class="py-16 bg-[#1b2124] relative overflow-hidden">
    <!-- Stars for About Section -->
    <div class="stars-container absolute inset-0 z-0">
        <div class="star-1 absolute top-1/6 -left-4 animate-star-1">
            <svg class="w-4 h-4 text-yellow-200" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
            </svg>
        </div>
        <div class="star-2 absolute top-1/4 -left-4 animate-star-2">
            <svg class="w-3 h-3 text-yellow-100" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
            </svg>
        </div>
        <!-- Add new stars -->
        <div class="star-9 absolute top-2/5 -left-4 animate-star-9">
            <svg class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
            </svg>
        </div>
        <div class="star-10 absolute top-3/5 -left-4 animate-star-10">
            <svg class="w-3 h-3 text-yellow-50" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
            </svg>
        </div>
    </div>
    <div class="container mx-auto px-4 relative z-10">
        <h2 class="text-3xl font-bold text-center text-white mb-12">About Me</h2>
        <div class="max-w-3xl mx-auto text-center">
            <p class="text-lg text-gray-200 mb-6">
                I'm a passionate web developer with a strong focus on creating user-friendly and efficient applications.
                With expertise in modern web technologies, I strive to build solutions that make a difference.
            </p>
            <p class="text-lg text-gray-200">
                When I'm not coding, you can find me exploring new technologies, contributing to open-source projects,
                or enjoying outdoor activities.
            </p>
        </div>
    </div>
</section>

<!-- Skills Section -->
<section id="skills" class="py-16 bg-[#1b2124] relative overflow-hidden">
    <!-- Stars for Skills Section -->
    <div class="stars-container absolute inset-0 z-0">
        <div class="star-3 absolute top-1/3 -left-4 animate-star-3">
            <svg class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
            </svg>
        </div>
        <div class="star-4 absolute top-1/2 -left-4 animate-star-4">
            <svg class="w-3 h-3 text-yellow-200" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
            </svg>
        </div>
        <!-- Add new stars -->
        <div class="star-11 absolute top-4/5 -left-4 animate-star-11">
            <svg class="w-4 h-4 text-yellow-200" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
            </svg>
        </div>
        <div class="star-12 absolute top-5/6 -left-4 animate-star-12">
            <svg class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
            </svg>
        </div>
    </div>
    <div class="container mx-auto px-4 relative z-10">
        <h2 class="text-3xl font-bold text-center text-white mb-12">My Skills</h2>
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-8">
            <!-- HTML -->
            <div class="bg-card p-6 rounded-lg shadow-xl group hover:bg-white/10 transition-all duration-300">
                <div class="flex flex-col items-center">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg" alt="HTML5" class="w-16 h-16 mb-4 group-hover:scale-110 transition-transform duration-300" />
                    <h3 class="text-lg font-semibold text-white">HTML5</h3>
                </div>
            </div>

            <!-- CSS -->
            <div class="bg-card p-6 rounded-lg shadow-xl group hover:bg-white/10 transition-all duration-300">
                <div class="flex flex-col items-center">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg" alt="CSS3" class="w-16 h-16 mb-4 group-hover:scale-110 transition-transform duration-300" />
                    <h3 class="text-lg font-semibold text-white">CSS3</h3>
                </div>
            </div>

            <!-- JavaScript -->
            <div class="bg-card p-6 rounded-lg shadow-xl group hover:bg-white/10 transition-all duration-300">
                <div class="flex flex-col items-center">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" alt="JavaScript" class="w-16 h-16 mb-4 group-hover:scale-110 transition-transform duration-300" />
                    <h3 class="text-lg font-semibold text-white">JavaScript</h3>
                </div>
            </div>

            <!-- React -->
            <div class="bg-card p-6 rounded-lg shadow-xl group hover:bg-white/10 transition-all duration-300">
                <div class="flex flex-col items-center">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg" alt="React" class="w-16 h-16 mb-4 group-hover:scale-110 transition-transform duration-300" />
                    <h3 class="text-lg font-semibold text-white">React</h3>
                </div>
            </div>

            <!-- Laravel -->
            <div class="bg-card p-6 rounded-lg shadow-xl group hover:bg-white/10 transition-all duration-300">
                <div class="flex flex-col items-center">
                    <svg class="w-16 h-16 mb-4 group-hover:scale-110 transition-transform duration-300" viewBox="0 0 24 24" fill="#FF2D20">
                        <path d="M23.642 5.43a.364.364 0 01.014.1v5.149c0 .135-.073.26-.189.326l-4.323 2.49v4.934a.378.378 0 01-.188.326L9.93 23.949a.316.316 0 01-.066.027c-.008.002-.016.008-.024.01a.348.348 0 01-.192 0c-.011-.002-.02-.008-.03-.012-.02-.008-.042-.014-.062-.025L.533 18.755a.376.376 0 01-.189-.326V2.974c0-.033.005-.066.014-.098.003-.012.01-.02.014-.032a.369.369 0 01.023-.058c.004-.013.015-.022.023-.033l.033-.045c.012-.01.025-.018.037-.027.014-.012.027-.024.041-.034H.53L5.043.05a.375.375 0 01.375 0L9.93 2.647h.002c.015.01.027.021.04.033l.038.027c.013.014.02.03.033.045.008.011.02.021.025.033.01.019.015.039.024.058.003.011.01.021.013.032.01.031.014.064.014.098v9.652l3.76-2.164V5.527c0-.033.004-.066.013-.098.003-.01.01-.02.013-.032a.487.487 0 01.024-.059c.007-.012.018-.02.025-.033.012-.015.021-.031.033-.045.012-.01.025-.018.037-.027.014-.012.027-.024.041-.034h.001l4.513-2.598a.375.375 0 01.375 0l4.513 2.598c.015.01.027.021.04.033.013.01.026.018.038.027.012.014.02.03.033.045.008.011.018.021.024.033.01.019.016.039.024.059.004.01.01.021.013.032a.364.364 0 01.014.098v-.001zm-.74 5.032V6.179l-1.578.908-2.182 1.256v4.283l3.76-2.164zm-4.511 7.75v-4.287l-2.146 1.225-6.127 3.498v4.326l8.273-4.762zM1.095 3.624v14.588l8.273 4.762v-4.326l-4.322-2.445-.002-.003h-.002c-.014-.01-.025-.021-.039-.032-.01-.012-.024-.02-.035-.033l-.001-.002c-.011-.013-.019-.027-.03-.04-.008-.014-.019-.027-.025-.041-.001-.004-.005-.006-.006-.01-.009-.017-.014-.035-.02-.053-.003-.01-.009-.018-.012-.028a.366.366 0 01-.014-.099V6.564l-2.18-1.256-1.586-.911zm8.273-2.483L5.80 2.892l4.325 2.492 4.326-2.492L10.89 1.14l-.522.301zm3.509 9.311L9.35 12.2V6.564l2.182-1.256 1.578-.908v4.283l-.001.002v1.767zm4.51-8.193L14.325 2.89 10 5.38l4.325 2.491 3.568-2.051 1.578-.908zm-4.886 4.284l-4.326 2.491v5.635l6.127-3.498 2.146-1.225V4.283l-3.947 2.26z"/>
                    </svg>
                    <h3 class="text-lg font-semibold text-white">Laravel</h3>
                </div>
            </div>

            <!-- PHP -->
            <div class="bg-card p-6 rounded-lg shadow-xl group hover:bg-white/10 transition-all duration-300">
                <div class="flex flex-col items-center">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" alt="PHP" class="w-16 h-16 mb-4 group-hover:scale-110 transition-transform duration-300" />
                    <h3 class="text-lg font-semibold text-white">PHP</h3>
                </div>
            </div>

            <!-- MySQL -->
            <div class="bg-card p-6 rounded-lg shadow-xl group hover:bg-white/10 transition-all duration-300">
                <div class="flex flex-col items-center">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg" alt="MySQL" class="w-16 h-16 mb-4 group-hover:scale-110 transition-transform duration-300" />
                    <h3 class="text-lg font-semibold text-white">MySQL</h3>
                </div>
            </div>

            <!-- Git -->
            <div class="bg-card p-6 rounded-lg shadow-xl group hover:bg-white/10 transition-all duration-300">
                <div class="flex flex-col items-center">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/git/git-original.svg" alt="Git" class="w-16 h-16 mb-4 group-hover:scale-110 transition-transform duration-300" />
                    <h3 class="text-lg font-semibold text-white">Git</h3>
                </div>
            </div>

            <!-- Tailwind CSS -->
            <div class="bg-card p-6 rounded-lg shadow-xl group hover:bg-white/10 transition-all duration-300">
                <div class="flex flex-col items-center">
                    <svg class="w-16 h-16 mb-4 group-hover:scale-110 transition-transform duration-300" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 13.7q1.4-5.6 7-5.6c5.6 0 6.3 4.2 9.1 4.9q2.8.7 4.9-2.1-1.4 5.6-7 5.6c-5.6 0-6.3-4.2-9.1-4.9q-2.8-.7-4.9 2.1Zm-7 8.4q1.4-5.6 7-5.6c5.6 0 6.3 4.2 9.1 4.9q2.8.7 4.9-2.1-1.4 5.6-7 5.6c-5.6 0-6.3-4.2-9.1-4.9q-2.8-.7-4.9 2.1Z" fill="#38BDF8"/>
                    </svg>
                    <h3 class="text-lg font-semibold text-white">Tailwind CSS</h3>
                </div>
            </div>

            <!-- Bootstrap -->
            <div class="bg-card p-6 rounded-lg shadow-xl group hover:bg-white/10 transition-all duration-300">
                <div class="flex flex-col items-center">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/bootstrap/bootstrap-original.svg" alt="Bootstrap" class="w-16 h-16 mb-4 group-hover:scale-110 transition-transform duration-300" />
                    <h3 class="text-lg font-semibold text-white">Bootstrap</h3>
                </div>
            </div>

            <!-- VS Code -->
            <div class="bg-card p-6 rounded-lg shadow-xl group hover:bg-white/10 transition-all duration-300">
                <div class="flex flex-col items-center">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/vscode/vscode-original.svg" alt="VS Code" class="w-16 h-16 mb-4 group-hover:scale-110 transition-transform duration-300" />
                    <h3 class="text-lg font-semibold text-white">VS Code</h3>
                </div>
            </div>

            <!-- GitHub -->
            <div class="bg-card p-6 rounded-lg shadow-xl group hover:bg-white/10 transition-all duration-300">
                <div class="flex flex-col items-center">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/github/github-original.svg" alt="GitHub" class="w-16 h-16 mb-4 group-hover:scale-110 transition-transform duration-300 invert" />
                    <h3 class="text-lg font-semibold text-white">GitHub</h3>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Projects Section -->
<section id="projects" class="py-16 bg-[#1b2124] relative overflow-hidden">
    <!-- Stars for Projects Section -->
    <div class="stars-container absolute inset-0 z-0">
        <div class="star-5 absolute top-2/3 -left-4 animate-star-5">
            <svg class="w-4 h-4 text-yellow-100" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
            </svg>
        </div>
        <div class="star-6 absolute top-3/4 -left-4 animate-star-6">
            <svg class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
            </svg>
        </div>
        <!-- Add new stars -->
        <div class="star-9 absolute top-2/5 -left-4 animate-star-9">
            <svg class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
            </svg>
        </div>
        <div class="star-10 absolute top-3/5 -left-4 animate-star-10">
            <svg class="w-3 h-3 text-yellow-50" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
            </svg>
        </div>
    </div>
    <div class="container mx-auto px-4 relative z-10">
        <h2 class="text-3xl font-bold text-center text-white mb-12">My Projects</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Project 1: E-Commerce Platform -->
            <div class="bg-card rounded-lg overflow-hidden shadow-xl group hover:bg-white/5 transition-all duration-300">
                <div class="relative h-48 bg-gradient-to-br from-purple-600 to-blue-500 overflow-hidden">
                    <img src="https://via.placeholder.com/600x400/1a1a1a/ffffff?text=E-Commerce" alt="E-Commerce Platform" class="w-full h-full object-cover opacity-75 group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-black/20"></div>
                </div>
                <div class="p-6">
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="px-2 py-1 bg-blue-500/10 text-blue-400 rounded-full text-xs">Laravel</span>
                        <span class="px-2 py-1 bg-blue-500/10 text-blue-400 rounded-full text-xs">Vue.js</span>
                        <span class="px-2 py-1 bg-blue-500/10 text-blue-400 rounded-full text-xs">Tailwind</span>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-2">Modern E-Commerce Platform</h3>
                    <p class="text-gray-300 mb-4">A full-featured e-commerce platform with real-time inventory, payment processing, and admin dashboard.</p>
                    <a href="#" class="text-yellow-300 hover:text-yellow-400 inline-flex items-center group">
                        View Project
                        <svg class="w-4 h-4 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Project 2: Task Management App -->
            <div class="bg-card rounded-lg overflow-hidden shadow-xl group hover:bg-white/5 transition-all duration-300">
                <div class="relative h-48 bg-gradient-to-br from-emerald-600 to-teal-500 overflow-hidden">
                    <img src="https://via.placeholder.com/600x400/1a1a1a/ffffff?text=Task+Manager" alt="Task Management App" class="w-full h-full object-cover opacity-75 group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-black/20"></div>
                </div>
                <div class="p-6">
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="px-2 py-1 bg-blue-500/10 text-blue-400 rounded-full text-xs">React</span>
                        <span class="px-2 py-1 bg-blue-500/10 text-blue-400 rounded-full text-xs">Node.js</span>
                        <span class="px-2 py-1 bg-blue-500/10 text-blue-400 rounded-full text-xs">MongoDB</span>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-2">Task Management App</h3>
                    <p class="text-gray-300 mb-4">Collaborative task management with real-time updates, file sharing, and team chat functionality.</p>
                    <a href="#" class="text-yellow-300 hover:text-yellow-400 inline-flex items-center group">
                        View Project
                        <svg class="w-4 h-4 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Project 3: Portfolio Website -->
            <div class="bg-card rounded-lg overflow-hidden shadow-xl group hover:bg-white/5 transition-all duration-300">
                <div class="relative h-48 bg-gradient-to-br from-rose-600 to-pink-500 overflow-hidden">
                    <img src="https://via.placeholder.com/600x400/1a1a1a/ffffff?text=Portfolio" alt="Portfolio Website" class="w-full h-full object-cover opacity-75 group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-black/20"></div>
                </div>
                <div class="p-6">
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="px-2 py-1 bg-blue-500/10 text-blue-400 rounded-full text-xs">Laravel</span>
                        <span class="px-2 py-1 bg-blue-500/10 text-blue-400 rounded-full text-xs">Tailwind</span>
                        <span class="px-2 py-1 bg-blue-500/10 text-blue-400 rounded-full text-xs">Alpine.js</span>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-2">Modern Portfolio Website</h3>
                    <p class="text-gray-300 mb-4">A responsive portfolio website with smooth animations, dark theme, and dynamic content management.</p>
                    <a href="#" class="text-yellow-300 hover:text-yellow-400 inline-flex items-center group">
                        View Project
                        <svg class="w-4 h-4 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Blog Section -->
<section id="blog" class="py-16 bg-[#1b2124] relative overflow-hidden">
    <!-- Stars for Blog Section -->
    <div class="stars-container absolute inset-0 z-0">
        <div class="star-7 absolute top-1/5 -left-4 animate-star-7">
            <svg class="w-3 h-3 text-yellow-200" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
            </svg>
        </div>
        <div class="star-8 absolute top-4/5 -left-4 animate-star-8">
            <svg class="w-4 h-4 text-yellow-100" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
            </svg>
        </div>
        <!-- Add new stars -->
        <div class="star-11 absolute top-4/5 -left-4 animate-star-11">
            <svg class="w-4 h-4 text-yellow-200" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
            </svg>
        </div>
        <div class="star-12 absolute top-5/6 -left-4 animate-star-12">
            <svg class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
            </svg>
        </div>
    </div>
    <div class="container mx-auto px-4 relative z-10">
        <h2 class="text-3xl font-bold text-center text-white mb-12">Latest Posts</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Blog Post 1 -->
            <div class="bg-card rounded-lg overflow-hidden shadow-xl group hover:bg-white/5 transition-all duration-300">
                <div class="relative h-48 bg-gradient-to-br from-blue-600 to-indigo-500 overflow-hidden">
                    <img src="https://via.placeholder.com/600x400/1a1a1a/ffffff?text=Web+Development" alt="Web Development" class="w-full h-full object-cover opacity-75 group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-black/20"></div>
                </div>
                <div class="p-6">
                    <div class="flex items-center text-sm text-gray-300 mb-2">
                        <span>June 15, 2024</span>
                        <span class="mx-2">•</span>
                        <span>5 min read</span>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-2">Modern Web Development with Laravel 11</h3>
                    <p class="text-gray-300 mb-4">Explore the latest features and improvements in Laravel 11, including new authentication systems and performance optimizations...</p>
                    <a href="#" class="text-yellow-300 hover:text-yellow-400 inline-flex items-center group">
                        Read More
                        <svg class="w-4 h-4 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Blog Post 2 -->
            <div class="bg-card rounded-lg overflow-hidden shadow-xl group hover:bg-white/5 transition-all duration-300">
                <div class="relative h-48 bg-gradient-to-br from-green-600 to-emerald-500 overflow-hidden">
                    <img src="https://via.placeholder.com/600x400/1a1a1a/ffffff?text=React+Tips" alt="React Development" class="w-full h-full object-cover opacity-75 group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-black/20"></div>
                </div>
                <div class="p-6">
                    <div class="flex items-center text-sm text-gray-300 mb-2">
                        <span>June 10, 2024</span>
                        <span class="mx-2">•</span>
                        <span>4 min read</span>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-2">Advanced React Patterns for Better Code</h3>
                    <p class="text-gray-300 mb-4">Deep dive into React design patterns that will help you write more maintainable and scalable applications...</p>
                    <a href="#" class="text-yellow-300 hover:text-yellow-400 inline-flex items-center group">
                        Read More
                        <svg class="w-4 h-4 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Blog Post 3 -->
            <div class="bg-card rounded-lg overflow-hidden shadow-xl group hover:bg-white/5 transition-all duration-300">
                <div class="relative h-48 bg-gradient-to-br from-yellow-600 to-orange-500 overflow-hidden">
                    <img src="https://via.placeholder.com/600x400/1a1a1a/ffffff?text=UI+Design" alt="UI Design" class="w-full h-full object-cover opacity-75 group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-black/20"></div>
                </div>
                <div class="p-6">
                    <div class="flex items-center text-sm text-gray-300 mb-2">
                        <span>June 5, 2024</span>
                        <span class="mx-2">•</span>
                        <span>3 min read</span>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-2">Creating Beautiful UI with Tailwind CSS</h3>
                    <p class="text-gray-300 mb-4">Learn how to leverage Tailwind CSS to create stunning user interfaces with minimal effort and maximum flexibility...</p>
                    <a href="#" class="text-yellow-300 hover:text-yellow-400 inline-flex items-center group">
                        Read More
                        <svg class="w-4 h-4 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="text-center mt-8">
            <a href="#" class="inline-block bg-card hover:bg-card/20 text-white px-6 py-3 rounded-lg transition duration-300">
                View All Posts
            </a>
        </div>
    </div>
</section>

<!-- Resume Section -->
<section id="resume" class="py-16 bg-[#1b2124] relative overflow-hidden">
    <!-- Stars for Resume Section -->
    <div class="stars-container absolute inset-0 z-0">
        <div class="star-1 absolute top-1/6 -left-4 animate-star-1">
            <svg class="w-4 h-4 text-yellow-200" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
            </svg>
        </div>
        <div class="star-2 absolute top-1/4 -left-4 animate-star-2">
            <svg class="w-3 h-3 text-yellow-100" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
            </svg>
        </div>
        <!-- Add new stars -->
        <div class="star-9 absolute top-2/5 -left-4 animate-star-9">
            <svg class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
            </svg>
        </div>
        <div class="star-10 absolute top-3/5 -left-4 animate-star-10">
            <svg class="w-3 h-3 text-yellow-50" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
            </svg>
        </div>
    </div>
    <div class="container mx-auto px-4 relative z-10">
        <h2 class="text-3xl font-bold text-center text-white mb-12">My Resume</h2>
        <div class="max-w-3xl mx-auto">
            <div class="bg-card rounded-lg shadow-xl p-6 mb-8">
                <h3 class="text-xl font-semibold text-white mb-4">Education</h3>
                <div class="space-y-4">
                    <div class="border-l-4 border-yellow-300 pl-4">
                        <h4 class="text-lg font-medium text-white">Associate Degree in Informatics Management</h4>
                        <p class="text-gray-300">Sriwijaya State Polytechnic• 2021 - 2024</p>
                        <p class="text-gray-300">GPA: 3.59/4.0</p>
                    </div>
                </div>
            </div>

            <div class="bg-card rounded-lg shadow-xl p-6 mb-8">
                <h3 class="text-xl font-semibold text-white mb-4">Experience</h3>
                <div class="space-y-4">
                    <div class="border-l-4 border-yellow-300 pl-4">
                        <h4 class="text-lg font-medium text-white">Internship</h4>
                        <p class="text-gray-300">PT.Pupuk Sriwidjaja• 2023</p>
                        <ul class="list-disc list-inside text-gray-300 mt-2">
                            <li>Developed and maintained web applications</li>
                            <li>Implemented responsive designs</li>
                            <li>implemented cypress for automation testing</li>
                            <li>helped to data input using excel</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="text-center">
                <a href="{{ asset('documents/MSulthanHSresume.pdf') }}"
                   class="inline-flex items-center bg-card hover:bg-card/20 text-white px-6 py-3 rounded-lg transition duration-300"
                   target="_blank"
                   rel="noopener noreferrer">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                    Download Resume
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="py-16 bg-[#1b2124] relative overflow-hidden">
    <!-- Stars for Contact Section -->
    <div class="stars-container absolute inset-0 z-0">
        <div class="star-3 absolute top-1/3 -left-4 animate-star-3">
            <svg class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
            </svg>
        </div>
        <div class="star-4 absolute top-1/2 -left-4 animate-star-4">
            <svg class="w-3 h-3 text-yellow-200" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
            </svg>
        </div>
        <!-- Add new stars -->
        <div class="star-11 absolute top-4/5 -left-4 animate-star-11">
            <svg class="w-4 h-4 text-yellow-200" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
            </svg>
        </div>
        <div class="star-12 absolute top-5/6 -left-4 animate-star-12">
            <svg class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
            </svg>
        </div>
    </div>
    <div class="container mx-auto px-4 relative z-10">
        <h2 class="text-3xl font-bold text-center text-white mb-12">Get In Touch</h2>
        <div class="max-w-2xl mx-auto">
            <!-- Social Links Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-12">
            </div>

            <!-- Contact Form -->
            <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
                @csrf
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-200">Name</label>
                    <input type="text" id="name" name="name" class="mt-1 block w-full rounded-lg bg-white/10 border border-white/10 focus:border-pink-300 focus:bg-white/20 focus:ring-0 text-gray-900 placeholder-gray-400 px-4 py-2" placeholder="Your name" required>
                    @error('name')
                        <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-200">Email</label>
                    <input type="email" id="email" name="email" class="mt-1 block w-full rounded-lg bg-white/10 border border-white/10 focus:border-pink-300 focus:bg-white/20 focus:ring-0 text-gray-900 placeholder-gray-400 px-4 py-2" placeholder="your@email.com" required>
                    @error('email')
                        <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="message" class="block text-sm font-medium text-gray-200">Message</label>
                    <textarea id="message" name="message" rows="4" class="mt-1 block w-full rounded-lg bg-white/10 border border-white/10 focus:border-pink-300 focus:bg-white/20 focus:ring-0 text-gray-900 placeholder-gray-400 px-4 py-2" placeholder="Your message here..." required></textarea>
                    @error('message')
                        <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                @if(session('success'))
                    <div class="text-green-400 text-sm">
                        {{ session('success') }}
                    </div>
                @endif
                @if(session('error'))
                    <div class="text-red-400 text-sm">
                        {{ session('error') }}
                    </div>
                @endif
                <button type="submit" class="w-full bg-gradient-to-r from-pink-500 to-rose-500 hover:from-pink-600 hover:to-rose-600 text-white px-6 py-3 rounded-lg transition duration-300 shadow-lg hover:shadow-xl">
                    Send Message
                </button>
            </form>
        </div>
    </div>
</section>

<!-- Add custom styles for the animations -->
<style>
    @keyframes star-base {
        0% {
            transform: translateX(-100%) translateY(0) rotate(0deg);
            opacity: 0;
        }
        10% {
            opacity: 1;
        }
        90% {
            opacity: 1;
        }
        100% {
            transform: translateX(100vw) translateY(-50px) rotate(360deg);
            opacity: 0;
        }
    }

    @keyframes star-diagonal {
        0% {
            transform: translateX(-100%) translateY(-100%) rotate(0deg);
            opacity: 0;
        }
        10% {
            opacity: 1;
        }
        90% {
            opacity: 1;
        }
        100% {
            transform: translateX(100vw) translateY(100vh) rotate(360deg);
            opacity: 0;
        }
    }

    @keyframes star-reverse {
        0% {
            transform: translateX(100vw) translateY(0) rotate(0deg);
            opacity: 0;
        }
        10% {
            opacity: 1;
        }
        90% {
            opacity: 1;
        }
        100% {
            transform: translateX(-100%) translateY(-50px) rotate(-360deg);
            opacity: 0;
        }
    }

    .animate-star-1 { animation: star-base 15s linear infinite; }
    .animate-star-2 { animation: star-diagonal 12s linear infinite 1s; }
    .animate-star-3 { animation: star-reverse 18s linear infinite 2s; }
    .animate-star-4 { animation: star-base 14s linear infinite 3s; }
    .animate-star-5 { animation: star-diagonal 16s linear infinite 4s; }
    .animate-star-6 { animation: star-reverse 13s linear infinite 5s; }
    .animate-star-7 { animation: star-base 17s linear infinite 6s; }
    .animate-star-8 { animation: star-diagonal 15s linear infinite 7s; }
    .animate-star-9 { animation: star-reverse 19s linear infinite 8s; }
    .animate-star-10 { animation: star-base 16s linear infinite 9s; }
    .animate-star-11 { animation: star-diagonal 14s linear infinite 10s; }
    .animate-star-12 { animation: star-reverse 17s linear infinite 11s; }

    [class^="star-"] {
        filter: drop-shadow(0 0 3px rgba(255, 255, 255, 0.8));
        will-change: transform;
    }

    .stars-container {
        pointer-events: none;
        z-index: 0;
    }

    /* Smooth section transitions */
    section {
        position: relative;
        overflow: hidden;
    }

    section::after {
        content: '';
        position: absolute;
        bottom: -1px;
        left: 0;
        right: 0;
        height: 1px;
        background: transparent;
    }

    /* Card backgrounds */
    .bg-card {
        background-color: rgba(255, 255, 255, 0.03);
        backdrop-filter: blur(10px);
    }

    @keyframes fade-in-up {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fade-in {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }

    .animate-fade-in-up {
        animation: fade-in-up 1s ease-out forwards;
    }

    .animate-fade-in {
        animation: fade-in 1s ease-out forwards;
    }

    /* Ensure content stays above stars */
    .container {
        z-index: 10;
    }

    /* Ensure navbar stays on top */
    nav {
        z-index: 50;
    }
</style>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Get all anchor links
        const links = document.querySelectorAll('a[href^="#"]');

        // Add click event listener to each link
        links.forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();

                // Get the target section
                const targetId = this.getAttribute('href');
                const targetSection = document.querySelector(targetId);

                if (targetSection) {
                    // Calculate the offset for the navbar height
                    const navbarHeight = document.querySelector('nav').offsetHeight;
                    const targetPosition = targetSection.getBoundingClientRect().top + window.pageYOffset - navbarHeight;

                    // Smooth scroll to the target section with easing
                    const startPosition = window.pageYOffset;
                    const distance = targetPosition - startPosition;
                    const duration = 1000; // Duration in milliseconds
                    let start = null;

                    function animation(currentTime) {
                        if (start === null) start = currentTime;
                        const timeElapsed = currentTime - start;
                        const progress = Math.min(timeElapsed / duration, 1);

                        // Easing function (easeInOutCubic)
                        const ease = progress < 0.5
                            ? 4 * progress * progress * progress
                            : 1 - Math.pow(-2 * progress + 2, 3) / 2;

                        window.scrollTo(0, startPosition + (distance * ease));

                        if (timeElapsed < duration) {
                            requestAnimationFrame(animation);
                        }
                    }

                    requestAnimationFrame(animation);
                }
            });
        });
    });
</script>
@endpush

