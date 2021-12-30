<?php

namespace Modules\Article\Providers;

use Illuminate\Support\ServiceProvider;

use Modules\Article\Service\{BaseService,ArticleService};
use Modules\Article\Service\{ServiceInterface, ArticleServiceInterface};


class BusinessServiceLayerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ServiceInterface::class, BaseService::class);
        $this->app->bind(ArticleServiceInterface::class, ArticleService::class);
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
