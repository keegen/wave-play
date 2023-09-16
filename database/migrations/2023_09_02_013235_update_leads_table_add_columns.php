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
    Schema::table('leads', function (Blueprint $table) {
        if (!Schema::hasColumn('leads', 'contact_preference')) {
            $table->string('contact_preference')->nullable();
        }
        if (!Schema::hasColumn('leads', 'contact_time')) {
            $table->string('contact_time');
        }
        
    });
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
{
    Schema::table('leads', function (Blueprint $table) {
        if (Schema::hasColumn('leads', 'contact_preference')) {
            $table->dropColumn('contact_preference');
        }
        if (Schema::hasColumn('leads', 'contact_time')) {
            $table->dropColumn('contact_time');
        }
    });
}

};
