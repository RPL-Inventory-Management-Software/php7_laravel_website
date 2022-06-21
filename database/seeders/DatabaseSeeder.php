<?php

namespace Database\Seeders;

use App\Models\Item;
use App\Models\Project;
use Illuminate\Database\Seeder;
use App\Models\User;


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

        // User::create([
        //     'name' => 'Andi Achmad Adjie',
        //     'email' => 'andiachmadl@student.telkomuniversity.ac.id',
        //     'password' => bcrypt('12345')
        // ]);
        // User::create([
        //     'name' => 'Meizan Arthur Alfianto',
        //     'email' => 'meizanarthut@student.telkomuniversity.ac.id',
        //     'password' => bcrypt('12345')
        // ]);
        // User::create([
        //     'name' => 'Naufal Pandityatama',
        //     'email' => 'axelnaufal@student.telkomuniversity.ac.id',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Project::create([
            'name' => 'Administrative',
            'slug' => 'administrative',
            'description' => 'project1 description',
            'user_id' => 1
        ]);
        Project::create([
            'name' => 'Construction',
            'slug' => 'construction',
            'description' => 'project2 description',
            'user_id' => 1
        ]);
        Project::create([
            'name' => 'Computer Software Development',
            'slug' => 'computer-software-development',
            'description' => 'project3 description',
            'user_id' => 2
        ]);
        Project::create([
            'name' => 'Design of Plans',
            'slug' => 'design-of-plans',
            'description' => 'project4 description',
            'user_id' => 2
        ]);
        Project::create([
            'name' => 'Research',
            'slug' => 'research',
            'description' => 'project5 description',
            'user_id' => 3
        ]);
        Project::create([
            'name' => 'Construction',
            'slug' => 'construction_2',
            'description' => 'project6 description',
            'user_id' => 3
        ]);


        Item::create([
            'name' => 'Motherboard',
            'slug' => 'motherboard',
            'description' => 'item1 description',
            'user_id' => 1
        ]);
        Item::create([
            'name' => 'Central Processing Unit',
            'slug' => 'central-processing-unit',
            'description' => 'item2 description',
            'user_id' => 1
        ]);
        Item::create([
            'name' => 'Projector',
            'slug' => 'projector',
            'description' => 'item3 description',
            'user_id' => 2
        ]);
        Item::create([
            'name' => 'Scanners',
            'slug' => 'scanners',
            'description' => 'item4 description',
            'user_id' => 2
        ]);
        Item::create([
            'name' => 'Printers ',
            'slug' => 'printers ',
            'description' => 'item5 description',
            'user_id' => 3
        ]);
        Item::create([
            'name' => 'Graphical Processing Unit',
            'slug' => 'graphical-processing-unit',
            'description' => 'item6 description',
            'user_id' => 3
        ]);


    }
}
