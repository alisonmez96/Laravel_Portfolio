<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

     // php artisan db:seed
    public function run()
    {
        $user = new User([
          'name' => 'gebruiker',
          'email' => 'gebruiker@gmail.com',
          'username' => 'gebruiker',
          'user_type' => 'user',
          'password' => bcrypt('67890'),
        ]);
        $user->save();

        $user = new User([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'username' => 'admin',
            'user_type' => 'admin',
            'password' => bcrypt('12345'),
        ]);
        $user->save();

    }
}
