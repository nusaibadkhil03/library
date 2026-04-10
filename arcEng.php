<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>قسم المحاسبة - مكتبة الجامعة</title>
    <link rel="stylesheet" href="style.css?v=1.2">
    <style>
        /* إعدادات الخط والتصميم */
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Segoe UI', sans-serif; }
        body { background-color: #fcfcfc; }

        /* الهيدر البرتقالي */
        header { background-color: #e67e22; color: white; padding: 15px; }
        .header-top { display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; }
        .logo-box { text-align: center; flex-grow: 1; }
        .logo-img { height: 80px; background: white; border-radius: 5px; padding: 5px; }

        .auth-nav { display: flex; align-items: center; gap: 15px; }
        .btn-white { background: white; border: none; padding: 5px 15px; border-radius: 20px; color: #333; cursor: pointer; }

        /* شريط التنقل والبحث */
        .nav-bar { display: flex; justify-content: space-between; align-items: center; border-top: 1px solid rgba(255,255,255,0.3); padding-top: 15px; }
        .nav-links { list-style: none; display: flex; gap: 20px; }
        .nav-links a { color: white; text-decoration: none; font-weight: bold; }
        
        .search-container { background: white; border-radius: 5px; padding: 5px 10px; display: flex; align-items: center; width: 250px; }
        .search-container input { border: none; outline: none; width: 100%; padding: 5px; }

        /* محتوى القسم */
        .main-content { max-width: 1000px; margin: 40px auto; padding: 0 20px; }
        .dept-header { color: #e67e22; margin-bottom: 30px; text-align: center; }

        /* صندوق الأيقونات */
        .category-box { 
            background: white; 
            border: 2px solid #e67e22; 
            border-radius: 15px; 
            display: flex; 
            justify-content: space-around; 
            padding: 20px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }
        .item { text-align: center; cursor: pointer; transition: 0.3s; padding: 10px; }
        .item:hover { transform: translateY(-5px); }
        .item-icon { font-size: 40px; display: block; margin-bottom: 10px; }
        .item p { font-size: 14px; font-weight: bold; color: #444; }

        /* منطقة عرض المحتوى السفلى */
        .display-screen { 
            margin-top: 30px; 
            border: 2px solid #e67e22; 
            border-radius: 15px; 
            min-height: 250px; 
            background: white; 
            display: flex; 
            justify-content: center; 
            align-items: center; 
            color: #999;
            font-size: 1.2rem;


            .main-menu ul {
    list-style: none;
    display: flex;
}

.main-menu ul li a {
    color: white;
    text-decoration:underline;
    margin-left: 20px;
    font-weight: bold;
    border-bottom:3%;
    transition: all 0.3s ease;
    display: flex;
    flex-direction: row-reverse;
    justify-content: space-between;
    align-items: center;
    border-top: 1px solid rgba(255,255,255,0.3);
    padding-top: 15px;
}


.main-menu ul li a:hover {
    text-decoration: underline;
}

/* تنسيق الحاوية الرئيسية للقائمة المنسدلة */
.dropdown {
    position: relative;
    display: inline-block;
}

/* تنسيق محتوى القائمة (مخفي في البداية) */
.dropdown-content {
    display: none; /* إخفاء القائمة */
    position: absolute;
    background-color: #ffffff;
    min-width: 180px;
    box-shadow: 0px 8px 16px rgba(0,0,0,0.2);
    z-index: 100;
    border-radius: 5px;
    top: 100%; /* تظهر أسفل كلمة الأقسام مباشرة */
    right: 0;   /* محاذاة لليمين لأن الموقع RTL */
}

/* تنسيق الروابط داخل القائمة المنسدلة */
.dropdown-content a {
    color: #333 !important; /* لون النص أسود ليظهر على الخلفية البيضاء */
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: right;
    border-bottom: 1px solid #eee;
    transition: background 0.3s;
}

/* تغيير الخلفية عند تمرير الماوس على خيار معين */
.dropdown-content a:hover {
    background-color: #f1f1f1;
    color: #e67e22 !important; /* تغيير اللون للبرتقالي عند الهوفر */
}

/* إظهار القائمة عند تمرير الماوس فوق كلمة "الأقسام" */
.dropdown:hover .dropdown-content {
    display: block;
}

/* سهم صغير بجانب كلمة الأقسام (اختياري) */
.dropbtn {
    cursor: pointer;
}

        }
    </style>
</head>
<body>

<header>
    <div class="header-top">
        <div class="auth-nav">
            <button class="btn-white">EN/AR</button>
            <button class="btn-white">👤</button>
        </div>
        <div class="logo-box">
            <h2>مكتبة الجامعة الليبية</h2>
            <p>منصة الكتب الأكاديمية</p>
        </div>
        <img src=" images/logo.png" alt="الشعار" class="logo-img">
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
    <div class="nav-bar">
        <div class="search-container">
            <span>🔍</span>
            <input type="text" placeholder="انقر هنا للبحث...">
        </div>
    
    </div>
</header>

<main class="main-content">
    <h2 class="dept-header"> قسم الهندسة المعمارية</h2>

    <section class="category-box">
        <div class="item"> <span class="item-icon">📺</span> <p>قنوات تعليمية</p> </div>
        <div class="item"> <span class="item-icon">📚</span> <p>الكتب</p> </div>
        <div class="item"> <span class="item-icon">📖</span> <p>المناهج</p> </div>
        <div class="item"> <span class="item-icon">📝</span> <p>أسئلة سنوات سابقة</p> </div>
        <div class="item"> <span class="item-icon">🎓</span> <p>مشاريع تخرج</p> </div>
    </section>

    <section class="display-screen">
        هنا يتم عرض محتوى القسم
    </section>
</main>

</body>
</html>