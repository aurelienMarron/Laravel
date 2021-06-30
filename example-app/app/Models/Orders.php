<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $primaryKey = 'id';
    //public $timestamps = false;
    protected $fillable=['id','date','number','customer_id'];

    public function customer(){
        return $this->belongsTo(Customers::class);
    }

    public function order_product(){
        return $this->hasOne(Order_product::class);
    }
}
