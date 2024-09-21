<?php

namespace App\Http\Controllers;
use App\Models\Warehouse_itens;
use Illuminate\Http\Request;
use Wavey\Sweetalert\Sweetalert;
use Illuminate\Database\QueryException;

class WarehouseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
          $warehouse = Warehouse_itens::all();
          return view('/warehouse/list',['warehouse'=>$warehouse]); // retona a view
    }

    /**
     * Show the form for creating a new resource.
     */
    public function add()
    {
        return view('/warehouse/NewItem',['obj'=>new Warehouse_itens()]);
    }

    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
        try{
            //Validação dos dados de entrada
        $validatedData = $request->validate([
            'sku' => 'required|numeric|max:255',
            'part_name' => 'required|string|max:255',
            'quantity' => 'required|numeric|min:0',
            'quality' => 'required|string|max:255',
            'highest_price' => 'required|numeric|min:0.0',
            'lowest_price' => 'required|numeric|min:0.0',
            'media_price' => 'required|numeric|min:0.0',
            'model' => 'required|string|max:255',
            'brand' => 'required|string|max:255',
            'compatibility' => 'required|string|max:255',
            'source' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'location' => 'required|string|max:255',
         
        ]);
       

        Warehouse_itens::create($validatedData);
        Sweetalert::success('Item cadastrado com sucesso!', 'Sucesso!');
        return view('/warehouse/NewItem');

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
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
    }
}
