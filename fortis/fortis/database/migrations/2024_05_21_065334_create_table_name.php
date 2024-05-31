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
        Schema::create('modules_new', function (Blueprint $table) {
            $table->unsignedBigInteger('mod_id')->autoIncrement();
            $table->string('modname');
            $table->string('slug');
            $table->json('subcategories')->nullable();
            $table->enum('isActive', ['0', '1'])->default('1');
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
        Schema::dropIfExists('table_name');
    }
};
