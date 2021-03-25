<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManufacturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manufactures', function (Blueprint $table) {
            $table->id();
            $table->string('manufacture_code');
            $table->string('country');
            $table->string('manufacture_name');
            $table->string('zip');
            $table->string('contact_person');
            $table->string('phone');
            $table->string('address');
            $table->string('fax');
            $table->string('city');
            $table->string('email');
            $table->string('state');
            $table->softDeletes();

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
        Schema::dropIfExists('manufactures');
    }
}
