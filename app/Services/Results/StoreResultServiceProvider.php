<?php

namespace App\Services\Results;

use Illuminate\Support\ServiceProvider;

class StoreResultServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton(IStoreResult::class, function () {
            return new StoreResultService();
        });
    }
}
