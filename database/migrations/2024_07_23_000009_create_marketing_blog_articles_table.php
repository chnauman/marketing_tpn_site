<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarketingBlogArticlesTable extends Migration
{
    public function up()
    {
        Schema::create('marketing_blog_articles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('author');
            $table->integer('duration');
            $table->longText('article_text');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
