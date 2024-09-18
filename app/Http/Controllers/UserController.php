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

         
             $user = new User();
            if($request->id){


                $user = User::find($request->id);
         
               
                $user->id = $request->id;
                $user->name = $request->name;
                $user->email = $request->email;
                $user->password = $request->password;
                // $user->confirm_password = 
                $user->fone = $request->fone;
                if($request->cpf){
                    $user->cpf = $request->cpf;
                }
                $user->cnpj = $request->cnpj;
                $user->tipo_user = $request->tipo_user;
           
                $user->save();
                Sweetalert::success('Usuário atualizado com sucesso!', 'Sucesso!');
                return view('/users/new');

               }

              
            //Validação dos dados de entrada
        $validatedData = $request->validate( [
            'role' => 'required|string',
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password'=>  'required|string|min:6',
            'confirm_password'=>  'required|string|min:6',
            'fone'=> 'required|string|max:22',  
            'status'=> 'required|string',  
          
           
        ]);
            
            
            if($validatedData['password']  == $validatedData['confirm_password']){
          
                // Criptografando a senha
                $validatedData['password'] = bcrypt($validatedData['password']);
                
                $user->create($validatedData);
              
                return redirect()->route('user.add')->with('success', 'Usuário criado com sucesso.');
                }
                else{
                     Sweetalert::error('Senhas não conferem!', 'Erro!');
                     return Redirect(route('user.add'));
                }
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
        $user = new User();
        try {
            $user = User::find($id);
            
            return view('/users/viewUser', ['user' => $user]);
            
        } catch (QueryException $exception) {
            dd($exception->getMessage());
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $userTypes = [
            ' ' => 'Selecione',
            'admin' => 'Admin',
            'user' => 'User',
        ];
        $userStatus = [
            ' ' => 'Selecione',
            'ativo' => 'Ativo',
            'inativo' => 'Inativo',
        ];
        $user = new User();
        try {
            $user = User::find($id);
            
            return view('/users/edit', ['obj' => $user, 'userTypes' => $userTypes, 'userStatus' => $userStatus]);
            
        } catch (QueryException $exception) {
            dd($exception->getMessage());
        }
    }

    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
             $user = User::find($id);

            if($user){
               
                $user->delete();
                $users = User::all();
             return view('/users/list',['users'=>$users])->with('success', 'Usuário removido com sucesso.');;
             
            }
          

            

            } catch (QueryException $exception) {
                dd($exception->getMessage());
            }
            

        
    }
}
