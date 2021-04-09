<?php

use App\Http\Controllers\Assessment\AssessmentParticipantController;
use App\Http\Controllers\Technician\TechnicianController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => '/dashboard/technician', 'middleware' => ['auth']], function () {
    Route::get('/', [TechnicianController::class, 'index'])->name('technician.index');
    Route::get('/new', [TechnicianController::class, 'create'])->name('technician.create');
    Route::post('/store', [TechnicianController::class, 'store'])->name('technician.store');
    Route::get('/{technician}/edit', [TechnicianController::class, 'edit'])->name('technician.edit');
    Route::put('/{technician}/update', [TechnicianController::class, 'update'])->name('technician.update');
    Route::delete('/{technician}/delete', [TechnicianController::class, 'destroy'])->name('technician.delete');
    Route::get('/{technician}', [TechnicianController::class, 'show'])->name('technician.show');
    Route::get('/{technician}/assessment', [AssessmentParticipantController::class, 'create'])->name('technician.assessment');
    Route::get('/{technician}/assessment/score', [AssessmentParticipantController::class, 'show'])->name('technician.assessment.show.score');
    Route::get('/assessment/complete', [TechnicianController::class, 'assessmentComplete'])->name('technician.assessment.complete');
});
