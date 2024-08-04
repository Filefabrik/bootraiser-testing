<?php declare(strict_types=1);
/**
 * PHP version 8.2
 */
/** @copyright-header * */

namespace Filefabrik\BootraiserTesting\Database\Seeders;

use Filefabrik\BootraiserTesting\Models\Ally;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
	/**
	 * Seed the application's database.
	 */
	public function run(): void
	{
		Ally::factory()
			->create([
				'name'  => 'Test User',
				'email' => 'test@example.com',
			])
		;
	}
}
