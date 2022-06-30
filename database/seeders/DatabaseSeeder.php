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
            'type' => 'website',
            'file' => '',
            'description' => 'project1 description',
            'user_id' => 1
        ]);
        Project::create([
            'name' => 'Construction',
            'slug' => 'construction',
            'type' => 'application',
            'file' => '',
            'description' => 'project2 description',
            'user_id' => 1
        ]);
        Project::create([
            'name' => 'Computer Software Development',
            'slug' => 'computer-software-development',
            'type' => 'website',
            'file' => '',
            'description' => 'project3 description',
            'user_id' => 2
        ]);
        Project::create([
            'name' => 'Design of Plans',
            'slug' => 'design-of-plans',
            'type' => 'website',
            'file' => '',
            'description' => 'project4 description',
            'user_id' => 2
        ]);
        Project::create([
            'name' => 'Research',
            'slug' => 'research',
            'type' => 'website',
            'file' => '',
            'description' => 'project5 description',
            'user_id' => 3
        ]);
        Project::create([
            'name' => 'Construction',
            'slug' => 'construction_2',
            'type' => 'website',
            'file' => '',
            'description' => 'project6 description',
            'user_id' => 3
        ]);


        Item::create([
            'name' => 'Motherboard',
            'slug' => 'motherboard',
            'brand' => 'brand 2',
            'quantity' => '6',
            // 'date' => '2022-02-21',
            'type' => 'equipment',
            'description' => 'item1 description',
            'user_id' => 1
        ]);
        Item::create([
            'name' => 'Central Processing Unit',
            'slug' => 'central-processing-unit',
            'brand' => 'brand 3',
            'quantity' => '7',
            // 'date' => '2022-02-20',
            'type' => 'equipment',
            'description' => 'item2 description',
            'user_id' => 1
        ]);
        Item::create([
            'name' => 'Projector',
            'slug' => 'projector',
            'brand' => 'brand 4',
            'quantity' => '8',
            // 'date' => '2022-02-25',
            'type' => 'furniture',
            'description' => 'item3 description',
            'user_id' => 2
        ]);
        Item::create([
            'name' => 'Scanners',
            'slug' => 'scanners',
            'brand' => 'brand 5',
            'quantity' => '2',
            // 'date' => '2022-02-23',
            'type' => 'furniture',
            'description' => 'item4 description',
            'user_id' => 2
        ]);
        Item::create([
            'name' => 'Printers ',
            'slug' => 'printers ',
            'brand' => 'brand 7',
            'quantity' => '4',
            // 'date' => '2022-02-27',
            'type' => 'furniture',
            'description' => 'item5 description',
            'user_id' => 3
        ]);
        Item::create([
            'name' => 'Graphical Processing Unit',
            'slug' => 'graphical-processing-unit',
            'brand' => 'brand 5',
            'quantity' => '9',
            // 'date' => '2022-02-29',
            'type' => 'furniture',
            'description' => 'item6 description',
            'user_id' => 3
        ]);


    }
}
