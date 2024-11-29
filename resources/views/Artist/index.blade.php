@foreach($artist as $art)
    <div>
        <h3>{{ $art->name }}</h3>
        <p>{{ $art->biografy }}</p>
        <p>{{ $art->birth_year }}</p>
        <a href="{{ url('artist/'.$art->id.'/edit') }}">Edit</a>
        <form action="{{ url('artist/'.$art->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </div>
@endforeach