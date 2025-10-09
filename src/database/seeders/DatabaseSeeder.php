<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use  App\Models\Contact;
use App\Models\Category;
use Database\Seeders\CategoriesTableSeeder;
use Database\Seeders\ContactTableSeeder;

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
        $this->call(CategoriesTableSeeder::class);
        $this->call(ContactTableSeeder::class);
    }
}
