<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('document_number'); //modificar tamanho campo cpf
            $table->string('email'); 
            $table->string('phone'); 
            $table->boolean('defaulter');
            $table->date('date_birth'); 
            $table->char('sex', 1); 
            $table->enum('marital_status', array_keys(\App\Model\Client::MARITAL_STATUS));
            $table->string('physical_desability')->nullable();
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
        Schema::dropIfExists('clients');
    }
}
