<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class MedicalConditions extends Model
{
    protected $guarded =[];
    public $timestamps = false;

    use HasFactory;
    use SoftDeletes;

    public function ingredients()
    {
        return $this->belongsTo(ingredients::class);
    }
}
