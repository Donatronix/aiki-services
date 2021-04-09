<?php

use App\Http\Controllers\Assessment\AssessmentController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => '/dashboard/assessment', 'middleware' => ['admin']], function () {
    Route::get('/', [AssessmentController::class, 'index'])->name('assessment.index');
    Route::get('/new', [AssessmentController::class, 'create'])->name('assessment.create');
    Route::post('/store', [AssessmentController::class, 'store'])->name('assessment.store');
    Route::get('/{assessment}/edit', [AssessmentController::class, 'edit'])->name('assessment.edit');
    Route::put('/{assessment}/update', [AssessmentController::class, 'update'])->name('assessment.update');
    Route::delete('/{assessment}/delete', [AssessmentController::class, 'destroy'])->name('assessment.delete');
    Route::get('/{assessment}', [AssessmentController::class, 'show'])->name('assessment.show');
});
