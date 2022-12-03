<?php

namespace App\Models;

use App\Models\FoodCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FoodBlog extends Model
{
    use HasFactory;
    protected $fillable = [
        'title','description','image','food_id','disable'
    ];
    public function food_category(){
        return $this->belongsTo(FoodCategory::class,'food_id');
}
}
