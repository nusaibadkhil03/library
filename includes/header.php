<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>مكتبة الجامعة الليبية</title>

    <!-- الخط (لو تستخدمي Cairo) -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- ملف التنسيقات -->
    <link rel="stylesheet" href="style.css">
</head>

<body>

<header>

    <!-- الجزء العلوي -->
    <div class="top-nav">

        <!-- الشعار -->
        <div class="logo-section">
            <img src="assets/images/logo.png" alt="شعار الجامعة" class="logo-img">
            <div class="logo-text">
                <h1>مكتبة الجامعة الليبية</h1>
                <p>منصة الكتب الأكاديمية</p>
            </div>
        </div>

        <!-- أزرار الدخول -->
        <div class="auth-buttons">
            <button class="btn-lang">EN / AR</button>
            <a href="login.php" class="btn-login-top">تسجيل الدخول</a>
            <a href="signup.php" class="btn-signup-top">إنشاء حساب</a>
        </div>

    </div>

    <!-- القائمة الرئيسية -->
    <nav class="main-menu">
        <ul>
            <li><a href="index.php">الرئيسية</a></li>

            <li class="dropdown">
                <a href="#" class="dropbtn">الأقسام</a>
                <div class="dropdown-content">
                    <a href="section.php?dep=cs">الحاسب الآلي</a>
                    <a href="section.php?dep=accounting">المحاسبة</a>
                    <a href="section.php?dep=law">القانون</a>
                    <a href="section.php?dep=business">إدارة الأعمال</a>
                    <a href="section.php?dep=oil">هندسة النفط</a>
                    <a href="section.php?dep=architecture">الهندسة المعمارية</a>
                </div>
            </li>

            <li><a href="services.php">الخدمات</a></li>
            <li><a href="about.php">عن المكتبة</a></li>
        </ul>
    </nav>

</header>