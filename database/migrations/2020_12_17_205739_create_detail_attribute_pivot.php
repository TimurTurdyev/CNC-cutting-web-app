<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailAttributePivot extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_attribute', function (Blueprint $table) {
            $table->integer('detail_id')->unsigned()->index();
            $table->foreign('detail_id')->references('id')->on('details')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('attribute_id')->unsigned()->index();
            $table->foreign('attribute_id')->references('id')->on('attributes')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('detail_attribute');
    }
}
