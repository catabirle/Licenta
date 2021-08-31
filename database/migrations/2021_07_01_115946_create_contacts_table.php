<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id('id');
            $table->integer('id_user');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('series');
            $table->text('message');
            $table->date('date_from')->default(date("Y-m-d H:i:s"));
            $table->date('date_to')->default(date("Y-m-d H:i:s"));
            $table->integer('price')->default('0');
            $table->tinyInteger('accept')->default('0');
            $table->string('image_name')->nullable();
            $table->string('image_path')->nullable();
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
        Schema::dropIfExists('contacts');
    }
}