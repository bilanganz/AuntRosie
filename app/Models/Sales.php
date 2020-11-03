<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    use HasFactory;

    public function inventory()
    {
        return $this->belongsToMany(inventory::class);
    }

    public function customers()
    {
        return $this->hasMany(ingredients::class);
    }
}
