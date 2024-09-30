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
        'city',
        'state',
        'zip_code',
        'employee_id',
        


     ];

}
