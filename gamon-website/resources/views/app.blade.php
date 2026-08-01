<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Makaroni Gamon - Bikin Nangis, Anti Redflag. Nikmati cemilan makaroni pedas dengan berbagai varian rasa yang nagih dan renyah.">
<link rel="icon" type="image/png" href="{{ asset('gamon_logo.png') }}">
<title>Makaroni Gamon | Bikin Nangis, Anti Redflag</title>
<!-- Google Fonts for Modern Typography -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;700;900&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
@vite(['resources/css/app.css', 'resources/js/script.js'])
</head>
<body>

<!-- HEADER -->
<header class="site-header" id="navbar">
  <div class="header-container">
    <div class="logo">
      <img src="{{ asset('gamon_logo.png') }}" alt="Makaroni Gamon Logo" class="logo-img">
    </div>
    <nav class="navbar-menu">
      <input type="checkbox" id="menu-toggle" class="menu-toggle">
      <label for="menu-toggle" class="hamburger" aria-label="Toggle navigation menu">
        <span></span>
        <span></span>
        <span></span>
      </label>
      <div class="nav-links">
        <a href="#menu" class="nav-link">Varian Rasa</a>
        <a href="#benefits" class="nav-link">Kenapa Gamon?</a>
        <a href="#testimoni" class="nav-link">Testimoni</a>
        <a href="#lokasi" class="nav-link">Lokasi</a>
      </div>
    </nav>
    <a href="#menu" class="btn-primary nav-cta">Pesan Sekarang</a>
  </div>
</header>

