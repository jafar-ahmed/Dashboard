<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateappcontentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appcontents', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->integer('products_numbers')->nullable();
            $table->integer('projects_numbers')->nullable();
            $table->integer('employees_numbers')->nullable();
            $table->integer('branches_numbers')->nullable();
            $table->integer('working_hours')->nullable();
            $table->string('mobile_1')->nullable();
            $table->string('mobile_2')->nullable();
            $table->string('email')->nullable();
            $table->string('address_1')->nullable();
            $table->string('address_2')->nullable();
            $table->string('address_3')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appcontents');
    }
}
