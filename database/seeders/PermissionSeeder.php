<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //TODO: User Model Permission
        $read_user      = Permission::create(['name' => 'read user']);
        // $create_user    = Permission::create(['name' => 'create user']);
        $update_user    = Permission::create(['name' => 'update user']);
        $delete_user    = Permission::create(['name' => 'delete user']);
        $recover_user   = Permission::create(['name' => 'recover user']);
        $approve_user   = Permission::create(['name' => 'approve user']);

        //TODO: Artwork Model Permission
        $read_art           = Permission::create(['name' => 'read art']);
        $create_art         = Permission::create(['name' => 'create art']);
        $update_art         = Permission::create(['name' => 'update art']);
        $update_art_status  = Permission::create(['name' => 'update art-status']);
        $delete_art         = Permission::create(['name' => 'delete art']);
        $import_at          = Permission::create(['name' => 'import art']);


        //TODO: Art Utilities
        $read_util          = Permission::create(['name' => 'read util']);
        $create_util        = Permission::create(['name' => 'create util']);
        $delete_util        = Permission::create(['name' => 'delete util']);

        $update_page_about   = Permission::create(['name' => 'update site-about']);


        //TODO: FAQ Model Permission
        // $read_faq      = Permission::create(['name' => 'read faq']);
        $create_faq    = Permission::create(['name' => 'create faq']);
        $update_faq    = Permission::create(['name' => 'update faq']);
        $delete_faq    = Permission::create(['name' => 'delete faq']);


        //TODO: System Log
        $read_syslog     = Permission::create(['name' => 'read syslog']);
        $delete_systlog  = Permission::create(['name' => 'delete syslog']);

        //TODO: Support Ticket
        $ticket = [
            'update ticket', 'update status ticket', 'archive ticket', 'delete ticket', 'save note ticket', 'read ticket statistic'
        ];

        $utilities = [
            'read site statistics'
        ];

        $reservation = [
            'read reservation', 'cancel reservation', 'sold reservation'
        ];

        foreach($reservation as $reserve) {
            Permission::create(['name' => $reserve]);
        }

        foreach($utilities as $utilities) {
            Permission::create(['name' => $utilities]);
        }

        foreach($ticket as $ticket){
            Permission::create(['name' => $ticket]);
        }

        //TODO: Roles
        $super_admin    = Role::create(['name' => 'Super-admin']);
        $admin          = Role::create(['name' => 'Admin']);
        $curator        = Role::create(['name' => 'Curator']);
        $artist         = Role::create(['name' => 'Artist']);
        $standard       = Role::create(['name' => 'Standard']);

        /**
         * Assigning Role
         * Admin
         */

        //TODO: Admin User Model
        $admin->givePermissionTo('read user', 'update user', 'delete user', 'approve user');

        //TODO: Admin Artwork Model
        $admin->givePermissionTo('read art', 'update art', 'delete art');

        //TODO: Admin FAQ Model
        $admin->givePermissionTo('create faq', 'update faq', 'delete faq');

        //TODO: Admin Art Utilities
        $admin->givePermissionTo('read util', 'create util', 'delete util', 'update site-about');

        //TODO: Admin System Log
        $admin->givePermissionTo('read syslog');

        //TODO: Admin Support Ticket
        $admin->givePermissionTo('update ticket', 'update status ticket', 'archive ticket', 'delete ticket', 'save note ticket', 'read ticket statistic');

        //TODO: General Utilities
        $admin->givePermissionTo('read site statistics');

        //TODO: Reservation
        $admin->givePermissionTo('read reservation', 'cancel reservation', 'sold reservation');
        /**
         * Curator
         */

        //TODO: Artwork
        $curator->givePermissionTo('read art', 'update art', 'update art-status');

        /**
         * Artist
         */
        //TODO: Artwork
        $artist->givePermissionTo('read art', 'create art');
        // $artist->givePermissionTo('create art');


    }
}
