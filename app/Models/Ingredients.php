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
}
