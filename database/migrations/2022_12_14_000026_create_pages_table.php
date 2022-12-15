<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('keywords_en')->nullable();
            $table->longText('keywords_ar')->nullable();
            $table->string('title_en');
            $table->string('title_ar');
            $table->longText('description_en')->nullable();
            $table->longText('description_ar')->nullable();
            $table->longText('short_description_en')->nullable();
            $table->longText('short_description_ar')->nullable();
            $table->string('page_title')->nullable();
            $table->string('layout')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
