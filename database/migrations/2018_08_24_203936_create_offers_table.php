<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('course_id')->unsigned();
            $table->integer('type_id')->unsigned();
            $table->string('name');
            $table->text('description');
            $table->timestamp('started_at')->nullable();
            $table->timestamps();

            $table->foreign('course_id')
                ->on('courses')->references('id')
                ->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('type_id')
                ->on('offer_types')->references('id')
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
        Schema::dropIfExists('offers');
    }
}
