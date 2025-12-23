<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\tasks;

class TasksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        tasks::create([
            'title' => 'Sample Task 1',
            'description' => 'This is a sample task description.',
            'due_date' => '2024-12-31',
            'is_completed' => false,
        ]); 
        tasks::create([
            'title' => 'Sample Task 2',
            'description' => 'This is another sample task description.',
            'due_date' => '2025-01-15',
            'is_completed' => true,
        ]);
    }
}
