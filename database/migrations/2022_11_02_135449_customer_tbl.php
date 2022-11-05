<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_tbl', function(Blueprint $table)
        {
            $table->id();
            $table->string('Name');
            $table->string('Username');
            $table->string('Password');
            $table->string('Avatar');
            $table->boolean('Status');
            $table->string('Email');
            $table->string('Phone');
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
        //
    }
};
