<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReturnbooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('returnbooks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Fullname');
            $table->string('Address');
            $table->string('Contactnumber');
            $table->string('Bookname');
            $table->date('DateBorrowed');
            $table->date('DateReturn');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('returnbooks');
    }
}
