<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prescriptions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('disorder_history');
            $table->string('prescription');
            $table->string('test');
            $table->boolean('is_prescribed')->default(false);
            $table->unsignedBigInteger('doctor_id');
            $table->foreign('doctor_id')
            ->on('doctors')
            ->references('id')
            ->onDelete('CASCADE')
            ->onUpdate('CASCADE');

            $table->unsignedBigInteger('appointment_id');
            $table->foreign('appointment_id')
            ->on('appointments')
            ->references('id')
            ->onDelete('cascade');
            $table->rememberToken();
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
        Schema::dropIfExists('prescriptions');
    }
}
