<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id()->unique();
            $table->string('name');
            $table->string('category');
            $table->string('author');
            $table->string('publication');
//            $table->unsignedInteger('edition');
//            $table->unsignedInteger('authId');
//            $table->unsignedInteger('catId');
//            $table->foreign('catId')->references('id')->on('categories');
//            $table->foreign('authId')->references('authId')->on('authors');
//            $table->unsignedInteger('totalAvailable')->default(0);
//            $table->unsignedInteger('totalIssue')->default(0);
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
}
