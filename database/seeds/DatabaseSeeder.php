<?php

use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        User::create([
            'name' => 'Moin',
            'email' => 'moin@moin.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$ILLTt3jDSgzwOwqIBHCCV.jwTHswHhsDrF56VujhnJvlY/FHXHcm2', // password
        ]);
    }
}
