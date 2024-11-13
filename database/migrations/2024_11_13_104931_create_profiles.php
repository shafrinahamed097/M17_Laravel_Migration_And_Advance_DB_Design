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
        Schema::create('profiles', function (Blueprint $table) {
            // Define table columns with valid syntax
            $table->smallIncrements('id');
            $table->mediumInteger('col1');
            $table->mediumText('col2');
            $table->smallInteger('col4');  // Removed the extra argument
            $table->time('col5');
            $table->timestamp('col6');
            $table->tinyInteger('col7');
            $table->unsignedBigInteger('col8');
            $table->unsignedInteger('col9');
            $table->text('col10');
            $table->unsignedMediumInteger('col11');
            $table->unsignedTinyInteger('col12');
            $table->unsignedSmallInteger('col13');
            $table->tinyText('col14');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
