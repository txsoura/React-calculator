<?php

namespace App\Http\Controllers;
use App\Pergunta;
use Illuminate\Http\Request;

class PerguntaController extends Controller
{
    public function ver (Request $request){
        // $i = $request->input('a');
        $pergunta = Pergunta::get();
        
        return view('pergunta')->with(compact('pergunta'));
    }
}
