<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'name',
        'category_id',
        'stock',
        'price',
        'ingress',
        'description',
        'tax_rate',
        'active'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
