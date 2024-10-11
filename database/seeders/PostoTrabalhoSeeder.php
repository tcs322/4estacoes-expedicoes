<?php

namespace Database\Seeders;

use App\Models\PostoTrabalho;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostoTrabalhoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PostoTrabalho::factory(5)->create();
    }
}
