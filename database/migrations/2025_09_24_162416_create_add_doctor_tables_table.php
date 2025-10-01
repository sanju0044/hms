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
        Schema::create('add_doctor_tables', function (Blueprint $table) {
            $table->id();
            $table->string('doctor_reg_id')->unique();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('dr_name', 255);
            $table->string('dr_email')->unique();
            $table->string('dr_phone', 20);
            $table->string('dr_alt_phone', 20);
            $table->string('dr_speciality', 100);
            $table->date('dr_dob');
            $table->enum('dr_gender', ['male', 'female', 'other']);
            $table->integer('dr_yoe'); // Year of experience
            $table->unsignedBigInteger('dr_department_id');
            $table->unsignedBigInteger('dr_designation_id');
            $table->string('dr_medical_license_no')->nullable();
            $table->string('dr_language_spoken')->nullable();
            $table->string('dr_blood_group')->nullable();
            $table->text('dr_bio')->nullable();
            $table->string('dr_image')->nullable();
            $table->string('dr_address1')->nullable();
            $table->string('dr_address2')->nullable();
            $table->string('dr_country')->nullable();
            $table->string('dr_city')->nullable();
            $table->string('dr_state')->nullable();
            $table->string('dr_pincode', 10)->nullable();
            $table->decimal('dr_consultation_charge', 10, 2)->nullable();
            $table->time('dr_session_time')->nullable();
            $table->string('dr_passport_no', 30)->nullable();
            $table->string('dr_national_no', 30)->nullable();
            $table->string('dr_driving_no', 30)->nullable();
            $table->string('dr_pan_card', 30)->nullable();
            $table->integer('dr_aadher_no', 30)->nullable();
            $table->string('bank', 100)->nullable();
            $table->string('branch', 100)->nullable();
            $table->string('bank_acc_no', 50)->nullable();
            $table->string('bank_ifsc_code', 50)->nullable();
            $table->string('passbook', 50)->nullable();

            $table->boolean('dr_status')->default(0);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('add_doctor_tables');
    }
};
