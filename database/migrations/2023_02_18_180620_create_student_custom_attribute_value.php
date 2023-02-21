<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentCustomAttributeValue extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_custom_attribute_value', function (Blueprint $table) {
            $table->id();
            $table->string('value')->nullable();
            $table->foreignId('student_id')->constrained();
            $table->foreignId('student_attribute_id')->constrained();
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
        Schema::dropIfExists('student_custom_attribute_value');
    }
}
