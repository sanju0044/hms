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
        Schema::create('patients_details', function (Blueprint $table) {
            $table->id();
            $table->string('patient_reg_id', 255)->unique();
            $table->string('patient_name', 255);
            $table->string('patient_email')->unique();
            $table->string('patient_phone', 20);
            $table->string('patient_alt_phone', 20);
            $table->date('patient_dob');
            $table->enum('patient_gender', ['male', 'female', 'other']);
            $table->string('patient_blood_group')->nullable();
            $table->string('patient_relation')->nullable();
            $table->string('patient_relation_name')->nullable();
            $table->string('patient_relation_phone')->nullable();
            $table->text('patient_remark')->nullable();
            $table->string('patient_address1')->nullable();
            $table->string('patient_address2')->nullable();
            $table->string('patient_country')->nullable();
            $table->string('patient_city')->nullable();
            $table->string('patient_state')->nullable();
            $table->string('patient_pincode', 10)->nullable();
            $table->string('patient_passport_no', 30)->nullable();
            $table->string('patient_national_no', 30)->nullable();
            $table->string('patient_driving_no', 30)->nullable();
            $table->string('patient_pan_card', 30)->nullable();
            $table->string('patient_aadher_no', 30)->nullable();
            $table->boolean('patient_status')->default(0);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients_details');
    }
};
