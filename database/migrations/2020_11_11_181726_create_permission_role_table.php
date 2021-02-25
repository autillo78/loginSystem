<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermissionRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permission_role', function (Blueprint $table) {
            
            // COLUMNS
            $table->unsignedSmallInteger('role_id');
            $table->unsignedSmallInteger('permission_id');
                        
            // INDEX
	    
            // UNIQUE
            
            // PRIMARY KEYS
            $table->primary(['role_id', 'permission_id']);
            
            // FOREIGN KEYS
            $table->foreign('role_id')->references('id')->on('roles');
            $table->foreign('permission_id')->references('id')->on('permissions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permission_user');
    }
}