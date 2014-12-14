<?php

    class SentryGroupSeeder extends Seeder {

        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            DB::table('groups')->delete();

            Sentry::getGroupProvider()->create(array(
                'name' => 'Admins',
            ));

            Sentry::getGroupProvider()->create(array(
                'name' => 'Monitoring',
            ));

            Sentry::getGroupProvider()->create(array(
                'name' => 'Standard',
            ));

            Sentry::getGroupProvider()->create(array(
                'name' => 'Vendor',
            ));

            Sentry::getGroupProvider()->create(array(
                'name' => 'WhiteLabel',
            ));
        }

    }