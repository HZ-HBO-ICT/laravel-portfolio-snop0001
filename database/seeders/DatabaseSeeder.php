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
        // \App\Models\User::factory(10)->create();
        //option1
        //$this->call(ArticleSeeder::class);
        //option2
        $this->call([
            ArticleSeeder::class,
            FaqSeeder::class,
            GradeSeeder::class,
        ]);
    }
}
