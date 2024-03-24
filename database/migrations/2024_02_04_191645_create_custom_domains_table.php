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
        Schema::create('custom_domains', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('personal_site_detail_id');
            $table->string('domain')->unique();
            $table->boolean('verified')->default(false);
            $table->timestamps();
        
            $table->foreign('personal_site_detail_id')->references('id')->on('personal_site_details')->onDelete('cascade');
        });        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('custom_domains');
    }
};
