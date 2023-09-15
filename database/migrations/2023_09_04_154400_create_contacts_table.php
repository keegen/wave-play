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
    Schema::create('contacts', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('personal_dealer_site_id');
        $table->string('first_name');
        $table->string('last_name');
        $table->string('email');
        $table->string('phone')->nullable();
        $table->text('message');
        $table->text('notes')->nullable();
        $table->string('status')->default('new'); // Default status as 'new'
        $table->timestamps();

        $table->foreign('personal_dealer_site_id')->references('id')->on('personal_site_details')->onDelete('cascade');
    });
}

public function down()
{
    Schema::dropIfExists('contacts');
}

};
