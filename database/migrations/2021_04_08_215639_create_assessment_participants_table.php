<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateAssessmentParticipantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assessment_participants', function (Blueprint $table) {
            $table->id();
            $table->string('slug');
            $table->unsignedBigInteger('user_id')->index();
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamp('started_by')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('completed_by')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->enum('status', ['in progress', 'completed']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assessment_participants');
    }
}
