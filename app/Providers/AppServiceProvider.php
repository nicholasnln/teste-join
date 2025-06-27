<?php

namespace App\Providers;

use App\Http\Repositories\BlockRepository;
use App\Http\Repositories\BlockRepositoryInterface;
use App\Http\Repositories\DomainRepository;
use App\Http\Repositories\DomainRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(DomainRepositoryInterface::class, DomainRepository::class);
        $this->app->bind(BlockRepositoryInterface::class, BlockRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
