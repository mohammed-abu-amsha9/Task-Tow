<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>لازورد — مختبر الأسنان الرقمي</title>
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600;700;800;900&family=Tajawal:wght@300;400;500;700;800&display=swap"
        rel="stylesheet" />
</head>

<body>

    <!-- NAVBAR -->
    <header class="navbar">
        <div class="nav-container">
            <a href="{{ route('home') }}" class="logo">لازورد</a>
            <nav class="nav-links">
                <a href="{{ route('why-us') }}">لماذا لازورد</a>
                <a href="{{ route('services') }}">خدمات المختبرات</a>
                <a href="{{ route('solutions') }}">الحلول</a>
                <a href="{{ route('pricing.index') }}">التسعير</a>
                <a href="{{ route('learn') }}">التعلم</a>
            </nav>
            <div class="nav-actions">
                <span class="phone">{{ Auth()->user()->phone }}</span>
                <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                    @csrf
                    <button type="submit" class="btn-login"
                        style="background: none; border: none; cursor: pointer; font: inherit; color: inherit;">
                        تسجيل الخروج
                    </button>
                </form>
                <a href="{{ route('pricing.index') }}" class="btn-cta">ابدأ الآن</a>
            </div>
            <button class="mobile-menu-btn" id="mobileMenuBtn" aria-label="القائمة">
                <span></span><span></span><span></span>
            </button>
        </div>
        <div class="mobile-menu" id="mobileMenu">
            <a href="{{ route('why-us') }}">لماذا لازورد</a>
            <a href="{{ route('services') }}">خدمات المختبرات</a>
            <a href="{{ route('solutions') }}">الحلول</a>
            <a href="{{ route('pricing.index') }}">التسعير</a>
            <a href="{{ route('learn') }}">التعلم</a>
            <a href="{{ route('pricing.index') }}" class="btn-cta mobile-cta">ابدأ الآن</a>
        </div>
    </header>

    @yield('content')

    <!-- FOOTER -->
    <footer class="footer">
        <div class="container footer-container">
            <div class="footer-cta">
                <h3>هل مازلت تأخذ الانطباعات الجسدية؟</h3>
                <p>نقدم لك كل ما تحتاجه لبدء ذلك في طب الأسنان الرقمي محلياً — بما في ذلك الماسح الضوئي داخل الفم.</p>
                <a href="{{ route('pricing.index') }}" class="btn-cta-footer">ابدأ</a>
            </div>
            <div class="footer-links">
                <div class="footer-col">
                    <h4>لازورد</h4>
                    <ul>
                        <li><a href="{{ route('why-us') }}">لماذا لازورد</a></li>
                        <li><a href="{{ route('services') }}">خدمات المختبرات</a></li>
                        <li><a href="{{ route('home') }}">وظائف</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>منتجات</h4>
                    <ul>
                        <li><a href="{{ route('services') }}">منتجات</a></li>
                        <li><a href="{{ route('services') }}">أطقم والمسح</a></li>
                        <li><a href="{{ route('services') }}">حلول رعاية الأسنان</a></li>
                        <li><a href="{{ route('services') }}">أدوات رقمية</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>ممارسات</h4>
                    <ul>
                        <li><a href="{{ route('solutions') }}">الحلول</a></li>
                        <li><a href="{{ route('why-us') }}">لماذا لازورد</a></li>
                        <li><a href="{{ route('pricing.index') }}">التسعير</a></li>
                        <li><a href="{{ route('login') }}">تسجيل الدخول</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>موارد</h4>
                    <ul>
                        <li><a href="{{ route('learn') }}">التعلم</a></li>
                        <li><a href="{{ route('learn') }}">دراسات الحالة</a></li>
                        <li><a href="{{ route('learn') }}">مدونة</a></li>
                        <li><a href="{{ route('pricing.index') }}">تواصل معنا</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <p>© 2024 لازورد — جميع الحقوق محفوظة</p>
                <div class="footer-legal"><a href="#">سياسة الخصوصية</a><a href="#">شروط الاستخدام</a><a
                        href="{{ route('pricing.index') }}">تواصل معنا</a></div>
            </div>
        </div>
    </footer>

    <script src="{{ asset('assets/script.js') }}"></script>
</body>

</html>
