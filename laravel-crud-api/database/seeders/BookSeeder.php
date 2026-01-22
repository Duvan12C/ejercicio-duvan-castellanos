<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book; 

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
           Book::create([
            'title' => 'El Principito',
            'author' => 'Antoine de Saint-Exupéry',
            'year_published' => 1943,
        ]);

        Book::create([
            'title' => '1984',
            'author' => 'George Orwell',
            'year_published' => 1949,
        ]);
    }
}
