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
        Schema::create('personal_sites', function (Blueprint $table) {
            $table->bigIncrements('id')
                ->constrained(table: 'users')
                ->cascadeOnDelete();
            $table->string('your_name');
            $table->string('facebook_link');
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
        Schema::dropIfExists('personal_sites');
    }
};
