<?php

namespace App\Models\Assessment;

use App\Models\Assessment\Assessment;
use App\Models\Assessment\AssessmentOption;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class AssessmentResponse extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'slug',
        'assessment_id',
        'assessment_option_id',
        'response',
    ];

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
    protected $fillable = ['assessment_id', 'assessment_option_id', 'slug', 'user_id', 'response'];

    public function assessment()
    {
        return $this->belongsTo(Assessment::class);
    }

    public function assessmentOption()
    {
        return $this->belongsTo(AssessmentOption::class);
    }

    public function respondent()
    {
        return $this->belongsTo(User::class);
    }
}
