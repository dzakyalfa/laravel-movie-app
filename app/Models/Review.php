<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $reviews = [
        [
            'id' => 1,
            'Movie' => 'Jojo Bizarre Adventure',
            'poster' => 'movie-01.jpg',
            'User' => 'Arifin',
            'Rating' => '9,2',
            'Date' => '1-10-2008'
        ],
        [
            'id' => 2,
            'Movie' => 'Noragami',
            'poster' => 'movie-02.jpg',
            'User' => 'Fahmi',
            'Rating' => '8,5',
            'Date' => '4-4-2005'
        ],
        [
            'id' => 3,
            'Movie' => 'Wind Breaker',
            'poster' => '<movie-03></movie-03>.jpg',
            'User' => 'Elit',
            'Rating' => '7,5',
            'Date' => '19-4-2007'
        ],
        [
            'id' => 4,
            'Movie' => 'Kimi No Nawa',
            'poster' => 'img1.jpeg',
            'User' => 'Akmal',
            'Rating' => '9,0',
            'Date' => '19-12-2009'
        ],
        [
            'id' => 5,
            'Movie' => 'Dragon Ball',
            'poster' => 'download.jpeg',
            'User' => 'Bahri',
            'Rating' => '9,5',
            'Date' => '12-8-2001'
        ],
        
    ];

    public function getAllReviews()
    {
        return $this->reviews;
    }
}