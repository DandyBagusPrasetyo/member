<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->bigInteger('nik')->unsigned()->unique();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->integer('role')->unsigned()->default(0);
            $table->string('position')->nullable();
            $table->string('img_avatar')->nullable();
            $table->string('img_ktp')->nullable();
            $table->string('born_place')->nullable();
            $table->timestamp('born_date')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->string('gender')->nullable();
            $table->string('province')->nullable();
            $table->string('city')->nullable();
            $table->string('district')->nullable();
            $table->string('village')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('address')->nullable();
            $table->string('religion')->nullable();
            $table->string('marriage')->nullable();
            $table->string('profession')->nullable();
            $table->string('education')->nullable();
            $table->string('phone_1')->nullable();
            $table->string('phone_2')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('twitter')->nullable();
            $table->string('family_status')->nullable();
            $table->string('family_name')->nullable();
            $table->string('family_phone')->nullable();
            $table->text('org_experience')->nullable();
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
        Schema::dropIfExists('registers');
    }
}
