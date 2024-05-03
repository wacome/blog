<div>
    <h1>Archives</h1>

    <ul>
        @foreach($archives as $archive)
            <li>
                <a href="{{ route('archives.show', $archive) }}">{{ $archive->title }}</a>
            </li>
        @endforeach
    </ul>
</div>
