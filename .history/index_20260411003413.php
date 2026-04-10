<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>مكتبة الجامعة الليبية</title>
    <link rel="stylesheet" href="style.css?v=1.3">
</head>
<body>

    <header>
        <div class="top-nav">
           <div class="auth-buttons">
    <button class="btn-lang">EN/AR</button>

    <a href="login.html" class="btn-login-top">Log in</a>

    <a href="signup.html" class="btn-signup-top">Sign up</a>
</div>
            <div class="logo-section">
                <div class="logo-text">
                    <h1>مكتبة الجامعة الليبية  </h1>
                    <p>منصة الكتب الأكاديمية</p>
                </div>
                <img src="images/logo.png" alt="شعار الجامعة" class="logo-img">
            </div>
        </div>

         <nav class="main-menu">
    <ul>
         <li><a href="borrow.php">استعارة كتاب</a></li>
          <li><a href="curriculum.php">الخطة الدراسية</a></li>


        
        <li class="dropdown">
            <a href="#" class="dropbtn">الأقسام </a>
            <div class="dropdown-content">
                <a href="cs.php">الحاسب الآلي</a>
                <a href="accounting.php">المحاسبة</a>
                <a href="law.php">القانون</a>
                <a href="business.php">إدارة الأعمال</a>
                <a href="oilEng.php">هندسة النفط</a>
                <a href="arcEng.php">الهندسة المعمارية</a>
            </div>
        </li>
        <li><a href="index.php">الرئيسية</a></li>


        
    </ul>
     <div class="search-container">
            <span>🔍</span>
            <input type="text" placeholder="انقر هنا للبحث...">
        </div>
</nav>
    <header>
    <div class="header-top">
        <div class="auth-nav">
            <button class="btn-white">EN/AR</button>
            <a href="signup.php" class="btn-white">Sign up</a>

            <button class="btn-white">👤</button>
        </div>
        <div class="logo-box">
            <h2>مكتبة الجامعة الليبية</h2>
            <p>منصة الكتب الأكاديمية</p>
        </div>
        <img src="images/logo.png" alt="شعار مكتبة الجامعة الليبية" class="logo-img">
    </div>

    <nav class="main-menu">
        <ul>
            <li><a href="index.php">الرئيسية</a></li>
            <li class="dropdown">
                <a href="#" class="dropbtn">الأقسام ▼</a>
                <div class="dropdown-content">
                    <a href="cs.php">الحاسب الآلي</a>
                    <a href="accounting.php">المحاسبة</a>
                    <a href="law.php">القانون</a>
                    <a href="business.php">إدارة الأعمال</a>
                    <a href="oilEng.php">هندسة النفط</a>
                    <a href="arcEng.php">الهندسة المعمارية</a>
                </div>
            </li>+


            <li><a href="curriculum.php">الخطة الدراسية</a></li>
            <li><a href="borrow.php">استعارة كتاب</a></li>
        </ul>
    </nav>

    <div class="nav-bar">
        <div class="search-container">
            <span class="search-icon">🔍</span>
            <input type="text" placeholder="ابحث عن كتاب، منهج، أو مشروع...">
        </div>
    </div>
</header>

    <main class="container">
    <section class="welcome-banner">
        <div class="welcome-text">
            <h1>مرحباً بك في مكتبة الجامعة الليبية الإلكترونية</h1>
            <p>بوابتك الرقمية الشاملة للمراجع الأكاديمية، المناهج الدراسية، وتوثيقات مشاريع التخرج.</p>
            <div class="action-buttons">
                <a href="#services" class="btn-primary">استكشف الخدمات</a>
                <a href="borrow.php" class="btn-secondary">استعارة كتاب ورقـي</a>
            </div>
        </div>
    </section>

    <section id="services" class="services-hub">
        <h2 class="section-title">مركز الخدمات الرقمية</h2>
        
        <div class="services-grid">
            <div class="service-card">
                <div class="card-icon">📚</div>
                <h3>الكتب الإلكترونية (PDF)</h3>
                <p>تصفح وتحميل مئات المراجع والأكاديمية.</p>
                <a href="books.php" class="card-btn">تصفح الكتب</a>
            </div>

            <div class="service-card">
                <div class="card-icon">📖</div>
                <h3>المناهج والخطط الدراسية</h3>
                <p>الوصول السريع للمواد والمحتوى العلمي المقرّر.</p>
                <a href="curriculum.php" class="card-btn">عرض المناهج</a>
            </div>

            <div class="service-card">
                <div class="card-icon">🎓</div>
                <h3>مشاريع التخرج السابقة</h3>
                <p>استلهم من أفكار وتوثيقات زملائك الخريجين.</p>
                <a href="projects.php" class="card-btn">استكشف المشاريع</a>
            </div>

            <div class="service-card">
                <div class="card-icon">📝</div>
                <h3>أسئلة السنوات السابقة</h3>
                <p>تدرب على نماذج الامتحانات لكل الأقسام.</p>
                <a href="exams.php" class="card-btn">تحميل الأسئلة</a>
            </div>
        </div>
    </section>
</main>

    <footer>
        <div class="footer-content">
            <div class="footer-section">
                <h3>روابط سريعة</h3>
                <ul>
                    <li>الرئيسية</li>
                    <li>الأقسام</li>
                    <li>الكتب</li>
                    <li>الخدمات</li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>تواصل</h3>
                <p>عين زارة - طرابلس</p>
                <p>رقم الهاتف: 09XXXXXXXX</p>
                <p>البريد الإلكتروني: info@university.ly</p>
            </div>
        </div>
    </footer>

</body>
</html>