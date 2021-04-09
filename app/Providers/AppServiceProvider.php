<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        //create morphmap
        $this->mapClasses();
    }

    public function mapClasses()
    {
        //morph map
        Relation::morphMap([
            'User'                  => 'App\Models\User',
            'Assessment'            => 'App\Models\Assessment\Assessment',
            'AssessmentAnswer'      => 'App\Models\Assessment\AssessmentAnswer',
            'AssessmentDuration'    => 'App\Models\Assessment\AssessmentDuration',
            'AssessmentOption'      => 'App\Models\Assessment\AssessmentOption',
            'AssessmentParticipant' => 'App\Models\Assessment\AssessmentParticipant',
            'AssessmentResponse'    => 'App\Models\Assessment\AssessmentResponse',
        ]);
    }
}
