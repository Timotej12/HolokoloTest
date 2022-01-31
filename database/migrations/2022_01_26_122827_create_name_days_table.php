<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNameDaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('name_days', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->date('date')->unique();
            $table->timestamps();

            $table->index('name');
            $table->index('date');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('name_days');
    }
}
