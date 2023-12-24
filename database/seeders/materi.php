<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class materi extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                "kursus_id" => 1,
                "judul" => "Materi Laravel",
                "deskripsi" => "Materi Laravel",
                "link_embed" => "https://www.youtube.com/embed/6Z6e_3l9T5c",
            ],
            [
                "kursus_id" => 2,
                "judul" => "Materi Vue",
                "deskripsi" => "Materi Vue",
                "link_embed" => "https://www.youtube.com/embed/6Z6e_3l9T5c",
            ],
            [
                "kursus_id" => 3,
                "judul" => "Materi React",
                "deskripsi" => "Materi React",
                "link_embed" => "https://www.youtube.com/embed/6Z6e_3l9T5c",
            ],
            [
                "kursus_id" => 4,
                "judul" => "Materi Angular",
                "deskripsi" => "Materi Angular",
                "link_embed" => "https://www.youtube.com/embed/6Z6e_3l9T5c",
            ],
            [
                "kursus_id" => 5,
                "judul" => "Materi Codeigniter",
                "deskripsi" => "Materi Codeigniter",
                "link_embed" => "https://www.youtube.com/embed/6Z6e_3l9T5c",
            ],
            [
                "kursus_id" => 5,
                "judul" => "Materi PHP",
                "deskripsi" => "Materi PHP",
                "link_embed" => "https://www.youtube.com/embed/6Z6e_3l9T5c",
            ],
            [
                "kursus_id" => 3,
                "judul" => "Materi Javascript",
                "deskripsi" => "Materi Javascript",
                "link_embed" => "https://www.youtube.com/embed/6Z6e_3l9T5c",
            ],
            [
                "kursus_id" => 2,
                "judul" => "Materi HTML",
                "deskripsi" => "Materi HTML",
                "link_embed" => "https://www.youtube.com/embed/6Z6e_3l9T5c",
            ],
            [
                "kursus_id" => 2,
                "judul" => "Materi CSS",
                "deskripsi" => "Materi CSS",
                "link_embed" => "https://www.youtube.com/embed/6Z6e_3l9T5c",
            ],
            [
                "kursus_id" => 1,
                "judul" => "Materi Bootstrap",
                "deskripsi" => "Materi Bootstrap",
                "link_embed" => "https://www.youtube.com/embed/6Z6e_3l9T5c",
            ]
        ];

        DB::table('materis')->insert($data);
    }
}
