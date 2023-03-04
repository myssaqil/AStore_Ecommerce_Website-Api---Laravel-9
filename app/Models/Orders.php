<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;

    protected $fillable = [
        'total',
        'status',
        'product_count',
        'adders_user_id',
        'user_id',
        'seller_id',
        'product_id',
    ];

    public function products()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}
