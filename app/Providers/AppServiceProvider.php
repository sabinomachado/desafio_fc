<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interfaces\CidadeRepositoryInterface;
use App\Repositories\CidadeRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(CidadeRepositoryInterface::class, CidadeRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
