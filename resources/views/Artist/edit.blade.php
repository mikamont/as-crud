@section('content')
<form action="{{ url('artist/' . $artist->id) }}" method="POST" class="max-w-md mx-auto p-6 bg-white rounded-lg shadow-md">
    @csrf
    @method('PUT')
    <h2 class="text-2xl font-bold mb-4 text-center">Editar Artist</h2>
    <div class="mb-4">
        <label for="artist">artist</label>
        <input type="text" name="name" id="name" placeholder="name" value="{{ $artist->name }}" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-500 focus:border-blue-500 p-2">
    </div>
    <div class="mb-4">
        <label for="biografy">biografy</label>
        <input type="text" name="biografy " id="biografy" placeholder="biografy " value="{{ $artist->biografy }}" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-500 focus:border-blue-500 p-2">
    </div>
    <div class="mb-4">
        <label for="birth_year">birth_year</label>
        <input type="text" name="birth_year" id="birt_year" placeholder="birth_year" value="{{ $artist->birth_year }}" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-500 focus:border-blue-500 p-2">
    </div>
    <button type="submit" class="w-full bg-blue-500 text-white font-semibold py-2 rounded-md hover:bg-blue-600">Atualizar artit</button>
</form>
@endsection
