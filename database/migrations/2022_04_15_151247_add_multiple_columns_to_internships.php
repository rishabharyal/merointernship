<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('internships', function (Blueprint $table) {
            $table->unsignedBigInteger('duration')->default(3);
            $table->boolean('is_wfh')->default(0);
            $table->boolean('is_parttime')->default(0);
            $table->boolean('is_for_women')->default(0);
            $table->boolean('is_with_joboffer')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('internships', function (Blueprint $table) {
            $table->dropColumn(['duration',  'is_wfh', 'is_parttime', 'is_for_women', 'is_with_joboffer']);
        });
    }
};
