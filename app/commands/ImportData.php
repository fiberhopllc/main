<?php
    use Illuminate\Console\Command;

    class ImportData extends Command {

        /**
         * The console command name.
         *
         * @var string
         */
        protected $name = 'data:import';

        /**
         * The console command description.
         *
         * @var string
         */
        protected $description = 'Imports dump.sql';

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
            $mysql = [ ];

            $handle = fopen("php://stdin", "r");

            echo "Database Host [localhost]:";

            $mysql[ 0 ] = trim(fgets($handle));

            $mysql[ 0 ] = ( empty( $mysql[ 0 ] ) ) ? 'localhost' : $mysql[ 0 ];

            echo "Database User [root]:";

            $mysql[ 1 ] = trim(fgets($handle));

            $mysql[ 1 ] = ( empty( $mysql[ 1 ] ) ) ? 'root' : $mysql[ 1 ];

            echo "Database Password:";

            $mysql[ 2 ] = trim(fgets($handle));

            echo "Database Name:";

            $mysql[ 3 ] = trim(fgets($handle));

            exec("mysqldump -h " . $mysql[ 0 ] . " -u " . $mysql[ 1 ] . " -p " . $mysql[ 2 ] . " " . $mysql[ 3 ] . " < " . storage_path() . "/dump.sql");

            echo "Dump file has been successfully imported";
        }


    }


// Command: php artisan data:dump