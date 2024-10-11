<?php

namespace App\Http\Controllers;
use App\Models\Warehouse_itens;
use Illuminate\Http\Request;
use Wavey\Sweetalert\Sweetalert;
use Illuminate\Database\QueryException;

class WarehouseController extends Controller
{
    /* Display a listing of the resource.*/
    public function index()
    {
          $warehouse = Warehouse_itens::all();
          return view('/warehouse/list',['warehouse'=>$warehouse]); // retona a view
    }

    /*Show the form for creating a new resource. */
    public function add()
    {
        return view('/warehouse/new',['obj'=>new Warehouse_itens()]);
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////
    public function edit($id) {
        // Busca o objeto no banco de dados pelo ID
        $obj = Warehouse_itens::find($id);
        // Retorna a view com o objeto
        return view('warehouse.edit', compact('obj'));
        }

    // Método responsável pela atualização do item
    public function update(Request $request, $id){
        // Validação dos dados enviados no formulário
        $request->validate([
            'cod' => 'required|integer',
            'nome_peca' => 'required|string',
            'qtde' => 'required|integer',
            'modelo' => 'required|string',
            'marca' => 'required|string',
            'margem' => 'required|numeric',
            'preco_custo' => 'required|numeric',
            'compatibility' => 'required|string',
        ]);

        // Encontra o item no banco de dados usando o ID
        $warehouse = Warehouse_itens::find($id);

        // Atualiza os dados com as informações enviadas no formulário
        $warehouse->update($request->all());

        // Redireciona para a página de listagem com uma mensagem de sucesso
        return redirect()->route('warehouse.index')->with('success', 'Peça atualizada com sucesso.');
    }

/////////////////////////////////////////////////////////////////////////////////////////////////////
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
        try{
            //Validação dos dados de entrada
        $validatedData = $request->validate([
            'cod' => 'required|string|max:50|unique:warehouse_itens',
            'nome_peca' => 'required|string|max:255',
            'qtde' => 'required|numeric|min:0',
            'preco_custo' => 'required|numeric|min:0.0',
            'preco_final' => 'numeric|min:0.0',
            'margem' => 'required|numeric|min:0.0',
            'modelo' => 'required|string|max:255',
            'marca' => 'required|string|max:255',
            'compatibility' => 'string|max:400',
           
        
        ]);


        $preco_final = $request->preco_custo + ($request->preco_custo * $request->margem);
        $validatedData['preco_final'] = $preco_final;
       

        Warehouse_itens::create($validatedData);
        Sweetalert::success('Item cadastrado com sucesso!', 'Sucesso!');
        return view('/warehouse/new')->with('success', 'Registration successful');

         }
         catch(QueryException $exception){
            dd($exception->getMessage());
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
        //
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id){
    // Busca o item no banco de dados pelo ID
    $item = Warehouse_itens::find($id);

    // Exclui o item do banco de dados
    $item->delete();
    Sweetalert::success('Item deletado com sucesso!', 'Sucesso!');

    // Redireciona para a lista de itens com uma mensagem de sucesso
    return redirect()->route('warehouse.index');
}

}
