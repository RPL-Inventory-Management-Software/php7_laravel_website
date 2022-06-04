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

        User::create([
            'name' => 'Andi Achmad Adjie',
            'email' => 'andiachmadl@student.telkomuniversity.ac.id',
            'password' => bcrypt('12345')
        ]);
        User::create([
            'name' => 'Meizan Arthur Alfianto',
            'email' => 'meizanarthut@student.telkomuniversity.ac.id',
            'password' => bcrypt('12345')
        ]);
        User::create([
            'name' => 'Naufal Pandityatama',
            'email' => 'axelnaufal@student.telkomuniversity.ac.id',
            'password' => bcrypt('12345')
        ]);


        Project::create([
            'name' => 'project1',
            'slug' => 'project-1',
            'description' => 'project1 description',
            'user_id' => 1
        ]);
        Project::create([
            'name' => 'project2',
            'slug' => 'project-2',
            'description' => 'project2 description',
            'user_id' => 1
        ]);
        Project::create([
            'name' => 'project3',
            'slug' => 'project-3',
            'description' => 'project3 description',
            'user_id' => 2
        ]);
        Project::create([
            'name' => 'project4',
            'slug' => 'project-4',
            'description' => 'project4 description',
            'user_id' => 2
        ]);
        Project::create([
            'name' => 'project5',
            'slug' => 'project-5',
            'description' => 'project5 description',
            'user_id' => 3
        ]);
        Project::create([
            'name' => 'project6',
            'slug' => 'project-6',
            'description' => 'project6 description',
            'user_id' => 3
        ]);


        Item::create([
            'name' => 'item1',
            'slug' => 'item-1',
            'description' => 'item1 description',
            'user_id' => 1
        ]);
        Item::create([
            'name' => 'item2',
            'slug' => 'item-2',
            'description' => 'item2 description',
            'user_id' => 1
        ]);
        Item::create([
            'name' => 'item3',
            'slug' => 'item-3',
            'description' => 'item3 description',
            'user_id' => 2
        ]);
        Item::create([
            'name' => 'item4',
            'slug' => 'item-4',
            'description' => 'item4 description',
            'user_id' => 2
        ]);
        Item::create([
            'name' => 'item5',
            'slug' => 'item-5',
            'description' => 'item5 description',
            'user_id' => 3
        ]);
        Item::create([
            'name' => 'item6',
            'slug' => 'item-6',
            'description' => 'item6 description',
            'user_id' => 3
        ]);


    }
}
