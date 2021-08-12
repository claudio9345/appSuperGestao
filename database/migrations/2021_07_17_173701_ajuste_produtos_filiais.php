<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AjusteProdutosFiliais extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filiais',function (Blueprint $table){
            $table->id();
            $table->timestamps();
            $table->string('filial',30);

        });

        Schema::create('produto_filiais',function (Blueprint $table){
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('filial_id');
            $table->unsignedBigInteger('produto_id');
            $table->integer('estoque_maximo');
            $table->integer('estoque_minimo');
            $table->decimal('preco_venda',8,2);

            $table->foreign('filial_id')->references('id')->on('filiais');
            $table->foreign('produto_id')->references('id')->on('produtos');
        });

        Schema::table('produtos',function (Blueprint $table){
            $table->dropColumn(['preco_venda','estoque_minimo','estoque_maximo']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('produtos',function (Blueprint $table){
            $table->integer('estoque_maximo');
            $table->integer('estoque_minimo');
            $table->decimal('preco_venda',8,2);
        });

        Schema::dropIfExists('produto_filiais');

        Schema::dropIfExists('filiais');
    }
}
