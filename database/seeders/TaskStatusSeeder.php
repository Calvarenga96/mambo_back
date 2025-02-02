<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $statuses = ['pending', 'in_process', 'finalized'];
        $description = ['Pendiente', 'En Proceso', 'Finalizado'];

        foreach ($statuses as $position => $status) {
            DB::table('task_statuses')->insert([
                'name'          => $status,
                'description'   => $description[$position],
                'created_at'    => now(),
                'updated_at'    => now(),
            ]);
        }
    }
}
