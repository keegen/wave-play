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
    Schema::create('personal_dealer_themes', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('user_id');  // User ID column
        $table->string('name');
        $table->text('description')->nullable();
        $table->string('image_path');
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
        Schema::dropIfExists('personal_dealer_themes');
    }
};
