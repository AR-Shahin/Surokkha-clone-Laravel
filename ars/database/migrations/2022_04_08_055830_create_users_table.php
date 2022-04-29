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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('nid')->unique();
            $table->string('phone')->unique();
            $table->dateTime('date_of_birth');
            $table->enum('status', ['pending', 'first_dose', 'second_dose', 'booster'])->default('pending');
            $table->boolean('dose_one')->default(false);
            $table->boolean('dose_two')->default(false);
            $table->foreignId('vaccine_id');
            $table->foreignId('hospital_id');
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
        Schema::dropIfExists('users');
    }
};
