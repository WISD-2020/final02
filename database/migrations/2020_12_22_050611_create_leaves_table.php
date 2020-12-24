<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeavesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leaves', function (Blueprint $table) {
            $table->bigIncrements ('id');
            $table->string( 'student_id' );
            $table->string( 'teacher_id' );
            $table->unsignedBigInteger( 'classes_id' );
            $table->string('reason');
            $table->string('type');
            $table->dateTime('leave_date');
            $table->dateTime('review_date')->nullable( true );
            $table->string('result')->nullable( true );
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
        Schema::dropIfExists('leaves');
    }
}