<main>
  <!-- HERO -->
    <section class="hero scroll-animate fade-up">
        <div class="hero-bg"></div>
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <div class="hero-text">
                <span>Paling Pedas, Paling Renyah!</span>
                <h1>Bikin Meweq,<br>Anti <span class="highlight">Redfleq.</span></h1>
                <p>Cemilan makaroni pedas nomor satu yang bakal bikin kamu gagal move on dari rasanya. Berani coba level pedas tertingginya?</p>
                <div class="hero-actions">
                    <a href="#menu" class="btn-primary">Pilih Rasa Favoritmu</a>
                    <a href="#testimoni" class="btn-secondary">Lihat Kata Mereka</a>
                </div>
            </div>
            <div class="hero-visual">
                <div class="floating-snack pack-1">
                  <img src="{{ asset('makaroni_pipa.jpg') }}" alt="Makaroni Pedas Gila" class="snack-img">
                  <div class="caption">Makaroni Pipa</div>
                </div>
                <div class="floating-snack pack-2">
                  <img src="{{ asset('makaroni_spiral.jpg') }}" alt="Makaroni Pedas Gila" class="snack-img">
                  <div class="caption">Makaroni Spiral</div>
                </div>
                <div class="floating-snack pack-3">
                  <img src="{{ asset('mie_gulung.jpg') }}" alt="Makaroni Pedas Gila" class="snack-img">
                  <div class="caption">Mie Gulung</div>
                </div>
                <div class="floating-snack pack-4">
                  <img src="{{ asset('keripik_kaca.jpg') }}" alt="Makaroni Pedas Gila" class="snack-img">
                  <div class="caption">Keripik Kaca</div>
                </div>
                <div class="floating-snack pack-5">
                  <img src="{{ asset('jengkol.jpg') }}" alt="Makaroni Pedas Gila" class="snack-img">
                  <div class="caption">Jengkol</div>
                </div>
                <div class="floating-snack pack-6">
                  <img src="{{ asset('usus.jpg') }}" alt="Makaroni Pedas Gila" class="snack-img">
                  <div class="caption">Usus</div>
                </div>
                <div class="floating-snack pack-7">
                  <img src="{{ asset('siomay_kering.jpg') }}" alt="Makaroni Pedas Gila" class="snack-img">
                  <div class="caption">Usus Kering</div>
                </div>
                <div class="floating-snack pack-8">
                  <img src="{{ asset('sosis.jpg') }}" alt="Makaroni Pedas Gila" class="snack-img">
                  <div class="caption">Sosis</div>
                </div>
                <div class="floating-snack pack-9">
                  <img src="{{ asset('krupuk_seblak.jpg') }}" alt="Makaroni Pedas Gila" class="snack-img">
                  <div class="caption">Kerupuk Seblak</div>
                </div>
                <div class="floating-snack pack-10">
                  <img src="{{ asset('otak_otak.jpg') }}" alt="Makaroni Pedas Gila" class="snack-img">
                  <div class="caption">Otak otak</div>
                </div>
            </div>
        </div>
    </section>

  <!-- BENEFITS -->
  <section class="benefits scroll-animate fade-up" id="benefits">
    <div class="section-header">
      <h2>Bukan Makaroni Biasa</h2>
      <p>Kami memastikan setiap gigitan Makaroni Gamon memberikan sensasi yang tak terlupakan.</p>
    </div>
    <div class="benefit-cards">
      <div class="benefit-card">
        <div class="benefit-icon">🌶️</div>
        <h3>Pedasnya Nendang</h3>
        <p>Terbuat dari 100% cabai asli pilihan tanpa bahan pengawet. Pedasnya bikin nagih!</p>
      </div>
      <div class="benefit-card">
        <div class="benefit-icon">💥</div>
        <h3>Ekstra Renyah</h3>
        <p>Digoreng dengan suhu yang pas menghasilkan tekstur super krispi yang tahan lama.</p>
      </div>
      <div class="benefit-card">
        <div class="benefit-icon">🧀</div>
        <h3>Bumbu Melimpah</h3>
        <p>Gak pelit bumbu! Setiap makaroni terbalut sempurna oleh bumbu rahasia kami.</p>
      </div>
    </div>
  </section>

  <!-- MENU / VARIAN RASA -->
  <section class="menu-section scroll-animate fade-up" id="menu">
    <div class="section-header">
      <h2>Varian Rasa <span class="highlight">Gamon</span></h2>
      <p>Pilih rasa favoritmu, dari yang gurih santai sampai pedas brutal.</p>
    </div>
    <div class="menu-grid">
      <!-- Item 1 -->
      <div class="menu-item">
        <div class="menu-img-wrap">
          <div class="menu-img pedas-gila">🔥</div>
          <span class="menu-tag">Best Seller</span>
        </div>
        <div class="menu-info">
          <h3>Original Gamon</h3>
          <p>Cocok buat kamu yang suka tantangan. Pedasnya nampol, bikin keringetan!</p>
          <a href="#" class="btn-outline">Order Sekarang</a>
        </div>
      </div>
      <!-- Item 2 -->
      <div class="menu-item">
        <div class="menu-img-wrap">
          <div class="menu-img pedas-santuy">🌶️</div>
        </div>
        <div class="menu-info">
          <h3>BBQ</h3>
          <p>Pedasnya pas, gurihnya mantap. Cocok untuk nemenin nonton drakor.</p>
          <a href="#" class="btn-outline">Order Sekarang</a>
        </div>
      </div>
      <!-- Item 3 -->
      <div class="menu-item">
        <div class="menu-img-wrap">
          <div class="menu-img keju-asin">🧀</div>
          <span class="menu-tag">Kids Friendly</span>
        </div>
        <div class="menu-info">
          <h3>Keju</h3>
          <p>Perpaduan keju premium dan rasa asin yang bikin gak mau berhenti ngunyah.</p>
          <a href="#" class="btn-outline">Order Sekarang</a>
        </div>
      </div>
      <!-- Item 4 -->
      <div class="menu-item">
        <div class="menu-img-wrap">
          <div class="menu-img balado">🍅</div>
        </div>
        <div class="menu-info">
          <h3>Balado</h3>
          <p>Rasa manis, pedas, dan aroma daun jeruk yang wangi banget.</p>
          <a href="#" class="btn-outline">Order Sekarang</a>
        </div>
      </div>
      <div class="menu-item">
        <div class="menu-img-wrap">
          <div class="menu-img jagung-manis">🍅</div>
        </div>
        <div class="menu-info">
          <h3>Jagung Manis</h3>
          <p>Rasa jagung manis yang enak banget.</p>
          <a href="#" class="btn-outline">Order Sekarang</a>
        </div>
      </div>
      <div class="menu-item">
        <div class="menu-img-wrap">
          <div class="menu-img rumput-laut">🍅</div>
        </div>
        <div class="menu-info">
          <h3>Rumput Laut</h3>
          <p>Rasa rumput laut yang enak banget.</p>
          <a href="#" class="btn-outline">Order Sekarang</a>
        </div>
      </div>
    </div>
  </section>

  <!-- TESTIMONI -->
  <section class="testimoni-section scroll-animate fade-up" id="testimoni">
    <div class="section-header">
      <h2>Kata Mereka yang Udah <span class="highlight">Gamon</span></h2>
    </div>
    <div class="testi-slider">
      <div class="testi-track" id="testiTrack">
        <div class="testi-card">
          <div class="quote-mark">"</div>
          <p>Gila sih, Pedas Gila beneran bikin nangis tapi tangan gak bisa berhenti ngambil. Bumbunya tebel banget dan renyahnya dapet!</p>
          <div class="testi-user">
            <div class="avatar">👨</div>
            <div class="user-info">
              <strong>Andika Pratama</strong>
              <span>Pecinta Pedas</span>
            </div>
          </div>
        </div>
        <div class="testi-card">
          <div class="quote-mark">"</div>
          <p>Aku pesen yang Keju Asin buat anak-anak, eh malah bapaknya ikutan ngabisin. Enak banget kejunya premium bukan kaleng-kaleng.</p>
          <div class="testi-user">
            <div class="avatar">👩</div>
            <div class="user-info">
              <strong>Siti Aminah</strong>
              <span>Ibu Rumah Tangga</span>
            </div>
          </div>
        </div>
        <div class="testi-card">
          <div class="quote-mark">"</div>
          <p>Definisi anti redflag! Pengirimannya aman, packagingnya keren, dan isinya banyak banget. Bakal repeat order sih ini fix.</p>
          <div class="testi-user">
            <div class="avatar">🧑</div>
            <div class="user-info">
              <strong>Budi Santoso</strong>
              <span>Mahasiswa</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="testi-dots" id="testiDots"></div>
  </section>

  <!-- FAQ -->
  <section class="faq-section scroll-animate fade-up">
    <div class="faq-container">
      <div class="faq-text">
        <h2>Pertanyaan yang Sering Diajukan</h2>
        <div class="accordion">
          <div class="accordion-item">
            <div class="accordion-header">Berapa lama Makaroni Gamon tahan?</div>
            <div class="accordion-content">Makaroni kami tahan hingga 2 bulan dalam kemasan tertutup rapat berkat proses penggorengan yang optimal.</div>
          </div>
          <div class="accordion-item">
            <div class="accordion-header">Apakah bisa dikirim ke luar kota?</div>
            <div class="accordion-content">Tentu saja! Kami melayani pengiriman ke seluruh Indonesia dengan packing aman (bubble wrap & kardus).</div>
          </div>
          <div class="accordion-item">
            <div class="accordion-header">Level pedasnya sampai berapa?</div>
            <div class="accordion-content">Kami memiliki 5 level pedas. Level 1 untuk pemula, hingga Level 5 (Pedas Gila) untuk kamu yang berani tantangan.</div>
          </div>
        </div>
      </div>
      <div class="faq-visual">
        <div class="faq-badge">100% Halal</div>
      </div>
    </div>
  </section>

  <!-- FIND US -->
  <section class="findus-section scroll-animate fade-up" id="lokasi">
    <div class="section-header">
      <h2>Temukan Kami di Kotamu!</h2>
      <p>Kunjungi outlet terdekat atau pesan online via aplikasi favoritmu.</p>
    </div>

    <div class="outlet-grid">
      <div class="outlet-card">
        <div class="outlet-city">📍 Cabang Solo</div>
        <h4>Gamon Supomo</h4>
        <p>Jl. Prof. Dr. Supomo No. 49, Solo<br>Buka: 10.00 - 22.00 WIB</p>
        <a href="#" class="btn-location">Lihat Peta</a>
      </div>
      <div class="outlet-card">
        <div class="outlet-city">📍 Cabang Solo</div>
        <h4>Gamon Solo Square</h4>
        <p>Solo Square Mall Lt.3 (Foodcourt)<br>Buka: 10.00 - 21.00 WIB</p>
        <a href="#" class="btn-location">Lihat Peta</a>
      </div>
      <div class="outlet-card">
        <div class="outlet-city">📍 Cabang Jogja</div>
        <h4>Gamon Seturan</h4>
        <p>Jl. Selokan Mataram No. 1, Jogja<br>Buka: 11.00 - 23.00 WIB</p>
        <a href="#" class="btn-location">Lihat Peta</a>
      </div>
      <div class="outlet-card">
        <div class="outlet-city">📍 Cabang Jogja</div>
        <h4>Gamon Malioboro</h4>
        <p>Plaza Malioboro Lt.3<br>Buka: 10.00 - 22.00 WIB</p>
        <a href="#" class="btn-location">Lihat Peta</a>
      </div>
    </div>
  </section>
</main>

<!-- FOOTER -->
<footer class="site-footer scroll-animate fade-up">
  <div class="footer-top">
    <div class="footer-brand">
      <h2>MAKARONI GAMON</h2>
      <p>Bikin Nangis, Anti Redflag.</p>
    </div>
    <div class="footer-links">
      <h3>Menu Cepat</h3>
      <a href="#menu">Varian Rasa</a>
      <a href="#benefits">Keunggulan</a>
      <a href="#testimoni">Review Pelanggan</a>
    </div>
    <div class="footer-contact">
      <h3>Hubungi Kami</h3>
      <p>📞 0812-3456-7890</p>
      <p>✉️ halo@makaronigamon.com</p>
      <div class="social-icons">
        <a href="#" title="Instagram">IG</a>
        <a href="#" title="TikTok">TK</a>
        <a href="#" title="WhatsApp">WA</a>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <p>&copy; 2026 Makaroni Gamon. All rights reserved.</p>
  </div>
</footer>

<script src="script.js"></script>
</body>
</html>
