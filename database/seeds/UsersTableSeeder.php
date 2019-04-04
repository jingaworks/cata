<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Customer;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $user = User::create([
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ]);

        // $customer = Customer::create([
        //     'name' => '',
        //     'cui' => '',
        //     'phone' => '',
        //     'region' => '',
        //     'place' => '',
        //     'address' => '',
        //     'user_id' => ''
        // ]);
    }
}
