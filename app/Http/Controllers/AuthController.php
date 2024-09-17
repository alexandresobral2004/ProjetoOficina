<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Hash;
use Wavey\Sweetalert\Sweetalert;

class AuthController extends Controller
{

    public function dashboard(){
            return view('/layouts/app');
    }


    public function register(Request $request){

        return view('auth.register');
    }
    // Método para registrar um novo usuário
    public function registerSave(Request $request)
    {
       $user = new User();
        $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:8|confirmed',
        'fone' => 'nullable|string',
        'cnpj' => 'nullable|string',
        'cpf' => 'nullable|string',
        'tipo_user' => 'nullable|string'
    ]);
    

    $validatedData['password'] = Hash::make($validatedData['password']);


    try {
        $user->create($validatedData);
         Sweetalert::success('Usuário criado com sucesso!', 'Sucesso!');
        return view('/auth/login')->with('success', 'Registration successful');
    } catch (QueryException $e) {
        // Capturar e exibir o erro
        Sweetalert::error('Erro ao Salvar!', 'Erro!');
    }
    }

    public function login(Request $request){

        return view('/auth/login');
    }

    // Método para login
    public function logar(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

       try {
        $user = User::where('email', $request['email'])->first();
        if($user->status == 0){
            Sweetalert::error('Usuário inativo, contate o administrador!', 'Erro!');
            return view('auth.login');
        }

           
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
           
            return redirect()->route('auth.dashboard')->with('success', 'Login successful');     
          
        }
         Sweetalert::error('Login ou Senha inválidos!', 'Erro!');
        return redirect()->route('auth.login');
        
       } catch (QueryException $exception) {
        dd($exception->getMessage());
       }

       
      

     
    }

    // Método para logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return view('auth.login')->with('success', 'Logout successful');
        
    }

    public function pagina404(){
        return view('/auth/404');
    }
}
