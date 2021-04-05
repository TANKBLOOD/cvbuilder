<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TemplateStatistics extends Model
{
    use HasFactory;

    public function template()
    {
        return $this->belongsTo(CvTemplate::class, 'cv_template_id');
    }
}
