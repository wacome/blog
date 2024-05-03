<div>
    <h1>Create Category</h1>

    <form method="POST" action="{{ route('categories.store') }}">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br><br>
        <input type="submit" value="Create">
    </form>
</div>
