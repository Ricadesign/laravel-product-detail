<?php

namespace Ricadesign\LaravelProductDetail;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use App\Models\Product;

class LaravelProductDetailServiceProvider extends ServiceProvider 
{
     /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        if($this->app->runningInConsole()){
            $this->registerPublishing();
        }
        $this->registerResources();
        
    }
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
    }
    
    private function registerResources()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'product');

        // $this->registerRoutes();
    }
    
    protected function registerPublishing()
    {
        $this->publishes([
            __DIR__.'/../config/product.php' => config_path('product.php'),
            __DIR__.'/../resources/views' => resource_path('views/vendor/product'),
            __DIR__.'/../resources/assets/sass' => resource_path('sass/vendor/product'),
            __DIR__.'/ProductDetailController.php' => app_path('Http/Controllers/ProductDetailController.php'),
        ], 'product[config-sass-view-controller]');
        $this->publishes([
            __DIR__.'/../database/migrations' => database_path('migrations'),
            __DIR__.'/Product.php' => app_path('Models/Product.php')
        ], 'product[migration-model]');
    }
    
    protected function registerRoutes()
    {
        Route::group(function(){
            $this->loadRoutesFrom(__DIR__.'/../resources/routes/web.php');
        });
    }

    private function routeConfiguration()
    {
        return [
            'prefix' => Product::path()
        ];
    }

}

