<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CvTemplate extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function elements()
    {
        return $this->hasMany(CvElement::class);
    }

    public function statistics()
    {
        return $this->hasMany(TemplateStatistics::class);
    }
}
