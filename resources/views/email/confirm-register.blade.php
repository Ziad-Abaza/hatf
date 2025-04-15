<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تأكيد التسجيل - هتف</title>
    <style>
        body {
            font-family: 'Almarai', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: auto;
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .header {
            text-align: center;
            padding: 10px 0;
        }

        .header img {
            width: 150px; /* Adjust the logo size as needed */
        }

        .content {
            margin: 20px 0;
            text-align: right;
        }

        .button {
            display: inline-block;
            background-color: #007bff; /* Adjust to your brand color */
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
        }

        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 12px;
            color: #666;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <img src="{{ asset('front/assets/imgs/hatf.svg') }}" alt="Hatf Logo">
        </div>
        <div class="content">
            <h1>مرحبا بك في هتف!</h1>
            <p>شكرًا لتسجيلك في هتف. نحتاج إلى تأكيد عنوان بريدك الإلكتروني. يرجى النقر على الزر أدناه لتأكيد تسجيلك.</p>
            <a href="{{$mailData}}" class="button">تأكيد التسجيل</a>
            <p>إذا لم تكن قد أنشأت حسابًا، يمكنك تجاهل هذه الرسالة.</p>
            <h1>برجاء عدم مشاركة هذا الرابط مع اى شخص</h1>
        </div>
        <div class="footer">
            <p>جميع الحقوق محفوظة &copy; {{ date('Y') }} هتف</p>
        </div>
    </div>
</body>

</html>
