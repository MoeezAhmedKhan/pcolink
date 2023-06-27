<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PcoCarsImages extends Model
{
    use HasFactory;
    public function pcocardetails()
    {
        return $this->belongsTo(PcoCarsSecondSection::class, 'pco_cars_id','id');
    }
}
