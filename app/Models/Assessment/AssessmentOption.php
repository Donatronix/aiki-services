<?php

namespace App\Models\Assessment;

use App\Models\Assessment\Assessment;
use App\Models\Assessment\AssessmentAnswer;
use App\Models\Assessment\AssessmentResponse;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class AssessmentOption extends Model
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
    protected $fillable = ['assessment_id', 'option', 'slug'];

    public function assessment()
    {
        return $this->belongsTo(Assessment::class);
    }

    public function answers()
    {
        return $this->hasMany(AssessmentAnswer::class);
    }

    public function responses()
    {
        return $this->hasMany(AssessmentResponse::class);
    }
}
