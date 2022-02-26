<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Uuid;

class ApplicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        $users = array(
            array('uuid' => Uuid::uuid4()->toString(), 'name' => 'Administrator', 'email' => 'administrator', 'password' => bcrypt('administrator12$#')),
        );
        DB::table("users")->insert($users);
    }
}
