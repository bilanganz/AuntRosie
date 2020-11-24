<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Inventory extends Model
{
    protected $guarded =[];
    public $timestamps = false;

    use HasFactory;
    use SoftDeletes;

    public function recipes()
    {
        return $this->belongsTo(recipes::class);
    }

    public function sales()
    {
        return $this->belongsToMany(sales::class)->withPivot('quantity');
    }
}
