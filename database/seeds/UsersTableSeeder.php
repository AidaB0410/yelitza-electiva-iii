<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert(array(
            'name'              => 'Administrador',
            'email'             => 'admin@admin.com',
            'password'          => bcrypt('admin1234'),
            'remember_token'    => Str::random(10),
            
        ));
    }
}
