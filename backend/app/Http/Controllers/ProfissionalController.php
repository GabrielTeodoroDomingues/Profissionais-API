<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profissional;
use App\Tecnologia;

class ProfissionalController extends Controller
{
    public function listarProfissionais(Request $request){
        $listaProfissionais = Profissional::all();

        return response()->json($listaProfissionais);
    }
    public function criarProfissional(Request $request){
        $tecnologia_ID = $request->tecnologia;
        $newProfissional = new Profissional();
        $newProfissional->nome = $request->nome;
        $newProfissional->github = $request->github;
        $result = $newProfissional->save();
        $tecnologia = Tecnologia::find($tecnologia_ID);
        if($tecnologia){
            $tecnologia->profissional()->attach($newProfissional->id);
        }else {
            return response()->json(['error'=>'O id da tecnologia não existe']);
        }
        return response()->json($newProfissional);
    }
}
