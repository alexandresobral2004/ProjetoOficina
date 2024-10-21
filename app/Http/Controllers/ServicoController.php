<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Servico;
use App\Models\Veiculo;
use Illuminate\Http\Request;

class ServicoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $servicos = Servico::with(['cliente', 'veiculo'])->get(); // Carregar relacionamento com cliente e veículo
        $clientes = Cliente::all();
        $veiculos = Veiculo::all();
        return view('servicos.index', compact('servicos', 'clientes', 'veiculos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Buscar clientes e veículos para popular os selects
        return view('servicos.create', compact('clientes', 'veiculos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validação dos dados
        $request->validate([
            'cliente_id' => 'required|exists:clientes,id',
            'veiculo_id' => 'required|exists:veiculos,id',
            'data_inicio' => 'required|date',
            'data_termino' => 'nullable|date|after_or_equal:data_inicio',
            'status' => 'required|in:Pendente,Em andamento,Concluído',
            'descricao' => 'nullable|string',
            'valor_total' => 'nullable|numeric|min:0',
        ]);

        // Criação do serviço
        Servico::create([
            'cliente_id' => $request->input('cliente_id'),
            'veiculo_id' => $request->input('veiculo_id'),
            'data_inicio' => $request->input('data_inicio'),
            'data_termino' => $request->input('data_termino'),
            'status' => $request->input('status'),
            'descricao' => $request->input('descricao'),
            'valor_total' => $request->input('valor_total'),
        ]);

        // Redirecionar com mensagem de sucesso
        return redirect()->route('servicos.index')->with('success', 'Serviço criado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $servico = Servico::with('cliente', 'veiculo')->findOrFail($id);
        return view('servicos.partials.details', compact('servico'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $servico = Servico::findOrFail($id);
        $clientes = Cliente::all();
        $veiculos = Veiculo::all();
        return view('servicos.partials.edit', compact('servico', 'clientes', 'veiculos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $servico = Servico::findOrFail($id);

        $request->validate([
            'cliente_id' => 'required|exists:clientes,id',
            'veiculo_id' => 'required|exists:veiculos,id',
            'data_inicio' => 'required|date',
            'status' => 'required|in:Pendente,Em andamento,Concluído',
            'valor_total' => 'nullable|numeric',
        ]);

        $servico->update($request->all());

        return redirect()->route('servicos.index')->with('success', 'Serviço atualizado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $servico = servico::findOrFail($id);
        $servico->delete();
        return redirect()->route('servicos.index')->with('success', 'Serviço deletado com sucesso!');
    }
}
