<div class="fixed top-0 left-0 h-screen p-4 justify-center grid" >
    <div class="flex justify-center items-center p-2 mr-4 bg-[#33ccff] text-white rounded-full h-12 w-12 cursor-pointer" >
        <a class="text-2xl"> +</a >
    </div >
    <ul class="list-none" >
        <li class="mb-8" >
            <a ><span class="icon-[gravity-ui--house] text-3xl cursor-pointer hover:bg-blue-400 {{ $currentPage === 'home' ? 'text-blue-600' : 'text-gray-500' }}" ></span ></a >
        </li >
        <li class="mb-8" >
            <a ><span class="icon-[gravity-ui--book] text-3xl cursor-pointer hover:bg-blue-400 {{ $currentPage === 'book' ? 'text-blue-600' : 'text-gray-500' }}" ></span ></a >
        </li >
        <li class="mb-8" >
            <a><span class="icon-[gravity-ui--comment] text-3xl cursor-pointer hover:bg-blue-400 {{ $currentPage === 'comment' ? 'text-blue-600' : 'text-gray-500' }}" ></span ></a>
        </li >
    </ul >
</div >
