<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mensagem;

class MensagemController extends Controller{

    public function index(Request $request) {
        return response()->json(Mensagem::all());
    }

    public function get(Request $request, $id) {
        return response()->json(Mensagem::findById($id));
    }

    public function indexByQueue(Request $request, $fila) {
        return response()->json(Mensagem::where("fila", $fila)->get(), 200);
    }

    public function save(Request $request, $fila) {
        $mensagem = new Mensagem();

        $mensagem->texto = $request->getContent();
        $mensagem->fila = $fila;

        $mensagem->save();

        return response()->json(["resultado" => true]);
    }

    public function delete(Request $request, $id) {
        $mensagem = Mensagem::findById($id);
        if (!$mensagem) {
            return response()->json(["resultado" => false], 404);
        }
        
        $mensagem->delete();

        return response()->json(["resultado" => true]);
    }

}