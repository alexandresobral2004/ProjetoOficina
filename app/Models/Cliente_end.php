<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente_end extends Model
{
    use HasFactory;

      protected $table = 'cliente_end';
     protected $fillable = [
        'address',
        'number',
        'neighborhood',
        'city',
        'state',
        'zip_code',
        'complemento',
        'cliente_id',


     ];

     public function cliente()
     {
        return $this->belongsTo(Cliente::class, 'cliente_id');
     }

}
