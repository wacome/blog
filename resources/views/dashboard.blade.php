<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 h-screen">
<div class="container mx-auto px-4 sm:px-8 flex h-screen">
    <div class="w-2">
        @livewire('sidebar-component', ['currentPage' => 'home'])
    </div>
    <div class="flex-1">
        <div class="py-8">
            <!-- Header -->
            <div class="flex justify-between">
                <h2 class="text-2xl font-semibold leading-tight">欢迎回来</h2>
            </div>

            <!-- Cards -->
            <div class="grid grid-cols-4 sm:grid-cols-2 lg:grid-cols-8 gap-4 mt-8">
                <div class="bg-white p-4 rounded-lg shadow flex">
                    <span class="icon-[gravity-ui--book] text-2xl mt-8"></span>
                    <div class="flex items-center ml-2 mr-4 w-14">
                        <div>
                            <p class="text-2xl text-gray-600">博文</p>
                            <p class="text-xl font-bold">{{ count(\App\Models\Article::all()) }}</p>
                        </div>
                    </div>
                    <a><span class="icon-[gravity-ui--gear] text-2xl mt-16 bg-blue-500 hover:bg-indigo-700 cursor-pointer"></span></a>
                </div>
                <div class="bg-white p-4 rounded-lg shadow flex">
                    <span class="icon-[gravity-ui--circles-4-square] text-2xl mt-8"></span>
                    <div class="flex items-center ml-2 mr-4 w-14">
                        <div>
                            <p class="text-2xl text-gray-600">分类</p>
                            <p class="text-xl font-bold">{{ count(\App\Models\Category::all()) }}</p>
                        </div>
                    </div>
                    <a><span class="icon-[gravity-ui--gear] text-2xl mt-16 bg-blue-500 hover:bg-indigo-700 cursor-pointer"></span></a>
                </div>
                <div class="bg-white p-4 rounded-lg shadow flex">
                    <span class="icon-[gravity-ui--tag] text-2xl mt-8"></span>
                    <div class="flex items-center ml-2 mr-4 w-14">
                        <div>
                            <p class="text-2xl text-gray-600">标签</p>
                            <p class="text-xl font-bold">{{ count(\App\Models\Tag::all()) }}</p>
                        </div>
                    </div>
                    <a><span class="icon-[gravity-ui--gear] text-2xl mt-16 bg-blue-500 hover:bg-indigo-700 cursor-pointer"></span></a>
                </div>
                <div class="bg-white p-4 rounded-lg shadow flex">
                    <span class="icon-[gravity-ui--comment] text-2xl mt-8"></span>
                    <div class="flex items-center ml-2 mr-4 w-14">
                        <div>
                            <p class="text-2xl text-gray-600">评论</p>
                            <p class="text-xl font-bold">{{ count(\App\Models\Comment::all()) }}</p>
                        </div>
                    </div>
                    <a><span class="icon-[gravity-ui--gear] text-2xl mt-16 bg-blue-500 hover:bg-indigo-700 cursor-pointer"></span></a>
                </div>
            </div>

            <div class="grid grid-cols-4 sm:grid-cols-2 lg:grid-cols-8 gap-4 mt-8">
                <div class="bg-white p-4 rounded-lg shadow flex">
                    <span class="icon-[gravity-ui--eye] text-2xl mt-4"></span>
                    <div class="flex items-center ml-2 w-24">
                        <div>
                            <p class="text-xl text-gray-600">今日访客</p>
                            <p class="text-xl font-bold">1234</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-4 rounded-lg shadow flex">
                    <span class="icon-[gravity-ui--clock] text-2xl mt-4"></span>
                    <div class="flex items-center ml-2 w-24">
                        <div>
                            <p class="text-current text-gray-600">当前在线访客</p>
                            <p class="text-xl font-bold">1234</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-4 rounded-lg shadow flex">
                    <span class="icon-[gravity-ui--circle-letter-t] text-2xl mt-4"></span>
                    <div class="flex items-center ml-2 w-24">
                        <div>
                            <p class="text-current text-gray-600">全站字符数</p>
                            <p class="text-xl font-bold">123456</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-4 rounded-lg shadow flex">
                    <span class="icon-[gravity-ui--book-open] text-2xl mt-4"></span>
                    <div class="flex items-center ml-2 w-24">
                        <div>
                            <p class="text-xl text-gray-600">总阅读量</p>
                            <p class="text-xl font-bold">123</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Graphs and charts -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-8">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="text-lg font-medium leading-tight">市场走势</h3>
                    <img src="https://placehold.co/600x300" alt="Market Trends">
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="text-lg font-medium leading-tight">投资分布</h3>
                    <img src="https://placehold.co/600x300" alt="Investment Distribution">
                </div>
            </div>

            <!-- More detailed sections could be added below -->
        </div>
    </div>
</div>
</body>
</html>
