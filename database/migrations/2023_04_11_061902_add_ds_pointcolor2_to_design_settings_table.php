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
        Schema::table('design_settings', function (Blueprint $table) {
            //
            $table->string('ds_pointcolor2')->default('ffffff')->comment('포인트 색상  2');
            $table->string('ds_pointcolor3')->default('ffffff')->comment('포인트 색상  2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('design_settings', function (Blueprint $table) {
            //
        });
    }
};
