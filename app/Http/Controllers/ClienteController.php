<?php

namespace App\Http\Controllers;
use App\Models\Cliente;
use App\Models\Cliente_end;
use Illuminate\Http\Request;
use Wavey\Sweetalert\Sweetalert;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Log;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        $query = Cliente::with('endereco');

        if ($request -> has('search')) {
            $query = $query -> where('name', 'like', "%{$search}%");
        }

        $clientes = $query->get();

        return view('/clientes/list', ['clientes' => $clientes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function add()
    {
        return view('/clientes/new',['obj'=>new Cliente()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            //Validação dos dados de entrada
        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            // 'password' => 'required|string|max:6',
            // 'confirm_password' => 'required|string|max:6',
            'fone'=> 'required|string|max:15',
            'dtNasc'=> 'nullable|date',
            'profissao'=> 'nullable|string|max:30',
            'razaoSocial'=> 'nullable|string|max:60',
            'foneFixo'=> 'nullable|string|max:15',
        ];

        if($request->input('tipo_pessoa') == 'fisica') {
            $rules['cpf'] = 'required|string|max:20|unique:clientes';
            $rules['cnpj'] = 'nullable|string|max:20';
        } elseif ($request->input('tipo_pessoa') == 'juridica') {
            $rules['cnpj'] = 'required|string|max:20|unique:clientes';
            $rules['cpf'] = 'nullable|string|max:20';
        }

        $validatedData = $request->validate($rules);



         if($validatedData['password'] == $validatedData['confirm_password']){

            // Criptografando a senha
            $validatedData['password'] = bcrypt($validatedData['password']);

            if($validatedData['cpf']  == null && $validatedData['cnpj'] == null ){
                 Sweetalert::error('CPF ou CNPJ obrigatorio!', 'Erro!');

                  return redirect()->route('cliente.index')->with("Erro", "CPF ou CNPJ obrigatorio");
            }


         }
         else{
            Sweetalert::error('Senhas não conferem!', 'Erro!');
            return Redirect(route('clientes.index'));

         }

            $validatedData2 = $request->validate([
            'number'=> 'required|string|max:100',
            'street'=> 'required|string|max:255',
            'neighborhood'=> 'required|string|max:100',
            'city'=> 'required|string|max:100',
            'state'=> 'required|string|max:100',
            'zip_code'=> 'required|string|max:15',
            ]);


           $cliente = Cliente::create($validatedData);
           $end = new Cliente_end();
           $end->fill($validatedData2);
           $end->cliente_id = $cliente->id;

           $end->save();

            return redirect()->route('clientes.index')->with('success', 'Cliente salvo com sucesso!');


         }
         catch(QueryException $exception){
            // dd($exception->getMessage());
              return Redirect()->route('clientes.add')->with("Erro", $exception->getMessage());

         }

//         Sweetalert::basic('Description', 'Title');
// Sweetalert::info('Description', 'Title');
// Sweetalert::success('Description', 'Title');
// Sweetalert::error('Description', 'Title');
// Sweetalert::warning('Description', 'Title');
// Sweetalert::message('Description', 'Title');
// Sweetalert::message('Description <h2>Custom HTML</h2>', 'Title')->html();


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cliente = Cliente::with('endereco')->find($id);

        if (!$cliente) {
            return redirect()->route('clientes.index')->with('error', 'Cliente não encontrado.');
        }

        return view('clientes.view', [
            'cliente' => $cliente,
            'endereco' => $cliente->endereco,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit($id)
    {
        $cliente = Cliente::with('endereco')->find($id);

        if (!$cliente) {
            return redirect()->route('clientes.index')->with('error', 'Cliente não encontrado.');
        }
        return view('clientes.edit', [
        'cliente' => $cliente,
        'endereco' => $cliente->endereco,]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            // Validação dos dados de entrada
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users,email,' . $id,
                'fone' => 'required|string|max:20',
                'foneFixo' => 'nullable|string|max:20',
                'cpf' => 'nullable|string|max:14',
                'cnpj' => 'nullable|string|max:18',
                'dtNasc' => 'nullable|date',
                'profissao' => 'nullable|string|max:100',
                'razaoSocial' => 'nullable|string|max:255',
                'number' => 'required|string|max:100',
                'street' => 'required|string|max:255',
                'neighborhood' => 'required|string|max:100',
                'city' => 'required|string|max:100',
                'state' => 'required|string|max:100',
                'zip_code' => 'required|string|max:15',
            ]);

            $cliente = Cliente::find($id);
            $cliente->update($validatedData);

            // Atualização dos dados de endereço
            $endereco = Cliente_end::where('cliente_id', $cliente->id)->first();
            if ($endereco) {
                $endereco->update($validatedData);
            } else {
                $endereco = new Cliente_end();
                $endereco->fill($validatedData);
                $endereco->cliente_id = $cliente->id;
                $endereco->save();
            }

            return redirect()->route('clientes.index')->with('success', 'Cliente atualizado com sucesso!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Erro ao atualizar cliente: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {

            $cliente = Cliente::find($id);
            if ($cliente) {
                // Deletar o endereço do cliente
                $deletedEnderecos = Cliente_end::where('cliente_id', $id)->delete();
                Log::info("Endereços deletados: $deletedEnderecos");

                // Deletar o cliente
                $cliente->delete();
                Log::info("Cliente deletado com sucesso");

                return redirect()->route('clientes.index')->with('success', 'Cliente deletado com sucesso!');
            } else {
                Log::warning("Cliente não encontrado com ID: $id");
                return redirect()->route('clientes.index')->with('error', 'Cliente não encontrado.');
            }
        } catch (\Exception $e) {
            Log::error("Erro ao deletar cliente: " . $e->getMessage());
            return redirect()->route('clientes.index')->with('error', 'Erro ao deletar cliente: ' . $e->getMessage());
        }
    }
}
