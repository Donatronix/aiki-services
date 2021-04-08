<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAnswerOptionIdToAssessmentAnswerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('assessment_answers', function (Blueprint $table) {
            $table->unsignedBigInteger('assessment_option_id')->index()->nullable();
            $table->foreign('assessment_option_id')->references('id')
                ->on('assessment_options')
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('assessment_answers', function (Blueprint $table) {
            $table->dropForeign(['assessment_option_id']);
            $table->dropColumn('assessment_option_id');
        });
    }
}
