<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        Blade::directive('active', function ($route) {
            return "<?php echo request()->routeIs($route) ? 'bg-sidebar-nav-active' : ''; ?>";
        });
    }
}