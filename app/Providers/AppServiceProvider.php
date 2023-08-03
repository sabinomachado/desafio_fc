<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interfaces\CidadeRepositoryInterface;
use App\Repositories\CidadeRepository;
use App\Interfaces\MedicoRepositoryInterface;
use App\Repositories\MedicoRepository;
use App\Interfaces\MedicoPacienteRepositoryInterface;
use App\Repositories\MedicoPacienteRepository;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(CidadeRepositoryInterface::class, CidadeRepository::class);
        $this->app->bind(MedicoRepositoryInterface::class, MedicoRepository::class);
        $this->app->bind(MedicoPacienteRepositoryInterface::class, MedicoPacienteRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
