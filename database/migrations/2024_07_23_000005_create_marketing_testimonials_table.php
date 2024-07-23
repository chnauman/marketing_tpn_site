<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarketingTestimonialsTable extends Migration
{
    public function up()
    {
        Schema::create('marketing_testimonials', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('designation');
            $table->longText('review_text')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
