<?php

namespace App\Models;

use App\Models\FoodBlog;
use App\Models\FoodCalories;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FoodCategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'name','disable'
    ];
    public function foods(){
        return $this->hasMany(FoodBlog::class);
    }
}
