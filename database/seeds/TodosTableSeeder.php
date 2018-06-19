<?php

use Faker\Factory;
use Illuminate\Database\Seeder;

// Model
use App\Todo;

class TodosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = Factory::create();

        $priority = array('low', 'medium', 'high');

        foreach (range(1, 100) as $index)
        {
            Todo::create([
                'title' => $data->sentence,
                'description' => $data->paragraph,
                'start' => $data->dateTime('now'),
                'end' => $data->dateTime('now'),
                'priority' => $priority[$data->numberBetween(0, 2)],
                'user_id' => $data->numberBetween(1, 2)
            ]);
        }
    }
}
