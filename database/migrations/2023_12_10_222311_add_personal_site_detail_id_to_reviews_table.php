<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPersonalSiteDetailIdToReviewsTable extends Migration
{
    public function up()
    {
        Schema::table('reviews', function (Blueprint $table) {
            $table->unsignedBigInteger('personal_site_detail_id')->nullable();
            // If 'personal_site_detail_id' is supposed to reference another table, add a foreign key constraint as well.
            // $table->foreign('personal_site_detail_id')->references('id')->on('personal_site_details');
        });
    }

    public function down()
    {
        Schema::table('reviews', function (Blueprint $table) {
            $table->dropColumn('personal_site_detail_id');
        });
    }
}
