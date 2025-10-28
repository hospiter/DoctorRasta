<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>دکتر رستا نوری - دانشجوی پزشکی</title>
    <link href="https://fonts.googleapis.com/css2?family=Vazirmatn:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #1a73e8;
            --primary-dark: #0d47a1;
            --secondary: #34a853;
            --light: #f8f9fa;
            --dark: #202124;
            --gray: #5f6368;
            --light-gray: #dadce0;
            --shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            --radius: 12px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Vazirmatn', sans-serif;
            background-color: #f5f7fa;
            color: var(--dark);
            line-height: 1.7;
            direction: rtl;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header Styles */
        header {
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            color: white;
            padding: 20px 0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .logo-icon {
            font-size: 28px;
            background: rgba(255, 255, 255, 0.2);
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .logo-text h1 {
            font-size: 22px;
            margin-bottom: 5px;
        }

        .logo-text p {
            font-size: 14px;
            opacity: 0.9;
        }

        nav ul {
            display: flex;
            list-style: none;
            gap: 25px;
        }

        nav a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
            padding: 8px 0;
            position: relative;
        }

        nav a:hover {
            opacity: 0.9;
        }

        nav a::after {
            content: '';
            position: absolute;
            bottom: 0;
            right: 0;
            width: 0;
            height: 2px;
            background: white;
            transition: width 0.3s ease;
        }

        nav a:hover::after {
            width: 100%;
        }

        /* Hero Section */
        .hero {
            padding: 60px 0;
            background: linear-gradient(to right, #f0f4ff, #ffffff);
        }

        .hero-content {
            display: flex;
            align-items: center;
            gap: 40px;
        }

        .hero-text {
            flex: 1;
        }

        .hero-text h2 {
            font-size: 32px;
            color: var(--primary-dark);
            margin-bottom: 20px;
            line-height: 1.4;
        }

        .hero-text p {
            color: var(--gray);
            margin-bottom: 25px;
            font-size: 17px;
        }

        .hero-image {
            flex: 1;
            text-align: center;
        }

        .profile-img {
            width: 300px;
            height: 300px;
            border-radius: 50%;
            object-fit: cover;
            border: 5px solid white;
            box-shadow: var(--shadow);
        }

        /* About Section */
        .about {
            padding: 80px 0;
            background-color: white;
        }

        .section-title {
            text-align: center;
            margin-bottom: 50px;
            position: relative;
        }

        .section-title h2 {
            font-size: 28px;
            color: var(--primary-dark);
            display: inline-block;
            padding-bottom: 10px;
        }

        .section-title h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            right: 50%;
            transform: translateX(50%);
            width: 80px;
            height: 3px;
            background: var(--primary);
        }

        .about-content {
            display: flex;
            gap: 40px;
            align-items: center;
        }

        .about-text {
            flex: 2;
        }

        .about-text p {
            margin-bottom: 20px;
            text-align: justify;
        }

        .about-stats {
            flex: 1;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .stat-box {
            background: var(--light);
            border-radius: var(--radius);
            padding: 25px 20px;
            text-align: center;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease;
        }

        .stat-box:hover {
            transform: translateY(-5px);
        }

        .stat-box i {
            font-size: 30px;
            color: var(--primary);
            margin-bottom: 15px;
        }

        .stat-box h3 {
            font-size: 24px;
            color: var(--primary-dark);
            margin-bottom: 5px;
        }

        .stat-box p {
            font-size: 14px;
            color: var(--gray);
        }

        /* Education Section */
        .education {
            padding: 80px 0;
            background-color: #f8f9fa;
        }

        .timeline {
            position: relative;
            max-width: 800px;
            margin: 0 auto;
        }

        .timeline::after {
            content: '';
            position: absolute;
            width: 4px;
            background-color: var(--primary);
            top: 0;
            bottom: 0;
            right: 50%;
            margin-right: -2px;
        }

        .timeline-item {
            padding: 10px 40px;
            position: relative;
            width: 50%;
            box-sizing: border-box;
        }

        .timeline-item:nth-child(odd) {
            right: 0;
        }

        .timeline-item:nth-child(even) {
            right: 50%;
        }

        .timeline-content {
            padding: 20px;
            background-color: white;
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            position: relative;
        }

        .timeline-content::after {
            content: '';
            position: absolute;
            width: 20px;
            height: 20px;
            background-color: white;
            top: 15px;
            transform: rotate(45deg);
            z-index: -1;
        }

        .timeline-item:nth-child(odd) .timeline-content::after {
            left: -10px;
        }

        .timeline-item:nth-child(even) .timeline-content::after {
            right: -10px;
        }

        .timeline-content h3 {
            color: var(--primary-dark);
            margin-bottom: 10px;
        }

        .timeline-content .date {
            color: var(--secondary);
            font-weight: 500;
            margin-bottom: 10px;
            display: block;
        }

        .timeline-item::after {
            content: '';
            position: absolute;
            width: 20px;
            height: 20px;
            background-color: var(--primary);
            border: 4px solid white;
            border-radius: 50%;
            top: 20px;
            z-index: 1;
        }

        .timeline-item:nth-child(odd)::after {
            left: -10px;
        }

        .timeline-item:nth-child(even)::after {
            right: -10px;
        }

        /* Services Section */
        .services {
            padding: 80px 0;
            background-color: white;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .service-card {
            background: var(--light);
            border-radius: var(--radius);
            padding: 30px;
            text-align: center;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            border-top: 4px solid var(--primary);
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .service-card i {
            font-size: 40px;
            color: var(--primary);
            margin-bottom: 20px;
        }

        .service-card h3 {
            color: var(--primary-dark);
            margin-bottom: 15px;
        }

        .service-card p {
            color: var(--gray);
            font-size: 15px;
        }

        /* CTA Section */
        .cta {
            padding: 80px 0;
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            color: white;
            text-align: center;
        }

        .cta h2 {
            font-size: 32px;
            margin-bottom: 20px;
        }

        .cta p {
            max-width: 700px;
            margin: 0 auto 30px;
            font-size: 18px;
            opacity: 0.9;
        }

        .btn {
            display: inline-block;
            padding: 12px 30px;
            background-color: white;
            color: var(--primary);
            text-decoration: none;
            border-radius: 30px;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .btn:hover {
            background-color: var(--light);
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
        }

        .btn-outline {
            background: transparent;
            border: 2px solid white;
            color: white;
            margin-right: 15px;
        }

        .btn-outline:hover {
            background: white;
            color: var(--primary);
        }

        /* Footer */
        footer {
            background-color: var(--dark);
            color: white;
            padding: 60px 0 30px;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            margin-bottom: 40px;
        }

        .footer-column h3 {
            font-size: 18px;
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 10px;
        }

        .footer-column h3::after {
            content: '';
            position: absolute;
            bottom: 0;
            right: 0;
            width: 40px;
            height: 2px;
            background: var(--primary);
        }

        .footer-column p {
            opacity: 0.8;
            margin-bottom: 15px;
        }

        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }

        .social-links a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            color: white;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .social-links a:hover {
            background: var(--primary);
            transform: translateY(-3px);
        }

        .footer-column ul {
            list-style: none;
        }

        .footer-column ul li {
            margin-bottom: 12px;
        }

        .footer-column ul li a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .footer-column ul li a:hover {
            color: white;
            padding-right: 5px;
        }

        .copyright {
            text-align: center;
            padding-top: 30px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            font-size: 14px;
            opacity: 0.7;
        }

        /* Responsive Styles */
        @media (max-width: 992px) {
            .hero-content {
                flex-direction: column-reverse;
                text-align: center;
            }

            .about-content {
                flex-direction: column;
            }

            .timeline::after {
                right: 31px;
            }

            .timeline-item {
                width: 100%;
                padding-right: 70px;
                padding-left: 25px;
            }

            .timeline-item:nth-child(even) {
                right: 0;
            }

            .timeline-item::after {
                right: 21px;
            }

            .timeline-item:nth-child(odd)::after {
                left: auto;
                right: 21px;
            }

            .timeline-item:nth-child(odd) .timeline-content::after {
                left: auto;
                right: -10px;
            }
        }

        @media (max-width: 768px) {
            .header-content {
                flex-direction: column;
                gap: 20px;
            }

            nav ul {
                gap: 15px;
            }

            .hero-text h2 {
                font-size: 26px;
            }

            .profile-img {
                width: 250px;
                height: 250px;
            }
        }

        @media (max-width: 576px) {
            .about-stats {
                grid-template-columns: 1fr;
            }

            .services-grid {
                grid-template-columns: 1fr;
            }

            .btn {
                display: block;
                margin-bottom: 15px;
                text-align: center;
            }

            .btn-outline {
                margin-right: 0;
            }
        }
    </style>
</head>

<body>
    <!-- Header -->
    <header>
        <div class="container">
            <div class="header-content">
                <div class="logo">
                    <div class="logo-icon">
                        <i class="fas fa-user-md"></i>
                    </div>
                    <div class="logo-text">
                        <h1>دکتر رستا نوری</h1>
                        <p>دانشجوی پزشکی</p>
                    </div>
                </div>
                <nav>
                    <ul>
                        <li><a href="#home">خانه</a></li>
                        <li><a href="#about">درباره من</a></li>
                        <li><a href="#education">تحصیلات</a></li>
                        <li><a href="#services">خدمات</a></li>
                        <li><a href="#contact">تماس</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="container">
            <div class="hero-content">
                <div class="hero-text">
                    <h2>دکتر رستا نوری<br>دانشجوی پزشکی و پژوهشگر</h2>
                    <p>متولد مهرماه ۱۳۸۴، دانشجوی جوان و پرانگیزه رشته پزشکی که با اشتیاق فراوان در مسیر خدمت به سلامت
                        جامعه گام برمی‌دارد. علاقه‌مند به یادگیری مستمر و ارائه خدمات پزشکی با کیفیت.</p>
                    <a href="#about" class="btn">درباره من</a>
                </div>
                <div class="hero-image">
                    <img src="images/doctor.jpg"
                        alt="دکتر رستا نوری" class="profile-img">
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about" id="about">
        <div class="container">
            <div class="section-title">
                <h2>درباره دکتر رستا نوری</h2>
            </div>
            <div class="about-content">
                <div class="about-text">
                    <p>دکتر رستا نوری، متولد مهرماه ۱۳۸۴، دانشجوی رشته پزشکی است که با علاقه و پشتکار فراوان در این مسیر
                        قدم نهاده است. از دوران نوجوانی با مشاهده تأثیر پزشکان در بهبود کیفیت زندگی افراد، به این حرفه
                        علاقه‌مند شد و با تلاش مستمر به این رشته راه یافت.</p>
                    <p>ایشان علاوه بر تحصیل در رشته پزشکی، به مطالعه منابع به روز علمی و شرکت در کارگاه‌های آموزشی مختلف
                        علاقه‌مند است. تعهد به اخلاق حرفه‌ای و دلسوزی برای بیماران از ویژگی‌های بارز ایشان محسوب می‌شود.
                    </p>
                    <p>دکتر رستای عزیز بر این باور است که یک پزشک خوب علاوه بر دانش علمی، باید دارای مهارت‌های ارتباطی قوی و
                        توانایی همدلی با بیماران باشد. هدف او تخصص در یکی از رشته‌های پزشکی و ارائه خدمات درمانی با
                        کیفیت به هموطنان است.</p>
                </div>
                <div class="about-stats">
                    <div class="stat-box">
                        <i class="fas fa-graduation-cap"></i>
                        <h3>سال دوم</h3>
                        <p>تحصیل پزشکی</p>
                    </div>
                    <div class="stat-box">
                        <i class="fas fa-book-medical"></i>
                        <h3>مطالعه مستمر</h3>
                        <p>منابع علمی</p>
                    </div>
                    <div class="stat-box">
                        <i class="fas fa-hand-holding-medical"></i>
                        <h3>علاقه‌مند</h3>
                        <p>به خدمات سلامت</p>
                    </div>
                    <div class="stat-box">
                        <i class="fas fa-award"></i>
                        <h3>پشتکار</h3>
                        <p>در یادگیری</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services" id="services">
        <div class="container">
            <div class="section-title">
                <h2>خدمات و فعالیت‌ها</h2>
            </div>
            <div class="services-grid">
                <div class="service-card">
                    <i class="fas fa-stethoscope"></i>
                    <h3>مشاوره پزشکی عمومی</h3>
                    <p>ارائه مشاوره در زمینه مسائل عمومی پزشکی، سبک زندگی سالم و پیشگیری از بیماری‌ها با توجه به دانش
                        روز پزشکی</p>
                </div>
                <div class="service-card">
                    <i class="fas fa-book-open"></i>
                    <h3>آموزش سلامت</h3>
                    <p>اشتراک گذاری دانش پزشکی و اطلاعات سلامت برای عموم مردم در زمینه بهداشت فردی و اجتماعی</p>
                </div>
                <div class="service-card">
                    <i class="fas fa-heartbeat"></i>
                    <h3>پیشگیری از بیماری‌ها</h3>
                    <p>ارائه راهکارهای علمی برای پیشگیری از بیماری‌های شایع و ارتقای سطح سلامت جامعه</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta" id="contact">
        <div class="container">
            <h2>آماده پاسخگویی به سوالات شما</h2>
            <p>در صورت داشتن هرگونه سوال در زمینه مسائل عمومی پزشکی یا نیاز به راهنمایی، می‌توانید با من در ارتباط
                باشید.</p>
            <a href="tel:+989123456789" class="btn btn-outline">تماس تلفنی</a>
            <a href="mailto:rasta.nouri@example.com" class="btn">ارسال ایمیل</a>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <h3>درباره دکتر رستا نوری</h3>
                    <p>دانشجوی پزشکی متولد ۱۳۸۴، علاقه‌مند به ارائه خدمات سلامت و مشاوره پزشکی با تکیه بر دانش روز و
                        اخلاق حرفه‌ای.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-telegram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
                <div class="footer-column">
                    <h3>لینک‌های سریع</h3>
                    <ul>
                        <li><a href="#home">خانه</a></li>
                        <li><a href="#about">درباره من</a></li>
                        <li><a href="#education">تحصیلات</a></li>
                        <li><a href="#services">خدمات</a></li>
                        <li><a href="#contact">تماس با من</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>راه‌های ارتباطی</h3>
                    <p><i class="fas fa-phone"></i></p>
                    <p><i class="fas fa-envelope"></i> rasta.nouri@example.com</p>
                    <p><i class="fas fa-map-marker-alt"></i> ایران</p>
                </div>
            </div>
            <div class="copyright">
                <p>کلیه حقوق محفوظ است - ۱۴۰۲ © دکتر رستا نوری</p>
            </div>
        </div>
    </footer>
</body>

</html>
