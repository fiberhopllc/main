<?php

    class SentryUserGroupSeeder extends Seeder {

        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            DB::table('users_groups')->delete();


            // admin@admin.com
            // monitoring@monitoring.com
            // standard@standard.com
            // vendor@vendor.com
            // whitelabel@whitelabel.com
            // deactivated@standard.com

            $adminUser  = Sentry::getUserProvider()->findByLogin('admin@admin.com');
            $adminGroup  = Sentry::getGroupProvider()->findByName('Admins');

            $monitoringUser  = Sentry::getUserProvider()->findByLogin('monitoring@monitoring.com');
            $monitoringGroup  = Sentry::getGroupProvider()->findByName('Monitoring');

            $standardUser  = Sentry::getUserProvider()->findByLogin('standard@standard.com');
            $standardGroup  = Sentry::getGroupProvider()->findByName('Standard');

            $vendorUser  = Sentry::getUserProvider()->findByLogin('vendor@vendor.com');
            $vendorGroup  = Sentry::getGroupProvider()->findByName('Vendor');

            $whitelabelUser  = Sentry::getUserProvider()->findByLogin('whitelabel@whitelabel.com');
            $whitelabelGroup  = Sentry::getGroupProvider()->findByName('WhiteLabel');

            $deactivatedUser  = Sentry::getUserProvider()->findByLogin('deactivated@standard.com');
            $deactivatedGroup  = Sentry::getGroupProvider()->findByName('Standard');


            // Assign the groups to the users
            $adminUser->addGroup($adminGroup);
            $monitoringUser->addGroup($monitoringGroup);
            $standardUser->addGroup($standardGroup);
            $vendorUser->addGroup($vendorGroup);
            $whitelabelUser->addGroup($whitelabelGroup);
            $deactivatedUser->addGroup($deactivatedGroup);

        }

    }