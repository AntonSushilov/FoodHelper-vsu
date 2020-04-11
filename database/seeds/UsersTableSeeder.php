<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\User::class, 1)->create([
            'name'=>'admin',
            'email'=>'admin@mail.ru',
            'password'=>bcrypt('12345678')
        ]);
    }
}
