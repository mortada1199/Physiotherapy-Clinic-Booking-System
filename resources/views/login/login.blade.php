{{-- <!DOCTYPE html>
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
        <h3>نظام ادارة العيادة</h3>
        @if (Session::has('error'))
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

</html> --}}

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
      background: linear-gradient(135deg, #7b3dbf 0%, #b17fe6 100%);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .login-card {
      background: #fff;
      border-radius: 20px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.1);
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
      background: rgba(123,61,191,0.1);
      border-radius: 50%;
    }

    .logo {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      overflow: hidden;
      margin: 0 auto 25px;
      border: 3px solid #7b3dbf;
      box-shadow: 0 4px 12px rgba(123,61,191,0.2);
    }

    .logo img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    h2 {
      color: #4a2678;
      margin-bottom: 25px;
      font-size: 22px;
      font-weight: 700;
    }

    label {
      display: block;
      text-align: right;
      color: #5c3c8b;
      margin-bottom: 8px;
      font-weight: 600;
    }

    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 12px;
      margin-bottom: 18px;
      border: 1px solid #c9a9ef;
      border-radius: 10px;
      font-family: 'Cairo', sans-serif;
      direction: rtl;
      transition: all 0.3s ease;
    }

    input:focus {
      outline: none;
      border-color: #7b3dbf;
      box-shadow: 0 0 6px rgba(123,61,191,0.3);
    }

    button {
      
      padding: 12px;
      background: #7b3dbf;
      border: none;
      border-radius: 10px;
      color: white;
      font-size: 16px;
      font-weight: 700;
      cursor: pointer;
      transition: 0.3s ease;
      box-shadow: 0 4px 12px rgba(123,61,191,0.3);
    }

    button:hover {
      background: #692fa8;
      box-shadow: 0 6px 20px rgba(123,61,191,0.4);
    }

    .footer-text {
      margin-top: 20px;
      font-size: 13px;
      color: #777;
    }
  </style>
</head>
<body>
  <div class="login-card">
    <div class="logo">
      <img src="WhatsApp Image 2025-11-05 at 7.53.23 AM (1).jpeg" alt="شعار الموقع">
    </div>

    <h2>تسجيل الدخول إلى النظام</h2>

    <form>
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