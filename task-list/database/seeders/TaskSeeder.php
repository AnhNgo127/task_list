<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Task;
use Faker\Factory as Faker;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //viết code sinh dữ liệu fake

        $faker = Faker::create('vi_VN');
        for($i = 0; $i < 10; $i++){
            Task::create([
                'title' => $faker->sentence(),
                'description' => $faker->paragraph(),
                'long_description' => $faker->text(),
                'completed' => $faker->boolean(),
            ]);
        }
    }
}
