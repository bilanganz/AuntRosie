<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    protected $guarded =[];
    public $timestamps = false;

    use HasFactory;

    public function sales()
    {
        return $this->hasMany(ingredients::class);
    }
}
