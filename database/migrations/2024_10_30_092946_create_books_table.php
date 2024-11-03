<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('books', function (Blueprint $table) {
        $table->id(); // id (Primary Key, Auto-Increment)
        $table->string('title'); // title (String)
        $table->string('author'); // author (String)
        $table->integer('published_year'); // published_year (Integer)
        $table->string('genre'); // genre (String)
        $table->text('description'); // description (Text)
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
        Schema::dropIfExists('books');
    }
};
