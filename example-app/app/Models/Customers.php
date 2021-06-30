<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable=['id','last_name','first_name','email','address','postcode','city'];

    public function orders(){
        return $this->hasMany(Orders::class);
    }

    public function order_product(){
        return $this->hasOne(Order_product::class);}
}
