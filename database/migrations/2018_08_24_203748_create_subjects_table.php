<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subjects', function (Blueprint $table) {
            $table->increments('id');;
            $table->integer('course_id')->unsigned();
            $table->integer('type_id')->unsigned();
            $table->integer('semester');
            $table->string('subject');
            $table->integer('ects');
            $table->integer('optional')->default(0);
            $table->timestamps();

            $table->foreign('course_id')
                ->on('courses')->references('id')
                ->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('type_id')
                ->on('subject_types')->references('id')
                ->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subjects');
    }
}
