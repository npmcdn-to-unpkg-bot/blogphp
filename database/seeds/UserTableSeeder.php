<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 3)->create();
        DB::table('users')->insert(
            [
                [
                    'name' => 'thibault',
                    'email' => 'thibault@terray.net',
                    'password' => Hash::make('thibault'),
                    'role' => 'administrator'
                ]
            ]
        );
    }
}