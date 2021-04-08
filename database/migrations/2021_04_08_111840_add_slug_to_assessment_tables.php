<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSlugToAssessmentTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('assessments', function (Blueprint $table) {
            $table->string('slug', 50);
        });

        Schema::table('assessment_answers', function (Blueprint $table) {
            $table->string('slug', 50);
        });

        Schema::table('assessment_options', function (Blueprint $table) {
            $table->string('slug', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('assessments', function (Blueprint $table) {
            $table->dropColumn('slug');
        });

        Schema::table('assessment_answers', function (Blueprint $table) {
            $table->dropColumn('slug');
        });

        Schema::table('assessment_options', function (Blueprint $table) {
            $table->dropColumn('slug');
        });
    }
}
