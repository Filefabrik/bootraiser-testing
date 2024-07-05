<?php declare(strict_types=1);

namespace Filefabrik\BootraiserTesting\Providers;

use Filefabrik\Bootraiser\Raiser;
use Illuminate\Support\ServiceProvider;

class BootraiserTestingServiceProvider extends ServiceProvider
{
    public function register()
    {
        parent::register();
        Raiser::forProvider($this)
              ->registerConfigs()
        ;
    }

    public function boot(): void
    {
        Raiser::forProvider($this)
              ->runFromArray(config('bootraiser-testing.boot'))
        ;
    }
}
