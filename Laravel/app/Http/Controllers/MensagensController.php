<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Mensagens;
use Illuminate\Http\Request;

class MensagensController extends Controller
{
    public function index()
    {
        return response()->json(Mensagens::all());
    }

    public function store(Request $request)
    {
        $mensagem = Mensagens::create($request->only(['id','nome','email','comentario']));
        return response()->json($mensagem, 201);
    }

    public function show($id)
    {
        $mensagem = Mensagens::find($id);
        if (!$mensagem) return response()->json(['message'=>'Mensagem não encontrada'], 404);
        return response()->json($mensagem);
    }

    public function update(Request $request, $id)
    {
        $mensagem = Mensagens::find($id);
        if (!$mensagem) return response()->json(['message'=>'Mensagem não encontrada'], 404);
        $mensagem->update($request->only(['nome','email','comentario']));
        return response()->json($mensagem);
    }

    public function destroy($id)
    {
        $mensagem = Mensagens::find($id);
        if (!$mensagem) return response()->json(['message'=>'Mensagem não encontrada'], 404);
        $mensagem->delete();
        return response()->json(['message'=>'Mensagem deletada']);
    }
}
