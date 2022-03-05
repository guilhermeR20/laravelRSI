<h1>Inserir Livro </h1>

@if ($errors->any())
    <ul>
    @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
    </ul>
@endif

<form action="{{ route('livros.store')}}" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="text" name="autor" id="autor" value="{{ old('autor') }}">
    <input type= "text" name="titulo" id="titulo" value="{{ old('titulo') }}">
    <input type= "date" name="dataProducao" id="dataProducao" value="{{ old('dataProducao')}}">
    <input type= "text">Enviar</button> 
</form>