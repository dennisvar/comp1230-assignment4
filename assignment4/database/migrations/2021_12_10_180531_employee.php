<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Employee extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('first_name',255)->nullable(false);
            $table->string('last_name',255)->nullable(false);
            $table->string('email',255)->nullable(false)->unique('email');
            $table->string('cell_number',255)->nullable(false);
            $table->string('position',255)->nullable(false);
            $table->string('password',255)->nullable(false);
            $table->string('picture',255)->nullable(true);
            $table->boolean('status')->nullable(false);
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
        Schema::dropIfExists('employees');

    }
}
