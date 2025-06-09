<?php

namespace Database\Seeders;

use App\Models\Video;
use App\Models\Module;
use App\Models\Lecture;
use App\Models\Bootcamp;
use Illuminate\Database\Seeder;

class BootcampSeeder extends Seeder
{
    public function run()
    {
        // Fungsi untuk mengonversi harga ke format Rupiah (hanya untuk frontend)
        function toRupiah($amount)
        {
            return 'Rp ' . number_format($amount * 1000, 0, ',', '.');
        }

        // ChatGPT Bootcamps
        // 1. Laravel Bootcamp
        $bootcamp = Bootcamp::create([
            'title' => 'Laravel Bootcamp',
            'duration' => '19h 17m 35s',
            'students' => 400,
            'original_price' => 59000,
            'discounted_price' => 49000,
            'image' => 'img/bootcamp-1.png',
            'start_date' => now(),
            'lectures' => 23,
            'skill_level' => 'Intermediate',
            'language' => 'English',
            'quizzes' => 25,
            'certificate' => true,
            'pass_percentage' => 90,
            'deadline' => '2025-12-31',
            'instructor' => 'Daniel Silva',
            'description' => 'Learn Laravel from scratch.',
            'category' => 'chatgpt',
            'learnings' => json_encode([
                'Understand Laravel basics',
                'Build web applications',
                'Master MVC architecture',
                'Deploy Laravel applications'
            ]),
        ]);

        $module = Module::create([
            'bootcamp_id' => $bootcamp->id,
            'name' => 'Introduction to Laravel',
            'description' => 'Learn the basics of Laravel.',
        ]);

        Video::create([
            'module_id' => $module->id,
            'title' => 'Laravel instalasi',
            'youtube_link' => 'https://www.youtube.com/watch?v=T1TR-RGf2Pw',
            'duration' => '5m',
        ]);

        Video::create([
            'module_id' => $module->id,
            'title' => 'Laravel Konfigurasi',
            'youtube_link' => 'https://www.youtube.com/watch?v=nW60yGRoUrs',
            'duration' => '7m',
        ]);

        $module = Module::create([
            'bootcamp_id' => $bootcamp->id,
            'name' => 'Laravel Struktur',
            'description' => 'Learn the basics of Laravel.',
        ]);

        Video::create([
            'module_id' => $module->id,
            'title' => 'Struktur Folder',
            'youtube_link' => 'https://www.youtube.com/watch?v=x55ndgkD2QI',
            'duration' => '7m',
        ]);

        $module = Module::create([
            'bootcamp_id' => $bootcamp->id,
            'name' => 'Laravel komponen',
            'description' => 'Learn the basics of Laravel.',
        ]);

        Video::create([
            'module_id' => $module->id,
            'title' => 'Blade Templating Engine',
            'youtube_link' => 'https://www.youtube.com/watch?v=vDx6VA-6a6Y',
            'duration' => '7m'
        ]);

        Video::create([
            'module_id' => $module->id,
            'title' => 'Blade Component',
            'youtube_link' => 'https://www.youtube.com/watch?v=00o1vJYTp4I',
            'duration' => '7m'
        ]);

        $module = Module::create([
            'bootcamp_id' => $bootcamp->id,
            'name' => 'View dan model',
            'description' => 'Learn the basics of Laravel.',
        ]);

        Video::create([
            'module_id' => $module->id,
            'title' => 'View Data',
            'youtube_link' => 'https://www.youtube.com/watch?v=76YsC4EjGE4',
            'duration' => '7m'
        ]);

        Video::create([
            'module_id' => $module->id,
            'title' => 'Model',
            'youtube_link' => 'https://www.youtube.com/watch?v=dzjBbvKjbaQ',
            'duration' => '7m'
        ]);

        $module = Module::create([
            'bootcamp_id' => $bootcamp->id,
            'name' => 'Database',
            'description' => 'Learn the basics of Laravel.',
        ]);

        Video::create([
            'module_id' => $module->id,
            'title' => 'Database & Migration',
            'youtube_link' => 'https://www.youtube.com/watch?v=eghZY9-3Wko',
            'duration' => '7m'
        ]);

        $module = Module::create([
            'bootcamp_id' => $bootcamp->id,
            'name' => 'Eloquent ORM dan post',
            'description' => 'Learn the basics of Laravel.',
        ]);

        Video::create([
            'module_id' => $module->id,
            'title' => 'Eloquent ORM & Post Model',
            'youtube_link' => 'https://www.youtube.com/watch?v=dW3-33iMYkk',
            'duration' => '7m'
        ]);

        Video::create([
            'module_id' => $module->id,
            'title' => 'Model Factories',
            'youtube_link' => 'https://www.youtube.com/watch?v=1wWXyO4iuBA',
            'duration' => '7m'
        ]);

        Video::create([
            'module_id' => $module->id,
            'title' => 'Eloquent Relationship',
            'youtube_link' => 'https://www.youtube.com/watch?v=S2eh1VnHu40',
            'duration' => '7m'
        ]);

        Video::create([
            'module_id' => $module->id,
            'title' => 'Post Category',
            'youtube_link' => 'https://www.youtube.com/watch?v=jineNX34OYE',
            'duration' => '7m'
        ]);

        $module = Module::create([
            'bootcamp_id' => $bootcamp->id,
            'name' => 'Seeder',
            'description' => 'Learn the basics of Laravel.',
        ]);

        Video::create([
            'module_id' => $module->id,
            'title' => 'Post Category',
            'youtube_link' => 'https://www.youtube.com/watch?v=rAv8C0Nf9uk',
            'duration' => '7m'
        ]);

        $module = Module::create([
            'bootcamp_id' => $bootcamp->id,
            'name' => 'Problem',
            'description' => 'Learn the basics of Laravel.',
        ]);

        Video::create([
            'module_id' => $module->id,
            'title' => 'N + 1 Problem',
            'youtube_link' => 'https://www.youtube.com/watch?v=K2p6Mtz5P20',
            'duration' => '7m'
        ]);

        $module = Module::create([
            'bootcamp_id' => $bootcamp->id,
            'name' => 'Redesign',
            'description' => 'Learn the basics of Laravel.',
        ]);

        Video::create([
            'module_id' => $module->id,
            'title' => 'Redesign UI',
            'youtube_link' => 'https://www.youtube.com/watch?v=uVRN9DzUAU8',
            'duration' => '7m'
        ]);

        $module = Module::create([
            'bootcamp_id' => $bootcamp->id,
            'name' => 'Searching',
            'description' => 'Learn the basics of Laravel.',
        ]);

        Video::create([
            'module_id' => $module->id,
            'title' => 'Searching',
            'youtube_link' => 'https://www.youtube.com/watch?v=8hhaAsRFAJs',
            'duration' => '7m'
        ]);

        $module = Module::create([
            'bootcamp_id' => $bootcamp->id,
            'name' => 'Pagination',
            'description' => 'Learn the basics of Laravel.',
        ]);

        Video::create([
            'module_id' => $module->id,
            'title' => 'Pagination',
            'youtube_link' => 'https://www.youtube.com/watch?v=HP3CdxX9oak',
            'duration' => '7m'
        ]);

        // 2. Bootcamp Belajar Bahasa Jepang
        $bootcamp = Bootcamp::create([
            'title' => 'Bootcamp Belajar Bahasa Jepang',
            'duration' => '19h 17m 35s',
            'students' => 400,
            'original_price' => 59000,
            'discounted_price' => 49000,
            'image' => 'img/jepang.jpg',
            'start_date' => now(),
            'lectures' => 9,
            'skill_level' => 'Intermediate',
            'language' => 'Indonesian',
            'quizzes' => 9,
            'certificate' => true,
            'pass_percentage' => 90,
            'deadline' => '2025-12-31',
            'instructor' => 'Daniel Silva',
            'description' => 'Learn Japanese from scratch.',
            'category' => 'chatgpt',
            'learnings' => json_encode([
                'Understand Japanese basics',
                'Master Hiragana and Katakana',
                'Learn basic Kanji',
                'Practice Japanese greetings'
            ]),
        ]);

        $module = Module::create([
            'bootcamp_id' => $bootcamp->id,
            'name' => 'Belajar Bahasa Jepang Dari Nol Dengan Buku Minna no Nihongo',
            'description' => 'Belajar Bahasa Jepang Dari Nol Dengan Buku Minna no Nihongo',
        ]);

        Video::create([
            'module_id' => $module->id,
            'title' => 'Belajar Bahasa Jepang Dari Nol Dengan Buku Minna no Nihongo',
            'youtube_link' => 'https://www.youtube.com/watch?v=ofZXuYp_teQ',
            'duration' => '5m',
        ]);

        $module = Module::create([
            'bootcamp_id' => $bootcamp->id,
            'name' => 'Cara Menulis Hiragana Dan Katakana Lengkap 46 Huruf',
            'description' => 'Cara Menulis Hiragana Lengkap 46 Huruf.',
        ]);

        Video::create([
            'module_id' => $module->id,
            'title' => 'Cara Menulis Hiragana Lengkap 46 Huruf ',
            'youtube_link' => 'https://www.youtube.com/watch?v=p6Dr8LPDcng',
            'duration' => '7m',
        ]);

        Video::create([
            'module_id' => $module->id,
            'title' => 'Cara Menulis Huruf Katakana Lengkap 46 Huruf ',
            'youtube_link' => 'https://www.youtube.com/watch?v=NWUwUlGELus',
            'duration' => '7m'
        ]);

        $module = Module::create([
            'bootcamp_id' => $bootcamp->id,
            'name' => 'Tanda Baca Aturan Dasar Huruf Hiragana & Katakana',
            'description' => 'Tanda Baca Aturan Dasar Huruf Hiragana & Katakana.',
        ]);

        Video::create([
            'module_id' => $module->id,
            'title' => 'Tanda Baca Huruf Hiragana & Katakana',
            'youtube_link' => 'https://www.youtube.com/watch?v=854nJLMprsE',
            'duration' => '7m'
        ]);

        Video::create([
            'module_id' => $module->id,
            'title' => 'Aturan Dasar Penulisan Huruf Katakana Dalam Kosakata Serapan ',
            'youtube_link' => 'https://www.youtube.com/watch?v=k-p1KPTeY04',
            'duration' => '7m'
        ]);

        $module = Module::create([
            'bootcamp_id' => $bootcamp->id,
            'name' => 'Belajar Huruf Kanji Jepang Dasar',
            'description' => 'Belajar Huruf Kanji Jepang Dasar.',
        ]);

        Video::create([
            'module_id' => $module->id,
            'title' => 'Belajar Huruf Kanji Jepang Dasar',
            'youtube_link' => 'https://www.youtube.com/watch?v=aoRDFurRdAU',
            'duration' => '7m'
        ]);

        $module = Module::create([
            'bootcamp_id' => $bootcamp->id,
            'name' => 'Belajar Salam Yang Benar Dalam Bahasa Jepang',
            'description' => 'Belajar Salam Yang Benar Dalam Bahasa Jepang.',
        ]);

        Video::create([
            'module_id' => $module->id,
            'title' => 'Belajar Salam Yang Benar Dalam Bahasa Jepang',
            'youtube_link' => 'https://www.youtube.com/watch?v=0WQN0m3DjvU',
            'duration' => '7m'
        ]);

        $module = Module::create([
            'bootcamp_id' => $bootcamp->id,
            'name' => 'Bilangan, Aksen & Intonasi Dalam Bahasa Jepang',
            'description' => 'Bilangan, Aksen & Intonasi Dalam Bahasa Jepang.',
        ]);

        Video::create([
            'module_id' => $module->id,
            'title' => 'Bilangan, Aksen & Intonasi Dalam Bahasa Jepang',
            'youtube_link' => 'https://www.youtube.com/watch?v=7_Y_X56ml4w',
            'duration' => '7m'
        ]);

        // 3. Bootcamp Belajar HTML CSS JS
        $bootcamp = Bootcamp::create([
            'title' => 'Bootcamp Belajar HTML CSS JS',
            'duration' => '19h 17m 35s',
            'students' => 400,
            'original_price' => 59000,
            'discounted_price' => 49000,
            'image' => 'img/HTML CSS JS.jpg',
            'start_date' => now(),
            'lectures' => 9,
            'skill_level' => 'Intermediate',
            'language' => 'Indonesian',
            'quizzes' => 9,
            'certificate' => true,
            'pass_percentage' => 90,
            'deadline' => '2025-12-31',
            'instructor' => 'Daniel Silva',
            'description' => 'Learn web development with HTML, CSS, and JavaScript.',
            'category' => 'chatgpt',
            'learnings' => json_encode([
                'Understand HTML basics',
                'Style with CSS',
                'Add interactivity with JavaScript',
                'Build responsive websites'
            ]),
        ]);

        $module = Module::create([
            'bootcamp_id' => $bootcamp->id,
            'name' => 'Belajar Membuat WEBSITE Dari 0 Sampai Di PUBLISH Untuk Pemula',
            'description' => 'Belajar Membuat WEBSITE Dari 0 Sampai Di PUBLISH Untuk Pemula.',
        ]);

        Video::create([
            'module_id' => $module->id,
            'title' => 'Belajar Membuat WEBSITE Dari 0 Sampai Di PUBLISH Untuk Pemula',
            'youtube_link' => 'https://www.youtube.com/watch?v=71a2zeC71gk',
            'duration' => '5m',
        ]);

        $module = Module::create([
            'bootcamp_id' => $bootcamp->id,
            'name' => 'HTML CSS JS (Implementasi Logika Sederhana)',
            'description' => 'HTML CSS JS (Implementasi Logika Sederhana).',
        ]);

        Video::create([
            'module_id' => $module->id,
            'title' => 'HTML CSS JS (Implementasi Logika Sederhana)',
            'youtube_link' => 'https://www.youtube.com/watch?v=Mb6Np6QURDY',
            'duration' => '5m',
        ]);

        $module = Module::create([
            'bootcamp_id' => $bootcamp->id,
            'name' => 'HTML CSS BOOTSTRAP Untuk Pemula',
            'description' => 'HTML CSS BOOTSTRAP Untuk Pemula.',
        ]);

        Video::create([
            'module_id' => $module->id,
            'title' => 'HTML CSS BOOTSTRAP Untuk Pemula',
            'youtube_link' => 'https://www.youtube.com/watch?v=igwNyjc7Ii8',
            'duration' => '5m',
        ]);

        $module = Module::create([
            'bootcamp_id' => $bootcamp->id,
            'name' => 'HTML CSS JS (Cetrekan Lampu)',
            'description' => 'HTML CSS JS (Cetrekan Lampu).',
        ]);

        Video::create([
            'module_id' => $module->id,
            'title' => 'HTML CSS JS (Cetrekan Lampu)',
            'youtube_link' => 'https://www.youtube.com/watch?v=vQeJIa-ZYm4',
            'duration' => '5m',
        ]);

        $module = Module::create([
            'bootcamp_id' => $bootcamp->id,
            'name' => 'HTML CSS JS (LocalStorage Browser)',
            'description' => 'HTML CSS JS (LocalStorage Browser).',
        ]);

        Video::create([
            'module_id' => $module->id,
            'title' => 'HTML CSS JS (LocalStorage Browser)',
            'youtube_link' => 'https://www.youtube.com/watch?v=QUpyv31Nyso',
            'duration' => '5m',
        ]);

        $module = Module::create([
            'bootcamp_id' => $bootcamp->id,
            'name' => 'Membuat WEBSITE HTML CSS & JS (Dark Mode) Sampai Publish Ke Replit',
            'description' => 'Membuat WEBSITE HTML CSS & JS (Dark Mode) Sampai Publish Ke Replit.',
        ]);

        Video::create([
            'module_id' => $module->id,
            'title' => 'Membuat WEBSITE HTML CSS & JS (Dark Mode) Sampai Publish Ke Replit',
            'youtube_link' => 'https://www.youtube.com/watch?v=QIpWKTHKcqM',
            'duration' => '5m',
        ]);

        $module = Module::create([
            'bootcamp_id' => $bootcamp->id,
            'name' => 'Javascript Backend (NODE JS) Untuk Pemula',
            'description' => 'Javascript Backend (NODE JS) Untuk Pemula.',
        ]);

        Video::create([
            'module_id' => $module->id,
            'title' => 'Javascript Backend (NODE JS) Untuk Pemula',
            'youtube_link' => 'https://www.youtube.com/watch?v=kLUI9LISP5k',
            'duration' => '5m',
        ]);

        $module = Module::create([
            'bootcamp_id' => $bootcamp->id,
            'name' => 'Web GENERATOR Password HTML Bootstrap JS',
            'description' => 'Web GENERATOR Password HTML Bootstrap JS.',
        ]);

        Video::create([
            'module_id' => $module->id,
            'title' => 'Web GENERATOR Password HTML Bootstrap JS',
            'youtube_link' => 'https://www.youtube.com/watch?v=XqJYMlCpYQA',
            'duration' => '5m',
        ]);

        // 4-10. Additional ChatGPT Bootcamps
        for ($i = 4; $i <= 3; $i++) {
            $bootcamp = Bootcamp::create([
                'title' => "ChatGPT Bootcamp $i: AI Applications",
                'duration' => '15h',
                'students' => rand(200, 1000),
                'original_price' => 59000,
                'discounted_price' => 49000,
                'image' => "img/chatgpt_$i.png",
                'start_date' => now(),
                'lectures' => rand(8, 12),
                'skill_level' => 'Beginner',
                'language' => 'Indonesian',
                'quizzes' => rand(5, 10),
                'certificate' => true,
                'pass_percentage' => 90,
                'deadline' => '2025-12-31',
                'instructor' => 'AI Instructor ' . $i,
                'description' => 'Learn to use ChatGPT for various applications.',
                'category' => 'chatgpt',
                'learnings' => json_encode([
                    'Introduction to ChatGPT',
                    'Prompt engineering',
                    'Building AI applications',
                    'Ethical AI usage'
                ]),
            ]);

            $module = Module::create([
                'bootcamp_id' => $bootcamp->id,
                'name' => "Introduction to ChatGPT $i",
                'description' => 'Learn the basics of ChatGPT.',
            ]);

            Video::create([
                'module_id' => $module->id,
                'title' => "Getting Started with ChatGPT $i",
                'youtube_link' => 'https://www.youtube.com/watch?v=example_chatgpt' . $i,
                'duration' => '10m',
            ]);
        }

        // Data Science Bootcamps
        // 1. Bootcamp Belajar Data Sains
        $bootcamp = Bootcamp::create([
            'title' => 'Bootcamp Belajar Data Sains',
            'duration' => '19h 17m 35s',
            'students' => 400,
            'original_price' => 59000,
            'discounted_price' => 49000,
            'image' => 'img/Sains data.jpg',
            'start_date' => now(),
            'lectures' => 9,
            'skill_level' => 'Intermediate',
            'language' => 'Indonesian',
            'quizzes' => 9,
            'certificate' => true,
            'pass_percentage' => 90,
            'deadline' => '2025-12-31',
            'instructor' => 'Daniel Silva',
            'description' => 'Learn Data Science from scratch.',
            'category' => 'data-science',
            'learnings' => json_encode([
                'Understand Data Science basics',
                'Master Python for Data Science',
                'Learn data analysis',
                'Work with datasets'
            ]),
        ]);

        $module = Module::create([
            'bootcamp_id' => $bootcamp->id,
            'name' => 'Dasar Data Sains',
            'description' => 'Dasar Data Sains.',
        ]);

        Video::create([
            'module_id' => $module->id,
            'title' => 'Apa Itu Data Science',
            'youtube_link' => 'https://www.youtube.com/watch?v=_ozeKsOtqHI',
            'duration' => '5m',
        ]);

        Video::create([
            'module_id' => $module->id,
            'title' => 'Tutorial Python Dasar Hello World dan Kaggle',
            'youtube_link' => 'https://www.youtube.com/watch?v=sJzO99kRmj8',
            'duration' => '7m',
        ]);

        Video::create([
            'module_id' => $module->id,
            'title' => 'Tutorial Python Dasar Variable dan Types',
            'youtube_link' => 'https://www.youtube.com/watch?v=kFkE_15n7f4',
            'duration' => '7m'
        ]);

        $module = Module::create([
            'bootcamp_id' => $bootcamp->id,
            'name' => 'Data Sains List',
            'description' => 'Data Sains List.',
        ]);

        Video::create([
            'module_id' => $module->id,
            'title' => 'Python List',
            'youtube_link' => 'https://www.youtube.com/watch?v=3ObZ7fDLG_c',
            'duration' => '7m'
        ]);

        Video::create([
            'module_id' => $module->id,
            'title' => 'Tutorial Python Access List Items',
            'youtube_link' => 'https://www.youtube.com/watch?v=V67FQH6zAyE',
            'duration' => '7m'
        ]);

        Video::create([
            'module_id' => $module->id,
            'title' => 'Tutorial Python Change List Item',
            'youtube_link' => 'https://www.youtube.com/watch?v=uxX9PKC_Sug',
            'duration' => '7m'
        ]);

        $module = Module::create([
            'bootcamp_id' => $bootcamp->id,
            'name' => 'Data Sains List Pt 2',
            'description' => 'Data Sains List Pt 2.',
        ]);

        Video::create([
            'module_id' => $module->id,
            'title' => 'Tutorial Python Add List Item',
            'youtube_link' => 'https://www.youtube.com/watch?v=GT3oIbZFjgU',
            'duration' => '7m'
        ]);

        Video::create([
            'module_id' => $module->id,
            'title' => 'Tutorial Python Remove List Item',
            'youtube_link' => 'https://www.youtube.com/watch?v=62Scviz4EKA',
            'duration' => '7m'
        ]);

        Video::create([
            'module_id' => $module->id,
            'title' => 'Tutorial Python List Loop',
            'youtube_link' => 'https://www.youtube.com/watch?v=rZ231v2aByY',
            'duration' => '7m'
        ]);

        Video::create([
            'module_id' => $module->id,
            'title' => 'Tutorial Python Sort List',
            'youtube_link' => 'https://www.youtube.com/watch?v=K3Nl5vYV2cU',
            'duration' => '7m'
        ]);

        Video::create([
            'module_id' => $module->id,
            'title' => 'Tutorial Python List Copy dan Join',
            'youtube_link' => 'https://www.youtube.com/watch?v=DzSHJr509SY',
            'duration' => '7m'
        ]);

        $module = Module::create([
            'bootcamp_id' => $bootcamp->id,
            'name' => 'Sains Data Python Basic',
            'description' => 'Sains Data Python Basic.',
        ]);

        Video::create([
            'module_id' => $module->id,
            'title' => 'Tutorial Python Basic Operator',
            'youtube_link' => 'https://www.youtube.com/watch?v=3kifuPQH8wY',
            'duration' => '7m'
        ]);

        Video::create([
            'module_id' => $module->id,
            'title' => 'Tutorial Python String Formatting',
            'youtube_link' => 'https://www.youtube.com/watch?v=a7W75iPizNo',
            'duration' => '7m'
        ]);

        // 2. Bootcamp Belajar Sains Data & Big Data
        $bootcamp = Bootcamp::create([
            'title' => 'Bootcamp Belajar Sains Data & Big Data',
            'duration' => '19h 17m 35s',
            'students' => 400,
            'original_price' => 200000,
            'discounted_price' => 150000,
            'image' => 'img/sainsdata.png',
            'start_date' => now(),
            'lectures' => 9,
            'skill_level' => 'Intermediate',
            'language' => 'Indonesian',
            'quizzes' => 9,
            'certificate' => true,
            'pass_percentage' => 90,
            'deadline' => '2025-12-31',
            'instructor' => 'Daniel Silva',
            'description' => 'Learn Data Science and Big Data from scratch.',
            'category' => 'data-science',
            'learnings' => json_encode([
                'Understand Data Science basics',
                'Learn Big Data concepts',
                'Master data processing',
                'Analyze large datasets'
            ]),
        ]);

        $module = Module::create([
            'bootcamp_id' => $bootcamp->id,
            'name' => 'Pengantar Sains Data - Pendahuluan Sains Data & Big Data',
            'description' => 'Introduction to Data Science and Big Data.',
        ]);

        Video::create([
            'module_id' => $module->id,
            'title' => 'Pengantar Sains Data & Big Data',
            'youtube_link' => 'https://www.youtube.com/watch?v=ybxwS6rTSU8',
            'duration' => '9m',
        ]);

        Video::create([
            'module_id' => $module->id,
            'title' => 'Pengantar Tipe & Format Data',
            'youtube_link' => 'https://www.youtube.com/watch?v=wUda4Wo36vA',
            'duration' => '9m',
        ]);

        Video::create([
            'module_id' => $module->id,
            'title' => 'Pengantar Tipe & Format Data',
            'youtube_link' => 'https://www.youtube.com/watch?v=Tn34pEFEq6w',
            'duration' => '9m',
        ]);

        $module = Module::create([
            'bootcamp_id' => $bootcamp->id,
            'name' => 'Pengantar Sains Data: Model & Algoritma di Sains Data',
            'description' => 'Introduction to Data Science and Big Data.',
        ]);

        Video::create([
            'module_id' => $module->id,
            'title' => 'Model & Algoritma',
            'youtube_link' => 'https://www.youtube.com/watch?v=97ef82BMHvg',
            'duration' => '9m',
        ]);

        Video::create([
            'module_id' => $module->id,
            'title' => 'Model & Algoritma',
            'youtube_link' => 'https://www.youtube.com/watch?v=RfOwKm9Ccs8',
            'duration' => '9m',
        ]);

        $module = Module::create([
            'bootcamp_id' => $bootcamp->id,
            'name' => 'Pengantar Sains Data - Peluang & Tantangan di Sains Data & Big Data ',
            'description' => 'Introduction to Data Science and Big Data.',
        ]);


        Video::create([
            'module_id' => $module->id,
            'title' => 'Peluang & Tantangan',
            'youtube_link' => 'https://www.youtube.com/watch?v=8iUzsUkUTzk',
            'duration' => '9m',
        ]);

        Video::create([
            'module_id' => $module->id,
            'title' => 'Peluang & Tantangan',
            'youtube_link' => 'https://www.youtube.com/watch?v=xI0oIADfL6M',
            'duration' => '9m',
        ]);

        $module = Module::create([
            'bootcamp_id' => $bootcamp->id,
            'name' => 'Distribusi variabel acak diskrit ',
            'description' => 'Introduction to Data Science and Big Data.',
        ]);
        Video::create([
            'module_id' => $module->id,
            'title' => 'variabel acak diskrit (1)',
            'youtube_link' => 'https://www.youtube.com/watch?v=F10F5fhfPH0',
            'duration' => '9m',
        ]);

        Video::create([
            'module_id' => $module->id,
            'title' => 'variabel acak diskrit (2)',
            'youtube_link' => 'https://www.youtube.com/watch?v=k3tOjvvMer0',
            'duration' => '9m',
        ]);
        Video::create([
            'module_id' => $module->id,
            'title' => 'variabel acak diskrit (3)',
            'youtube_link' => 'https://www.youtube.com/watch?v=aIAMVxJ27so',
            'duration' => '9m',
        ]);

        Video::create([
            'module_id' => $module->id,
            'title' => 'variabel acak diskrit (4)',
            'youtube_link' => 'https://www.youtube.com/watch?v=QEq5IoHG_Xo',
            'duration' => '9m',
        ]);
        Video::create([
            'module_id' => $module->id,
            'title' => 'variabel acak diskrit (5)',
            'youtube_link' => 'https://www.youtube.com/watch?v=ipYw_a1syZk',
            'duration' => '9m',
        ]);

        Video::create([
            'module_id' => $module->id,
            'title' => 'variabel acak diskrit (6)',
            'youtube_link' => 'https://www.youtube.com/watch?v=TjqWmnwnoAM',
            'duration' => '9m',
        ]);

        $module = Module::create([
            'bootcamp_id' => $bootcamp->id,
            'name' => 'Inferensi statistika taksiran titik',
            'description' => 'Introduction to Data Science and Big Data.',
        ]);

        Video::create([
            'module_id' => $module->id,
            'title' => 'statistika_taksiran titik',
            'youtube_link' => 'https://www.youtube.com/watch?v=VCz7r2mbb2c',
            'duration' => '9m',
        ]);
        Video::create([
            'module_id' => $module->id,
            'title' => 'Inferensi statistika taksiran interval',
            'youtube_link' => 'https://www.youtube.com/watch?v=Kjo18dFaoN4',
            'duration' => '9m',
        ]);
        Video::create([
            'module_id' => $module->id,
            'title' => 'Inferensi statistika pengujian hipotesis',
            'youtube_link' => 'https://www.youtube.com/watch?v=xcxqlT4-Gww',
            'duration' => '9m',
        ]);
        $module = Module::create([
            'bootcamp_id' => $bootcamp->id,
            'name' => ' ANOVA 1 arah dan Uji chi square',
            'description' => 'Introduction to Data Science and Big Data.',
        ]);
        Video::create([
            'module_id' => $module->id,
            'title' => 'Inferensi statistika pengujian hipotesis',
            'youtube_link' => 'https://www.youtube.com/watch?v=una7Uc_vZvM',
            'duration' => '9m',
        ]);
        Video::create([
            'module_id' => $module->id,
            'title' => 'Inferensi statistika pengujian hipotesis',
            'youtube_link' => 'https://www.youtube.com/watch?v=Uvkr2IAMWGY',
            'duration' => '9m',
        ]);

        $bootcamp = Bootcamp::create([
            'title' => 'Bootcamp Belajar Python Dasar',
            'duration' => '19h 17m 35s',
            'students' => 400,
            'original_price' => 200000,
            'discounted_price' => 150000,
            'image' => 'img/python.png',
            'start_date' => now(),
            'lectures' => 9,
            'skill_level' => 'Intermediate',
            'language' => 'Indonesian',
            'quizzes' => 9,
            'certificate' => true,
            'pass_percentage' => 90,
            'deadline' => '2025-12-31',
            'instructor' => 'Daniel Silva',
            'description' => 'Learn Python from scratch.',
            'category' => 'python',
            'learnings' => json_encode([
                'Understand Data Science basics',
                'Learn Big Data concepts',
                'Master data processing',
                'Analyze large datasets'
            ]),
        ]);
        $module = Module::create([
            'bootcamp_id' => $bootcamp->id,
            'name' => 'Pengantar Python',
            'description' => 'Introduction to Data Science and Big Data.',
        ]);
        Video::create([
            'module_id' => $module->id,
            'title' => 'Apa Itu Python',
            'youtube_link' => 'https://www.youtube.com/watch?v=iA8lLwmtKQM?si',
            'duration' => '9m',
        ]);
        Video::create([
            'module_id' => $module->id,
            'title' => 'Installasi Python di Windows',
            'youtube_link' => 'https://www.youtube.com/watch?v=xETkm9H6aaY',
            'duration' => '9m',
        ]);
        Video::create([
            'module_id' => $module->id,
            'title' => 'Installasi Python di Mac',
            'youtube_link' => 'https://www.youtube.com/watch?v=HSAm6s10G7g',
            'duration' => '9m',
        ]);

        $module = Module::create([
            'bootcamp_id' => $bootcamp->id,
            'name' => 'Cara Kerja Python',
            'description' => 'Introduction to Data Science and Big Data.',
        ]);

        Video::create([
            'module_id' => $module->id,
            'title' => 'bytecode',
            'youtube_link' => 'https://www.youtube.com/watch?v=-auWrbiaoGc',
            'duration' => '9m',
        ]);
        Video::create([
            'module_id' => $module->id,
            'title' => 'Mengenal Variabel',
            'youtube_link' => 'https://www.youtube.com/watch?v=gxmTFXfrMzk',
            'duration' => '9m',
        ]);
        Video::create([
            'module_id' => $module->id,
            'title' => 'Tipe Data',
            'youtube_link' => 'https://www.youtube.com/watch?v=b3X0CH98Y9g',
            'duration' => '9m',
        ]);

        $bootcamp = Bootcamp::create([
            'title' => 'Bootcamp Belajar Machine Learning',
            'duration' => '19h 17m 35s',
            'students' => 400,
            'original_price' => 200000,
            'discounted_price' => 150000,
            'image' => 'img/Machine Learning.png',
            'start_date' => now(),
            'lectures' => 9,
            'skill_level' => 'Intermediate',
            'language' => 'Indonesian',
            'quizzes' => 9,
            'certificate' => true,
            'pass_percentage' => 90,
            'deadline' => '2025-12-31',
            'instructor' => 'Daniel Silva',
            'description' => 'Learn Machine Learning from scratch.',
            'category' => 'machine-learning',
            'learnings' => json_encode([
                'Understand Data Science basics',
                'Learn Big Data concepts',
                'Master data processing',
                'Analyze large datasets'
            ]),
        ]);


        $module = Module::create([
            'bootcamp_id' => $bootcamp->id,
            'name' => 'Belajar Machine Learning dengan Python Scikit-Learn',
            'description' => 'Introduction to Machine Learning dengan Python.',
        ]);

        Video::create([
            'module_id' => $module->id,
            'title' => 'Python Scikit-Learn',
            'youtube_link' => 'https://www.youtube.com/watch?v=Rk1VmHk_kUo',
            'duration' => '9m',
        ]);
        Video::create([
            'module_id' => $module->id,
            'title' => 'Pengenalan Machine Learning',
            'youtube_link' => 'https://www.youtube.com/watch?v=vqgucRK5K1A',
            'duration' => '9m',
        ]);
        $module = Module::create([
            'bootcamp_id' => $bootcamp->id,
            'name' => 'Dataset pada Scikit-Learn',
            'description' => 'Introduction to Machine Learning dengan Python.',
        ]);
        Video::create([
            'module_id' => $module->id,
            'title' => 'Sample Dataset pada Scikit-Learn',
            'youtube_link' => 'https://www.youtube.com/watch?v=mSO2hJln0OY',
            'duration' => '9m',
        ]);
        Video::create([
            'module_id' => $module->id,
            'title' => 'Machine Learning Workflow dengan Scikit-Learn',
            'youtube_link' => 'https://www.youtube.com/watch?v=tiREcHrtDLo',
            'duration' => '9m',
        ]);
        Video::create([
            'module_id' => $module->id,
            'title' => 'Data Preprocessing dengan Scikit-Learn',
            'youtube_link' => 'https://www.youtube.com/watch?v=smNnhEd26Ek',
            'duration' => '9m',
        ]);
        Video::create([
            'module_id' => $module->id,
            'title' => 'Simple Linear Regression dengan Scikit-Learn',
            'youtube_link' => 'https://www.youtube.com/watch?v=lcjq7-2zMSA',
            'duration' => '9m',
        ]);

        $module = Module::create([
            'bootcamp_id' => $bootcamp->id,
            'name' => 'Classification dengan KNN',
            'description' => 'Introduction to Machine Learning dengan Python.',
        ]);
        Video::create([
            'module_id' => $module->id,
            'title' => 'Classification dengan KNN | K-Nearest Neighbours',
            'youtube_link' => 'https://www.youtube.com/watch?v=4zARMcgc7hA',
            'duration' => '9m',
        ]);
        Video::create([
            'module_id' => $module->id,
            'title' => 'Regression dengan KNN | K-Nearest Neighbours',
            'youtube_link' => 'https://www.youtube.com/watch?v=W8adIcfv16M',
            'duration' => '9m',
        ]);
        $module = Module::create([
            'bootcamp_id' => $bootcamp->id,
            'name' => 'Linear Regression',
            'description' => 'Introduction to Machine Learning dengan Python.',
        ]);
        Video::create([
            'module_id' => $module->id,
            'title' => 'Multiple Linear Regression & Polynomial Regression',
            'youtube_link' => 'https://www.youtube.com/watch?v=nWJUJenAyB8',
            'duration' => '9m',
        ]);
        $module = Module::create([
            'bootcamp_id' => $bootcamp->id,
            'name' => 'Encoding & One Hot Encoding',
            'description' => 'Introduction to Machine Learning dengan Python.',
        ]);
        Video::create([
            'module_id' => $module->id,
            'title' => 'Label Encoding & One Hot Encoding | Categorical Encoding',
            'youtube_link' => 'https://www.youtube.com/watch?v=WWbyYFPHDH8',
            'duration' => '9m',
        ]);
        $module = Module::create([
            'bootcamp_id' => $bootcamp->id,
            'name' => 'Bag of Words & Stop Word Filtering',
            'description' => 'Introduction to Machine Learning dengan Python.',
        ]);
        Video::create([
            'module_id' => $module->id,
            'title' => 'Bag of Words & Stop Word Filtering | Text Processing',
            'youtube_link' => 'https://www.youtube.com/watch?v=U30sF4m0bd0',
            'duration' => '9m',
        ]);
        Video::create([
            'module_id' => $module->id,
            'title' => 'TF-IDF Term Frequency - Inverse Document Frequency',
            'youtube_link' => 'https://www.youtube.com/watch?v=f0a1XXmaQp8',
            'duration' => '9m',
        ]);
        Video::create([
            'module_id' => $module->id,
            'title' => 'Logistic Regression pada Binary Classification Task',
            'youtube_link' => 'https://www.youtube.com/watch?v=oe7DW4rSH1o',
            'duration' => '9m',
        ]);
        Video::create([
            'module_id' => $module->id,
            'title' => 'Naive Bayes Classification',
            'youtube_link' => 'https://www.youtube.com/watch?v=Sj1ybuDDf9I',
            'duration' => '9m',
        ]);
        $module = Module::create([
            'bootcamp_id' => $bootcamp->id,
            'name' => 'Vector Machine Classification',
            'description' => 'Introduction to Machine Learning dengan Python.',
        ]);
        Video::create([
            'module_id' => $module->id,
            'title' => 'Support Vector Machine Classification | SVM',
            'youtube_link' => 'https://www.youtube.com/watch?v=z69XYXpvVrE',
            'duration' => '9m',
        ]);
        Video::create([
            'module_id' => $module->id,
            'title' => 'Decision Tree Classification | Pohon Keputusan',
            'youtube_link' => 'https://www.youtube.com/watch?v=5wwXKtLkyqs',
            'duration' => '9m',
        ]);
        Video::create([
            'module_id' => $module->id,
            'title' => 'Random Forest Classification | Hutan Acak',
            'youtube_link' => 'https://www.youtube.com/watch?v=yKovaQ6tyV8',
            'duration' => '9m',
        ]);
        $bootcamp = Bootcamp::create([
            'title' => 'Bootcamp Belajar Basic Deep Learning',
            'duration' => '19h 17m 35s',
            'students' => 400,
            'original_price' => 200000,
            'discounted_price' => 150000,
            'image' => 'img/Deep Learning.png',
            'start_date' => now(),
            'lectures' => 9,
            'skill_level' => 'Intermediate',
            'language' => 'Indonesian',
            'quizzes' => 9,
            'certificate' => true,
            'pass_percentage' => 90,
            'deadline' => '2025-12-31',
            'instructor' => 'Daniel Silva',
            'description' => 'Learn Basic Deep Learning from scratch.',
            'category' => 'deep-learning',
            'learnings' => json_encode([
                'Understand Deep Learning basics',
                'Learn Deep Learning concepts',
                'Master Deep Learning processing',
                'Analyze large Deep Learning'
            ]),
        ]);

        $module = Module::create([
            'bootcamp_id' => $bootcamp->id,
            'name' => 'Basic Deep Learning',
            'description' => 'Introduction to Machine Learning dengan Python.',
        ]);
        Video::create([
            'module_id' => $module->id,
            'title' => 'Convolutional Neural Network (CNN)',
            'youtube_link' => 'https://www.youtube.com/watch?v=6Hb81DxD7yw',
            'duration' => '9m',
        ]);
        Video::create([
            'module_id' => $module->id,
            'title' => 'Augmentasi Data Image',
            'youtube_link' => 'https://www.youtube.com/watch?v=T8lt6Xy99o0',
            'duration' => '9m',
        ]);
        $module = Module::create([
            'bootcamp_id' => $bootcamp->id,
            'name' => 'CNN with PyTorch | Deep Learning Basic',
            'description' => 'Introduction to Machine Learning dengan Python.',
        ]);
        Video::create([
            'module_id' => $module->id,
            'title' => 'Klasifikasi Hama dengan CNN',
            'youtube_link' => 'https://www.youtube.com/watch?v=tG-J6RJeXcA',
            'duration' => '9m',
        ]);
        Video::create([
            'module_id' => $module->id,
            'title' => 'Arsitektur CNN yang Populer',
            'youtube_link' => 'https://www.youtube.com/watch?v=SKmO5kQf8Bk',
            'duration' => '9m',
        ]);
        Video::create([
            'module_id' => $module->id,
            'title' => 'Konsep Transfer Learning',
            'youtube_link' => 'https://www.youtube.com/watch?v=qM7ByzMai2Y',
            'duration' => '9m',
        ]);
        Video::create([
            'module_id' => $module->id,
            'title' => 'Klasifikasi Panorama Multilabel di PyTorch',
            'youtube_link' => 'https://www.youtube.com/watch?v=hLaRQLkfX_g',
            'duration' => '9m',
        ]);
        $module = Module::create([
            'bootcamp_id' => $bootcamp->id,
            'name' => 'Menghandle data Time Series di PyTorch | Deep Learning Basic',
            'description' => 'Introduction to Machine Learning dengan Python.',
        ]);
        Video::create([
            'module_id' => $module->id,
            'title' => 'Mobilenet V2 untuk Transfer Learning',
            'youtube_link' => 'https://www.youtube.com/watch?v=8IXjfoob-oU',
            'duration' => '9m',
        ]);
        Video::create([
            'module_id' => $module->id,
            'title' => 'Fine Tuning pada Transfer Learning',
            'youtube_link' => 'https://www.youtube.com/watch?v=8IXjfoob-oU',
            'duration' => '9m',
        ]);
        // 3-10. Additional Data Science Bootcamps
        for ($i = 3; $i <= 2; $i++) {
            $bootcamp = Bootcamp::create([
                'title' => "Data Science Bootcamp $i: Advanced Analytics",
                'duration' => '20h',
                'students' => rand(200, 1000),
                'original_price' => 200000,
                'discounted_price' => 150000,
                'image' => "img/datascience_$i.png",
                'start_date' => now(),
                'lectures' => rand(10, 15),
                'skill_level' => 'Advanced',
                'language' => 'Indonesian',
                'quizzes' => rand(8, 12),
                'certificate' => true,
                'pass_percentage' => 90,
                'deadline' => '2025-12-31',
                'instructor' => 'Data Instructor ' . $i,
                'description' => 'Advanced topics in Data Science.',
                'category' => 'data-science',
                'learnings' => json_encode([
                    'Advanced data analysis',
                    'Machine learning models',
                    'Big Data frameworks',
                    'Data visualization'
                ]),
            ]);

            $module = Module::create([
                'bootcamp_id' => $bootcamp->id,
                'name' => "Advanced Data Science $i",
                'description' => 'Learn advanced Data Science techniques.',
            ]);

            Video::create([
                'module_id' => $module->id,
                'title' => "Data Science Techniques $i",
                'youtube_link' => 'https://www.youtube.com/watch?v=example_ds' . $i,
                'duration' => '12m',
            ]);
        }
    }
}
