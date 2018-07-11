<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'Andrzej Bartoszek';
        $user->email = 'aaa@op.pl';
        $user->password = bcrypt('aaa');
        $user->save();
    }
}
