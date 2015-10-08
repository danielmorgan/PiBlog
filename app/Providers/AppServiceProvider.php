<?php

namespace App\Providers;

use Blade;
use Illuminate\Support\ServiceProvider;
use Markdown;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive('datetime', function($expression) {
            return "<?php echo with{$expression}->format('Y-m-d H:i'); ?>";
        });
        Blade::directive('ago', function($expression) {
            return "<?php echo with{$expression}->diffForHumans(); ?>";
        });
        Blade::directive('markdown', function($expression) {
            return "<?php echo Markdown::convertToHtml({$expression}); ?>";
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
