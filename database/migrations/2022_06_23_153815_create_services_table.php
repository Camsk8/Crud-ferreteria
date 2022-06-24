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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',45);
            $table->string('descripcion',45);
            $table->time('tiempo_max',45);
            $table->string('costo_extra',45);
            $table->string('clave',45);
            $table->unsignedBigInteger('promotions_id');
            $table->foreign("promotions_id")->references("id")->on("promotions")
            ->onDelete("cascade")->onUpdate("cascade");
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
        Schema::dropIfExists('services');
    }
};
