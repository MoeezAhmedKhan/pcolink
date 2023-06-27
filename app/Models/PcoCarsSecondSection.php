<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PcoCarsSecondSection extends Model
{
    use HasFactory;
    protected $primaryKey = "id";
    public function carimg()
    {
        return $this->hasMany(PcoCarsImages::class, 'pco_cars_id', 'id');
    }
    public function carfeatures()
    {
        return $this->hasMany(PcoCarsFeatureSection::class, 'pco_cars_id', 'id');
    }
    public function carabout()
    {
        return $this->hasMany(PcoCarsAboutSection::class, 'pco_cars_id', 'id');
    }
    
}
