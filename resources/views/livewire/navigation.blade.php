<div x-data="{ isOpen: false }" @mouseover="isOpen = true" @mouseleave="isOpen = false" class="relative inline-block text-left">
    <button id="dropdownButton" @click="isOpen = !isOpen" class="bg-white px-4 py-2 rounded-full shadow-md text-gray-700 font-semibold" x-ref="button">
        @if($url)
            <a href="{{ $url }}" class="text-gray-700 hover:text-gray-900">
                {{ $label }}
            </a>
        @else
            {{ $label }}
        @endif
    </button>
    <div x-show="isOpen" class="absolute left-1/2 transform -translate-x-1/2 bg-white mt-1 rounded shadow-lg border border-gray-100 w-32"
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0 transform scale-90"
         x-transition:enter-end="opacity-100 transform scale-100"
         x-transition:leave="transition ease-in duration-300"
         x-transition:leave-start="opacity-100 transform scale-100"
         x-transition:leave-end="opacity-0 transform scale-90" x-cloak>
        @foreach ($content as $item)
            @if(isset($item['title']) && isset($item['link']))
            <a href="{{ $item['link'] }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 text-center">{{ $item['title'] }}</a>
            @endif
        @endforeach
    </div>
</div>
<script>
    $(document).ready(function() {
        const key = $('#key').val();
        const storageKey = `dropdown-${key}`;
        const storedState = localStorage.getItem(storageKey);

        if (storedState) {
            $(`[x-data]`).attr('x-data', `isOpen: ${storedState}`);
            console.log(`Updated x-data attribute: ${$(`[x-data]`).attr('x-data')}`);
        }

        $(`#dropdownButton-${key}`).on('click', function() {
            const isOpen = $(`[x-data]`).attr('x-data').isOpen;
            console.log(`Current isOpen value: ${isOpen}`);
            localStorage.setItem(storageKey, isOpen);
            console.log(`Stored isOpen value: ${localStorage.getItem(storageKey)}`);
        });
    });
</script>
