<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('produtos', function (Blueprint $table) {
            $table->integer('from_category')->after("nome");
            $table->string("keywords")->after("nome");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::table('produtos', function (Blueprint $table) {
        //     $table->dropColumn('from_category');
        //     $table->dropColumn("keywords");
        // });
    }
};
