<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Auth\Events\Login;
use Illuminate\Auth\Events\Logout;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Gate::define('access-mahasiswa-dashboard', function ($user) {
            return $user->role === 'mahasiswa';
        });

        Gate::define('access-dosen-dashboard', function ($user) {
            return $user->role === 'dosen';
        });

        Event::listen(Login::class, function ($event) {
            $user = $event->user;

            activity()
                ->causedBy($user)  // Pengguna yang login
                ->event('login')   // Event login
                ->withProperties([
                    'ip' => request()->ip(),
                    'user_agent' => request()->userAgent(),
                ])
                ->log($user->nama_user . ' telah login.');
        });

        // Mencatat aktivitas logout
        Event::listen(Logout::class, function ($event) {
            $user = $event->user;

            activity()
                ->causedBy($user)  // Pengguna yang logout
                ->event('logout')  // Event logout
                ->withProperties([
                    'ip' => request()->ip(),
                    'user_agent' => request()->userAgent(),
                ])
                ->log($user->nama_user . ' telah logout.');
        });
    }
}
