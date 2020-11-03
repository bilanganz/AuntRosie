<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredients extends Model
{
    use HasFactory;

    public function medicalCondition()
    {
        return $this->belongsTo(medicalCondition::class);
    }

    public function nutrition()
    {
        return $this->belongsTo(nutrition::class);
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
