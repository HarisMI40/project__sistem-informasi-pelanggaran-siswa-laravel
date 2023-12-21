<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddReportbytypeToViolationList extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('violation_lists', function (Blueprint $table) {
            $table->unsignedBigInteger('created_by_id');
            $table->string('created_by_type');

            $table->index(['created_by_id', 'created_by_type']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('violation_lists', function (Blueprint $table) {
            $table->dropColumn('created_by_id');
            $table->dropColumn('created_by_type');
        });
    }
}
