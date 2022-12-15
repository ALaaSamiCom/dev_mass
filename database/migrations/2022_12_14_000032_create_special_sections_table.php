<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpecialSectionsTable extends Migration
{
    public function up()
    {
        Schema::create('special_sections', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title_en');
            $table->string('title_ar');
            $table->longText('description_en')->nullable();
            $table->longText('description_ar')->nullable();
            $table->string('section_place')->nullable();
            $table->string('status')->nullable();
            $table->string('order');
            $table->longText('short_description_en')->nullable();
            $table->longText('short_description_ar')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
