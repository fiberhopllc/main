<?php

// Composer: "fzaninotto/faker": "v1.3.0"

    class EntrustRolePermissionSeederTableSeeder extends Seeder {

        public function run()
        {

            EntrustRolePermissionSeeder::create(
                // Add Roles
                $admin = new Role();
                $admin->name = 'Administrator';
                $admin->save();

                $monitoring       = new Role();
                $monitoring->name = 'Monitoring';
                $monitoring->save();

                $standard       = new Role();
                $standard->name = 'Standard';
                $standard->save();

                $vendor       = new Role();
                $vendor->name = 'Vendor';
                $vendor->save();

                $whitelabel       = new Role();
                $whitelabel->name = 'WhiteLabel';
                $whitelabel->save();

                $deactivated       = new Role();
                $deactivated->name = 'Deactivated';
                $deactivated->save();

                // Add Permissions
    //          $read = new Permission();
    //          $read->name = 'can_read';
    //          $read->display_name = 'Can Read Posts';
    //          $read->save();

                // Attach Roles
    //          $user1 = User::find(1);
    //          $user2 = User::find(2);
    //
    //          $user1->attachRole($subscriber);
    //          $user2->attachRole($author);

                // Done
             );
        }

    }

