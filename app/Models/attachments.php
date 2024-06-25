<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class attachments extends Model
{
    use HasFactory;
    public function Product(){
        return $this->morphMany(Products::class,'products');
    }
}
