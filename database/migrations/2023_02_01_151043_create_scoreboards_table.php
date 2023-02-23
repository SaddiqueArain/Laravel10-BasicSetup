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
        Schema::create('scoreboards', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained('users')->references('id')->onUpdate('cascade')->onDelete('cascade');
            $table->double('revenue');
            $table->double('headcount');
            $table->double('revenue_per_employee');
            $table->double('profit_margin');
            $table->double('return_on_equity');
            $table->double('return_on_debt');
            $table->double('gross_net_burn');
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
        Schema::dropIfExists('scoreboards');
    }
};
