<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;

    public function recipes()
    {
        return $this->belongsTo(recipes::class);
    }

    public function sales()
    {
        return $this->belongsToMany(sales::class);
    }
}
