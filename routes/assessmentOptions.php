<?php

use App\Http\Controllers\Assessment\AssessmentOptionController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => '/dashboard/assessment/{assessment}/options', 'middleware' => ['auth']], function () {
    Route::get('/', [AssessmentOptionController::class, 'index'])->name('assessment.option.index');
    Route::get('/new', [AssessmentOptionController::class, 'create'])->name('assessment.option.create');
    Route::post('/store', [AssessmentOptionController::class, 'store'])->name('assessment.option.store');
    Route::get('/{assessmentOption}/edit', [AssessmentOptionController::class, 'edit'])->name('assessment.option.edit');
    Route::put('/{assessmentOption}/update', [AssessmentOptionController::class, 'update'])->name('assessment.option.update');
    Route::delete('/{assessmentOption}/delete', [AssessmentOptionController::class, 'destroy'])->name('assessment.option.delete');
    Route::get('/{assessmentOptionOption}', [AssessmentOptionController::class, 'show'])->name('assessment.option.show');
});
