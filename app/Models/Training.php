<?php

namespace App\Models;

use App\Models\TrainingCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Training extends Model
{
    use HasFactory;
    protected $fillable = [
        'name','description','training_id','video','disable'
    ];
    public function training_category(){
        return $this->belongsTo(TrainingCategory::class,'training_id');
}
}
