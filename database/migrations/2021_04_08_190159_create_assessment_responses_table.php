<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssessmentResponsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assessment_responses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('assessment_id')->index();
            $table->foreign('assessment_id')->references('id')->on('assessments');
            $table->unsignedBigInteger('assessment_option_id')->index()->nullable();
            $table->foreign('assessment_option_id')->references('id')->on('assessment_options');
            $table->longText('response')->nullable();
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
        Schema::dropIfExists('assessment_responses');
    }
}
