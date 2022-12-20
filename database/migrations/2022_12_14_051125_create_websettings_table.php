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
        Schema::create('websettings', function (Blueprint $table) {
            $table->id();
            $table->string('page_title')->default("Untitled");
            $table->string('tag')->nullable();
            $table->string('email')->nullable();
            $table->string('logo_url')->nullable();
            $table->string('banner_img_url')->nullable();
            $table->string('google_map_url')->nullable();
            $table->string('footer_text')->nullable();
            
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
        Schema::dropIfExists('websettings');
    }
};
