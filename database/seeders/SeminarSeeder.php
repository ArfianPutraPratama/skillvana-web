<?php

namespace Database\Seeders;

use App\Models\Seminar;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SeminarSeeder extends Seeder
{

    public function run()
    {
        Seminar::create(
            [
                'title' => 'Economy Discusion',
                'instructor' => 'Kukuh Arisetyawan dan Nadila Primastika',
                'description' => 'Seminar "Economy Discussion" membahas perkembangan ekonomi digital yang dipengaruhi oleh AI seperti ChatGPT, Midjourney, dan DALL·E. Dipandu oleh Kukuh Arisetyawan dan Nadila Primastika, peserta akan mempelajari penerapan AI dalam bisnis, media sosial, SEO, dan prompt engineering.Dengan 23 materi, 25 kuis, dan sertifikat bagi peserta yang lulus, seminar ini cocok untuk level intermediate yang ingin memahami tren ekonomi modern secara praktis dan aplikatif.',
                'rating' => 4.6,
                'review_count' => 1335,
                'price' => 249000,
                'discounted_price' => 139000,
                'image' => 'img/Economy Discusion.jpeg', // Nama file gambar
                'image2' => 'img/bootcamp-1.png', // Nama file gambar
                'start_date' => '2025-8-30',
                'students' => 400,
                'lectures' => 23,
                'skill_level' => 'Intermediate',
                'language' => 'English',
                'quizzes' => 25,
                'certificate' => true,
                'pass_percentage' => 90,
                'deadline' => '2023-12-25'
            ]
        );

        // Tambahkan 5 data seminar lainnya
        Seminar::create([
            'title' => 'Momic 2024',
            'instructor' => 'D4 Manajemen Informatika',
            'description' => 'Seminar ini yang diadakan oleh mahasiswa universitas negeri surabaya manajemen infomatika untuk melatih teman teman dalam mengatur srategi dalam permainan momic.',
            'rating' => 4.8,
            'review_count' => 500,
            'price' => 299000,
            'discounted_price' => 199000,
            'image' => 'img/Momic.jpeg',
            'image2' => 'img/bootcamp-1.png', // Nama file gambar
            'start_date' => '2025-8-30',
            'students' => 400,
            'lectures' => 23,
            'skill_level' => 'Intermediate',
            'language' => 'English',
            'quizzes' => 25,
            'certificate' => true,
            'pass_percentage' => 90,
            'deadline' => '2023-12-25'
        ]);

        Seminar::create([
            'title' => 'Open Volunteer',
            'instructor' => 'Arsa Surabaya',
            'description' => 'Seminar ini yang diadakan oleh arsa surabaya untuk membantu teman teman yang ingin menjadi volunteer',
            'rating' => 4.7,
            'review_count' => 300,
            'price' => 249000,
            'discounted_price' => 149000,
            'image' => 'img/Open Vol.jpeg',
            'image2' => 'img/bootcamp-1.png', // Nama file gambar
            'start_date' => '2025-8-30',
            'students' => 400,
            'lectures' => 23,
            'skill_level' => 'Intermediate',
            'language' => 'English',
            'quizzes' => 25,
            'certificate' => true,
            'pass_percentage' => 90,
            'deadline' => '2023-12-25'
        ]);

        // Seminar::create([
        //     'title' => 'Data Science for Beginners',
        //     'instructor' => 'Emily Davis',
        //     'description' => 'An introduction to data science concepts and tools for beginners.',
        //     'rating' => 4.5,
        //     'review_count' => 250,
        //     'price' => 199000,
        //     'discounted_price' => 129000,
        //     'image' => 'img/Momic.jpeg',
        //     'image2' => 'img/bootcamp-1.png', // Nama file gambar
        //     'start_date' => '2025-8-30',
        //     'students' => 400,
        //     'lectures' => 23,
        //     'skill_level' => 'Intermediate',
        //     'language' => 'English',
        //     'quizzes' => 25,
        //     'certificate' => true,
        //     'pass_percentage' => 90,
        //     'deadline' => '2023-12-25'
        // ]);

        // Seminar::create([
        //     'title' => 'Digital Marketing Strategies',
        //     'instructor' => 'James Brown',
        //     'description' => 'Learn effective digital marketing strategies to grow your business online.',
        //     'rating' => 4.9,
        //     'review_count' => 400,
        //     'price' => 299000,
        //     'discounted_price' => 199000,
        //     'image' => 'img/Momic.jpeg',
        //     'image2' => 'img/bootcamp-1.png', // Nama file gambar
        //     'start_date' => now(),
        //     'students' => 400,
        //     'lectures' => 23,
        //     'skill_level' => 'Intermediate',
        //     'language' => 'English',
        //     'quizzes' => 25,
        //     'certificate' => true,
        //     'pass_percentage' => 90,
        //     'deadline' => '2023-12-25'
        // ]);

        // Seminar::create([
        //     'title' => 'UI/UX Design Fundamentals',
        //     'instructor' => 'Sophia Wilson',
        //     'description' => 'Understand the principles of UI/UX design and how to create user-friendly interfaces.',
        //     'rating' => 4.6,
        //     'review_count' => 350,
        //     'price' => 249000,
        //     'discounted_price' => 159000,
        //     'image' => 'img/Open Vol.jpeg',
        //     'image2' => 'img/bootcamp-1.png', // Nama file gambar
        //     'start_date' => '2025-8-30',
        //     'students' => 400,
        //     'lectures' => 23,
        //     'skill_level' => 'Intermediate',
        //     'language' => 'English',
        //     'quizzes' => 25,
        //     'certificate' => true,
        //     'pass_percentage' => 90,
        //     'deadline' => '2023-12-25'
        // ]);
    }
}
