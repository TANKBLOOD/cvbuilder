<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CvFieldValue extends Model
{
    use HasFactory;

    public function field(){
        return $this->belongsTo(CvField::class);
    }
}
