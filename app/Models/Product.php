<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name',
        'product_banner',
        'product_price',
        'product_stock',
        'product_status',
        'id_category',
        'id_seller',
        'product_soldout_total',
        'product_condition',
        'product_description'
    ];


    public function scopeFilter($query, array $filters)
    {
        if (isset($filters['search']) ? $filters['search'] : false) {
            return $query->where('product_name', 'like', "%{$filters['search']}%");
        }
        if (isset($filters['category']) ? $filters['category'] : false) {
            return $query->where('id_category', $filters['category']);
        }
        if (isset($filters['product_status']) ? $filters['product_status'] : false) {
            return $query->where('product_status', $filters['product_status']);
        }
    }

    public function categorys()
    {
        return $this->belongsTo(ProductCategory::class, 'id_category', 'id');
    }
}
