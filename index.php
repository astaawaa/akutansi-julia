<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita Akuntansi</title>
    <!-- Bootstrap 5/CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>
<body>
    <!-- Header -->
    <header class="bg-primary text-white text-center py-4">
        <h1>Berita dan Inovasi Akuntansi</h1>
        <nav>
            <ul class="nav justify-content-center">
                <li class="nav-item"><a class="nav-link text-white" href="#home">Home</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="#berita">Berita</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <!-- Main Content -->
    <main class="container my-4">
        <!-- Home Section -->
        <section id="home" class="text-center mb-5">
            <h2 class="mb-3">Selamat Datang di Website Akuntansi</h2>
            <p>Temukan berita terbaru dan inovasi dunia akuntansi di sini.</p>
        </section>

        <!-- Berita Section -->
        <section id="berita">
            <h2 class="text-center mb-4">Berita Terbaru</h2>
            
            <!-- Berita 1 -->
            <div class="card mb-4 custom-card">
                <a href="berita/berita1.php">
                <img src="assets/img/berita1.jpg" class="card-img-top" alt="Teknologi Akuntansi">
                </a>
                <div class="card-body">
                    <h3 class="card-title">Pentingnya Teknologi dalam Dunia Akuntansi</h3>
                    <p class="card-text">Teknologi telah membawa perubahan besar dalam dunia akuntansi, mempermudah proses pencatatan hingga analisis data keuangan.</p>
                    <a href="https://example.com/referensi1" target="_blank" class="btn btn-primary">Baca Sumber Referensi</a>
                </div>
            </div>
            
            <!-- Berita 2 -->
            <div class="card mb-4 custom-card">
                <a href="berita/berita2.php">
                <img src="assets/img/berita2.jpg" class="card-img-top" alt="Standar Akuntansi">
                </a>
                <div class="card-body">
                    <h3 class="card-title">Standar Akuntansi Terbaru di Tahun 2025</h3>
                    <p class="card-text">Memahami standar akuntansi terbaru sangat penting untuk menjaga transparansi dan akurasi laporan keuangan.</p>
                    <a href="https://example.com/referensi2" target="_blank" class="btn btn-primary">Baca Sumber Referensi</a>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer id="contact" class="bg-dark text-white text-center py-3">
        <p>Hubungi kami di <a href="mailto:info@akuntansi.com" class="text-primary">info@akuntansi.com</a></p>
    </footer>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>