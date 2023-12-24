<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class Kursus extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'judul' => 'Kursus Laravel',
                'deskripsi' => 'Kursus Laravel',
                'durasi' => 10,

            ],
            [
                'judul' => 'Kursus Vue',
                'deskripsi' => 'Kursus Vue',
                'durasi' => 10,
            ],
            [
                'judul' => 'Kursus React',
                'deskripsi' => 'Kursus React',
                'durasi' => 10,
            ],
            [
                'judul' => 'Kursus Angular',
                'deskripsi' => 'Kursus Angular',
                'durasi' => 10,
            ],
            [
                'judul' => 'Kursus Codeigniter',
                'deskripsi' => 'Kursus Codeigniter',
                'durasi' => 10,
            ],
            [
                'judul' => 'Kursus PHP',
                'deskripsi' => 'Kursus PHP',
                'durasi' => 10,
            ],
            [
                'judul' => 'Kursus Javascript',
                'deskripsi' => 'Kursus Javascript',
                'durasi' => 10,
            ],
            [
                'judul' => 'Kursus HTML',
                'deskripsi' => 'Kursus HTML',
                'durasi' => 10,
            ],
            [
                'judul' => 'Kursus CSS',
                'deskripsi' => 'Kursus CSS',
                'durasi' => 10,
            ],
            [
                'judul' => 'Kursus Bootstrap',
                'deskripsi' => 'Kursus Bootstrap',
                'durasi' => 10,
            ],
            [
                'judul' => 'Kursus Tailwind',
                'deskripsi' => 'Kursus Tailwind',
                'durasi' => 10,
            ]
        ];

        DB::table('kursuses')->insert($data);
    }
}
