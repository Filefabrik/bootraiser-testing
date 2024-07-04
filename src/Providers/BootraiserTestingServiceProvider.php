<?php

namespace Filefabrik\BootraiserTesting\Providers;

use Filefabrik\Bootraiser\Raiser;
use Illuminate\Support\ServiceProvider;

class BootraiserTestingServiceProvider extends ServiceProvider
{
    /**
     * Configurable
     *
     * @var array
     */
    public static array $bootraiser = ['register',
                                       'boot' => [
                                           'publishConfigs',
                                           'Views',
                                           'Migrations',
                                           'loadRoutes',
                                           'publishRoutes',
                                           'Translations',
                                           'Views',
                                           'Components',
                                           'Commands',
                                           'Assets',
                                           'Livewire'],
    ];

    public function register()
    {
        Raiser::forProvider($this)
              ->registerConfigs()
        ;
    }

    public function boot(): void
    {
        Raiser::forProvider($this)
              ->runFromArray(self::$bootraiser['boot'])
        ;
    }
}
