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
        Schema::create('visit_objectives', function (Blueprint $table) {
            $table->id();
            $table->integer('company_id');
            $table->string('title');
            $table->string('status')->default('active');
            $table->timestamps();
            $table->unique(['company_id', 'title']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('visit_objectives');
    }
};
