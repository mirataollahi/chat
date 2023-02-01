<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Testing\Fluent\Concerns\Has;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::query()->create([
            'name' => 'admin' ,
            'email' => 'amir3672@gmail.com' ,
            'email_verified_at' => Carbon::now() ,
            'password' => Hash::make('886622') ,
        ]);
        User::query()->create([
            'name' => 'ali' ,
            'email' => 'ali@gmail.com' ,
            'email_verified_at' => Carbon::now() ,
            'password' => Hash::make('886622') ,
        ]);
        User::query()->create([
            'name' => 'saleh' ,
            'email' => 'saleh@gmail.com' ,
            'email_verified_at' => Carbon::now() ,
            'password' => Hash::make('886622') ,
        ]);
        User::query()->create([
            'name' => 'soheil' ,
            'email' => 'soheil@gmail.com' ,
            'email_verified_at' => Carbon::now() ,
            'password' => Hash::make('886622') ,
        ]);
        User::query()->create([
            'name' => 'amir' ,
            'email' => 'amir@gmail.com' ,
            'email_verified_at' => Carbon::now() ,
            'password' => Hash::make('886622') ,
        ]);
    }
}
