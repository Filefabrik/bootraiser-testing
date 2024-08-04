<?php declare(strict_types=1);
/**
 * PHP version 8.2
 */
/** @copyright-header * */
return ['boot' => [
	// configs only publish'able because a load was called in the register
	'Configs',
	'Views',
	'Migrations',
	'loadRoutes',
	'publishRoutes',
	'Translations',
	// duplicate for testing will not load or publishable again
	'Views',
	'Components',
	'Commands',
	'Assets',
	'Livewire'],
];
