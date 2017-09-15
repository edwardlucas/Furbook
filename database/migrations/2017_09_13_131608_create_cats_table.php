<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cats', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->date('date_of_birth');
            $table->integer('breed_id')->unsigned()->nullable();
            $table->foreign('breed_id')->references('id')->on('breeds');
            $table->softDeletes(); //采用soft delete需要创建delete_at列
            $table->timestamps(); //会自动增加创建时间和更新时间两个列
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cats');
    }
}
