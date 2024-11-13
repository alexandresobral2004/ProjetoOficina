<?php

namespace App\Http\Controllers;
use App\Models\ServicesOrder_Campus;
use Illuminate\Http\Request;
use Wavey\Sweetalert\Sweetalert;
use Illuminate\Database\QueryException;

class ServicesOrderController extends Controller{

    /* Store a newly created resource in storage.*/
    // CREATE
    public function store(Request $request){
        try{
            $validatedData = $request->validate([
                'data' => 'required|date',
                'id_cliente' => 'required|numeric',
                'id_veiculo' => 'required|numeric',
                'id_servico' => 'required|numeric',
                'id_almoxarifado' => 'required|numeric',
            ]);

            ServicesOrder_Campus::create($validatedData);
            Sweetalert::success('Ordem de Serviço cadastrado com sucesso!', 'Sucesso!');
            return redirect()->route('service_order.index');
        }
        catch(QueryException $exception){
            dd($exception->getMessage());
        }
    }

    /* Display a listing of the resource.*/
    // READ
    public function index(){
        $services_order = ServicesOrder_Campus::all();
        return view('/service_order/list',['services_order'=>$services_order]);
    }

    /* Update the specified resource in storage.*/
    // UPDATE
    public function update(Request $request, $id){
        $request->validate([
            'data' => 'required|date',
            'id_cliente' => 'required|numeric',
            'id_veiculo' => 'required|numeric',
            'id_servico' => 'required|numeric',
            'id_almoxarifado' => 'required|numeric',
        ]);

        $services_order = ServicesOrder_Campus::find($id);
        $services_order->update($request->all());
        return redirect()->route('service_order.index')->with('success', 'Serviço atualizado com sucesso.');
    }

        /* Remove the specified resource from storage.*/
        // DELETE
        public function destroy($id){
            $ordem = ServicesOrder_Campus::find($id);
            $ordem->delete();
            Sweetalert::success('Ordem de Serviço deletado com sucesso!', 'Sucesso!');
            return redirect()->route('service_order.index');
        }

        /*Show the form for creating a new resource. */
        public function add(){
            return view('/service_order.add',['obj'=>new ServicesOrder_Campus()]);
        }

        /* Show the form for editing the specified resource.*/
        public function edit($id) {
            $ordem = ServicesOrder_Campus::find($id);
            return view('service_order.edit', compact('ordem'));
        }
        
}