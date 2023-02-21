<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('region_id')->constrained('regions')->onUpdate('cascade')->onDelete('cascade');

            $table->string('stripe_account_id');
            $table->integer('stripe_onboarded');
            $table->boolean('account_status');
            $table->integer('current_roadmap_step');
            $table->string('photo');
            $table->string('full_name');
            $table->string('email');
            $table->string('phone');
            $table->string('password');
            $table->string('gender');
            $table->integer('pronouns');
            $table->string('company_name');
            $table->string('job_title');
            $table->integer('timezone');
            $table->boolean('tfa_enabled');
            $table->string('social_linked');
            $table->string('social_twitter');
            $table->string('social_instagram');
            $table->string('social_other');
            $table->text('availability_settings');
            $table->integer('logo');
            $table->string('primary_color');
            $table->string('secondary_color');
            $table->text('billing_address');
            $table->dateTime('last_login');
//            $table->string('name');
//            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
//            $table->string('password');
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
