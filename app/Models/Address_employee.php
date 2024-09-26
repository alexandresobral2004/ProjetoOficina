<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address_employee extends Model
{
    use HasFactory;

     protected $fillable = [
        'address',
        'city',
        'state',
        'zip_code',
        'employee_id',
        


     ];

}
