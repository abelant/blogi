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
        $user = App\User::create([
            'name' => 'Abelant',
            'email' => 'abelant@email.com',
            'password' => bcrypt('123456'),
            'admin' => 1
        ]);
        
        App\Profile::create([
            'user_id' => $user->id,
            'avatar' => 'uploads/avatars/1.png',
            'about' => 'Lorem ipsum dolor sit amet. consectetur adispicing elit.'
        ]);


    }
}
