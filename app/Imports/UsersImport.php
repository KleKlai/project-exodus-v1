<?php

namespace App\Imports;

use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Spatie\Permission\Models\Role;

class UsersImport implements ToCollection, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function collection(Collection $rows)
    {
        foreach($rows as $row)
        {
            $user = User::create([
                'name'              => $row['name'],
                'email'             => $row['email'],
                'email_verified_at' => $row['email_verified_at'],
                'password'          => $row['password'],
                'mobile'            => $row['mobile'],
                'gallery'           => $row['gallery'],
                'bio'               => $row['bio'],
                'verified'          => $row['verified'],
            ]);

            $user->assignRole('Standard');
        }
    }
}
