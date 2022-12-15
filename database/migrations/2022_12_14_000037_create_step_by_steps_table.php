<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStepByStepsTable extends Migration
{
    public function up()
    {
        Schema::create('step_by_steps', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title_en');
            $table->string('title_ar');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
