<div>
    <h1>Articles</h1>

    <ul>
        @foreach($articles as $article)
            <li>
                <a href="{{ route('articles.show', $article) }}">{{ $article->title }}</a>
            </li>
        @endforeach
    </ul>
</div>
