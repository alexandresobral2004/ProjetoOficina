<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as EloquentModel;
use Illuminate\Notifications\Notifiable;

class Warehouse_itens extends EloquentModel{
    
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
            'sku',
            'part_name',
            'quantity',
            'quality',
            'highest_price',
            'lowest_price',
            'media_price',
            'model',
            'brand',
            'compatibility',
            'source',
            'category',
            'location',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */     
}
