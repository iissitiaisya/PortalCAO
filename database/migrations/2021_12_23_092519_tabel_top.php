<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TabelTop extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beltop', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Code_Proyek')->unique();
            $table->string('Name_Application');
            $table->string('Status')->unique();
            $table->string('Link_Confluence');
            $table->string('Link_Jira');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('beltop');
    }
}
