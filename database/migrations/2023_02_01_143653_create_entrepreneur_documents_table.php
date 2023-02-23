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
        Schema::create('entrepreneur_documents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('entrepreneur_id')->nullable()->constrained('users')->references('id')->onUpdate('cascade')->onDelete('cascade');;
            $table->foreignId('agent_id')->nullable()->constrained('users')->references('id')->onUpdate('cascade')->onDelete('cascade');;
            $table->string('name');
            $table->text('description');
            $table->foreignId('document_id')->nullable()->constrained('medias')->references('id')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('entrepreneur_documents');
    }
};
