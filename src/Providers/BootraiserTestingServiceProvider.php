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
			  ->loadConfigs()
		;
	}

	public function boot(): void
	{
		$cfg = config('bootraiser-testing.boot');
		Raiser::forProvider($this)
			  ->runFromArray($cfg)
		;
	}
}
