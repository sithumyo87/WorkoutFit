<?php

namespace App\Models;

use App\Models\Training;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TrainingCategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'name','disable'
    ];
    public function trainings(){
        return $this->hasMany(Training::class);
    } 
}
