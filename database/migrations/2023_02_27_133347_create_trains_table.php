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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company', 100);
            $table->string('departed_station', 50);
            $table->string('arrival_station', 50);
            $table->string('departure_time');
            $table->string('arrival_time');
            $table->smallInteger('code')->unsigned();
            $table->tinyInteger('n_carriages');
            $table->boolean('in_time')->default(1);
            $table->boolean('delete')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
