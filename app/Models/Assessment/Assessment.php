<?php

namespace App\Models\Assessment;

use App\Models\Assessment\AssessmentAnswer;
use App\Models\Assessment\AssessmentOption;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Assessment extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        "question",
        "category",
        "score",
        "question_type",
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

    public function answers()
    {
        return $this->hasMany(AssessmentAnswer::class);
    }

    public function options()
    {
        return $this->hasMany(AssessmentOption::class);
    }
}
