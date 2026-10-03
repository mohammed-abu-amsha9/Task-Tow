<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>تسجيل الدخول — لازورد</title>
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600;700;800;900&family=Tajawal:wght@300;400;500;700;800&display=swap"
        rel="stylesheet" />
</head>

<body>

    <main>
        <section class="login-section">
            <div class="login-card">
                <a href="{{ route('login') }}" class="logo login-logo">لازورد</a>
                <h1>تسجيل الدخول</h1>
                <p class="login-sub">أدخل بياناتك للوصول إلى حسابك</p>

                <form action="{{ route('login') }}" method="POST" class="login-form" id="loginForm">
                    @csrf
                    <div class="form-group">
                        <label for="loginEmail">البريد الإلكتروني</label>
                        <input type="email" name="email" id="loginEmail" placeholder="mufid@gamil.com" />
                    </div>
                    <div class="form-group">
                        <label for="loginPassword">كلمة المرور</label>
                        <input type="password" name="password" id="loginPassword" placeholder="••••••••" />
                    </div>
                    <div class="login-remember">
                        <label class="checkbox-label">
                            <input type="checkbox" name="remember" id="remember" />
                            <span>تذكرني</span>
                        </label>
                        <a href="{{ route('home') }}" class="forgot-link">نسيت كلمة المرور؟</a>
                    </div>
                    <button type="submit" class="btn-submit login-submit">تسجيل الدخول</button>
                </form>

                <p class="login-register">ليس لديك حساب؟ <a href="{{ route('pricing.index') }}" class="link-green">سجّل الآن
                        مجاناً</a>
                </p>
            </div>
        </section>
    </main>

    <script src="{{ asset('assets/script.js') }}"></script>
</body>

</html>
