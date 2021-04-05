<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cv extends Model
{
    use HasFactory;

    public function statistics()
    {
        return $this->hasMany(CvStatistics::class);
    }
    public function fields(){
        return $this->hasMany(CvField::class);
    }
    public function fieldsValues()
    {
        return $this->hasMany(CvFieldValue::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
