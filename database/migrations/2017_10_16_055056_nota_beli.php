<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NotaBeli extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nota_beli',function(Blueprint $table){
            $table->string('id_nota',100);
            $table->string('supplier',100);
            $table->date('tanggal');
            $table->string('catatan',255);
            $table->integer('total');
            $table->string('id_petugas',100);

            $table->primary('id_nota');
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
        Schema::drop('nota_beli');
    }
}
