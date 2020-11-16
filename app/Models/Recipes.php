<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipes extends Model
{
    use HasFactory;

    public function ingredients()
    {
        return $this->belongsToMany(ingredients::class);
    }

    public function inventory()
    {
        return $this->belongsTo(inventory::class);
    }
}
