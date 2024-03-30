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
        Schema::create('deal', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('account_id');
            $table->unsignedBigInteger('contact_id');
            // $table->unsignedBigInteger('stage');
            $table->decimal('value', 10, 2);
            $table->decimal('probability', 10, 2);
            $table->date('expected_close_date');
            $table->text('notes');
            $table->timestamps();
            $table->foreign('account_id')->references('id')->on('organizations');
            $table->foreign('contact_id')->references('id')->on('contacts');
            // $table->foreign('stage')->references('id')->on('deal_stages');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deal');
    }
};
