<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Recipes extends Model
{
    protected $guarded =[];
    public $timestamps = false;

    use HasFactory;
    use SoftDeletes;

    public function ingredients()
    {
        return $this->belongsToMany(ingredients::class)->withPivot('amount');
    }

    public function inventory()
    {
        return $this->belongsTo(inventory::class);
    }
}
