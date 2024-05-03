<div>
    <h1>Create Tag</h1>

    <form method="POST" action="{{ route('tags.store') }}">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br><br>
        <input type="submit" value="Create">
    </form>
</div>
