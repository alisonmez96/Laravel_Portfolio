<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('likes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('project_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('likes', function($table){
            $table->foreign('user_id')->references('id')->on("users")->onDelete('cascade');
        });

        Schema::table('likes', function($table){
            $table->foreign('project_id')->references('id')->on("projects")->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::table('likes', function (Blueprint $table) {
            $table->dropForeign('project_id');
        });

        Schema::table('likes', function (Blueprint $table) {
            $table->dropForeign('user_id');
        });


        Schema::dropIfExists('likes');
    }
}
