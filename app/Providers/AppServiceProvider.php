<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Social;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use App\Models\Web; 

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
        // Use Bootstrap pagination style
        Paginator::useBootstrap();
        // Define a custom Blade directive for generating routes
        Blade::directive('route', function ($expression) {
            return "<?php echo route($expression) ?>";
        });

        View::share('web', Web::first());
        View::share('socials', Social::first());

        $categories = Category::whereNull('parent_id')
        ->with('children')
        ->orderBy('name', 'asc')
        ->get();
        View::share('categories', $categories);
    }
}


