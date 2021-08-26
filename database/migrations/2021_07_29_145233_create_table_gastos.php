<?php
//
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableGastos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //up  crea columnas //php artisan migrate
        Schema::create('gastos', function (Blueprint $table) {
            $table->id();
            $table->String('nombre');
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
        //borra columnas //php artisan migrate:rollback
        Schema::dropIfExists('gastos');
    }
}
