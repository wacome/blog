<div>
    <h1>Edit Category</h1>

    <form method="POST" action="{{ route('categories.update', $category) }}">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ $category->name }}"><br><br>
        <input type="submit" value="Update">
    </form>
</div>
