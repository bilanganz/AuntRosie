<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sales extends Model
{
    protected $guarded =[];
    public $timestamps = false;
    
    use HasFactory;
    use SoftDeletes;

    public function inventory()
    {
        return $this->belongsToMany(inventory::class)->withPivot('quantity');;
    }

    public function customers()
    {
        return $this->belongsTo(Customers::class);
    }
}
