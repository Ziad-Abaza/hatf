<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body dir="rtl">
    <div>الاسم كامل: {{ $mailData['full_name'] }} </div>
    <div>رقم الهاتف: {{ $mailData['phone_number'] }} </div>
    <div>البريد الالكتروني: {{ $mailData['email'] }}</div>
    <div>الخدمة: {{ $mailData['service'] }}</div>
    <div>الرسالة: {{ $mailData['msg'] }}</div>
</body>

</html>
