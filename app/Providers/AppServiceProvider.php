<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use App\Repositories\ProduitRepositoryInterface;
use App\Repositories\Eloquent\ProduitRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(ProduitRepositoryInterface::class, ProduitRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Gate::define('is-admin', function(User $user){
            return $user->hasRole('admin');
        });
    }
}
