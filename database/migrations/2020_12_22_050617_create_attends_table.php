<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttendsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attends', function (Blueprint $table) {
            $table->string( 'student_id' );
            $table->foreign ( 'student_id' )-> references ( 'id' )-> on ( 'students' )-> onDelete ( 'cascade' );
            $table->unsignedBigInteger( 'classes_id' );
            $table->foreign ( 'classes_id' )-> references ( 'id' )-> on ( 'classes' )-> onDelete ( 'cascade' );
            $table->string( 'truant');
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
        Schema::dropIfExists('attends');
    }
}
