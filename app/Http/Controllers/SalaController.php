<?php

namespace App\Http\Controllers;

use App\Models\Sala;
use Illuminate\Http\Request;

class SalaController extends Controller
{
    public function index(){
        $salas = Sala::orderby('title', 'DESC')->paginate(1);
        return view('admin.salas.index', compact('salas'));
    }

    public function create(){
        return view('admin.salas.create');
    }

    public function store(Request $request){
        $sala = Sala::create($request->all());
        return redirect()->route('salas.index');
    }

    public function show($id){
        $sala = Sala::find($id);
        if(!$sala){
            return redirect()->route('salas.index');
        }
        return view('admin.salas.show', compact('sala'));
    }

    public function destroy($id){
        $sala = Sala::find($id);
        $sala->delete();
        return redirect()->route('salas.index');
    }

    public function edit($id){
        $sala = Sala::find($id);
        if(!$sala){
            return redirect()->route('salas.index');
        }
        return view('admin.salas.edit', compact('sala'));
    }

    public function update(Request $request, $id){
        $sala = Sala::find($id);
        if(!$sala){
            return redirect()->back();
        }
        $sala->update($request->all());
        return redirect()
            ->route('salas.index')
            ->with('message', 'Alterado com sucesso')
        ;
    }

}
