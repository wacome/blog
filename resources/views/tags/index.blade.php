<div>
    <h1>Tags</h1>

    <ul>
        @foreach($tags as $tag)
            <li>
                <a href="{{ route('tags.show', $tag) }}">{{ $tag->name }}</a>
            </li>
        @endforeach
    </ul>
</div>
