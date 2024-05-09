<nav aria-label="Pagination" class="pagination-nav">
    <div class="flex justify-center">
        <ul class="flex items-center space-x-4 bg-white rounded-full shadow px-6 py-3">
            @if ($paginator->onFirstPage())
                <li class="text-gray-400 cursor-not-allowed">
                    <span class="text-xl px-4 py-3">&laquo;</span>
                </li>
            @else
                <li>
                    <a href="{{ $paginator->previousPageUrl() }}" data-scroll-to-video-bottom rel="prev" class="text-xl text-black hover:bg-gray-200 px-4 py-3 rounded-full">&laquo;</a>
                </li>
            @endif

            @foreach ($elements as $element)
                @if (is_string($element))
                    <li class="text-black cursor-not-allowed">
                        <span class="text-lg px-3 py-3">{{ $element }}</span>
                    </li>
                @endif

                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="active text-black">
                                <span class="text-lg px-4 py-3 rounded-full bg-blue-300 shadow">{{ $page }}</span>
                            </li>
                        @else
                            <li>
                                <a href="{{ $url }}" data-scroll-to-video-bottom class="text-lg text-black hover:bg-blue-100 px-4 py-3 rounded-full">{{ $page }}</a>
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            @if ($paginator->hasMorePages())
                <li>
                    <a href="{{ $paginator->nextPageUrl() }}" data-scroll-to-video-bottom rel="next" class="text-xl text-black hover:bg-gray-200 px-4 py-3 rounded-full">&raquo;</a>
                </li>
            @else
                <li class="text-gray-400 cursor-not-allowed">
                    <span class="text-xl px-4 py-3">&raquo;</span>
                </li>
            @endif
        </ul>
    </div>
</nav>
<script>
    $(document).ready(function () {
        // Add event listener to pagination links
        $('a[data-scroll-to-video-bottom]').on('click', function (e) {
            e.preventDefault();
            const newPageUrl = $(this).attr('href');
            window.location.href = newPageUrl;
            localStorage.setItem('scrollToVideoBottom', true);
        });

        // Function to scroll to video bottom
        function scrollToVideoBottom() {
            const video = $('#background-video');
            const paginationNav = $('.pagination-nav'); // assume this is the class of the pagination navigation bar
            if (video.length && paginationNav.length) {
                const videoBottom = video.offset().top + video.height();
                $('html, body').animate({
                    scrollTop: videoBottom
                }, 1, function() {
                    // add animate class to article cards when scrolling is complete
                    $('.article-card').addClass('show');
                });
            }
        }

        // Check if page was reloaded and scroll to video bottom if necessary
        if (localStorage.getItem('scrollToVideoBottom') === 'true') {
            scrollToVideoBottom();
            localStorage.removeItem('scrollToVideoBottom');
        }
    });
</script>
