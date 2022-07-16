<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'category_id',
        'code',
        'name',
        'stock',
        'varian',
        'description',
        'image',
        'price',
    ];

    use HasFactory;
    
    public function orderItems() {
        return $this->hasMany(OrderItem::class, 'product_id');
    }

    public function Order() {
        return $this->belongsTo(Order::class);
    }
}
