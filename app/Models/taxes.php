<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class taxes extends Model
{
    use HasFactory;
    public function Product(){
        return $this->hasOne(Product::class);
    }
}
