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
        Schema::table('personal_dealer_themes', function (Blueprint $table) {
            $table->string('pd_theme_primary_color')->default('#defaultPrimaryColor');
            $table->string('pd_theme_secondary_color')->default('#defaultSecondaryColor');
        });
    }

    public function down()
    {
        Schema::table('personal_dealer_themes', function (Blueprint $table) {
            $table->dropColumn(['pd_theme_primary_color', 'pd_theme_secondary_color']);
        });
    }
};
