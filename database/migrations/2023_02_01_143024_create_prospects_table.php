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
        Schema::create('prospects', function (Blueprint $table) {
            $table->id();
            $table->foreignId('region_id')->nullable()->constrained('regions')->references('id')->onUpdate('cascade')->onDelete('cascade');;
            $table->integer('is_registered');
            $table->string('full_name');
            $table->string('email');
            $table->string('phone');
            $table->string('gender');
            $table->string('pronouns');
            $table->string('company_name');
            $table->string('job_title');
            $table->integer('timezone');
            $table->string('social_linked');
            $table->string('social_twitter');
            $table->string('social_instagram');
            $table->string('social_other');
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
        Schema::dropIfExists('prospects');
    }
};
