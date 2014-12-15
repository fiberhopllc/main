<?php

    use Zizaco\Entrust\HasRole;
    use Zizaco\Entrust\EntrustPermission;
    use Zizaco\Entrust\EntrustRole;

    class EntrustRolePermissionSeederTableSeeder extends Seeder {

        public function run()
        {
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
                $read = new Permission();
                $read->name = 'can_read';
                $read->display_name = 'Read';
                $read->save();

                $write = new Permission();
                $write->name = 'can_write';
                $write->display_name = 'Write';
                $write->save();

                $update = new Permission();
                $update->name = 'can_update';
                $update->display_name = 'Update';
                $update->save();

                $delete = new Permission();
                $delete->name = 'can_delete';
                $delete->display_name = 'Delete';
                $delete->save();

                // Attach Permissions
                $admin->attachPermission($read);
                $admin->attachPermission($write);
                $admin->attachPermission($update);
                $admin->attachPermission($delete);

                $monitoring->attachPermission($read);
                $monitoring->attachPermission($update);

                $standard->attachPermission($read);
                $standard->attachPermission($write);
                $standard->attachPermission($update);

                $vendor->attachPermission($read);
                $vendor->attachPermission($write);
                $vendor->attachPermission($update);

                $whitelabel->attachPermission($read);
                $whitelabel->attachPermission($write);
                $whitelabel->attachPermission($update);
                $whitelabel->attachPermission($delete);

                // Attach Roles
                $user2 = User::find(2); // admin
                $user3 = User::find(3); // monitoring
                $user4 = User::find(4); // standard
                $user5 = User::find(5); // vendor
                $user6 = User::find(6); // whitelabel

                $user2->attachRole($admin);
                $user3->attachRole($monitoring);
                $user4->attachRole($standard);
                $user5->attachRole($vendor);
                $user6->attachRole($whitelabel);

                // Done
    }

}