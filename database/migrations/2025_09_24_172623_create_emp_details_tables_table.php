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
        Schema::create('emp_details_tables', function (Blueprint $table) {
            $table->id();
            $table->string('emp_reg_id', 255)->unique();
            $table->string('emp_name', 255);
            $table->string('emp_email')->unique();
            $table->string('emp_phone', 20);
            $table->string('emp_alt_phone', 20);
            $table->date('emp_dob');
            $table->enum('emp_gender', ['male', 'female', 'other']);
            $table->integer('emp_yoe'); // Year of experience
            $table->unsignedBigInteger('emp_department_id');
            $table->unsignedBigInteger('emp_designation_id');
            $table->string('emp_blood_group')->nullable();
            $table->text('emp_bio')->nullable();
            $table->string('emp_image')->nullable();
            $table->string('emp_address1')->nullable();
            $table->string('emp_address2')->nullable();
            $table->string('emp_country')->nullable();
            $table->string('emp_city')->nullable();
            $table->string('emp_state')->nullable();
            $table->string('emp_pincode', 10)->nullable();
            $table->boolean('emp_status')->default(0);
            $table->string('emp_passport_no', 30)->nullable();
            $table->string('emp_national_no', 30)->nullable();
            $table->string('emp_driving_no', 30)->nullable();
            $table->string('emp_pan_card', 30)->nullable();
            $table->integer('emp_aadher_no', 30)->nullable();
            $table->integer('emp_aadher_no', 30)->nullable();
            $table->string('bank', 100)->nullable();
            $table->string('branch', 100)->nullable();
            $table->string('bank_acc_no', 50)->nullable();
            $table->string('bank_ifsc_code', 50)->nullable();

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emp_details_tables');
    }
};
