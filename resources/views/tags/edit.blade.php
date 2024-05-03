<div>
    <h1>Edit Tag</h1>

    <form method="POST" action="{{ route('tags.update', $tag) }}">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ $tag->name }}"><br><br>
        <input type="submit" value="Update">
    </form>
</div>
