<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name',60);  // here name feilds max character length is 60 will store in db
            $table->string('email',100);    // here email feilds max character length is 10 will store in db
            $table->string('password',50);  // here password feilds max character length is 50 will store in db
            $table->enum('gender',['M','F','O'])->nullable();   // M= male , F= female , O= Other
            $table->text('address');
            $table->date('dob')->nullable();
            $table->boolean('status')->default(1);  // this is for user status active when true(1) or inactive wen false(0)
            $table->integer('points')->default(0);  // this is for customer points value store
            $table->timestamps(); // this will create two feilds created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
