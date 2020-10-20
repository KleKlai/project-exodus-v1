<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->uuid('uuid');
            $table->string('status')->nullable();
            $table->string('email')->nullable();
            $table->string('subject');
            $table->longText('description');
            $table->string('attachment')->nullable();
            $table->boolean('archive')->nullable();
            $table->longText('note')->nullable();
            $table->timestamps();
        });

        DB::statement("ALTER TABLE tickets AUTO_INCREMENT = 14000;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tickets');
    }
}
