<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classes', function (Blueprint $table) {
            $table->bigIncrements ('id');
            $table->unsignedBigInteger ( 'course_id' );
            $table->foreign ( 'course_id' )-> references ( 'id' )-> on ( 'courses' )-> onDelete ( 'cascade' );
            $table->unsignedBigInteger( 'leave_id' );
            $table->foreign ( 'leave_id' )-> references ( 'id' )-> on ( 'leaves' )-> onDelete ( 'cascade' );
            $table->date('date');
            $table->time('time');
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
        Schema::dropIfExists('classes');
    }
}
