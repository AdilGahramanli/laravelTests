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
        //
        Schema::create("message", function (Blueprint $table) {
            $table->Uuid("id");
            $table->string("message");
    });}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
