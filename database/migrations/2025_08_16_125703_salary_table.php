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
        //write my own code to create salary table
        Schema::create('salary',function(Blueprint $table){
              $table->id();
              $table->string('full_name');
              $table->string('email');
              $table->string('job_title');
              $table->decimal('salary');
              $table->string('currency');
              $table->integer('year_of_experience');
              $table->timestamps();
        });
     

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
