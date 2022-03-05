<h1>Livro detalhado</h1>
<p>titulo: {{ $livro->titulo }}</p>
<p>conteudo: {{ $livro->autor }}</p>
<p>criacao: {{ $livro->created_at }}</p>
<p>alteracao: {{ $livro->updated_at }}</p>
<p>data: {{ $livro->dataProducao}}</p>

<form action="{{ route('livros.destroy', $livro->id) }}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="_method" value="DELETE">
        <button type="submit">Deletar</button>
    </form>