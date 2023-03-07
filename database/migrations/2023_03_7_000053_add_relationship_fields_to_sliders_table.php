<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToSlidersTable extends Migration
{
    public function up()
    {
        Schema::table('sliders', function (Blueprint $table) {
            $table->unsignedBigInteger('place_id')->nullable();
            $table->foreign('place_id', 'place_fk_7737565')->references('id')->on('layaoutplaces');
        });
    }
}
