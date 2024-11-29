<form action="{{ url('artist') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="name" required>
    <textarea name="biografy" placeholder="biografy" required></textarea>
    <textarea name="birth_year" placeholder="birth_year" required></textarea>
    <button type="submit">Create Artist</button>
</form>