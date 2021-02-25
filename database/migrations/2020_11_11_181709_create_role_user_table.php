<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoleUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role_user', function (Blueprint $table) {
            
            // COLUMNS
            $table->unsignedSmallInteger('role_id');
            $table->unsignedSmallInteger('user_id');
                        
            // INDEX
	    
            // UNIQUE
            
            // PRIMARY KEYS
            $table->primary(['role_id', 'user_id']);
            
            // FOREIGN KEYS
            $table->foreign('role_id')->references('id')->on('roles');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('role_user');
    }
}
