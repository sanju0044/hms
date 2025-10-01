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
        Schema::create('expenses_tables', function (Blueprint $table) {
            $table->id();
            $table->string('expense_name', 255);         // Expense title/short description
            $table->string('expense_category_id', 100);             // Category of expense
            $table->decimal('amount', 10, 2);            // Amount with decimal (e.g., 9999.99)
            $table->date('expense_date');                // Date of expense
            $table->string('purchased_by', 100);         // Who purchased
            $table->string('payment_method', 50);        // e.g., Cash, Card, UPI
            $table->enum('status', ['pending', 'paid', 'cancelled'])->default('pending'); // Status
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expenses_tables');
    }
};
