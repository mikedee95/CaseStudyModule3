<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReturnedBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('returned_books', function (Blueprint $table) {
            $table->id();
            $table->dateTime('retDate')->nullable(false);
            $table->unsignedInteger('bookId')->nullable(false);
            $table->unsignedInteger('memId')->nullable(false);
            $table->timestamps();
           $table->foreign('bookId')->references('id')->on('books');
           $table->foreign('memId')->references('id')->on('members');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('returned_books');
    }
}
