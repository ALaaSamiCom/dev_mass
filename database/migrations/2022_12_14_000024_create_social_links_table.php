<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSocialLinksTable extends Migration
{
    public function up()
    {
        Schema::create('social_links', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('value');
            $table->string('title');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
