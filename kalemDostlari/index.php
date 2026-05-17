```php
<?php
require_once __DIR__ . '/includes/connection.php';
?>

<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Kalem Dostları</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Google Font -->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <!-- Navbar -->
    <?php include 'includes/navbar.php'; ?>

    <!-- HERO SECTION -->
    <section class="hero">

        <div class="container">

            <div class="row align-items-center min-vh-100">

                <div class="col-lg-6" data-aos="fade-right">

                    <h1 class="hero-title">
                        Geleceğe Birlikte Destek Olalım
                    </h1>

                    <p class="hero-text">
                        Kalem Dostları, depremzede öğrencilerin eğitim hayatına
                        destek olmak için oluşturulmuş sosyal dayanışma platformudur.
                    </p>

                    <div class="mt-4">
                        <a href="#" class="btn btn-main">
                            Destek Al
                        </a>

                        <a href="#" class="btn btn-outline-light ms-3">
                            Başvur
                        </a>
                    </div>

                </div>

                <div class="col-lg-6 text-center" data-aos="fade-left">

                    <img src="https://i.ibb.co/jgyVDPx/logo.png"
                        class="img-fluid floating-img"
                        width="450">

                </div>

            </div>

        </div>

    </section>

    <!-- SUPPORT SECTION -->

    <section class="support-section py-5">

        <div class="container">

            <div class="text-center mb-5" data-aos="fade-up">

                <h2 class="section-title">
                    Desteklerimiz
                </h2>

                <p class="section-subtitle">
                    Öğrencilere farklı alanlarda destek sağlıyoruz
                </p>

            </div>

            <div class="row g-4">

                <div class="col-md-6 col-lg-3" data-aos="zoom-in">

                    <div class="support-card">

                        <i class="bi bi-laptop support-icon"></i>

                        <h4>Elektronik Destek</h4>

                        <p>
                            Laptop, tablet ve teknolojik cihaz desteği.
                        </p>

                    </div>

                </div>

                <div class="col-md-6 col-lg-3" data-aos="zoom-in">

                    <div class="support-card">

                        <i class="bi bi-mortarboard support-icon"></i>

                        <h4>Burs Desteği</h4>

                        <p>
                            Eğitim hayatı için maddi burs imkanları.
                        </p>

                    </div>

                </div>

                <div class="col-md-6 col-lg-3" data-aos="zoom-in">

                    <div class="support-card">

                        <i class="bi bi-people support-icon"></i>

                        <h4>Mentorluk</h4>

                        <p>
                            Uzman kişilerle online rehberlik desteği.
                        </p>

                    </div>

                </div>

                <div class="col-md-6 col-lg-3" data-aos="zoom-in">

                    <div class="support-card">

                        <i class="bi bi-briefcase support-icon"></i>

                        <h4>İş / Staj</h4>

                        <p>
                            Öğrencilere kariyer fırsatları sağlanır.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- STATISTICS -->

    <section class="stats-section">

        <div class="container">

            <div class="row text-center">

                <div class="col-md-4" data-aos="fade-up">

                    <h2>+500</h2>
                    <p>Desteklenen Öğrenci</p>

                </div>

                <div class="col-md-4" data-aos="fade-up">

                    <h2>+120</h2>
                    <p>Mentor</p>

                </div>

                <div class="col-md-4" data-aos="fade-up">

                    <h2>+75</h2>
                    <p>Partner Kurum</p>

                </div>

            </div>

        </div>

    </section>

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Custom JS -->
    <script src="assets/js/app.js"></script>

</body>

</html>
```
