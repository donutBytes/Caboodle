<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserKitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_kits', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id')->index();
            $table->string('kit_id')->index();
            $table->string('kit_name');
            $table->string('kit_type');
            $table->string('description');
            $table->integer('item_quantity');
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
        Schema::dropIfExists('user_kits');
    }
}
