<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use nuevo\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      User::create(
        [
          'name' => 'Sabrina',
          'email' => 'sabrina.cuman@gmail.com',
          'password' => \Hash::make('Brittana'),
          'username' => 'Sabrina'
        ]);
    }
}
