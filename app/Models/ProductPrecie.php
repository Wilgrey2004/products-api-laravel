<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductPrecie extends Model
{
    protected $table = "product_prices";

    protected $fillable = [
        'product_id',
        'currency_id',
        'price',
        
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function currency()
    {
        return $this->belongsTo(Currency::class);
    }

}
