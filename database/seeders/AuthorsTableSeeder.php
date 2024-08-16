<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Author;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $authors = [
            ['author_id' => 1, 'author_name' => 'johndoe', 'email' => 'john@example.com'],
            ['author_id' => 2, 'author_name' => 'janedoe', 'email' => 'jane@example.com'],
            ['author_id' => 3, 'author_name' => 'bobsmith', 'email' => 'bob@example.com'],
            ['author_id' => 4, 'author_name' => 'alicegreen', 'email' => 'alice@example.com'],
            ['author_id' => 5, 'author_name' => 'mikesmith', 'email' => 'mike@example.com'],
        ];

        foreach ($authors as $author) {
            Author::create($author);
        }
    }
}
