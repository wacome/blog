<div>
    <h1>Edit Article</h1>

    <form method="POST" action="{{ route('articles.update', $article) }}">
        @csrf
        @method('PUT')
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" value="{{ $article->title }}"><br><br>
        <label for="content">Content:</label>
        <textarea id="content" name="content">{{ $article->content }}</textarea><br><br>
        <input type="submit" value="Update">
    </form>
</div>
