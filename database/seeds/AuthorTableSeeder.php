<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\Author;

class AuthorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        DB::table('authors')->delete();
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            Author::create([
                'email' => $faker->companyEmail,
                'company_name' => $faker->company
            ]);
        }

        Model::reguard();
    }
}
