<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExtraFieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('extra_fields', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kit_id');
            $table->string('kit_item_id')->index();
            $table->string('field1');
            $table->string('field1_name');
            $table->string('field2');
            $table->string('field2_name');
            $table->string('field3');
            $table->string('field3_name');
            $table->string('field4');
            $table->string('field4_name');
            $table->string('field5');
            $table->string('field5_name');
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
        Schema::dropIfExists('extra_fields');
    }
}
