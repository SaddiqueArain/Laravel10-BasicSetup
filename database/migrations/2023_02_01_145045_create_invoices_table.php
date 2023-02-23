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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('payee_id')->nullable()->constrained('users')->references('id')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('recipient_id')->nullable()->constrained('users')->references('id')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('subscription_id')->nullable()->constrained('subscriptions')->references('id')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('appointment_id')->nullable()->constrained('appointments')->references('id')->onUpdate('cascade')->onDelete('cascade');
            $table->string('type');
            $table->string('status');
            $table->double('tax');
            $table->double('total');
            $table->text('billing_address');
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
        Schema::dropIfExists('invoices');
    }
};
