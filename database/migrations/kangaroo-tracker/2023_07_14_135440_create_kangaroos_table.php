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
        Schema::create('kangaroos', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('nickname')->nullable()->default(null);
            $table->float('weight', 8, 2);
            $table->float('height', 8, 2);
            $table->tinyInteger('gender');
            $table->string('color')->nullable()->default(null);
            $table->tinyInteger('friendliness')->nullable()->default(null);
            $table->date('birthday');
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kangaroos');
    }
};
