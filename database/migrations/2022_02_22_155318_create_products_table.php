<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->charset('utf8mb4');
            $table->collation('utf8mb4_general_ci');
            $table->id();
            $table->string('name', length: 100)->unique();
            $table->string('description', length: 100);
            $table->string('measure', length: 10); // Medida ( cx, pacote, tambor, metros, etc...)
            $table->integer('unit_measure'); // Quantidade por medida ( ex. 12 p/ cx, 1,5 litros, etc...)
            $table->float('unit_price', precision: 2); // Valor Unitário
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
        Schema::dropIfExists('products');
    }
};
