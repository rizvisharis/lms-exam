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
        Schema::table('tests', function (Blueprint $table) {
            $table->foreignId('subject_id')->after('name')->nullable()->constrained();
        });

        Schema::table('results', function (Blueprint $table) {
            $table->foreignId('subject_id')->after('user_id')->nullable()->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tests', function (Blueprint $table) {
            $table->dropColumn('subject_id');
        });

        Schema::table('results', function (Blueprint $table) {
            $table->dropColumn('subject_id');
        });
    }
};
