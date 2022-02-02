<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Infraestructure\IPostsApi;
use App\Infraestructure\PostsApi;
use App\Infraestructure\IAuthorsApi;
use App\Infraestructure\AuthorsApi;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(IPostsApi::class, PostsApi::class);

        $this->app->singleton(IAuthorsApi::class, AuthorsApi::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
