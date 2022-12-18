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
        Schema::create('stuckorders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->unsigned()->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('book_id')->unsigned()->constrained('books')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('count');
            $table->boolean('state')->default(0);
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
        Schema::dropIfExists('stuckorders');
    }
};
