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
        $user = new User;
        $user->user_name = 'ichsan';
        $user->user_pass = bcrypt('ichsan');
        $user->user_namalengkap = 'Ichsan Firdaus';
        $user->user_email = 'ichsanfirdaus99@outlook.com';
        $user->user_status = 1;
        $user->save();
    }
}
