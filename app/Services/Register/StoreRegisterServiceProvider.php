<?php

namespace App\Services\Register;

use Illuminate\Support\ServiceProvider;

class StoreRegisterServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton(IStoreRegister::class, function () {
            return new StoreRegisterService();
        });
    }

}
