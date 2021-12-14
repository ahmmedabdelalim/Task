<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'invoice_id',
        'product_name_ar',
        'product_name_en',
        //'item_description',
         'unit_cost',
        //'quantity',
        //'line_total',
    ];

    /*public function invoice()
    {
        return $this->belongsTo('App\Invoice');

    }*/
}
