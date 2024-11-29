@foreach($artwork as $arts)
    <div>
        <h3>{{ $arts->title }}</h3>
        <p>{{ $arts->creation_year }}</p>
        <p>{{ $arts->category }}</p>
        <a href="{{ url('artwork/'.$arts->id.'/edit') }}">Edit</a>
        <form action="{{ url('artwork/'.$arts->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </div>
@endforeach