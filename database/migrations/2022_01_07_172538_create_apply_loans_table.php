<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplyLoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apply_loans', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('loan_id');
            $table->string('name');
            $table->string('city');
            $table->string('zip');
            $table->string('dob');
            $table->string('identification');
            $table->string('recent_image');
            $table->string('address');
            $table->string('amount');
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
        Schema::dropIfExists('apply_loans');
    }
}
