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
        Schema::table('websettings', function (Blueprint $table) {
            $table->longtext('home_content')->nullable();
            $table->string('nav_color')->default('#FFFFFF');
            $table->string('body_color')->default('#FFFFFF');

            $table->string('text_color')->default('#000000');
            $table->string('text_secondary_color')->default('#E8E8E8');
            $table->string('link_color')->default('#001EFF');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('websettings', function (Blueprint $table) {
            //
        });
    }
};
