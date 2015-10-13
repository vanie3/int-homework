<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\Application;
use App\Author;

class ApplicationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        DB::table('applications')->delete();
        $authors = Author::all();
        $faker = Faker::create();

        foreach($authors as $author){
            for ($i = 0; $i < 1; $i++) {
                Application::create([
                    'title' => $faker->company,
                    'version' => $faker->randomFloat($nbMaxDecimals = 1, $min = 1, $max = 3),
                    'author_id' => $author->id
                ]);
            }
        }


        Model::reguard();
    }
}
