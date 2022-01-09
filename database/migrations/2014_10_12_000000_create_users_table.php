<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('club_name')->nullable();
            $table->string('locality')->nullable();
            $table->string('team_name')->nullable();
            $table->string('current_age_gap')->nullable();
            $table->string('group_gender')->nullable();
            $table->string('home_kit')->nullable();
            $table->string('away_kit')->nullable();
            $table->string('training_kit')->nullable();
            $table->string('your_name')->nullable();
            $table->text('address')->nullable();
            $table->string('town')->nullable();
            $table->string('post_code')->nullable();
            $table->string('home_mobile')->nullable();
            $table->string('present_contact')->nullable();
            $table->string('is_active')->default(1);
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
        Schema::dropIfExists('users');
    }
}
