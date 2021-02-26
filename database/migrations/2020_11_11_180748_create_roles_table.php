<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            
            // COLUMNS
            $table->smallIncrements('id');
            $table->string('name',30);
            $table->string('slug',30);
            $table->string('desc')->nullable();
            $table->boolean('full_access')->default(0);
                        
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
        Schema::dropIfExists('roles');
    }
}
