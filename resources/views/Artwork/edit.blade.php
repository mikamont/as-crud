@section('content')
<form action="{{ url('artwork/' . $artwork->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div >
        <label for="text">title</label>
        <input type="text" name="title" id="title" placeholder="title" value="{{ $artwork->title }}" required >
        <input type="text" name="creation_year" id="creation_year" placeholder="creation_year" value="{{ $artwork->creation_year }}" required >
        <input type="text" name="category" id="category" placeholder="category" value="{{ $artwork->category }}" required >
    </div>
    <button type="submit" >Editar artwork</button>
</form>
@endsection