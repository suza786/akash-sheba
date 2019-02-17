<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiceProvidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_providers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('catetory_id');
            $table->string('father_name');
            $table->string('address');
            $table->string('gender');
            $table->smallInteger('age');
            $table->string('mobile');
            $table->string('education_level');
            $table->boolean('own_business');
            $table->boolean('working_for_other');
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
        Schema::dropIfExists('service_providers');
    }
}
