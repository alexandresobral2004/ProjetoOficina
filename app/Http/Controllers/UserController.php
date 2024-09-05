<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Wavey\Sweetalert\Sweetalert;
use Illuminate\Database\QueryException;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
          $users = User::all();
         return view('/users/list',['users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function add()
    {
        return view('/users/new',['obj'=>new User()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            //Validação dos dados de entrada
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
            'confirm_password' => 'required|string|min:6',
            'fone'=> 'required|string|max:15',  
            'cpf'=> 'required|string|max:15',
            'cnpj'=> 'required|string|max:20'
         
        ]);
       

         // Criptografando a senha
        $validatedData['password'] = bcrypt($validatedData['password']);
        User::create($validatedData);
        Sweetalert::success('Usuário salvo com sucesso!', 'Sucesso!');
        return view('/users/new');

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
        //
    }
}
