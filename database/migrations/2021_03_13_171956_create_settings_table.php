<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('site_full_name')->nullable();
            $table->string('site_short_name')->nullable();
            $table->string('login_background')->nullable();
            $table->string('logo')->nullable();
            $table->string('favicon')->nullable();
            $table->string('footer_text')->nullable();
            $table->string('date_format')->nullable()->default('Y-m-d');
            $table->string('time_format')->nullable()->default('g:i a');
            $table->string('timezone')->nullable()->default('app.timezone');
            $table->string('currency_code')->nullable()->default('$');
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
        Schema::dropIfExists('settings');
    }
}
