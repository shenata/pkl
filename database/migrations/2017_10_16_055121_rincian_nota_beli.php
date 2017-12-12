<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RincianNotaBeli extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rincian_nota_beli',function(Blueprint $table){
            $table->increments('id_item');
            $table->string('id_nota',100);
            $table->string('item',100);
            $table->integer('harga_satuan');
            $table->integer('disc');
            $table->integer('quantity');
            $table->string('status',100);
            $table->string('retur',100);

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
        Schema::drop('rincian_nota_beli');
    }
}
