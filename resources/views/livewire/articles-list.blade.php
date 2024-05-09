<div>
    @foreach ($articles as $article)
        <a href="{{ route('articles.show', $article) }}" class="block max-w-4xl w-full my-14 mx-auto hover:scale-105 transition duration-300 ease-in-out article-card" id="card-{{ $loop->index }}">
            <div class="h-64 bg-cover bg-center rounded-lg shadow-lg" style="background-image: url('https://t2233.oss-cn-shanghai.aliyuncs.com/73661485_p0.jpg');">
                <div class="p-8 text-white">
                    <h2 class="text-3xl font-bold mb-2">{{ $article->title }}</h2>
                    <p class="text-xl mb-3">{{ $article->updated_at->format('Y年m月d日') }} ·
                        @foreach($article->tags as $tag)
                            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">{{ $tag->name }}</span>
                        @endforeach
                    </p>
                </div>
            </div>
        </a>
    @endforeach
        {{ $articles->links('livewire.custom-pagination') }}
</div>
<script>
    $(document).ready(function() {
        const cards = $('.article-card');

        $(window).scroll(function() {
            cards.each(function(index, card) {
                const cardTop = $(card).offset().top;
                const cardHeight = $(card).height();
                const scrollTop = $(window).scrollTop();
                const windowHeight = $(window).height();

                if (scrollTop + windowHeight > cardTop + cardHeight / 2) {
                    $(card).addClass('show');
                }
            });
        });

        // Store the scroll position when leaving the page
        $(window).on('beforeunload', function() {
            localStorage.setItem('scrollPosition', $(window).scrollTop());
        });

        // Restore the scroll position when coming back to the page
        const storedScrollPosition = localStorage.getItem('scrollPosition');
        if (storedScrollPosition) {
            $(window).scrollTop(storedScrollPosition);
            $(window).trigger('scroll'); // Trigger the scroll event to display the cards
        }
    });
    $(document).on('livewire:load', function () {
        console.log('Livewire load event triggered');

        Livewire.on('scrollToTop', function () {
            console.log('Scroll to top event triggered');

            const cardListTop = $('#card-list-top');
            console.log('Card list top element:', cardListTop);

            if (cardListTop.length > 0) {
                console.log('Scrolling to top...');
                $('html, body').animate({ scrollTop: cardListTop.offset().top }, 'slow');
            } else {
                console.log('Card list top element not found!');
            }
        });
    });
</script>
