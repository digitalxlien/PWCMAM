<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 50);
            $table->string('addres', 50);
            $table->string('colonia', 50);
            $table->string('city', 50);
            $table->string('state', 20);
            $table->string('country', 20);
            $table->string('telephone', 20);
            $table->string('email', 50);
            $table->string('date_birth', 15);
            $table->double('height', 2,2); //1 numero entero, 2 decimales
            $table->string('sex', 1);
            $table->string('minimal_schooling', 20);
            $table->string('speciality', 50);
            $table->string('current_occupation', 50);
            $table->string('inscription_request', 50);
            $table->boolean('willing_to_live_jalisco');
            $table->text('comments');
            $table->text('questions');
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
        Schema::dropIfExists('registrations');
    }
}
