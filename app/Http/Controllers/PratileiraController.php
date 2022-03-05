<?php

namespace App\Http\Controllers;

use App\Models\Pratileira;
use Illuminate\Http\Request;

class PratileiraController extends Controller
{
    public function index(){
        $pratileiras = Pratileira::orderby('title', 'DESC')->paginate(1);
        return view('admin.pratileiras.index', compact('pratileiras'));
    }

    public function create(){
        return view('admin.pratileiras.create');
    }

    public function store(Request $request){
        $pratileira = Pratileira::create($request->all());
        return redirect()->route('pratileiras.index');
    }

    public function show($id){
        $pratileira = Pratileira::find($id);
        if(!$pratileira){
            return redirect()->route('pratileiras.index');
        }
        return view('admin.pratileiras.show', compact('pratileira'));
    }

    public function destroy($id){
        $pratileira = Pratileira::find($id);
        $pratileira->delete();
        return redirect()->route('pratileiras.index');
    }

    public function edit($id){
        $pratileira = Pratileira::find($id);
        if(!$pratileira){
            return redirect()->route('pratileiras.index');
        }
        return view('admin.pratileiras.edit', compact('pratileira'));
    }

    public function update(Request $request, $id){
        $pratileira = Pratileira::find($id);
        if(!$pratileira){
            return redirect()->back();
        }
        $pratileira->update($request->all());
        return redirect()
            ->route('pratileiras.index')
            ->with('message', 'Alterado com sucesso')
        ;
    }

}
