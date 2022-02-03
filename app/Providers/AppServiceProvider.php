<?php

namespace App\Providers;

use App\Domain\AuthorSearcherService;
use App\Domain\IAuthorSearcherAdapter;
use App\Domain\IAuthorSearcherService;
use App\Domain\IPostAuthorLinkerService;
use App\Domain\IPostSearcherAdapter;
use App\Domain\IPostSearcherService;
use App\Domain\IPostStorerAdapter;
use App\Domain\IPostStorerService;
use App\Domain\PostAuthorLinkerService;
use App\Domain\PostSearcherService;
use App\Domain\PostStorerService;
use App\Infraestructure\AuthorsApi;
use App\Infraestructure\AuthorSearcherAdapter;
use App\Infraestructure\IAuthorsApi;
use App\Infraestructure\IPostsApi;
use App\Infraestructure\PostsApi;
use App\Infraestructure\PostSearcherAdapter;
use App\Infraestructure\PostStorerAdapter;
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
        $this->app->singleton(IPostsApi::class, PostsApi::class);

        $this->app->singleton(IAuthorsApi::class, AuthorsApi::class);

        $this->app->singleton(IPostSearcherAdapter::class, PostSearcherAdapter::class);

        $this->app->singleton(IAuthorSearcherAdapter::class, AuthorSearcherAdapter::class);

        $this->app->singleton(IPostSearcherService::class, PostSearcherService::class);

        $this->app->singleton(IAuthorSearcherService::class, AuthorSearcherService::class);

        $this->app->singleton(IPostAuthorLinkerService::class, PostAuthorLinkerService::class);

        $this->app->singleton(IPostStorerService::class, PostStorerService::class);
        $this->app->singleton(IPostStorerAdapter::class, PostStorerAdapter::class);

        $this->app->register(\L5Swagger\L5SwaggerServiceProvider::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
    }
}
