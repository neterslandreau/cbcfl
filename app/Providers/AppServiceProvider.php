<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('partials.blog-sidebar', function ($view) {
            $archives = \App\Article::archives();
            $tags = \App\Article::existingTags();
            $view->with(compact('tags', 'archives'));
        });
    }
}
