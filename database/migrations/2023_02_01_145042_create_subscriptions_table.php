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
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('payee_id')->nullable()->constrained('users')->references('id')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('recipient_id')->nullable()->constrained('users')->references('id')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('subscription_term');
            $table->boolean('is_public');
            $table->string('token');
            $table->boolean('payment_on_signup');
            $table->double('tax');
            $table->double('total');
            $table->text('description');

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
        Schema::dropIfExists('subscriptions');
    }
};
