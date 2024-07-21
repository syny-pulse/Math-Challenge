<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQtnbanksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qtnbank', function (Blueprint $table) {
            $table->id('questionBankID'); // Auto-incrementing primary key
            $table->unsignedBigInteger('challengeNo'); // Foreign key
            $table->foreign('challengeNo')->references('challengeNo')->on('challenges')->onDelete('cascade');
            $table->timestamps(); // Adds created_at and updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('qtnbank');
    }
}
