<!DOCTYPE html>
<html>
@php
    // Default values untuk semua variabel opsional
    $showWatermark = $showWatermark ?? false;
    $useCustomFont = $useCustomFont ?? false;
    $showSeal = $showSeal ?? false;
    $backgroundImage = $backgroundImage ?? public_path('certificates/1.png'); // Use local path
    $signatureImage = $signatureImage ?? null;
    $sealImage = $sealImage ?? public_path('images/1.png'); // Use local path
    $quote = $quote ?? null;
    $score = $score ?? 'Excellent';
    $issuer_name = $issuer_name ?? 'Bootcamp Team';
    $issuer_title = $issuer_title ?? 'Organizer';
    $certificate_id = $certificate_id ?? uniqid();
@endphp

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Certificate of Completion</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        .certificate-container {
            width: 100%;
            height: 100vh;
            background-image: url('{{ $backgroundImage }}');
            background-size: cover;
            background-position: center;
            position: relative;
            text-align: center;
        }

        .certificate-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 80%;
            max-width: 800px;
        }

        .watermark {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) rotate(-30deg);
            font-size: 120px;
            opacity: 0.1;
            z-index: 0;
            color: #1a365d;
            font-weight: bold;
            pointer-events: none;
            white-space: nowrap;
            display: {{ $showWatermark ? 'block' : 'none' }};
        }

        .certificate-header {
            font-size: 36px;
            font-weight: bold;
            color: #1a365d;
            margin-bottom: 20px;
            text-transform: uppercase;
            position: relative;
            z-index: 1;
        }

        .user-name {
            font-size: 500px;
            font-weight: bold;
            margin: 30px 0;
            color: #000;
            position: relative;
            z-index: 1;
            font-family: {{ $useCustomFont ? "'Great Vibes', cursive" : 'Arial, sans-serif' }};
            text-decoration: {{ $useCustomFont ? 'underline' : 'none' }};
        }
    </style>
    @if ($useCustomFont)
        <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    @endif
</head>

<body>
    <div class="certificate-container">
        <div class="watermark">{{ config('app.name') }}</div>

        <div class="certificate-content">
            <div class="certificate-header">SERTIFIKAT PENGHARGAAN</div>
            <div class="user-name">{{ $user_name }}</div>
            <p>Atas partisipasinya sebagai peserta dalam {{ $bootcamp_title }} yang diselenggarakan pada tanggal
                {{ $completion_date }}.</p>
            <p>Kami mengucapkan terima kasih dan apresiasi yang setinggi-tingginya.</p>
            <p>{{ $completion_date }}</p>
            <p>{{ $issuer_name }}<br>{{ $issuer_title }}</p>
        </div>
    </div>
</body>

</html>
