<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nutrition extends Model
{
    protected $guarded =[];
    public $timestamps = false;

    use HasFactory;

    public function ingredients()
    {
        return $this->hasOne(ingredients::class);
    }
}
