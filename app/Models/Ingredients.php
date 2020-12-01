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
        return $this->belongsTo(nutrition::class);
    }

    public function stocks()
    {
        return $this->hasMany(stocks::class);
    }

    public function recipes()
    {
        return $this->belongsToMany(recipes::class)->withPivot('amount');
    }
}
