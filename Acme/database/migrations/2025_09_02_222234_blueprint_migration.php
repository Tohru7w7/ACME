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
        Schema::create('blueprint',function(Blueprint $table){
            $table->id();
            $table->string('name_blueprint',50);
            $table->string('document',50);
            $table->integer('version');
            $table->integer('sheet');
            $table->foreignId('project_id')->constrained('project');
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
