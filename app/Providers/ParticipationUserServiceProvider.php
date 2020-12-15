<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ParticipationUserServiceProvider extends ServiceProvider
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
        $this->app->bind('ParticipationUserService', ParticipationUserService::class);
    }
}
