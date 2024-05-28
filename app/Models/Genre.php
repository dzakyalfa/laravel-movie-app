<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $genres = [
        [
            'id' => 1,
            'name' => 'Jojo Bizarre Adventure',
            'description' => 'Jojos Bizarre Adventure is a story about the Joestar family, who are possessed with intense psychic strength.'
        ],
        [
            'id' => 2,
            'name' => 'Noragami',
            'description' => 'Noragami is an anime series that follows a poor deity named Yato, who desires to become a famous god.'
        ],
        [
            'id' => 3,
            'name' => 'Wind Breaker',
            'description' => 'Haruka Sakura wants nothing to do with weaklings hes only interested in the strongest of the strong.'
        ],
        [
            'id' => 4,
            'name' => 'Kimi No Nawa',
            'description' => 'Kimi no Na wa" mengisahkan tentang dua remaja, Mitsuha Miyamizu dan Taki Tachibana, yang hidup di tempat berbeda dan tidak saling mengenal. Mitsuha adalah seorang gadis sekolah menengah yang tinggal di kota kecil Itomori di pegunungan Jepang, sementara Taki adalah seorang siswa sekolah menengah di Tokyo yang bekerja paruh waktu di sebuah restoran Italia.
            Suatu hari, mereka mulai mengalami fenomena aneh di mana mereka bertukar tubuh secara acak ketika mereka tidur.'
        ],
        [
            'id' => 5,
            'name' => 'Dragon Ball',
            'description' => 'Dragon Ball" mengikuti petualangan seorang anak laki-laki bernama Son Goku, yang memiliki kekuatan luar biasa dan ekor seperti monyet. 
            Goku memulai perjalanan untuk mengumpulkan tujuh bola ajaib yang dikenal sebagai Dragon Balls. Ketika semua Dragon Balls dikumpulkan, mereka dapat memanggil naga Shenron yang akan mengabulkan satu permintaan apa pun. Dalam perjalanannya, Goku bertemu dengan berbagai teman dan musuh, termasuk Bulma, Master Roshi, Krillin, dan banyak karakter lainnya.'
        ],
    ];

    public function getAllGenres()
    {
        return $this->genres;
    }
}