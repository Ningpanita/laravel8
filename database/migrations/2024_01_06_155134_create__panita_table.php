<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePanitaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('panita', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('nkkk')->nullable();
            $table->float('ning',16,2)->nullable();
            $table->string('nut')->nullable();
            $table->date('niing')->nullable();
            $table->text('nnii')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('panita');
    }
}
