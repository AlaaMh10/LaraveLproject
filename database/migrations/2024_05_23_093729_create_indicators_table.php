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
        Schema::create('Indicators', function (Blueprint $table) {
            $table->id();
            $table->string('indicator_ctgr_id')->nullable();
            $table->string('title')->nullable();
            $table->string('image')->nullable();
            $table->string('tags')->nullable();
            $table->text('description')->nullable(); 
            $table->integer('price')->nullable(); 


            $table->string('MT4_free')->nullable();
            $table->string('MT4_pro')->nullable();
            $table->string('MT5_free')->nullable();
            $table->string('MT5_pro')->nullable();

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
        Schema::dropIfExists('indicators');
    }
};