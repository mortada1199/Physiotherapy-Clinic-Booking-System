<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>تسجيل الدخول</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        * {
            box-sizing: border-box;
            font-family: 'Cairo', sans-serif;
        }

        body {
            background: linear-gradient(135deg, #4b6cb7, #182848);
            height: 100vh;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-container {
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
            width: 400px;
            padding: 40px 30px;
            text-align: center;
        }

        h2 {
            color: #273c75;
            margin-bottom: 25px;
            font-weight: 700;
        }

        .input-group {
            position: relative;
            margin-bottom: 25px;
        }

        .input-group input {
            width: 100%;
            padding: 12px 40px 12px 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #f8f8f8;
            font-size: 14px;
            transition: 0.3s;
        }

        .input-group input:focus {
            border-color: #4b6cb7;
            outline: none;
            background-color: #fff;
            box-shadow: 0 0 5px rgba(75, 108, 183, 0.3);
        }

        .input-group i {
            position: absolute;
            top: 50%;
            right: 15px;
            transform: translateY(-50%);
            color: #4b6cb7;
        }

        button {
            background-color: #4b6cb7;
            color: #fff;
            border: none;
            padding: 12px 0;
            border-radius: 8px;
            width: 100%;
            font-size: 15px;
            cursor: pointer;
            font-weight: bold;
            transition: background 0.3s;
        }

        button:hover {
            background-color: #364fa0;
        }

        .alert {
            background-color: #ffcccc;
            color: #c0392b;
            padding: 10px;
            border-radius: 6px;
            margin-bottom: 15px;
            font-size: 13px;
        }

        .social-icons {
            margin-top: 20px;
        }

        .social-icons a {
            color: #4b6cb7;
            margin: 0 8px;
            font-size: 18px;
            transition: 0.3s;
        }

        .social-icons a:hover {
            color: #182848;
        }

        footer {
            position: fixed;
            bottom: 10px;
            text-align: center;
            width: 100%;
            color: #eee;
            font-size: 13px;
        }

        @media (max-width: 480px) {
            .login-container {
                width: 90%;
                padding: 30px 20px;
            }
        }
    </style>
</head>
<body>

    <div class="login-container">
        <h2>تسجيل الدخول</h2>

        @if(Session::has('error'))
            <div class="alert">
                {{ Session::get('error') }}
            </div>
        @endif

        <form action="#" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="input-group">
                <i class="fa-solid fa-envelope"></i>
                <input type="email" name="email" placeholder="البريد الإلكتروني" required>
            </div>

            <div class="input-group">
                <i class="fa-solid fa-lock"></i>
                <input type="password" name="password" placeholder="كلمة المرور" required>
            </div>

            <button type="submit">تسجيل الدخول</button>

            <div class="social-icons">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-google"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </form>
    </div>

    <footer>
        <p>murtada© 2025 جميع الحقوق محفوظة</p>
    </footer>

</body>
</html>
