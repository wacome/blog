<div>
    <h1>Edit Archive</h1>

    <form method="POST" action="{{ route('archives.update', $archive) }}">
        @csrf
        @method('PUT')
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" value="{{ $archive->title }}"><br><br>
        <label for="content">Content:</label>
        <textarea id="content" name="content">{{ $archive->content }}</textarea><br><br>
        <input type="submit" value="Update">
    </form>
</div>
