<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Veiculo;
use Illuminate\Http\Request;

class VeiculoController extends Controller
{
    public function index()
    {
        $clientes = Cliente::all();
        // Busca todos os veículos
        $veiculos = Veiculo::all();

        // Retorna a view 'veiculos.index' com a variável $veiculos
        return view('veiculos.index', compact('veiculos', 'clientes'));
    }

    public function create()
    {
        // Busca todos os clientes do banco de dados
        $clientes = Cliente::all();

        // Passa a lista de clientes para a view de criação de veículos
        return view('veiculos.create', compact("clientes"));
    }


    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'modelo' => 'required|string|max:255',
            'marca' => 'required|string|max:255',
            'placa' => 'required|string|max:10|unique:veiculos,placa',
            'ano' => 'required|integer|min:1900|max:' . date('Y'),
            'cliente_id' => 'required|exists:clientes,id', // Valida se o cliente existe
        ]);

        Veiculo::create($validatedData);

        // Redireciona o usuário para a página de listagem de veículos com uma mensagem de sucesso
        return redirect()->route('veiculos.index')->with('success', 'Veículo cadastrado com sucesso!');
    }


    public function show(string $id)
    {
        $veiculo = Veiculo::find($id);

        if (!$veiculo) {
            return response()->json(['error' => 'Veículo não encontrado'], 404);
        }

        return response()->json($veiculo);
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'modelo' => 'required|string|max:255',
            'marca' => 'required|string|max:255',
            'placa' => 'required|string|max:10|unique:veiculos,placa,' . $id,
            'ano' => 'required|integer|min:1900|max:' . date('Y'),
            'cliente_id' => 'required|exists:clientes,id',
        ]);

        $veiculo = Veiculo::find($id);

        if (!$veiculo) {
            return response()->json(['error' => 'Veículo não encontrado'], 404);
        }

        $veiculo->update($request->all());

        return response()->json($veiculo);
    }

    public function destroy(string $id)
    {
        $veiculo = Veiculo::find($id);

        if (!$veiculo) {
            return response()->json(['error' => 'Veículo não encontrado'], 404);
        }

        $veiculo->delete();

        return response()->json(null, 204);
    }
}
