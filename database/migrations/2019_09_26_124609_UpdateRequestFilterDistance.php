<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateRequestFilterDistance extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('request_filters', function (Blueprint $table) {
           $table->double('user_location_distance',10,2)->default(0)->after('provider_id'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('request_filters', function (Blueprint $table) {
           $table->dropColumn('user_location_distance');  
        });
    }
}
