<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(SkillsSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(CompaniesSeeder::class);
        $this->call(InternshipsSeeder::class);
        $this->call(ReviewsSeeder::class);
        $this->call(ApplicationSeeder::class);
    }
}
