<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBanner extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banner', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('banner_name')->nullable();
            $table->string('banner_name_en')->nullable();
            $table->string('images')->nullable();
            $table->tinyInteger('type')->comment('1=home,2=about,3=news,4=product,5=garden,6=agriculturist,7=location,8=career,9=contact'); 

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
        Schema::dropIfExists('banner');
    }
}
