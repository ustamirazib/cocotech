<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSmartphoneTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('smartphone', function (Blueprint $table) {
            $table->increments('id');
            $table->string("namaSmartphone");
            $table->text("gambarBarang");
            $table->string("spesifikasiBarang");
            $table->string("tagsBarang");
            $table->string("garansiBarang");
            $table->string("hargaBarang");
            $table->string("pembuatPost");
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
        Schema::dropIfExists('smartphone');
    }
}
