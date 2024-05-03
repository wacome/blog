<?php

namespace Database\Seeders;

use Database\Factories\ArchiveFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArchiveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ArchiveFactory::new()->count(5)->create();
    }
}
