<?php

namespace App\Providers;

use App\Domain\IPostSearcherAdapter;
use App\Domain\IPostSearcherService;
use App\Domain\PostSearcherService;
use Illuminate\Support\ServiceProvider;
use App\Infraestructure\IPostsApi;
use App\Infraestructure\PostsApi;
use App\Infraestructure\IAuthorsApi;
use App\Infraestructure\AuthorsApi;
use App\Infraestructure\PostSearcherAdapter;

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
        
        $this->app->singleton(IPostSearcherAdapter::class, PostSearcherAdapter::class);
        
        $this->app->singleton(IPostSearcherService::class, PostSearcherService::class);

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
