<?php

    class SentryUserSeeder extends Seeder {

        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            DB::table('users')->delete();

            Sentry::getUserProvider()->create(array(
                'email'      => 'admin@admin.com',
                'password'   => 'adminpassword',
                'first_name' => 'AdminFirstName',
                'last_name'  => 'AdminLastName',
                'activated'  => 1,
            ));

            Sentry::getUserProvider()->create(array(
                'email'      => 'monitoring@monitoring.com',
                'password'   => 'monitoringpassword',
                'first_name' => 'MonitoringFirstName',
                'last_name'  => 'MonitoringLastName',
                'activated'  => 1,
            ));

            Sentry::getUserProvider()->create(array(
                'email'      => 'standard@standard.com',
                'password'   => 'standardpassword',
                'first_name' => 'StandardFirstName',
                'last_name'  => 'StandardLastName',
                'activated'  => 1,
            ));

            Sentry::getUserProvider()->create(array(
                'email'      => 'vendor@vendor.com',
                'password'   => 'vendorpassword',
                'first_name' => 'VendorFirstName',
                'last_name'  => 'VendorLastName',
                'activated'  => 1,
            ));

            Sentry::getUserProvider()->create(array(
                'email'      => 'whitelabel@whitelabel.com',
                'password'   => 'whitelabelpassword',
                'first_name' => 'WhiteLabelFirstName',
                'last_name'  => 'WhiteLabelLastName',
                'activated'  => 1,
            ));

            Sentry::getUserProvider()->create(array(
                'email'      => 'deactivated@standard.com',
                'password'   => 'deactivatedpassword',
                'first_name' => 'DeactivatedFirstName',
                'last_name'  => 'DeactivatedLastName',
                'activated'  => 0,
            ));



        }

    }