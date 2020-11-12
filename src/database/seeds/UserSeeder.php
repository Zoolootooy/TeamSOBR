<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        User::create(array(
            'name' => "Admin",
            'email' => 'admin@admin.com',
            'password' => Hash::make('12345678'),
            'isAdministrator' => true,
        ));

        User::create(array(
            'name' => "Monya1",
            'email' => 'mon1@mon.com',
            'password' => Hash::make('12345678'),
            'isAdministrator' => false,
        ));

        User::create(array(
            'name' => "Monya2",
            'email' => 'mon2@mon.com',
            'password' => Hash::make('12345678'),
            'isAdministrator' => false,
        ));

        User::create(array(
            'name' => "Monya3",
            'email' => 'mon3@mon.com',
            'password' => Hash::make('12345678'),
            'isAdministrator' => false,
        ));
    }
}
