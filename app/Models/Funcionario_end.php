<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionario_end extends Model
{
    use HasFactory;

      protected $table = 'funcionario_end';
     protected $fillable = [
        'address',
        'number',
        'neighborhood',
        'city',
        'state',
        'zip_code',
        'complemento',
        'func_id',


     ];

     public function funcionario()
     {
        return $this->belongsTo(Funcionario::class, 'func_id');
     }

}
