<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Test extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()                              
    {
        Schema::create('test', function (Blueprint $table) {        //Creating Schema for migration
            $table->id('id');
            $table->string('name');
            $table->timestamps();

            //php artisan make:migration migration_name             To make migration
            //php artisan migrate        To start migration
            //php artisan migrate:reset  To reset or rollback the migration
            //php artisan migrate:rollback   To rollback last migration
            //php artisan migrate:rollback --step N   To rollback last N migration(s)
            //php artisan migrate:refresh   To refresh the changes
            //php artisan migrate --path=/database/migrations/[migration_file_name.php]  To migrate single table  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('test');
    }
}
