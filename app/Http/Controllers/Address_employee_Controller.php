<?php

namespace App\Http\Controllers;
use App\Models\Address_employee;
use Wavey\Sweetalert\Sweetalert;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class Address_employee_Controller extends Controller
{
    public function add()
    {
    return view('/addresses/new', ['obj2' => new Address_Employee()]);
    }

    public function store(Request $request)
    {
    try {
    $addressEmployee = new Address_Employee();

    if ($request->id) {
    $addressEmployee = Address_Employee::find($request->id);
    }

    $validatedData = $request->validate([
    'address' => 'required|string|max:255',
    'city' => 'required|string|max:100',
    'state' => 'required|string|max:100',
    'zip_code' => 'required|string|max:10',

    ]);

    $addressEmployee->fill($validatedData);
    $addressEmployee->save();

    Sweetalert::success('Endereço salvo com sucesso!', 'Sucesso!');
    return redirect()->route('address.add')->with('success', 'Endereço criado/atualizado com sucesso.');

    } catch (QueryException $exception) {
    dd($exception->getMessage());
    }
    }
}
