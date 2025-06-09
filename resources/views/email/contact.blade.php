<!DOCTYPE html>
<html>

<head>
    <title>Contact Form Submission</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            color: #333;
            line-height: 1.6;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background: #f9f9f9;
        }

        h2 {
            color: #005566;
        }

        .label {
            font-weight: bold;
        }

        .content {
            margin-bottom: 15px;
        }

        .footer {
            font-size: 12px;
            color: #777;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>New Contact Form Submission</h2>
        <div class="content">
            <p><span class="label">Name:</span> {{ $data['name'] }}</p>
            <p><span class="label">Email:</span> {{ $data['email'] }}</p>
            <p><span class="label">Subject:</span> {{ $data['subject'] }}</p>
            <p><span class="label">Message:</span></p>
            <p>{{ $data['message'] }}</p>
        </div>
        <div class="footer">
            <p>This email was sent from the contact form on {{ config('app.name') }}.</p>
        </div>
    </div>
</body>

</html>
