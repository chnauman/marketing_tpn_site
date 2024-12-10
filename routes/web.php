<?php

//Route::view('/', 'welcome');
use Illuminate\Support\Facades\Route;

Auth::routes(['register' => false]);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth', 'admin']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Marketing Testimonial
    Route::delete('marketing-testimonials/destroy', 'MarketingTestimonialController@massDestroy')->name('marketing-testimonials.massDestroy');
    Route::post('marketing-testimonials/media', 'MarketingTestimonialController@storeMedia')->name('marketing-testimonials.storeMedia');
    Route::post('marketing-testimonials/ckmedia', 'MarketingTestimonialController@storeCKEditorImages')->name('marketing-testimonials.storeCKEditorImages');
    Route::resource('marketing-testimonials', 'MarketingTestimonialController');

    // Faq Category
    Route::delete('faq-categories/destroy', 'FaqCategoryController@massDestroy')->name('faq-categories.massDestroy');
    Route::resource('faq-categories', 'FaqCategoryController');

    // Faq Question
    Route::delete('faq-questions/destroy', 'FaqQuestionController@massDestroy')->name('faq-questions.massDestroy');
    Route::resource('faq-questions', 'FaqQuestionController');

    // Marketing Blog Category
    Route::delete('marketing-blog-categories/destroy', 'MarketingBlogCategoryController@massDestroy')->name('marketing-blog-categories.massDestroy');
    Route::resource('marketing-blog-categories', 'MarketingBlogCategoryController');

    // Marketing Blog Article
    Route::delete('marketing-blog-articles/destroy', 'MarketingBlogArticleController@massDestroy')->name('marketing-blog-articles.massDestroy');
    Route::post('marketing-blog-articles/media', 'MarketingBlogArticleController@storeMedia')->name('marketing-blog-articles.storeMedia');
    Route::post('marketing-blog-articles/ckmedia', 'MarketingBlogArticleController@storeCKEditorImages')->name('marketing-blog-articles.storeCKEditorImages');
    Route::resource('marketing-blog-articles', 'MarketingBlogArticleController');
});
Route::group(['prefix' => 'profile', 'as' => 'profile.', 'namespace' => 'Auth', 'middleware' => ['auth']], function () {
    // Change password
    if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
        Route::get('password', 'ChangePasswordController@edit')->name('password.edit');
        Route::post('password', 'ChangePasswordController@update')->name('password.update');
        Route::post('profile', 'ChangePasswordController@updateProfile')->name('password.updateProfile');
        Route::post('profile/destroy', 'ChangePasswordController@destroy')->name('password.destroyProfile');
    }
});
Route::group(['as' => 'frontend.', 'namespace' => 'Frontend'], function () {
    Route::get('/', 'HomeController@index');
    //Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/faq', 'FaqQuestionController@index')->name('faq');

    Route::get('/blog', 'MarketingBlogArticleController@index')->name('blog');

    Route::get('/blog/{id}', 'MarketingBlogArticleController@specificArticle');

    Route::get('/products', 'HomeController@products');

    Route::get('/catalog', function () {
        return view('frontend.pages.catalog');
    })->name('catalog');
    Route::get('/privacy-policy', function () {
        return view('frontend.pages.privacy_policy');
    })->name('privacy');

    Route::get('/contact', function () {
        return view('frontend.pages.contact');
    })->name('contact');
    Route::get('/how_it_works', function () {
        return view('frontend.pages.how_it_works');
    })->name('how_it_works');
    Route::get('/product_page', function () {
        return view('frontend.pages.product_page');
    })->name('products');
    Route::get('/single_product', function () {
        return view('frontend.pages.single_product');
    })->name('single_product');
    Route::get('/sub_category', function () {
        return view('frontend.pages.sub_category');
    })->name('sub_category');
    Route::get('/about', function () {
        return view('frontend.pages.about');
    })->name('about');

});
