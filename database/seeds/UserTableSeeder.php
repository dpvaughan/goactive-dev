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

      DB::table('users')->insert([
                'name' => 'gordon',
                'email' => 'gordon',
                'password' => bcrypt('gordon'),
      ]);

      DB::table('users')->insert([
                'name' => 'fido',
                'email' => 'fido',
                'password' => bcrypt('fido'),
      ]);

      DB::table('users')->insert([
                'name' => 'tom',
                'email' => 'tom',
                'password' => bcrypt('tom'),
      ]);

      DB::table('users')->insert([
                'name' => 'terry',
                'email' => 'terry',
                'password' => bcrypt('terry'),
      ]);

    }
}
