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
        Schema::table('personal_site_details', function (Blueprint $table) {
            $table->string('new_vehicle_link')->nullable();
            $table->string('used_vehicle_link')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('personal_site_details', function (Blueprint $table) {
            $table->dropColumn(['new_vehicle_link', 'used_vehicle_link']);
        });
    }
};
