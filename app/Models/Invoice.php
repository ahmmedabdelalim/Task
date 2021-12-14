<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;


    protected $fillable = [
        'id',
        'products',

        //'item_description',
         'total_cost',
        'quantities',
        //'line_total',
    ];

    protected $casts = [
        'products' => 'array',
        'quantities' => 'array',
    ];


}
