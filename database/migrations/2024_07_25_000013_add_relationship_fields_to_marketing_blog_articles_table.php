<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToMarketingBlogArticlesTable extends Migration
{
    public function up()
    {
        Schema::table('marketing_blog_articles', function (Blueprint $table) {
            $table->unsignedBigInteger('marketing_blog_category_id')->nullable();
            $table->foreign('marketing_blog_category_id', 'marketing_blog_category_fk_9974220')->references('id')->on('marketing_blog_categories');
        });
    }
}
