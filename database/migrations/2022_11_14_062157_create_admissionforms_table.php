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
        Schema::create('admissionforms', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->double('birth_certificate_no');
            $table->string('email');
            $table->date('birth_date');
            $table->string('nationality');
            $table->string('religion');
            $table->string('gender');
            $table->string('prvSchool');
            $table->string('fName');
            $table->double('fNid');
            $table->string('fOccupation');
            $table->double('fIncome');
            $table->string('fMail');
            $table->double('fNumber');
            $table->string('mName');
            $table->double('mNid');
            $table->string('mOccupation');
            $table->double('mIncome');
            $table->string('mMail');
            $table->double('mNumber');
            $table->string('present_address');
            $table->double('post_code');
            $table->string('district');
            $table->string('thana');
            $table->double('addmission_class');
            $table->string('payment_method');
            $table->double('addmission_lottery_number');
            $table->date('pay_date');
            $table->string('qouta');
            $table->double('amount')->nullable();
            $table->string('transaction_id')->nullable();
            $table->string('status')->nullable();
            $table->string('phone')->nullable();
            // $table->string('photo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admissionforms');
    }
};
