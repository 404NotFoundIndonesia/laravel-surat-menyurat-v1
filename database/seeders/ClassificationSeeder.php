<?php

namespace Database\Seeders;

use App\Models\Classification;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClassificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        Classification::create([
            'code' => 'ADM',
            'type' => 'Administrasi',
            'description' => 'Jenis surat yang berkaitan dengan administrasi',
        ]);
    }
}
