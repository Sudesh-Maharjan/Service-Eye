<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('teams', function (Blueprint $table) {
            $table->boolean('is_visible')->default(true); // Add the 'is_visible' column
        });
    }
    
    public function down()
    {
        Schema::table('teams', function (Blueprint $table) {
            $table->dropColumn('is_visible'); // Reverse the addition of 'is_visible' column
        });
    }
};
