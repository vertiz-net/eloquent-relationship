<?php

namespace Database\Seeders;

use App\Models\Affiliation;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $affiliations = Affiliation::factory(5)->create();

        $users = User::factory(10)
            ->state(function () use($affiliations) {
                return [
                    'affiliation_id' => $affiliations->random()
                ];
            })
            ->create();

        $tags = Tag::factory(10)->create();

        Post::factory(30)
            ->state(function () use ($users) {
                return [
                    'user_id' => $users->random()
                ];
            })
            ->create()
            ->each(function ($post) use ($tags, $users) {
                $post->tags()->attach($tags->random(2));
            });
    }
}
