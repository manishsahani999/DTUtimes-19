<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->info('Unblocking all Users');
        $users = User::all();

        foreach ($users as $user) {
            $user->update(['blocked' => false ]);
        }
    }
}
