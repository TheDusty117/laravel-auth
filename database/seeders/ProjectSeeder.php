<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 20; $i++) {

            $project = new Project();
            $project->title = $faker->sentences( $faker->numberBetween(3,5) );
            $project->client = $faker->name;
            $project->description = $faker->optional()->text(100);
            $project->slug = Str::slug($post->title, '-');

            $project->save();

        }
    }
}
