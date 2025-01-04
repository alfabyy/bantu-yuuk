<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;

class AppServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        // Definisikan Gate untuk admin
        Gate::define('admin-access', function (User $user) {
            return $user->role === 'admin';  // Cek role admin
        });

        // Definisikan Gate untuk user
        Gate::define('user-access', function (User $user) {
            return $user->role === 'user';  // Cek role user
        });
    }
}
