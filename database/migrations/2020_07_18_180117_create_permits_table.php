<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permits', function (Blueprint $table) {
            $table->id('id_permit');
            $table->string('nama_permit');
            $table->string('purpose_work');
            $table->string('time_access');
            $table->string('access_type');
            $table->json('area_entry');
            $table->text('working_procedure');
            $table->string('testing_verification');
            $table->string('rollback_operation');
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
        Schema::dropIfExists('permits');
    }
}
