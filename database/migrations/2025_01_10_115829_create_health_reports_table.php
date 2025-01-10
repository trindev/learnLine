<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHealthReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('health_reports', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_id')->comment('LINE User ID');
            $table->decimal('temp', 5, 2)->nullable()->comment('Temperature (°C)');
            $table->integer('heart_rate')->nullable()->comment('Heart Rate (bpm)');
            $table->integer('systolic')->nullable()->comment('Systolic Blood Pressure');
            $table->integer('diastolic')->nullable()->comment('Diastolic Blood Pressure');
            $table->string('status')->nullable()->comment('Health Status');
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
        Schema::dropIfExists('health_reports');
    }
}
