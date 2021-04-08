<?php

namespace App\Models\Assessment;

use App\Models\Assessment\Assessment;
use App\Models\Assessment\AssessmentOption;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class AssessmentAnswer extends Model
{
    use HasFactory;

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    protected static function boot()
    {
        parent::boot();
        self::saving(function ($model) {
            $model->slug = Str::random(50);
        });
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['assessment_id', 'answer', 'assessment_option_id', 'slug'];

    public function assessment()
    {
        return $this->belongsTo(Assessment::class);
    }

    public function assessmentOption()
    {
        return $this->belongsTo(AssessmentOption::class);
    }
}
