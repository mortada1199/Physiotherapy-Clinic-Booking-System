<!doctype html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>تسجيل الدخول</title>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Cairo', sans-serif;
            background: linear-gradient(135deg, #334aa2 0%, #cdd4f1 100%);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-card {
            background: #ffffff;
            border-radius: 20px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            width: 380px;
            padding: 40px 35px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .login-card::before {
            content: '';
            position: absolute;
            top: -60px;
            right: -60px;
            width: 150px;
            height: 150px;
            background: rgba(100, 116, 139, 0.1);
            border-radius: 50%;
        }

        .logo {
            width: 100px;
            height: 100px;
            border-radius: 20%;
            overflow: hidden;
            margin: 0 auto 25px;
            /*border: 3px solid #7b3dbf;
            box-shadow: 0 4px 12px rgba(123, 61, 191, 0.2);*/
        }

        .logo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        h2 {
            color: #334aa2;
            margin-bottom: 25px;
            font-size: 22px;
            font-weight: 700;
        }

        label {
            display: block;
            text-align: right;
            color: #334aa2;
            margin-bottom: 8px;
            font-weight: 600;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 18px;
            border: 1px solid #334aa2;
            border-radius: 10px;
            font-family: 'Cairo', sans-serif;
            direction: rtl;
            transition: all 0.3s ease;
            background-color: #f8fafc;
        }

        input:focus {
            outline: none;
            border-color: #334aa2;
            box-shadow: 0 0 6px rgba(51, 74, 162, 0.3);
        }

        button {
            padding: 12px;
            background: #314ca0;
            border: none;
            border-radius: 10px;
            color: white;
            font-size: 16px;
            font-weight: 700;
            cursor: pointer;
            transition: 0.3s ease;
            box-shadow: 0 4px 12px rgba(59, 130, 246, 0.3);
        }

        button:hover {
<<<<<<< HEAD
            background: #4d5b99;
            box-shadow: 0 6px 20px rgba(77, 91, 153, 0.4);
=======
            background: #2563eb;
            box-shadow: 0 6px 20px rgba(59, 130, 246, 0.4);
>>>>>>> df0b5129048aecbb12dd9347696cb74e378e5d5c
        }

        .footer-text {
            margin-top: 20px;
            font-size: 13px;
            color: #64748b;
        }

        /* رسائل التنبيه */
        .alert {
            width: 380px;
            margin: 10px auto;
            padding: 12px;
            border-radius: 8px;
            font-size: 14px;
        }

        .alert-success {
            background-color: #d1fae5;
            color: #065f46;
        }

        .alert-danger {
            background-color: #fee2e2;
            color: #b91c1c;
        }
    </style>
</head>

<body>

    @if (Session::has('success'))
        <div class="alert alert-success text-center">
            {{ Session::get('success') }}
        </div>
    @endif

    @if (Session::has('error'))
        <div class="alert alert-danger text-center">
            {{ Session::get('error') }}
        </div>
    @endif

    <div class="login-card">
        <div class="logo">
            <img src="{{ asset('admin/images/logo/one.jpeg') }}" alt="شعار الموقع">
        </div>

        <h2>تسجيل الدخول إلى النظام</h2>

        <form action="{{ url('check') }}" method="POST">
            @csrf
            <label for="username">اسم المستخدم</label>
            <input type="text" id="username" name="username" placeholder="أدخل اسم المستخدم">

            <label for="password">كلمة المرور</label>
            <input type="password" id="password" name="password" placeholder="أدخل كلمة المرور">

            <button type="submit">تسجيل دخول</button>
        </form>

        <div class="footer-text">© 2025 جميع الحقوق محفوظة</div>
    </div>

</body>

</html>
