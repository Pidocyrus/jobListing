<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(5)->create();

        Listing::factory(6)->create();

        // Listing::Create([
        //     'title'=> 'Senior Laravel Developer',
        //     'tags' =>'Laravel, Javascript',
        //     'company' => 'I-swipe tech',
        //     'location' => 'Awka',
        //     'email' => 'example@email.com',
        //     'website' => 'https://www.i-swipetech.com',
        //     'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
        //                        Modi eum provident, aut, sunt nemo neque ullam, deleniti 
        //                        numquam a quos voluptatibus. 
        //                        Suscipit optio corporis explicabo 
        //                        nemo molestiae laborum laboriosam accusantium!'
        // ]);

        // Listing::Create([
        //     'title'=> 'Full-Stack Engineer',
        //     'tags' =>'Laravel, backend, api',
        //     'company' => 'Stark Industry',
        //     'location' => 'New York',
        //     'email' => 'example2@email.com',
        //     'website' => 'https://www.stark.com',
        //     'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
        //                        Modi eum provident, aut, sunt nemo neque ullam, deleniti 
        //                        numquam a quos voluptatibus. 
        //                        Suscipit optio corporis explicabo 
        //                        nemo molestiae laborum laboriosam accusantium!'
        // ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
