<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\{User,Account};

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->count(20)->create();
    }
}
