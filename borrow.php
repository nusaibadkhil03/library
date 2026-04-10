<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>نظام استعارة الكتب</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .tabs { display: flex; justify-content: center; gap: 10px; margin-bottom: 20px; padding: 15px; }
        .tab-btn { 
            padding: 10px 20px; background: #ddd; border: none; border-radius: 5px; 
            cursor: pointer; font-weight: bold; transition: 0.3s;
        }
        .tab-btn.active { background: #e67e22; color: white; }
        
        .form-section { display: none; }
        .form-section.active { display: block; }

        .status-card {
            background: #f9f9f9; padding: 15px; border-radius: 8px;
            border-right: 5px solid #e67e22; margin-top: 10px; text-align: right;
        }
        .status-badge { 
            padding: 3px 8px; border-radius: 4px; font-size: 0.8rem; color: white;
        }
        .pending { background: #f1c40f; }
        .approved { background: #2ecc71; }
        
        /* تنسيق إضافي للحقول الجانبية */
        .flex-row { display: flex; gap: 10px; margin-bottom: 15px; }
        .flex-row div { flex: 1; }
    </style>
</head>
<body class="auth-page">

    <div class="overlay"></div>

    <div class="login-container" style="max-width: 550px;">
        
        <div class="tabs" id="main-tabs">
            <button class="tab-btn active" onclick="showTab('request-form-container')">طلب استعارة</button>
            <button class="tab-btn" onclick="showTab('status-view')">حالة الطلب</button>
        </div>

        <div id="request-form-container" class="form-section active">
            <h2>تقديم طلب استعارة</h2>
            <form id="borrowForm" onsubmit="handleFormSubmit(event)">
                
                <label>اسم الكتاب *</label>
                <input type="text" id="book_name" name="book_name" required placeholder="أدخل اسم الكتاب">

                <div class="flex-row">
                    <div>
                        <label>اسم المؤلف (اختياري)</label>
                        <input type="text" name="author" placeholder="المؤلف">
                    </div>
                    <div>
                        <label>رقم الطبعة (اختياري)</label>
                        <input type="text" name="edition" placeholder="الطبعة">
                    </div>
                </div>

                <div class="flex-row">
                    <div>
                        <label>تاريخ الاستعارة *</label>
                        <input type="date" id="borrow_date" name="borrow_date" required onchange="calculateReturnDate()">
                    </div>
                    <div>
                        <label>تاريخ الإرجاع</label>
                        <input type="text" id="return_date_display" readonly placeholder="تلقائي" style="background:#eee;">
                    </div>
                </div>

                <label>بيانات الطالب</label>
                <div class="flex-row">
                    <input type="text" placeholder="الاسم الكامل" required style="flex:2;">
                    <input type="text" placeholder="رقم القيد" required style="flex:1;">
                </div>

                <button type="submit" class="login-btn">إرسال الطلب</button>
            </form>
        </div>

        <div id="success-message" style="display: none; text-align: center; padding: 20px;">
            <div style="font-size: 60px; color: #2ecc71;">✅</div>
            <h2 style="color: #2ecc71;">تم إرسال طلبك بنجاح!</h2>
            <p style="color: #666;">ستتم مراجعته من قبل أمين المكتبة، ويمكنك متابعة الحالة من تبويب "حالة الطلب".</p>
            <button class="login-btn" onclick="resetForm()" style="margin-top: 20px; background: #34495e;">تقديم طلب آخر</button>
        </div>

        <div id="status-view" class="form-section">
            <h2>متابعة حالة طلباتي</h2>
            <div class="status-card">
                <p><strong>الكتاب:</strong> مقدمة في الخوارزميات</p>
                <p><strong>الحالة:</strong> <span class="status-badge pending">قيد المراجعة</span></p>
            </div>
            <div class="status-card" style="border-right-color: #2ecc71;">
                <p><strong>الكتاب:</strong> لغة PHP للمبتدئين</p>
                <p><strong>الحالة:</strong> <span class="status-badge approved">تم قبول طلبك</span></p>
                <p><small>تاريخ الانتهاء: 2026/04/15</small></p>
            </div>
        </div>

    </div>

    <script>
        // دالة التبديل بين التبويبات
        function showTab(tabId) {
            document.querySelectorAll('.form-section').forEach(section => {
                section.classList.remove('active');
                section.style.display = 'none'; // تأكيد الإخفاء
            });
            document.querySelectorAll('.tab-btn').forEach(btn => {
                btn.classList.remove('active');
            });
            
            const activeSection = document.getElementById(tabId);
            activeSection.classList.add('active');
            activeSection.style.display = 'block';
            event.currentTarget.classList.add('active');

            // إخفاء رسالة النجاح عند العودة للتبويبات
            if(tabId === 'request-form-container') {
                document.getElementById('success-message').style.display = 'none';
            }
        }

        // دالة حساب التاريخ (أسبوعين)
        function calculateReturnDate() {
            const borrowDateInput = document.getElementById('borrow_date').value;
            const returnDateDisplay = document.getElementById('return_date_display');

            if (borrowDateInput) {
                let borrowDate = new Date(borrowDateInput);
                borrowDate.setDate(borrowDate.getDate() + 14);
                
                let y = borrowDate.getFullYear();
                let m = String(borrowDate.getMonth() + 1).padStart(2, '0');
                let d = String(borrowDate.getDate()).padStart(2, '0');
                
                returnDateDisplay.value = `${y}-${m}-${d}`;
            }
        }

        // معالجة إرسال النموذج
        function handleFormSubmit(event) {
            event.preventDefault();
            document.getElementById('request-form-container').style.display = 'none';
            document.getElementById('success-message').style.display = 'block';
            // نقوم بإخفاء التبويبات مؤقتاً عند عرض رسالة النجاح لتركيز انتباه المستخدم
            document.getElementById('main-tabs').style.visibility = 'hidden';
        }

        // إعادة ضبط النموذج
        function resetForm() {
            document.getElementById('borrowForm').reset();
            document.getElementById('success-message').style.display = 'none';
            document.getElementById('request-form-container').style.display = 'block';
            document.getElementById('main-tabs').style.visibility = 'visible';
            document.getElementById('return_date_display').value = '';
        }
    </script>
</body>
</html>