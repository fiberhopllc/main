<?php

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class MailLogsToAdministrator extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'mail:logs';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Mail Laravel logs to Systems Developer.';

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function fire()
	{
        Mail::send('emails.log.senttoadministrator', array(), function($message)
        {
            $message->from('noreply@fiberhop.com', 'Laravel Logs');

            $message->to('jabbott@fiberhop.com');

            $message->attach('app/storage/logs/.gitignore');
        });
	}

	/**
	 * Get the console command arguments.
	 *
	 * @return array
	 */
	protected function getArguments()
	{
		return array(
		);
	}

	/**
	 * Get the console command options.
	 *
	 * @return array
	 */
	protected function getOptions()
	{
		return array(
		);
	}

}
