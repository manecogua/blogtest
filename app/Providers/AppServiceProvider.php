<?php

namespace App\Providers;

use App\Domain\IPostSearcherAdapter;
use App\Domain\IPostSearcherService;
use App\Domain\IPostAuthorLinkerService;
use App\Domain\PostAuthorLinkerService;
use App\Domain\PostSearcherService;
use App\Domain\AuthorSearcherService;
use App\Domain\IAuthorSearcherService;
use App\Domain\IAuthorSearcherAdapter;
use Illuminate\Support\ServiceProvider;
use App\Infraestructure\IPostsApi;
use App\Infraestructure\PostsApi;
use App\Infraestructure\IAuthorsApi;
use App\Infraestructure\AuthorsApi;
use App\Infraestructure\PostSearcherAdapter;
use App\Infraestructure\AuthorSearcherAdapter;

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
        
        $this->app->singleton(IAuthorSearcherAdapter::class, AuthorSearcherAdapter::class);
        
        $this->app->singleton(IPostSearcherService::class, PostSearcherService::class);
        
        $this->app->singleton(IAuthorSearcherService::class, AuthorSearcherService::class);
        
        $this->app->singleton(IPostAuthorLinkerService::class, PostAuthorLinkerService::class);


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
