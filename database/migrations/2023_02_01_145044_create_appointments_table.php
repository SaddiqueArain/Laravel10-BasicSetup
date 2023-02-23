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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('entrepreneur_id')->nullable()->constrained('users')->references('id');
            $table->foreignId('appointment_type_id')->nullable()->constrained('appointment_types')->references('id')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('agent_id')->nullable()->constrained('users')->references('id')->onUpdate('cascade')->onDelete('cascade');
            $table->string('communication_type');
            $table->string('token');
            $table->dateTime('start_time');
            $table->dateTime('end_time');
            $table->integer('total_time');
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
        Schema::dropIfExists('appointments');
    }
};
