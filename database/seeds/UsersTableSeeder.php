<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $password = app('hash')->make('120808');
        DB::table('users')->insert([
            'name' => 'Dau Dinh',
            'email' => 'dinhmanhdau@gmail.com',
            'password' => $password,
        ]);
    }
}
