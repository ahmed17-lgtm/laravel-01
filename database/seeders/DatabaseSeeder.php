<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            "name" => "Ahmed Abbas",
            "email" => "ahmedabbas@gmail.com",
            "password" => "password",
            "roles" => "admin",
            "phone" => "01094747103",
            "profile_photo"=>'F:\ahmed\المعهد\my.jpg' ,
        ]);
        
        User::factory(1000)->create();
    
    }
}
