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
        Schema::create('cars', function (Blueprint $table) {
            /*$table->foreignID(column: 'user_id')
                ->constrained(table:'users')
                ->cascadeOnDelete(); */
            $table->string(column:'title');
            $table->string(column:'description');
            $table->string(column:'price');
            $table->string(column:'year');
            $table->string(column:'vehicle_type');
            $table->string(column:'brand');
            $table->string(column:'condition');


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
        Schema::dropIfExists('cars');
    }
};
