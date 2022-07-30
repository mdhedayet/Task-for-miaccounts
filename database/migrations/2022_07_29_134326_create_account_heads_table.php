<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountHeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('account_heads', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("main_level_id")->nullable();
            $table->unsignedBigInteger("sub_level_id")->nullable();
            $table->unsignedBigInteger("child_level_id")->nullable();
            $table->string("name");
            $table->foreign('main_level_id')->references('id')->on('main_levels')->onDelete('cascade');
            $table->foreign('sub_level_id')->references('id')->on('sub_levels')->onDelete('cascade');
            $table->foreign('child_level_id')->references('id')->on('child_levels')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('account_heads');
    }
}
