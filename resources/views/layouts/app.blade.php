<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <script src="https://kit.fontawesome.com/3a10a27289.js" crossorigin="anonymous"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="module" src="https://cdn.jsdelivr.net/npm/ldrs/dist/auto/hatch.js"></script>
    <script>
        $(document).ready(function() {
            const video = $('#background-video')[0];
            video.play();
        });
    </script>
    @livewireStyles
</head>
<body class="bg-gray-100 w-full">
<div x-data="{ loading: true }">
    <div class="mx-auto w-full h-screen">
        {{-- @include('layouts.nav') --}}
        <div class="h-full w-full relative">
            <video id="background-video" loop autoplay muted class="absolute top-0 left-0 w-[100vw] h-full object-cover z-[-1]">
                <source src="https://t2233.oss-cn-shanghai.aliyuncs.com/background1.mp4" type="video/mp4">
            </video>
            <div class="relative h-screen">
                @yield('content')
                <div class="custom-height flex flex-col justify-center items-center">
                    <div>
                        <div x-show="loading" class="fixed top-0 left-0 w-full h-full flex justify-center items-center bg-white z-30">
                            <l-hatch size="42" stroke="4" speed="3.5" color="black"></l-hatch>
                        </div>
                        <div class="main-content">
                            <div class="card rounded-2xl p-12 flex items-center space-x-6 max-w-4xl">
                                <div class="flex flex-col space-y-4">
                                    <h1 class="text-5xl">Hello! ✨</h1>
                                    <h2 class="text-3xl text-blue-600 font-bold">I'm
                                        <span class="text-blue-400">Toycon</span>
                                    </h2>
                                    <p class="text-2xl">A sophomore student who is learning computer science.</p>
                                    <p class="text-xl">Living in NanJing</p>
                                    <div class="flex space-x-4">
                                        <a class="flex flex-row justify-center items-center" href="https://github.com/wacome" target="_blank" aria-label="icon">
                                            <i class="fa-brands fa-github text-3xl"></i>
                                        </a>
                                        <a class="mr-3 flex flex-row justify-center items-center" href="https://x.com/WacomTao" target="_blank" aria-label="icon">
                                            <i class="fa-brands fa-square-x-twitter text-3xl"></i>
                                        </a>
                                        <a class="mr-3 flex flex-row justify-center items-center" href="https://space.bilibili.com/318921680" target="_blank" aria-label="icon">
                                            <i class="fa-brands fa-bilibili text-3xl"></i>
                                        </a>
                                        <a class="mr-3 flex flex-row justify-center items-center" href="dev@toycon.cn" target="_blank" aria-label="icon">
                                            <i class="fa-solid fa-envelope text-3xl"></i>
                                        </a>
                                    </div>
                                </div>
                                <img src="{{ asset('favicon.ico') }}" alt="profile" class="rounded-full w-64 h-64">
                            </div>
                        </div>
                    </div>
                </div>
                <livewire:articles-list />
            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const loadingElement = document.querySelector('[x-show="loading"]');
        let opacity = 1;

        const fadeOutInterval = setInterval(function () {
            if (opacity <= 0) {
                clearInterval(fadeOutInterval);
                loadingElement.style.display = 'none';
            }

            loadingElement.style.opacity = opacity;
            opacity -= 0.4;
        }, 100);
    });
</script>
@livewireScripts
</body>
</html>
