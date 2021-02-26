<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permissions', function (Blueprint $table) {
            
            // COLUMNS
            $table->smallIncrements('id');
            $table->string('name', 30);
            $table->string('slug', 30);
            $table->string('desc')->nullable();
                        
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
        Schema::dropIfExists('permissions');
    }
}
