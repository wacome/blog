@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="py-2 px-4 bg-white shadow-md rounded-lg z-10 nav w-full">
            <div class="flex items-center space-x-4 justify-center">
                @livewire('navigation', ['label' => '首页', 'content' => [
                ['title' => '自述', 'link' => '#'],
                ['title' => '此站点', 'link' => '#'],
                ['title' => '留言', 'link' => '#']
                ], 'key' => 'nav-1'])
                @livewire('navigation', [
                'label' => '文章',
                'content' => $categories->map(function ($category) {
                return [
                'title' => $category->name,
                'link' => $category->url,
                ];
                })->all(),
                'key' => 'nav-2'
                ])
                @livewire('navigation', ['label' => '归档',
                'content' => [],
                'key' => 'nav-3',
                'url' => route('archives.index')
                ])
                @livewire('navigation', ['label' => '一言',
                'content' => [],
                'key' => 'nav-4',
                'url' => '#'
                ])
                @livewire('navigation', ['label' => '友链',
                'content' => [],
                'key' => 'nav-5',
                'url' => '#'
                ])
            </div>
        </div>
    </div>
@endsection
