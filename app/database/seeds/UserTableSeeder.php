<?php

class UserTableSeeder extends Seeder {
    public function run()
    {
        DB::table('users')->delete();

        DB::table('users')->insert(array(
            array(
                'email' => 'the@mail.com',
                'password' => Hash::make('password'),
                'name' => 'The Mail'
            ),
            array(
                'email' => 'another@mail.com',
                'password' => Hash::make('password'),
                'name' => 'The Other Mail'
            )
        ));
    }

} 