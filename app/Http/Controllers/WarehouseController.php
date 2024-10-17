<?php

namespace App\Http\Controllers;
use App\Models\Warehouse_itens;
use Illuminate\Http\Request;
use Wavey\Sweetalert\Sweetalert;
use Illuminate\Database\QueryException;

class WarehouseController extends Controller{

    /* Store a newly created resource in storage.*/
    // CREATE
    public function store(Request $request){
        try{
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
            return redirect()->route('warehouse.index');
        }
        catch(QueryException $exception){
            dd($exception->getMessage());
        }

    }

    /* Display a listing of the resource.*/
    // READ
    public function index(){
        $warehouse = Warehouse_itens::all();
        return view('/warehouse/list',['warehouse'=>$warehouse]);
    }

    /* Update the specified resource in storage.*/
    // UPDATE
    public function update(Request $request, $id){
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

        $warehouse = Warehouse_itens::find($id);
        $warehouse->update($request->all());
        return redirect()->route('warehouse.index')->with('success', 'Peça atualizada com sucesso.');
    }

    /* Remove the specified resource from storage.*/
    // DELETE
    public function destroy($id){
        $item = Warehouse_itens::find($id);
        $item->delete();
        Sweetalert::success('Item deletado com sucesso!', 'Sucesso!');
        return redirect()->route('warehouse.index');
    }

    /*Show the form for creating a new resource. */
    public function add(){
        return view('/warehouse/new',['obj'=>new Warehouse_itens()]);
    }

    /* Show the form for editing the specified resource.*/
    public function edit($id) {
        $obj = Warehouse_itens::find($id);
        return view('warehouse.edit', compact('obj'));
    }

    // Sweetalert::basic('Description', 'Title');
    // Sweetalert::info('Description', 'Title');
    // Sweetalert::success('Description', 'Title');
    // Sweetalert::error('Description', 'Title');
    // Sweetalert::warning('Description', 'Title');
    // Sweetalert::message('Description', 'Title');
    // Sweetalert::message('Description <h2>Custom HTML</h2>', 'Title')->html();

    /** Display the specified resource.*/
    public function show(string $id){
            //
    }

}