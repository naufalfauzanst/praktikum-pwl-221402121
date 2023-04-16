<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Faker\Factory;
use DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [];
        $faker = Factory::create();
        $userIds = User::pluck('id')->toArray();


        for ($i = 1; $i <= 5; $i++) {
            $posts[] = [
                'title'     => $faker->sentence(mt_rand(2, 8)),
                'excerpt'   => $faker->paragraph(1),
                'content'   => $faker->paragraph(mt_rand(3, 5)),
                'image'     => $faker->word(1) . $faker->randomElement($array = array('.jpg', '.jpeg', '.png')),
                'author_id' => collect($userIds)->random()
            ];
        }
        DB::table('posts')->insert($posts);
    }
}