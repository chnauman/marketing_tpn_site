<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MarketingBlogCategory extends Model
{
    use SoftDeletes, HasFactory;

    public $table = 'marketing_blog_categories';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'title',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function articles()
    {
        return $this->hasMany(MarketingBlogArticle::class);
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function marketingBlogCategoryMarketingBlogArticles()
    {
        return $this->hasMany(MarketingBlogArticle::class, 'marketing_blog_category_id', 'id');
    }
}
