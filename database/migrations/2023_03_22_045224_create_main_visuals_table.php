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
        Schema::create('main_visuals', function (Blueprint $table) {
            $table->id();
            $table->text('title')->comment('메인텍스트');
            $table->text('subtitle')->comment('서브텍스트');
            $table->integer('order')->comment('정렬순서');
            $table->enum('isUse', ['Y','N'])->comment('사용여부');
            $table->string('fileName', 255)->comment('파일명');
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
        Schema::dropIfExists('main_visuals');
    }
};
