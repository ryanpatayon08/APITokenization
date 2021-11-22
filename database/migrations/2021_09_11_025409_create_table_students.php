<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableStudents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Students', function (Blueprint $table) {
            $table->id();
            $table->string('firstname', 60)->nullable();
            $table->string('middlename', 60)->nullable();
            $table->string('lastname', 60)->nullable();
            $table->date('birthdate')->nullable();
            $table->string('gender', 12)->nullable();
            $table->string('address', 500)->nullable();
            $table->string('citizenship', 50)->nullable();
            $table->string('religion', 50)->nullable();
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
        Schema::dropIfExists('Students');
    }
}
