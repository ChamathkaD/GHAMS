<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHospitalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospitals', function (Blueprint $table) {
            $table->id();
            $table->string('hospital_code');
            $table->string('hospital_name');
            $table->string('region');
            $table->string('address');
            $table->string('telephone');
            $table->string('fax');
            $table->string('email');
            $table->string('wo_prefix');
            $table->string('wocm_sl_no');
            $table->string('wopm_sl_no');
            $table->string('hospital_code_prefix');
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
        Schema::dropIfExists('hospitals');
    }
}
