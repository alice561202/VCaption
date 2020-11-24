<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RoomServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('RoomService', RoomService::class);
    }
}
