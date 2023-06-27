<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplySecondSection extends Model
{
    use HasFactory;
      // Specify the columns that are dates
      protected $dates = ['created_at', 'updated_at'];
}
