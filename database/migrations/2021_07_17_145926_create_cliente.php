<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCliente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliente', function (Blueprint $table) {
            $table->id();
            $table->string('nome')->nullable()->index();
            $table->dateTime('data_nascimento')->nullable()->index();
            $table->string('sexo')->nullable()->index();
            $table->string('cep')->nullable()->index();
            $table->string('endereco')->nullable()->index();
            $table->string('numero')->nullable()->index();
            $table->string('complemento')->nullable()->index();
            $table->string('bairro')->nullable()->index();
            $table->string('estado')->nullable()->index();
            $table->string('cidade')->nullable()->index();
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
        Schema::dropIfExists('cliente');
    }
}
