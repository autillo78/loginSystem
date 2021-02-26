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
            // COLUMNS
            $table->smallIncrements('id');
            $table->string('name', 30);
            $table->string('middlename', 30)->nullable();
            $table->string('lastname', 80);
            $table->string('email')->unique();
            $table->string('phone', 30)->nullable();
            $table->string('team', 40)->nullable();
            
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->text('profile_photo_path')->nullable();
            $table->boolean('active')->default(0);
            $table->timestamps();  

            // INDEX
	    
            // UNIQUE
            
            // PRIMARY KEYS
            
            // FOREIGN KEYS
            
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
