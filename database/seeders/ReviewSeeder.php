<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * @return void
     */
    public function run(): void
    {
        Review::create([
            'id' => 1,
            'title' => 'Jojo Bizarre Adventure',
            'poster' => 'movie-01.jpg',
            'user' => 'Arifin',
            'rating' => '9,2',
            'date' => '1-10-2008',
        ]);
    
        Review::create([
            'id' => 2,
            'title' => 'Noragami',
            'poster' => 'movie-02.jpg',
            'user' => 'Fahmi',
            'rating' => '8,5',
            'date' => '4-4-2004',
        ]);
    
        Review::create([
            'id' => 3,
            'title' => 'Wind Breaker',
            'poster' => 'movie-01.jpg',
            'user' => 'Elit',
            'rating' => '7,5',
            'date' => '19-4-2007',
        ]);
        Review::create([
            'id' => 4,
            'title' => 'Kimi no nawa',
            'poster' => 'movie-04.jpg',
            'user' => 'Akmal',
            'rating' => '9,0',
            'date' => '19-12-2009',
        ]);
        Review::create([
            'id' => 5,
            'title' => 'Dragon Ball',
            'poster' => 'movie-05.jpg',
            'user' => 'Bahri',
            'rating' => '9,5',
            'date' => '12-8-2001',
        ]);
    }
}
