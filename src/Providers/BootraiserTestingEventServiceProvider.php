<?php declare(strict_types=1);

namespace Filefabrik\BootraiserTesting\Providers;

use Filefabrik\Bootraiser\WithBootraiserEvent;
use Illuminate\Foundation\Support\Providers\EventServiceProvider;

class BootraiserTestingEventServiceProvider extends EventServiceProvider
{
    use WithBootraiserEvent;

    public function register()
    {
        parent::register();
        $this->registeringEvents();
    }
}
