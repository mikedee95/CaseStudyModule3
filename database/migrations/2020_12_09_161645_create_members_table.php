<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('memName', 100)->default('null');
            $table->string('email', 100)->unique();
            $table->string('contact', 50)->default('null')->nullable();
            $table->string('address', 200)->default('null')->nullable();
            $table->string('dept', 100)->default('null')->nullable();
            $table->string('memType', 10)->nullable(false);
            $table->string('password', 100)->nullable(false);
            $table->string('picLink', 200)->default('null')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
    }
}
