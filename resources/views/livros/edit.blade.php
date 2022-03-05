<h1>Alterar Livro {{ $livro->titulo }}</h1>

@if ($errors->any())
    <ul>
    @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
    </ul>
@endif

<form action="{{ route('livros.update', $livro->id) }}" method="post">
    @method("put")
    @csrf
    <input type="text" name="autor" id="autor" value="{{ old('autor') }}">
    <input type= "text" name="titulo" id="titulo" value="{{ old('titulo') }}">
    <input type= "date" name="dataProducao" id="dataProducao" value="{{ old('dataProducao')}}">
    <button type="submit">Enviar</button>
</form>