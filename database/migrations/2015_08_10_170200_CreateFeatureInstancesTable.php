<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateFeatureInstancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('feature_instances', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('account_id');
            $table->integer('feature_id', false, true);
            $table->foreign('feature_id')->references('id')->on('features')->onDelete('cascade');
            $table->string('name');
            $table->text('config');
            $table->jsonb('integration_ids');
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
        Schema::drop('feature_instances');
    }
}
