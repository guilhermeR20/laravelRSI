<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use Illuminate\Http\Request;

class LivroController extends Controller
{
    public function index(){
        $livros = Livro::orderby('title', 'DESC')->paginate(1);
        return view('livros.index', compact('livros'));
    }

    public function create(){
        return view('livros.create');
    }

    public function store(Request $request){
        $livro = Livro::create($request->all());
        return redirect()->route('livros.index');
    }

    public function show($id){
        $livro = Livro::find($id);
        if(!$livro){
            return redirect()->route('livros.index');
        }
        return view('livros.show', compact('livro'));
    }

    public function destroy($id){
        $livro = Livro::find($id);
        $livro->delete();
        return redirect()->route('livros.index');
    }

    public function edit($id){
        $livro = Livro::find($id);
        if(!$livro){
            return redirect()->route('livros.index');
        }
        return view('livros.edit', compact('livro'));
    }

    public function update(Request $request, $id){
        $livro = Livro::find($id);
        if(!$livro){
            return redirect()->back();
        }
        $livro->update($request->all());
        return redirect()
            ->route('livros.index')
            ->with('message', 'Alterado com sucesso')
        ;
    }

}
