<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MA Darul Fithrah</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/ma_darul_fithrah/ma_darul_fithrah/assets/css/style.css">
    </head>
<body>
    <header class="hero" id="beranda">
        <nav class="navbar container">
            <a href="#" class="brand">
                <span class="brand-icon"><img src="/ma_darul_fithrah/ma_darul_fithrah/assets/img/logo.png" alt="Logo MA Darul Fithrah"></span>
                <span class="brand-text">
                    <span class="brand-title">MA Darul Fithrah</span>
                    <span class="brand-subtitle">Madrasah Aliyah</span>
                </span>
            </a>
            <ul class="menu">
                <li><a href="#beranda">Beranda</a></li>
                <li><a href="#tentang">Tentang Kami</a></li>
                <li><a href="#program">Program</a></li>
                <li><a href="#fasilitas">Fasilitas</a></li>
                <li><a href="/ma_darul_fithrah/ma_darul_fithrah/public/kelulusan.php">Pengumuman Kelulusan</a></li>
            </ul>
            <button class="mobile-toggle" aria-label="Buka Menu">
                <span class="mobile-toggle-bar"></span>
                <span class="mobile-toggle-bar"></span>
                <span class="mobile-toggle-bar"></span>
            </button>
        </nav>
        <div class="mobile-menu" id="mobileMenu">
            <ul class="mobile-menu-list">
                <li><a href="#beranda">Beranda</a></li>
                <li><a href="#tentang">Tentang Kami</a></li>
                <li><a href="#program">Program</a></li>
                <li><a href="#fasilitas">Fasilitas</a></li>
                <li><a href="/ma_darul_fithrah/ma_darul_fithrah/public/kelulusan.php">Pengumuman Kelulusan</a></li>
            </ul>
        </div>
        <div class="hero-body container">
            <div class="hero-left">
                <span class="badge">Madrasah Aliyah Unggulan</span>
                <h1 class="hero-title">MA Darul Fithrah</h1>
                <p class="hero-subtitle">MA Darul Fithrah membentuk generasi Islami yang cerdas, berakhlak, dan berprestasi.</p>
                <div class="hero-cta">
                    <a href="/ma_darul_fithrah/ma_darul_fithrah/public/pendaftaran.php" class="btn btn-primary">Daftar Sekarang</a>
                    <a href="#tentang" class="btn btn-outline">Pelajari Lebih Lanjut</a>
                </div>
                <div class="hero-stats">
                    <div class="stat">
                        <img class="stat-photo" src="/ma_darul_fithrah/ma_darul_fithrah/assets/img/hat.png" alt="Foto 1"/>
                        <div class="stat-text">
                            <div class="stat-value">98%</div>
                            <div class="stat-label">Kelulusan</div>
                        </div>
                    </div>
                    <div class="stat">
                        <img class="stat-photo" src="/ma_darul_fithrah/ma_darul_fithrah/assets/img/award.png" alt="Foto 2"/>
                        <div class="stat-text">
                            <div class="stat-value">50+</div>
                            <div class="stat-label">Prestasi</div>
                        </div>
                    </div>
                    <div class="stat">
                        <img class="stat-photo" src="/ma_darul_fithrah/ma_darul_fithrah/assets/img/group.png" alt="Foto 3"/>
                        <div class="stat-text">
                            <div class="stat-value">100+</div>
                            <div class="stat-label">Siswa</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-right">
                <div class="photo-card">
                    <img src="/ma_darul_fithrah/ma_darul_fithrah/assets/img/utama.jpg" alt="Pintu Masuk"/>
                    <div class="experience-pill">
                        <div class="exp-value">10+</div>
                        <div class="exp-label">Tahun Pengalaman</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-wave">
            <svg viewBox="0 0 1440 120" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                <path d="M0,80 C240,140 480,20 720,60 C960,100 1200,140 1440,60 L1440,120 L0,120 Z" fill="#ffffff"/>
            </svg>
        </div>
    </header>
    <main class="content">
        <?php include __DIR__ . '/ma_darul_fithrah/public/about.php'; ?>
        <?php include __DIR__ . '/ma_darul_fithrah/public/program.php'; ?>
        <?php include __DIR__ . '/ma_darul_fithrah/public/facilities.php'; ?>
    </main>
    <footer class="site-footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col footer-about">
                    <div class="footer-brand">
                        <span class="footer-brand-icon"><img class="footer-brand-logo" src="/ma_darul_fithrah/ma_darul_fithrah/assets/img/logo.png" alt="Logo MA Darul Fithrah"></span>
                        <span class="footer-brand-text">
                            <span class="footer-brand-title">MA Darul Fithrah</span>
                            <span class="footer-brand-subtitle">Madrasah Aliyah</span>
                        </span>
                    </div>
                    <p class="footer-desc">Lembaga pendidikan Islam yang berkomitmen untuk membentuk generasi Islami yang cerdas, berakhlak, dan berprestasi.</p>
                    <div class="footer-social">
                        <a href="https://www.facebook.com/share/16mXW69dAw/" target="_blank" rel="noopener noreferrer" class="footer-social-btn" aria-label="Facebook">
                            <img class="footer-social-img" src="/ma_darul_fithrah/ma_darul_fithrah/assets/img/facebook.png" alt="Facebook">
                        </a>
                        <a href="https://www.instagram.com/darulfithrah_official/?hl=id" target="_blank" rel="noopener noreferrer" class="footer-social-btn" aria-label="Instagram">
                            <img class="footer-social-img" src="/ma_darul_fithrah/ma_darul_fithrah/assets/img/instagram.png" alt="Instagram">
                        </a>
                        <a href="https://www.youtube.com/c/DarulFithrahTV" target="_blank" rel="noopener noreferrer" class="footer-social-btn" aria-label="YouTube">
                            <img class="footer-social-img" src="/ma_darul_fithrah/ma_darul_fithrah/assets/img/youtube.png" alt="YouTube">
                        </a>
                    </div>
                </div>
                <div class="footer-col footer-menu">
                    <div class="footer-heading">Menu Cepat</div>
                    <ul class="footer-list">
                        <li><a href="#beranda">Beranda</a></li>
                        <li><a href="#tentang">Tentang Kami</a></li>
                        <li><a href="#program">Program</a></li>
                        <li><a href="#fasilitas">Fasilitas</a></li>
                        <li><a href="/ma_darul_fithrah/ma_darul_fithrah/public/kelulusan.php">Pengumuman Kelulusan</a></li>
                    </ul>
                </div>
                <div class="footer-col footer-contact">
                    <div class="footer-heading">Kontak</div>
                    <ul class="footer-contact-list">
                        <li class="footer-contact-item">
                            <span class="footer-icon">
                                <img class="footer-contact-img" src="/ma_darul_fithrah/ma_darul_fithrah/assets/img/location.png" alt="Lokasi">
                            </span>
                            <span>Kampung Parigi, Desa Ciparay, Kecamatan Ciparay, Kabupaten Bandung, Provinsi Jawa Barat</span>
                        </li>
                        <li class="footer-contact-item">
                            <span class="footer-icon">
                                <img class="footer-contact-img" src="/ma_darul_fithrah/ma_darul_fithrah/assets/img/telephone.png" alt="Telepon">
                            </span>
                            <span>0821-2127-2601</span>
                        </li>
                        <li class="footer-contact-item">
                            <span class="footer-icon">
                                <img class="footer-contact-img" src="/ma_darul_fithrah/ma_darul_fithrah/assets/img/email.png" alt="Email">
                            </span>
                            <span>ponpestahfidzdarulfithrah@gmail.com</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="footer-divider"></div>
            <div class="footer-copy">© 2025 MA Darul Fithrah. All rights reserved.</div>
        </div>
    </footer>
</body>
<script>
(function(){
  if (location.hash && location.hash !== '#beranda') {
    history.replaceState(null, '', '#beranda');
  }
  window.scrollTo(0,0);
})();
(() => {
  const btn = document.querySelector('.mobile-toggle');
  const menu = document.getElementById('mobileMenu');
  const links = menu ? menu.querySelectorAll('a') : [];
  function toggle() {
    if (!menu) return;
    menu.classList.toggle('open');
    const expanded = menu.classList.contains('open');
    if (btn) btn.setAttribute('aria-expanded', expanded ? 'true' : 'false');
    document.body.classList.toggle('no-scroll', menu.classList.contains('open'));
  }
  if (btn && menu) {
    btn.addEventListener('click', toggle);
  }
  links.forEach(a => a.addEventListener('click', () => {
    if (menu.classList.contains('open')) toggle();
  }));
})();
</script>
</html>
