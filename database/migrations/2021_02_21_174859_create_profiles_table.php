<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('user_id');
            $table->index('user_id');
            $table->text('MyselfSummary')->nullable();;
            $table->string('height')->nullable();
            $table->string('weight')->nullable();
            $table->string('hairColor')->nullable();
            $table->string('eyeColor')->nullable();
            $table->string('bodyTipe')->nullable();
            $table->string('vaccinated')->nullable();
            $table->string('ethnicity')->nullable();

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
        Schema::dropIfExists('profiles');
    }
}
