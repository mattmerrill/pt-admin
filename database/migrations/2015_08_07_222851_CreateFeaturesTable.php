<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateFeaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('features', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('class_path');
            $table->text('description');
            $table->integer('category_id');
            $table->string('version');
            $table->jsonb('integration_types');
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
        //
        Schema::drop('features');
    }
}
