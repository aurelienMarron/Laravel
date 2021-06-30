<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable=['id','name','price','weight','picture','quantity','available','size','categories_id'];

    public function categorie(){
        return $this->belongsTo(Categorie::class);
    }

    public function order_product(){
       return $this->belongsTo(Order_product::class);
    }
}
