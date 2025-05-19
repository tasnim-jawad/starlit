<?php
namespace App\Modules\Management\TestModule\TestOne\Seeder;

use Illuminate\Database\Seeder as SeederClass;
use Faker\Factory as Faker;

class Seeder extends SeederClass
{
    /**
     * Run the database seeds.
     php artisan db:seed --class="App\Modules\Management\TestModule\TestOne\Seeder\Seeder"
     */
    static $model = \App\Modules\Management\TestModule\TestOne\Models\Model::class;

    public function run(): void
    {
        $faker = Faker::create();
        self::$model::truncate();

        for ($i = 1; $i <= 100; $i++) {
            self::$model::create([                'title' => $faker->text(50),
                'description' => $faker->paragraph,
            ]);
        }
    }
}