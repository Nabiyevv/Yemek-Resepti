<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MIngredient extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = "meal_ingredients";
    
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
