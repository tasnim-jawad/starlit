<?php
namespace App\Modules\Management\BlogCategory\Seeder;

use Illuminate\Database\Seeder as SeederClass;
use Faker\Factory as Faker;

class Seeder extends SeederClass
{
    /**
     * Run the database seeds.
     php artisan db:seed --class="/app/Modules/Management//Seeder/Seeder"
     */
    static $model = \App\Modules\Management\BlogCategory\Models\Model::class;

    public function run(): void
    {
        $faker = Faker::create();
        self::$model::truncate();

        for ($i = 1; $i <= 100; $i++) {
            self::$model::create([                'name' => $faker->sentence,
            ]);
        }
    }
}