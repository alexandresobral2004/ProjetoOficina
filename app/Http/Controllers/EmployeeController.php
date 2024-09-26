<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use Illuminate\Http\Request;
use Wavey\Sweetalert\Sweetalert;
use Illuminate\Database\QueryException;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
          $employees = Employee::all();
          return view('/employees/list',['employees'=>$employees]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function add()
    {
        return view('/employees/new',['obj'=>new Employee()]);
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
            'password' => 'required|string|max:6',
            'confirm_password' => 'required|string|max:6',
            'fone'=> 'required|string|max:15',  
            'cpf'=> 'nullable|string|max:20|unique:employees',
            'cnpj'=> 'nullable|string|max:20|unique:employees',
            'dtNasc'=> 'nullable|date',
            'profissao'=> 'nullable|string|max:30',
            'razaoSocial'=> 'nullable|string|max:60',
            'foneFixo'=> 'nullable|string|max:15',
            
         
        ]);

      
         if($validatedData['password'] == $validatedData['confirm_password']){
           
            // Criptografando a senha
            $validatedData['password'] = bcrypt($validatedData['password']);
             
            if($validatedData['cpf']  == null && $validatedData['cnpj'] == null ){
                 Sweetalert::error('CPF ou CNPJ obrigatorio!', 'Erro!');
                
                  return redirect()->route('employee.add')->with("Erro", "CPF ou CNPJ obrigatorio");  
            }

           
           
            
         }
         else{
            Sweetalert::error('Senhas não conferem!', 'Erro!');
            return Redirect(route('employee.add'));
          
         }
          
       
           Employee::create($validatedData);
           Sweetalert::success('Usuário criado com sucesso!', 'Sucesso!');
           return view('/employees/new');
        
      

         }
         catch(QueryException $exception){
            // dd($exception->getMessage());
              return Redirect()->route('employee.add')->with("Erro", $exception->getMessage());
            
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
