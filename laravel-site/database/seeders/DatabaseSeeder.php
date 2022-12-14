<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //\App\Models\User::factory(1)->create();

        if(DB::table('users')->count() == 0) {
            \App\Models\User::factory()->create([
            'name' => 'Test',
            'email' => 'test@example.com',
            'password' =>  Hash::make('test'),
            'admin' => 'Admin'
        ]);
        }
    }
}
