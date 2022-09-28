<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCoproprieteToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('code_postale')->nullable();
            $table->string('ville')->nullable();
            $table->string('Pays')->nullable();
            $table->string('adresse')->nullable();
            $table->string('tel')->nullable();
            $table->string('description')->nullable();
            $table->string('is_admin')->nullable()->default(1);
            
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
