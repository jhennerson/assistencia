<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Helpers\DataBuilders\UserDataBuilder;
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
        $udb = new UserDataBuilder();
        $v = $udb->getData();
        User::insert($v);
        User::factory(11)->create(); 
    }
}
