<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $user = new User();
        $user->username = "rirrakib";
        $user->password = Hash::make('rirrakib');
        $user->is_active = true;
        $user->branch_id = 1;
        $user->save();







    }
}
