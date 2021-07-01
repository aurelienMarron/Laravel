<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    use HasFactory;
    protected $table = 'customers';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable=['id','last_name','first_name','email','address','postcode','city'];

    public function orders(){
        return $this->hasMany(Order::class);
    }


}
