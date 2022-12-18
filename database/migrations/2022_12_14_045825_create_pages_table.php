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
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('subtitle')->default('');
            $table->integer('order_number')->default(9999);
            $table->integer('is_hidden')->default(0);
            $table->longText('content')->nullable();
            $table->integer('is_landing_page')->default(0);
            $table->string('menu_title')->nullable();
            $table->unsignedBigInteger('main_image')->nullable();
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
        Schema::dropIfExists('pages');
    }
};
