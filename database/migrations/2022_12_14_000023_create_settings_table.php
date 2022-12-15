<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title_en');
            $table->string('title_ar');
            $table->longText('description_en')->nullable();
            $table->longText('description_ar')->nullable();
            $table->longText('keywords_en')->nullable();
            $table->longText('keywords_ar')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('website')->nullable();
            $table->string('latitudes')->nullable();
            $table->string('meridians')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
