<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNurseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nurse', function (Blueprint $table) {
            $table->increments('idEnfermera');
            $table->string('nombre');
            $table->string('activo');
           // $table->unsignedbiginteger('usuario_id');

           // $table->foreign('usuario_id')->references('id')->on('users');

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
        Schema::dropIfExists('nurse');
    }
}
