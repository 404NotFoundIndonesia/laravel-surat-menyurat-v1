<?php

namespace Database\Seeders;

use App\Models\LetterStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LetterStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        LetterStatus::insert([
            [
                'status' => 'Rahasia',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'status' => 'Segera',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'status' => 'Biasa',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
