<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (env('APP_ENV') != 'production') {
            $users = [];
            for ($i = 1; $i <= 10; $i++) {
                $users[] = [
                    'name' => 'user' . $i,
                    'email' => 'user' . $i . '@todo.list',
                    'password' => Hash::make('user' . $i),
                    'created_at' => Carbon::now(),
                ];
            }

            \App\Http\Models\User::insert($users);
        }
    }
}
