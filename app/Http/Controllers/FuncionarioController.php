<?php

namespace App\Http\Controllers;

use App\Models\Funcionario;
use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
/**
     * Exibe uma listagem dos funcionários.
     */
    public function index()
    {
        $funcionarios = Funcionario::all();
        return view('funcionarios.index', compact('funcionarios'));
    }

    /**
     * Exibe o formulário para criar um novo funcionário.
     */
    public function create()
    {
        return view('funcionarios.create');
    }

    /**
     * Armazena um novo funcionário no banco de dados.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|unique:funcionarios,email',
            'telefone' => 'nullable|string|max:20',
            // Outros campos de validação que deseja adicionar...
        ]);

        Funcionario::create($request->all());

        return redirect()->route('funcionarios.index')->with('success', 'Funcionário criado com sucesso!');
    }

    /**
     * Exibe os detalhes de um funcionário específico.
     */
    public function show($id)
    {
        $funcionario = Funcionario::findOrFail($id);
        return view('funcionarios.show', compact('funcionario'));
    }

    /**
     * Exibe o formulário para editar um funcionário existente.
     */
    public function edit($id)
    {
        $funcionario = Funcionario::findOrFail($id);
        return view('funcionarios.edit', compact('funcionario'));
    }

    /**
     * Atualiza os dados de um funcionário no banco de dados.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|unique:funcionarios,email,' . $id,
            'telefone' => 'nullable|string|max:20',
            // Outros campos de validação que desejar adicionar...
        ]);

        $funcionario = Funcionario::findOrFail($id);
        $funcionario->update($request->all());

        return redirect()->route('funcionarios.index')->with('success', 'Funcionário atualizado com sucesso!');
    }

    /**
     * Remove um funcionário do banco de dados.
     */
    public function destroy(string $id)
    {
        $funcionario = Funcionario::findOrFail($id);
        $funcionario->delete();

        return redirect()->route('funcionarios.index')->with('success', 'Funcionário excluído com sucesso!');
    }
}
