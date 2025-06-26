<?php

namespace App\Providers;

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
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
