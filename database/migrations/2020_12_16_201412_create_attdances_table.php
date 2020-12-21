<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttdancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attdances', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->string('att_date');
            $table->string('att_month');
            $table->string('att_year');
            $table->string('attendence');
            $table->string('edit_date');
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
        Schema::dropIfExists('attdances');
    }
}
