<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mít Sấy Giòn - Ăn Vặt Nhà Sáng</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
            overflow-x: hidden;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Meteor Effect */
        .meteors {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 1;
            overflow: hidden;
        }

        .meteor {
            position: absolute;
            width: 2px;
            height: 2px;
            background: linear-gradient(45deg, #fff, #6bcf7f, transparent);
            border-radius: 50%;
            opacity: 0;
            animation: meteor-fall linear infinite;
        }

        .meteor::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 80px;
            height: 1px;
            background: linear-gradient(90deg, rgba(255,255,255,0.8), rgba(107,207,127,0.6), transparent);
            transform: rotate(45deg);
            transform-origin: 0 0;
        }

        .meteor:nth-child(1) {
            left: 10%;
            animation-duration: 3s;
            animation-delay: 0s;
        }

        .meteor:nth-child(2) {
            left: 20%;
            animation-duration: 4s;
            animation-delay: 1s;
        }

        .meteor:nth-child(3) {
            left: 30%;
            animation-duration: 3.5s;
            animation-delay: 2s;
        }

        .meteor:nth-child(4) {
            left: 40%;
            animation-duration: 4.5s;
            animation-delay: 0.5s;
        }

        .meteor:nth-child(5) {
            left: 50%;
            animation-duration: 3.2s;
            animation-delay: 1.5s;
        }

        .meteor:nth-child(6) {
            left: 60%;
            animation-duration: 4.2s;
            animation-delay: 2.5s;
        }

        .meteor:nth-child(7) {
            left: 70%;
            animation-duration: 3.8s;
            animation-delay: 0.8s;
        }

        .meteor:nth-child(8) {
            left: 80%;
            animation-duration: 4.8s;
            animation-delay: 1.8s;
        }

        .meteor:nth-child(9) {
            left: 85%;
            animation-duration: 3.6s;
            animation-delay: 3s;
        }

        .meteor:nth-child(10) {
            left: 90%;
            animation-duration: 4.4s;
            animation-delay: 0.3s;
        }

        @keyframes meteor-fall {
            0% {
                opacity: 0;
                transform: translateY(-100vh) translateX(-100px) rotate(45deg);
            }
            10% {
                opacity: 1;
            }
            90% {
                opacity: 1;
            }
            100% {
                opacity: 0;
                transform: translateY(100vh) translateX(100px) rotate(45deg);
            }
        }

        /* Header */
        header {
            background: white;
            padding: 1rem 0;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: bold;
            color: #2d5016;
        }

        .nav-links {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .nav-links a {
            text-decoration: none;
            color: #333;
            font-weight: 500;
            transition: color 0.3s;
        }

        .nav-links a:hover {
            color: #6bcf7f;
        }

        .cta-button {
            background: #2d5016;
            color: white;
            padding: 10px 20px;
            border-radius: 25px;
            text-decoration: none;
            font-weight: bold;
            transition: all 0.3s;
        }

        .cta-button:hover {
            background: #1a3009;
            transform: translateY(-2px);
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, #6bcf7f, #44a047);
            padding: 120px 0 80px;
            margin-top: 80px;
            color: white;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 50%;
            height: 100%;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><circle cx="20" cy="20" r="2" fill="rgba(255,255,255,0.1)"/><circle cx="80" cy="40" r="1.5" fill="rgba(255,255,255,0.1)"/><circle cx="40" cy="80" r="1" fill="rgba(255,255,255,0.1)"/></svg>');
        }

        .hero-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
            position: relative;
            z-index: 2;
        }

        .hero-text h1 {
            font-size: 3rem;
            font-weight: bold;
            margin-bottom: 1rem;
            line-height: 1.2;
        }

        .hero-text p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        .hero-buttons {
            display: flex;
            gap: 1rem;
        }

        .btn-primary {
            background: #2d5016;
            color: white;
            padding: 15px 30px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: bold;
            transition: all 0.3s;
        }

        .btn-primary:hover {
            background: #1a3009;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
        }

        .btn-secondary {
            background: rgba(255,255,255,0.2);
            color: white;
            padding: 15px 30px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: bold;
            border: 2px solid rgba(255,255,255,0.3);
            transition: all 0.3s;
        }

        .btn-secondary:hover {
            background: rgba(255,255,255,0.3);
        }

        .hero-image {
            text-align: center;
            position: relative;
        }

        .product-showcase {
            background: rgba(255,255,255,0.1);
            border-radius: 20px;
            padding: 2rem;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255,255,255,0.2);
        }

        /* Enhanced Product Info Section */
        .product-info {
            padding: 80px 0;
            background: linear-gradient(135deg, #f8f9fa 0%, #e8f5e8 50%, #f0f8f0 100%);
            position: relative;
            z-index: 2;
        }

        .product-info::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200"><circle cx="50" cy="50" r="3" fill="rgba(107,207,127,0.1)" opacity="0.5"><animate attributeName="r" values="3;5;3" dur="4s" repeatCount="indefinite"/></circle><circle cx="150" cy="100" r="2" fill="rgba(68,160,71,0.1)" opacity="0.3"><animate attributeName="r" values="2;4;2" dur="5s" repeatCount="indefinite"/></circle><circle cx="100" cy="150" r="2.5" fill="rgba(45,80,22,0.1)" opacity="0.4"><animate attributeName="r" values="2.5;4.5;2.5" dur="3s" repeatCount="indefinite"/></circle></svg>') repeat;
            opacity: 0.3;
            pointer-events: none;
        }

        .section-title {
            text-align: center;
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 1rem;
            color: #2d5016;
            position: relative;
            display: inline-block;
            width: 100%;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: linear-gradient(90deg, #6bcf7f, #44a047);
            border-radius: 2px;
            animation: titleGlow 2s ease-in-out infinite alternate;
        }

        @keyframes titleGlow {
            0% {
                box-shadow: 0 0 5px rgba(107,207,127,0.5);
                width: 80px;
            }
            100% {
                box-shadow: 0 0 20px rgba(107,207,127,0.8);
                width: 120px;
            }
        }

        .section-subtitle {
            text-align: center;
            font-size: 1.2rem;
            color: #666;
            margin-bottom: 4rem;
            font-style: italic;
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 3rem;
            margin-bottom: 3rem;
        }

        .product-card {
            background: linear-gradient(145deg, #ffffff, #f5f5f5);
            border-radius: 25px;
            padding: 2.5rem;
            box-shadow: 
                0 15px 35px rgba(0,0,0,0.1),
                0 5px 15px rgba(0,0,0,0.05);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
            overflow: hidden;
            border: 1px solid rgba(107,207,127,0.1);
        }

        .product-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(107,207,127,0.1), transparent);
            transition: left 0.6s;
        }

        .product-card:hover::before {
            left: 100%;
        }

        .product-card:hover {
            transform: translateY(-15px) scale(1.02);
            box-shadow: 
                0 25px 50px rgba(0,0,0,0.15),
                0 15px 25px rgba(107,207,127,0.1);
            border-color: rgba(107,207,127,0.3);
        }

        .product-card-header {
            display: flex;
            align-items: center;
            margin-bottom: 2rem;
            padding-bottom: 1rem;
            border-bottom: 2px solid rgba(107,207,127,0.2);
            position: relative;
        }

        .product-icon {
            font-size: 3rem;
            margin-right: 1rem;
            animation: iconFloat 3s ease-in-out infinite;
            filter: drop-shadow(0 4px 8px rgba(0,0,0,0.1));
        }

        @keyframes iconFloat {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-8px) rotate(5deg); }
        }

        .product-card h3 {
            color: #2d5016;
            font-size: 1.5rem;
            margin: 0;
            font-weight: 700;
            text-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .product-card ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .product-card li {
            padding: 1rem 0;
            border-bottom: 1px solid rgba(107,207,127,0.1);
            transition: all 0.3s ease;
            position: relative;
            padding-left: 2rem;
            animation: slideInFromLeft 0.6s ease-out;
            animation-fill-mode: both;
        }

        .product-card li:nth-child(1) { animation-delay: 0.1s; }
        .product-card li:nth-child(2) { animation-delay: 0.2s; }
        .product-card li:nth-child(3) { animation-delay: 0.3s; }
        .product-card li:nth-child(4) { animation-delay: 0.4s; }

        @keyframes slideInFromLeft {
            from {
                opacity: 0;
                transform: translateX(-30px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .product-card li::before {
            content: '✨';
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            font-size: 1.2rem;
            animation: sparkle 2s ease-in-out infinite;
        }

        @keyframes sparkle {
            0%, 100% { 
                opacity: 0.7;
                transform: translateY(-50%) scale(1);
            }
            50% { 
                opacity: 1;
                transform: translateY(-50%) scale(1.2);
            }
        }

        .product-card li:hover {
            background: linear-gradient(90deg, rgba(107,207,127,0.05), transparent);
            padding-left: 2.5rem;
            color: #2d5016;
            font-weight: 500;
        }

        .product-card li:last-child {
            border-bottom: none;
        }

        .product-card strong {
            color: #2d5016;
            font-weight: 700;
            text-shadow: 0 1px 2px rgba(0,0,0,0.1);
        }

        /* Special effects for each card */
        .product-card:nth-child(1) {
            background: linear-gradient(145deg, #fff, #f8fffe);
            border-left: 4px solid #6bcf7f;
        }

        .product-card:nth-child(2) {
            background: linear-gradient(145deg, #fff, #f6fff8);
            border-left: 4px solid #44a047;
        }

        .product-card:nth-child(3) {
            background: linear-gradient(145deg, #fff, #f4fff6);
            border-left: 4px solid #2d5016;
        }

        /* Floating particles effect */
        .floating-particles {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            overflow: hidden;
        }

        .particle {
            position: absolute;
            width: 4px;
            height: 4px;
            background: radial-gradient(circle, #6bcf7f, transparent);
            border-radius: 50%;
            animation: floatUp 8s linear infinite;
            opacity: 0;
        }

        .particle:nth-child(1) { left: 10%; animation-delay: 0s; }
        .particle:nth-child(2) { left: 20%; animation-delay: 1s; }
        .particle:nth-child(3) { left: 30%; animation-delay: 2s; }
        .particle:nth-child(4) { left: 40%; animation-delay: 1.5s; }
        .particle:nth-child(5) { left: 50%; animation-delay: 0.5s; }
        .particle:nth-child(6) { left: 60%; animation-delay: 2.5s; }
        .particle:nth-child(7) { left: 70%; animation-delay: 1.2s; }
        .particle:nth-child(8) { left: 80%; animation-delay: 0.8s; }
        .particle:nth-child(9) { left: 90%; animation-delay: 2.2s; }

        @keyframes floatUp {
            0% {
                opacity: 0;
                transform: translateY(100vh) scale(0);
            }
            10% {
                opacity: 1;
                transform: translateY(90vh) scale(1);
            }
            90% {
                opacity: 1;
                transform: translateY(-10vh) scale(1);
            }
            100% {
                opacity: 0;
                transform: translateY(-20vh) scale(0);
            }
        }

        /* Nutrition Section */
        .nutrition {
            padding: 80px 0;
            background: linear-gradient(135deg, #e8f5e8, #f0f8f0);
            position: relative;
            z-index: 2;
        }

        .nutrition-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
        }

        .nutrition-card {
            background: linear-gradient(135deg, #6bcf7f, #44a047);
            color: white;
            padding: 2rem;
            border-radius: 15px;
            text-align: center;
            transition: transform 0.3s;
        }

        .nutrition-card:hover {
            transform: scale(1.05);
        }

        .nutrition-card h4 {
            font-size: 1.2rem;
            margin-bottom: 0.5rem;
        }

        .nutrition-card .value {
            font-size: 2rem;
            font-weight: bold;
        }

        /* Counter animation */
        @keyframes countUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .counter-animated {
            animation: countUp 0.8s ease-out;
        }

        /* Purchase Guide */
        .purchase-guide {
            padding: 80px 0;
            background: #f8f9fa;
            position: relative;
            z-index: 2;
        }

        .guide-content {
            background: white;
            border-radius: 20px;
            padding: 3rem;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        }

        /* Step floating animations with different delays */
        .step-float-1 {
            animation: stepFloat1 4s ease-in-out infinite;
        }

        .step-float-2 {
            animation: stepFloat2 4s ease-in-out infinite;
        }

        .step-float-3 {
            animation: stepFloat3 4s ease-in-out infinite;
        }

        @keyframes stepFloat1 {
            0%, 100% { transform: translateY(0px); }
            33% { transform: translateY(-15px); }
            66% { transform: translateY(5px); }
        }

        @keyframes stepFloat2 {
            0%, 100% { transform: translateY(0px); }
            25% { transform: translateY(8px); }
            50% { transform: translateY(-12px); }
            75% { transform: translateY(-5px); }
        }

        @keyframes stepFloat3 {
            0%, 100% { transform: translateY(0px); }
            40% { transform: translateY(-8px); }
            80% { transform: translateY(10px); }
        }

        /* Policy Section */
        .policy {
            padding: 80px 0;
            background: white;
            position: relative;
            z-index: 2;
        }

        .policy-card {
            background: linear-gradient(135deg, #6bcf7f, #44a047);
            color: white;
            padding: 3rem;
            border-radius: 20px;
            text-align: center;
        }

        /* Contact Section */
        .contact {
            padding: 80px 0;
            background: #2d5016;
            color: white;
            position: relative;
            z-index: 2;
        }

        .contact-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .contact-item {
            text-align: center;
            padding: 2rem;
        }

        .contact-item h4 {
            font-size: 1.3rem;
            margin-bottom: 1rem;
            color: #6bcf7f;
        }

        /* Footer */
        footer {
            background: #1a3009;
            color: white;
            text-align: center;
            padding: 2rem 0;
            position: relative;
            z-index: 2;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .meteor::before {
                width: 50px;
            }
            
            .hero-content {
                grid-template-columns: 1fr;
                text-align: center;
            }

            .hero-text h1 {
                font-size: 2rem;
            }

            .nav-links {
                display: none;
            }

            .hero-buttons {
                flex-direction: column;
            }

            .product-grid {
                grid-template-columns: 1fr;
                gap: 2rem;
            }

            .product-card {
                padding: 2rem;
            }
        }

        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fadeInUp {
            animation: fadeInUp 0.8s ease-out;
        }

        .floating {
            animation: floating 3s ease-in-out infinite;
        }

        @keyframes floating {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }
    </style>
</head>
<body>
    <!-- Meteor Effect -->
    <div class="meteors">
        <div class="meteor"></div>
        <div class="meteor"></div>
        <div class="meteor"></div>
        <div class="meteor"></div>
        <div class="meteor"></div>
        <div class="meteor"></div>
        <div class="meteor"></div>
        <div class="meteor"></div>
        <div class="meteor"></div>
        <div class="meteor"></div>
    </div>

    <!-- Floating Particles -->
    <div class="floating-particles">
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
    </div>

    <!-- Header -->
    <header>
        <nav class="container">
            <div class="logo">Ăn Vặt Nhà Sáng</div>
            <a href="https://elogi.vn/" class="cta-button">Đặt hàng ngay</a>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="container">
            <div class="hero-content">
                <div class="hero-text animate-fadeInUp">
                    <h1>Mít Sấy Giòn<br>Thơm Ngon Tự Nhiên!</h1>
                    <p>Thưởng thức hương vị mít tươi được chế biến theo công nghệ hiện đại, giữ nguyên dinh dưỡng và vị ngọt tự nhiên.</p>
                    <div class="hero-buttons">
                        <a href="#product" class="btn-primary">Khám phá sản phẩm</a>
                        <a href="#nutrition" class="btn-secondary">Thông tin dinh dưỡng</a>
                    </div>
                </div>
                <div class="hero-image">
                    <div class="product-showcase floating">
                        <h3 style="margin-bottom: 1rem;">🥭 Mít Sấy Giòn Premium</h3>
                        <p style="margin-bottom: 1rem;">✨ 100% tự nhiên</p>
                        <p style="margin-bottom: 1rem;">🌱 Không chất bảo quản</p>
                        <p>📦 Đóng gói tiện lợi</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Enhanced Product Info Section -->
    <section class="product-info" id="product">
        <div class="container">
            <h2 class="section-title">THÔNG TIN SẢN PHẨM</h2>
            <p class="section-subtitle">Khám phá chi tiết về mít sấy giòn cao cấp của chúng tôi</p>
            <div class="product-grid">
                <div class="product-card animate-fadeInUp">
                    <div class="product-card-header">
                        <div class="product-icon">📋</div>
                        <h3>Thông tin cơ bản</h3>
                    </div>
                    <ul>
                        <li><strong>Sản phẩm:</strong> Mít sấy giòn cao cấp</li>
                        <li><strong>Thương hiệu:</strong> Ăn vặt nhà Sáng</li>
                        <li><strong>Xuất xứ:</strong> Việt Nam 🇻🇳</li>
                        <li><strong>Trọng lượng:</strong> 60g & 180g</li>
                    </ul>
                </div>
                <div class="product-card animate-fadeInUp">
                    <div class="product-card-header">
                        <div class="product-icon">🥄</div>
                        <h3>Thành phần tự nhiên</h3>
                    </div>
                    <ul>
                        <li><strong>Mít tươi:</strong> 92% (chọn lọc kỹ càng)</li>
                        <li><strong>Dầu thực vật:</strong> Cao cấp, an toàn</li>
                        <li><strong>Muối:</strong> Biển tự nhiên</li>
                        <li><strong>Cam kết:</strong> Không chất bảo quản</li>
                    </ul>
                </div>
                <div class="product-card animate-fadeInUp">
                    <div class="product-card-header">
                        <div class="product-icon">📅</div>
                        <h3>Bảo quản & Sử dụng</h3>
                    </div>
                    <ul>
                        <li><strong>Hạn sử dụng:</strong> 12 tháng từ ngày sản xuất</li>
                        <li><strong>Cách dùng:</strong> Mở bao bì ăn trực tiếp</li>
                        <li><strong>Bảo quản:</strong> Nơi khô ráo, thoáng mát</li>
                        <li><strong>Lưu ý:</strong> Đậy kín sau khi sử dụng</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Nutrition Section -->
    <section class="nutrition" id="nutrition">
        <div class="container">
            <h2 class="section-title">THÔNG TIN DINH DƯỠNG</h2>
            <p style="text-align: center; margin-bottom: 3rem; font-size: 1.1rem;">Trong 100 gram mít sấy giòn của Ăn vặt nhà Sáng</p>
            <div class="nutrition-grid">
                <div class="nutrition-card animate-fadeInUp">
                    <h4>Calories</h4>
                    <div class="value" data-target="350">0</div>
                    <p>kcal</p>
                </div>
                <div class="nutrition-card animate-fadeInUp">
                    <h4>Chất béo</h4>
                    <div class="value" data-target="0.64" data-decimal="2">0</div>
                    <p>gram</p>
                </div>
                <div class="nutrition-card animate-fadeInUp">
                    <h4>Carbs</h4>
                    <div class="value" data-target="23.25" data-decimal="2">0</div>
                    <p>gram</p>
                </div>
                <div class="nutrition-card animate-fadeInUp">
                    <h4>Protein</h4>
                    <div class="value" data-target="1.72" data-decimal="2">0</div>
                    <p>gram</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Purchase Guide -->
    <section class="purchase-guide" id="guide">
        <div class="container">
            <h2 class="section-title">HƯỚNG DẪN MUA HÀNG</h2>
            <div class="guide-content animate-fadeInUp">
                <h3 style="color: #2d5016; margin-bottom: 2rem; text-align: center;">Quy trình đặt hàng đơn giản</h3>
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem;">
                    <div style="text-align: center; padding: 1.5rem;">
                        <div style="background: #6bcf7f; color: white; width: 60px; height: 60px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; font-size: 1.5rem; font-weight: bold;">1</div>
                        <h4>Liên hệ đặt hàng</h4>
                        <p>Gọi điện hoặc nhắn tin cho chúng tôi</p>
                    </div>
                    <div style="text-align: center; padding: 1.5rem;">
                        <div style="background: #6bcf7f; color: white; width: 60px; height: 60px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; font-size: 1.5rem; font-weight: bold;">2</div>
                        <h4>Xác nhận đơn hàng</h4>
                        <p>Cung cấp thông tin địa chỉ giao hàng</p>
                    </div>
                    <div style="text-align: center; padding: 1.5rem;">
                        <div style="background: #6bcf7f; color: white; width: 60px; height: 60px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; font-size: 1.5rem; font-weight: bold;">3</div>
                        <h4>Thanh toán & Nhận hàng</h4>
                        <p>Thanh toán khi nhận hàng (COD)</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Policy Section -->
    <section class="policy">
        <div class="container">
            <h2 class="section-title">CHÍNH SÁCH ĐỔI TRẢ</h2>
            <div class="policy-card animate-fadeInUp">
                <h3 style="margin-bottom: 2rem;">🛡️ Cam kết chất lượng</h3>
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem; text-align: left;">
                    <div>
                        <h4 style="color: #fff; margin-bottom: 1rem;">✅ Đổi trả trong 7 ngày</h4>
                        <p>Nếu sản phẩm có lỗi từ nhà sản xuất</p>
                    </div>
                    <div>
                        <h4 style="color: #fff; margin-bottom: 1rem;">📦 Bao bì nguyên vẹn</h4>
                        <p>Sản phẩm đổi trả phải còn nguyên bao bì</p>
                    </div>
                    <div>
                        <h4 style="color: #fff; margin-bottom: 1rem;">🚚 Hỗ trợ vận chuyển</h4>
                        <p>Miễn phí vận chuyển khi đổi trả do lỗi NSX</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact" id="contact">
        <div class="container">
            <h2 class="section-title" style="color: white; margin-bottom: 3rem;">LIÊN HỆ ĐẶT HÀNG</h2>
            <div class="contact-grid">
                <div class="contact-item animate-fadeInUp">
                    <h4>📞 Số điện thoại</h4>
                    <p style="font-size: 1.2rem; font-weight: bold;">0123.456.789</p>
                    <p>Zalo: 0123.456.789</p>
                </div>
                <div class="contact-item animate-fadeInUp">
                    <h4>📧 Email</h4>
                    <p style="font-size: 1.2rem; font-weight: bold;">info@anvatnhasang.com</p>
                    <p>Hỗ trợ 24/7</p>
                </div>
                <div class="contact-item animate-fadeInUp">
                    <h4>📍 Địa chỉ</h4>
                    <p style="font-size: 1.1rem;">123 Đường ABC, Quận XYZ</p>
                    <p>TP. Hồ Chí Minh, Việt Nam</p>
                </div>
                <div class="contact-item animate-fadeInUp">
                    <h4>🌐 Website</h4>
                    <p style="font-size: 1.2rem; font-weight: bold;">www.anvatnhasang.com</p>
                    <p>Đặt hàng online</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p>&copy; 2024 Ăn Vặt Nhà Sáng. Tất cả quyền được bảo lưu.</p>
            <p>🥭 Mít sấy giòn - Hương vị tự nhiên, chất lượng cao cấp</p>
        </div>
    </footer>

    <script>
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Add scroll effect to header
        window.addEventListener('scroll', function() {
            const header = document.querySelector('header');
            if (window.scrollY > 100) {
                header.style.background = 'rgba(255, 255, 255, 0.95)';
                header.style.backdropFilter = 'blur(10px)';
            } else {
                header.style.background = 'white';
                header.style.backdropFilter = 'none';
            }
        });

        // Animate elements on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-fadeInUp');
                    
                    // Start counter animation for nutrition cards
                    if (entry.target.classList.contains('nutrition-card')) {
                        const counter = entry.target.querySelector('.value');
                        if (counter && !counter.classList.contains('counter-animated')) {
                            animateCounter(counter);
                        }
                    }
                }
            });
        }, observerOptions);

        document.querySelectorAll('.product-card, .nutrition-card, .guide-content, .policy-card, .contact-item').forEach(el => {
            observer.observe(el);
        });

        // Counter animation function
        function animateCounter(element) {
            const target = parseFloat(element.getAttribute('data-target'));
            const decimals = element.getAttribute('data-decimal') ? parseInt(element.getAttribute('data-decimal')) : 0;
            const duration = 2000; // 2 seconds
            const increment = target / (duration / 16); // 60fps
            let current = 0;
            
            element.classList.add('counter-animated');
            
            const timer = setInterval(() => {
                current += increment;
                if (current >= target) {
                    current = target;
                    clearInterval(timer);
                }
                
                if (decimals > 0) {
                    element.textContent = current.toFixed(decimals);
                } else {
                    element.textContent = Math.floor(current);
                }
            }, 16);
        }

        // Dynamic meteor creation for continuous effect
        function createMeteor() {
            const meteor = document.createElement('div');
            meteor.className = 'meteor';
            meteor.style.left = Math.random() * 100 + '%';
            meteor.style.animationDuration = (Math.random() * 2 + 3) + 's';
            meteor.style.animationDelay = Math.random() * 2 + 's';
            
            document.querySelector('.meteors').appendChild(meteor);
            
            // Remove meteor after animation completes
            setTimeout(() => {
                if (meteor.parentNode) {
                    meteor.parentNode.removeChild(meteor);
                }
            }, 6000);
        }

        // Create meteors periodically
        setInterval(createMeteor, 800);
    </script>
</body>
</html>