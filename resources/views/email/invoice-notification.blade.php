<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>عملية دفع جديدة - هتف</title>
    <style>
        body {
            font-family: 'Almarai', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            color: #333;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            background: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            text-align: right;
        }

        .header {
            text-align: center;
            padding-bottom: 20px;
        }

        .header img {
            width: 120px;
            /* Adjust logo size as needed */
        }

        .content {
            margin: 20px 0;
            font-size: 16px;
            line-height: 1.6;
        }

        .content h1 {
            color: #333;
            font-size: 22px;
            margin-bottom: 10px;
        }

        .status {
            padding: 15px;
            margin: 10px 0;
            border-radius: 5px;
            background-color: #e9f7ef;
            text-align: center;
            font-size: 18px;
            font-weight: bold;
        }

        .status.success {
            background-color: #d4edda;
            color: #155724;
        }

        .status.failed {
            background-color: #f8d7da;
            color: #721c24;
        }

        .footer {
            text-align: center;
            font-size: 14px;
            margin-top: 20px;
            color: #777;
        }

        .footer p {
            margin: 0;
        }

        .footer a {
            color: #007bff;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <img src="{{ asset('front/assets/imgs/hatf.svg') }}" alt="Hatf Logo">
        </div>
        <div class="content">
            <h1>رقم العملية: {{ $tranRef }}</h1>
            <div class="status {{ $code == 200 ? 'success' : 'failed' }}">
                <h2>{{ $code == 200 ? 'العملية ناجحة' : 'العملية فاشلة' }}</h2>
            </div>
        </div>
        <div class="footer">
            <p>جميع الحقوق محفوظة &copy; {{ date('Y') }} <strong>هتف</strong></p>
            <p>للمساعدة، يمكنكم <a href="mailto:support@hatf.sa">التواصل معنا</a>.</p>
        </div>
    </div>
</body>

</html>
