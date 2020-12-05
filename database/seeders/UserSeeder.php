<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
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
        DB::statement("SET foreign_key_checks=0");
        DB::table('users')->truncate();
        DB::statement("SET foreign_key_checks=1");

        $password = Hash::make('superparola');

        User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => $password,
            'email_verified_at' => \Carbon\Carbon::now(),
            'cnp' => '56433568996'
        ]);

        \App\Models\User::factory()->count(100)->create();
    }
}
