<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    protected $fillable = [
        'customer_name','customer_email', 'customer_mobile', 'status', 'product_id'
    ];

    public function products() : hasOne
    {
        return $this->hasOne(Product::class, 'id', 'product_id');
    }
}
