<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToItemsTable extends Migration
{
    public function up()
    {
        Schema::table('items', function (Blueprint $table) {
            $table->unsignedBigInteger('step_item_id')->nullable();
            $table->foreign('step_item_id', 'step_item_fk_7737527')->references('id')->on('step_by_steps');
        });
    }
}
