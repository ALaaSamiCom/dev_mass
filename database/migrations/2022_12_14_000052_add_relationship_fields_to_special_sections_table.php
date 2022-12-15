<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToSpecialSectionsTable extends Migration
{
    public function up()
    {
        Schema::table('special_sections', function (Blueprint $table) {
            $table->unsignedBigInteger('place_id')->nullable();
            $table->foreign('place_id', 'place_fk_7729180')->references('id')->on('layaoutplaces');
            $table->unsignedBigInteger('team_id')->nullable();
            $table->foreign('team_id', 'team_fk_7729075')->references('id')->on('teams');
        });
    }
}
