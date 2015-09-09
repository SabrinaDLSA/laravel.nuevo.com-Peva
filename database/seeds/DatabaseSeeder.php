<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
       factory(nuevo\User::class)->create([
          'name' => 'Sabrina',
          'password' => bcrypt('Brittana'),
          'role' => 'admin',
          'email' => 'sabrina.cuman@gmail.com',
          'username' => 'sabrina'
          ]);
          factory(nuevo\User::class, 49)->create();
          factory(nuevo\Actors::class, 49)->create();
          $this->call('SeriesTableSeeder');
          $this->call('series_infos');
          factory(nuevo\Character::class, 49)->create();
          factory(nuevo\Episodes::class, 49)->create();
        Model::reguard();
    }
}
