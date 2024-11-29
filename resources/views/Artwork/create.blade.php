<form action="{{ url('artwork') }}" method="POST">
    @csrf
    <input type="text" name="title" placeholder="title" required>
    <textarea name="creation_year" placeholder="creation_year" required></textarea>
    <textarea name="category" placeholder="category" required></textarea>
    <button type="submit">Create artwork</button>
</form>