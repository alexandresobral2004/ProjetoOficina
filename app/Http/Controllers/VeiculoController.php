<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Veiculo;
use Illuminate\Http\Request;

class VeiculoController extends Controller
{
    public function index()
    {
        $veiculos = Veiculo::with('cliente')->get();
        $clientes = Cliente::all();

        // Retorna a view 'veiculos.index' com a variável $veiculos
        return view('veiculos.index', compact('veiculos', 'clientes'));
    }

    public function create()
    {
        // Passa a lista de clientes para a view de criação de veículos
        return view('veiculos.create');
    }


    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'modelo' => 'required|string|max:255',
            'marca' => 'required|string|max:255',
            'placa' => 'required|string|size:7|unique:veiculos,placa', // Valida o tamanho da placa (padrão Mercosul)
            'chassi' => 'required|string|size:17|unique:veiculos,chassi', // Valida o tamanho do chassi
            'tipo_veiculo' => 'required|string', // Valida o tipo de veículo
            'cor' => 'required|string|max:50',
            'quilometragem' => 'required|integer|min:0', // Valida que a quilometragem seja um número inteiro positivo
            'ano_fabricacao' => 'required|integer|min:1900|max:' . date('Y'), // Ano de fabricação deve estar entre 1900 e o ano atual
            'observacoes' => 'nullable|string|max:1000', // Observações opcionais, máximo de 1000 caracteres
            'cliente_id' => 'required|exists:clientes,id', // Valida se o cliente existe
        ]);

        Veiculo::create($validatedData);

        // Redireciona o usuário para a página de listagem de veículos com uma mensagem de sucesso
        return redirect()->route('veiculos.index')->with('success', 'Veículo cadastrado com sucesso!');
    }

    public function edit($id)
    {
        // Busca o veículo pelo id
        $veiculo = Veiculo::findOrFail($id);
        $clientes = Cliente::all();

        // Retorna a view com o formulário de edição
        return view('veiculos.partials.edit', compact('veiculo', 'clientes'));
    }

    public function update(Request $request, $id)
    {
        // Valida os dados enviados
        $request->validate([
            'modelo' => 'required|string|max:255',
            'marca' => 'required|string|max:255',
            'placa' => 'required|string|max:10',
            'ano_fabricacao' => 'required|integer|min:1900|max:' . date('Y'),
            'cor' => 'required|string|max:50',
            'chassi' => 'required|string|max:50',
            'tipo_veiculo' => 'required|string|max:50',
            'quilometragem' => 'required|integer|min:0',
            'cliente_id' => 'required|exists:clientes,id',
        ]);

        // Busca o veículo pelo id
        $veiculo = Veiculo::findOrFail($id);

        // Atualiza os dados do veículo
        $veiculo->update($request->all());

        // Redireciona para a página de listagem com uma mensagem de sucesso
        return redirect()->route('veiculos.index')->with('success', 'Veículo atualizado com sucesso!');
    }

    public function show($id)
    {
        // Busca o veículo pelo id
        $veiculo = Veiculo::with('cliente')->findOrFail($id);


        // Retorna a view de detalhes do veículo (sem o layout geral)
        return view('veiculos.partials.details', compact('veiculo'));
    }

    public function destroy($id)
    {
        // Busca o veículo pelo id
        $veiculo = Veiculo::findOrFail($id);

        // Deleta o veículo
        $veiculo->delete();

        // Redireciona para a página de listagem com uma mensagem de sucesso
        return redirect()->route('veiculos.index')->with('success', 'Veículo deletado com sucesso!');
    }

    public function getVeiculosByCliente($clienteId)
    {
        $veiculos = Veiculo::where('cliente_id', $clienteId)->get();
        return response()->json($veiculos);
    }

}
