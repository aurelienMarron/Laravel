<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_product extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable=['id','product_id','order_id','quantity'];

    public function order(){
        return $this->hasOne(Orders::class);
    }

    public function product(){
        return $this->hasOne(Product::class);
    }
}
