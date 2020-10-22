<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\User;
use Carbon\Carbon;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Super_admin = User::create([
            'name'          =>  'Super Admin User',
            'mobile'        =>  '09952247045',
            'email'         =>  'system_admin@min-art.org',
            'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'password'      =>   Hash::make('bxtr1605'),
        ]);

        // $Admin = User::create([
        //     'name'          =>  'Administrator User',
        //     'mobile'        =>  '09952247045',
        //     'email'         =>  'admin@min-art.org',
        //     'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
        //     'password'      =>   Hash::make('bxtr1605'),
        // ]);

        // $Curator = User::create([
        //     'name'          =>  'Curator User',
        //     'mobile'        =>  '09952247045',
        //     'email'         =>  'curator@min-art.org',
        //     'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
        //     'password'      =>   Hash::make('bxtr1605'),
        // ]);

        // $Artist = User::create([
        //     'name'          =>  'Artist User',
        //     'mobile'        =>  '09952247045',
        //     'email'         =>  'artist@min-art.org',
        //     'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
        //     'password'      =>   Hash::make('bxtr1605'),
        // ]);

        // $Maynard = User::create([
        //     'name'          =>  'Maynard Magallen',
        //     'mobile'        =>  '09952247045',
        //     'email'         =>  'maynard@min-art.org',
        //     'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
        //     'password'      =>   Hash::make('bxtr1605'),
        // ]);

        //Fetch all Roles

        $Super_Role     = Role::where('name', 'Super-admin')->get();
        // $Admin_Role     = Role::where('name', 'Admin')->get();
        // $Curator_Role   = Role::where('name', 'Curator')->get();
        // $Artist_Role    = Role::where('name', 'Artist')->get();
        // $Standard_Role  = Role::where('name', 'Standard')->get();

        $Super_admin->assignRole($Super_Role);
        // $Admin->assignRole($Admin_Role);
        // $Curator->assignRole($Curator_Role);
        // $Artist->assignRole($Artist_Role);
        // $Maynard->assignRole($Artist_Role);

    }
}
