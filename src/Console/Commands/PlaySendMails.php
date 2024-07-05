<?php

namespace Filefabrik\BootraiserTesting\Console\Commands;

use Illuminate\Console\Command;

class PlaySendMails extends Command
{
	/**
	 * The name and signature of the console command.
	 *
	 * @var string
	 */
	protected $signature = 'demo-1:play-send-mails';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Command description';

	/**
	 * Execute the console command.
	 */
	public function handle()
	{
		$this->line('works: '.__FILE__);
	}
}
