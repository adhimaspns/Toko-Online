<?php

use Illuminate\Database\Seeder;

//? Use Carbon
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //? Membuat data sebanyak 30 dan di insert ke table
        factory(App\Models\User::class,30)->create(); 

        //? Untuk membuat data statis untuk login sebagai Admin 
        $user = [
            [
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'username' => 'admin',
                'password' => bcrypt('admin987'),
                'email_verified_at' => Carbon::now(),
                'api_token' => Str::random(18),
                'is_admin' => true,
                'created_at' => Carbon::now(),

            ],
            //? Untuk membuat data statis untuk login sebagai User 
            [
                'name' => 'user',
                'email' => 'user@user.com',
                'username' => 'user',
                'password' => bcrypt('user987'),
                'email_verified_at' => Carbon::now(),
                'api_token' => Str::random(18),
                'is_admin' => false,
                'created_at' => Carbon::now(),

            ]
        ];

        \App\Models\User::insert($user);
    }
}
