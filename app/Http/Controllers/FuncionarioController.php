<?php

namespace App\Http\Controllers;

use App\Enums\EmployeeRole;
use App\Models\Funcionario;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class FuncionarioController extends Controller
{
/**
     * Exibe uma listagem dos funcionários.
     */
    public function index()
    {
        $cargos = EmployeeRole::cases();
        $funcionarios = Funcionario::all();
        return view('funcionarios.index', compact('funcionarios', 'cargos'));
    }

    /**
     * Exibe o formulário para criar um novo funcionário.
     */
    public function create()
    {
        // Passe os cargos para a view
        return view('funcionarios.create');
    }

    /**
     * Armazena um novo funcionário no banco de dados.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|unique:funcionarios,email,',
            'cpf' => 'required|string|max:14|unique:funcionarios,cpf',
            'telefone' => 'nullable|string|max:20',
            'cargo' => ['required', Rule::enum(EmployeeRole::class)],
            'data_nascimento' => 'date',
            'endereco.rua' => 'required|string|max:255',
            'endereco.numero' => 'required|string|max:10',
            'endereco.bairro' => 'required|string|max:100',
            'endereco.cidade' => 'required|string|max:100',
            'endereco.estado' => 'required|string|max:2',
            'endereco.cep' => 'required|string|max:10',
        ]);

        // Cria o funcionário
        $funcionario = Funcionario::create($request->only([
            'nome',
            'sobrenome',
            'cpf',
            'email',
            'telefone',
            'data_nascimento',
            'cargo',
            'is_user' => false, // Define is_user como false durante o cadastro
        ]));

        // Cria o endereço associado ao funcionário
        $funcionario->endereco()->create($request->input('endereco'));

        return redirect()->route('funcionarios.index')->with('success', 'Funcionário e endereço criados com sucesso!');
    }

    /**
     * Exibe os detalhes de um funcionário específico.
     */
    public function show($id)
    {
        $funcionario = Funcionario::findOrFail($id);
        return view('funcionarios.partials.details', compact('funcionario'));
    }

    /**
     * Exibe o formulário para editar um funcionário existente.
     */
    public function edit($id)
    {
        $funcionario = Funcionario::findOrFail($id);
        $cargos = EmployeeRole::cases();
        return view('funcionarios.partials.edit', compact('funcionario', 'cargos'));
    }

    /**
     * Atualiza os dados de um funcionário no banco de dados.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|unique:funcionarios,email,' .$id,
            'cpf' => 'required|string|max:14|unique:funcionarios,cpf,' .$id,
            'telefone' => 'nullable|string|max:20',
            'cargo' => ['required', Rule::enum(EmployeeRole::class)],
            'data_nascimento' => 'date',
            'endereco.rua' => 'required|string|max:255',
            'endereco.numero' => 'required|string|max:10',
            'endereco.bairro' => 'required|string|max:100',
            'endereco.cidade' => 'required|string|max:100',
            'endereco.estado' => 'required|string|max:2',
            'endereco.cep' => 'required|string|max:10',
        ]);

        // Atualiza o funcionário
        $funcionario = Funcionario::findOrFail($id);
        $funcionario->update($request->only([
            'nome',
            'sobrenome',
            'cpf',
            'email',
            'telefone',
            'data_nascimento',
            'cargo',
            'is_user'
        ]));

        // Atualiza o endereço associado
        if ($funcionario->endereco) {
            $funcionario->endereco->update($request->input('endereco'));
        } else {
            $funcionario->endereco()->create($request->input('endereco'));
        }

        return redirect()->route('funcionarios.index')->with('success', 'Funcionário e endereço atualizados com sucesso!');
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
