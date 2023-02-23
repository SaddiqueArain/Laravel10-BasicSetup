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
        Schema::create('region_contents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('region_id')->nullable()->constrained('regions')->references('id');
            $table->foreignId('original_content_id')->nullable()->constrained('contents')->references('id')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('roadmap_step_id')->nullable()->constrained('roadmap_steps')->references('id')->onUpdate('cascade')->onDelete('cascade');
            $table->string('type');
            $table->text('content');

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
        Schema::dropIfExists('region_contents');
    }
};
