<?php

namespace Modules\Article\Providers;

use Modules\Article\Repository\BaseRepository;
use Modules\Article\Repository\EloquentRepositoryInterface;
use Modules\Article\Repository\ArticleRepository;
use Modules\Article\Repository\ArticleRepositoryInterface;


use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(EloquentRepositoryInterface::class, BaseRepository::class);
        $this->app->bind(ArticleRepositoryInterface::class, ArticleRepository::class);

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
