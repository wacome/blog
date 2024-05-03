<div>
    <h1>Create Article</h1>

    <form method="POST" action="{{ route('articles.store') }}">
        @csrf
        <label for="title">Title:</label>
        <input type="text" id="title" name="title"><br><br>
        <label for="content">Content:</label>
        <textarea id="content" name="content"></textarea><br><br>
        <input type="submit" value="Create">
    </form>
</div>
