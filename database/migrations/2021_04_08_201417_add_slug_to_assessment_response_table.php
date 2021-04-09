<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSlugToAssessmentResponseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('assessment_responses', function (Blueprint $table) {
            $table->string('slug', 50)->after('id');
            $table->unsignedBigInteger('user_id')->index()->after('assessment_option_id');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('assessment_responses', function (Blueprint $table) {
            $table->dropColumn('slug');
        });
    }
}
