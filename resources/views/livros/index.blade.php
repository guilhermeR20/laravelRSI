@if (session('message'))
    <p> {{ session('message') }}</p>
@endif
<h1> Comentarios</h1>
<a href="{{ route('livros.create') }}">ADD</a>

@foreach($livros as $livro)
    <p><b>{{$livro->title}}</b><p>
    <p>{{$livro->content}}<p>
    <a href="{{ route('livros.show',$livro->id) }}"> visualizar </a>
    <a href="{{ route('livros.edit',$livro->id) }}"> alterar </a>

  
    <form action="{{ route('livros.destroy', $livro->id) }}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="_method" value="DELETE">
        <button type="submit">Deletar</button>
    </form>

    <br>
    --------------------------------------------------------------
@endforeach