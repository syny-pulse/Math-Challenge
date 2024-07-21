<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->integer('schoolRegNo')->primary();
            $table->string('schoolName', 30);
            $table->string('district', 15);
            $table->integer('schoolRepID'); // This will need to be a foreign key reference if it relates to another table
            $table->string('emailAddress', 30)->unique();
            $table->string('password', 50);
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
        Schema::dropIfExists('schools');
    }
}
