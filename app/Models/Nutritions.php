<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nutritions extends Model
{
    protected $guarded =[];
    public $timestamps = false;

    use HasFactory;

    public function ingredients()
    {
        return $this->hasOne(ingredients::class);
    }
}
