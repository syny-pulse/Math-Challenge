<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnsbanksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ansbanks', function (Blueprint $table) {
            $table->id('answerBankID'); // Auto-incrementing primary key
            $table->unsignedBigInteger('challengeNo'); // Foreign key
            $table->foreign('challengeNo')
                  ->references('challengeNo')
                  ->on('challenges') // Updated table name
                  ->onDelete('cascade');
            
            $table->unsignedBigInteger('questionBankID')->nullable(); // Foreign key
            $table->foreign('questionBankID')
                  ->references('questionBankID')
                  ->on('qtnbank')
                  ->onDelete('set null');
            
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
        Schema::dropIfExists('ansbanks');
    }
}
