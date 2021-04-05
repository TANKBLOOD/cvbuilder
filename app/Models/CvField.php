<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CvField extends Model
{
    use HasFactory;

    public function fieldValue()
    {
        return $this->hasOne(CvFieldValue::class);
    }
    public function cv()
    {
        return $this->belongsTo(Cv::class, 'cv_id');
    }

}
