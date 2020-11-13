<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredients extends Model
{
    protected $guarded =[];
    public $timestamps = false;

    use HasFactory;

    public function medicalConditions()
    {
        return $this->hasOne(medicalConditions::class);
    }

    public function nutrition()
    {
        return $this->hasOne(nutrition::class);
    }

    public function stock()
    {
        return $this->belongsTo(stock::class);
    }

    public function recipe()
    {
        return $this->belongsToMany(recipe::class);
    }
}
