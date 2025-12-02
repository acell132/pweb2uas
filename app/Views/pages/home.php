<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <title>Construction Zone</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap');

    * {
      margin: 0; padding: 0; box-sizing: border-box;
    }
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #2D2F36;
      color: #F6F6F6;
      line-height: 1.5;
    }
    a {
      text-decoration: none;
      color: inherit;
    }

    nav {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 15px;
      padding: 15px 25px;
      background: #3B4A55;
      
    }

    nav img.logo {
      flex-grow: 0;
    }

    .search-box {
      position: relative;
      width: 30%;
      max-width: 30%;
      flex-grow: 1;
    }

    .search-box input {
      width: 100%;
      background: #3B3D44;
      border: none;
      border-radius: 5px;
      padding: 10px 15px 10px 40px;   
      color: #EEE;
      font-size: 14px;
    }

    .search-box i {
      position: absolute;
      left: 12px;                     
      top: 50%;
      transform: translateY(-50%);
      color: #BBB;
      font-size: 15px;
      pointer-events: none;          
    }

    nav .buttons {
      display: flex;
      gap: 10px;
      flex-grow: 0; 
    }

    nav .buttons button {
      background: #F7C600;
      border: none;
      color: #2D2F36;
      font-weight: 600;
      border-radius: 5px;
      cursor: pointer;
      padding: 10px 20px;
      transition: background-color 0.3s;
    }

    nav .buttons button.signup {
      background: transparent;
      color: #F7C600;
      border: 1.5px solid #F7C600;
    }

    nav .buttons button:hover {
      opacity: 0.85;
    }

    header.hero {
      position: relative;
      width: 100%;
      height: 580px;  
      overflow: hidden;
      background: #2D2F36;
    }

    header.hero img.logo {
      position: absolute;
      left: 0;
      top: -40px; 
      width: auto;     
      height: 620px;
      z-index: 1;
      user-select: none;
      pointer-events: none;
    }

    header.hero .text-content {
      position: absolute;
      top: 80px;         
      left: 360px;       
      z-index: 3;
      max-width: 700px;
    }

    header.hero h1 {
      font-weight: 900;
      font-size: 62px;
      line-height: 1.2;
      color: #EEE;
      margin-bottom: 45px;
    }

    header.hero h1 .highlight {
      color: #F7C600;
    }

    header.hero p {
      color: #AAA;
      font-size: 16px;
      max-width: 600px;
      margin-bottom: 35px;
      text-align: center;
      margin-left: 100px;
    }

    header.hero .btn-primary {
      margin-left: 210px;
    }

    header.hero .btn-primary,
    header.hero .btn-secondary {
      display: inline-flex;
      min-width: 180px;
      justify-content: center;
      gap: 8px;
      text-align: center;
      cursor: pointer;
      font-weight: 700;
      font-size: 14px;
      padding: 18px 25px;
      border-radius: 6px;
      margin-right: 15px;
    }

    header.hero .btn-primary {
      background: #F7C600;
      color: #2D2F36;
      border: none;
    }

    header.hero .btn-secondary {
      background: transparent;
      border: 2px solid #F7C600;
      color: #F7C600;
    }

    section.cara-pesan {
      text-align: center;
      padding: 70px 0px;
      background-color: #3B4A55;
    }
    section.cara-pesan h2 {
      font-weight: 700;
      font-size: 24px;
      margin-bottom: 10px;
      color: #EEE;
    }
    section.cara-pesan p {
      font-weight: 400;
      font-size: 14px;
      color: #AAA;
      margin-bottom: 40px;
    }
    .steps {
      display: flex;
      justify-content: center;
      gap: 25px;
      flex-wrap: wrap;
    }
    .step {
      background: #3B3D44;
      padding: 20px;
      border-radius: 8px;
      max-width: 190px;
      text-align: center;
      box-shadow: 0 0 12px rgba(0, 0, 0, 0.3);
    }
    .step .icon {
      background: #F7C600;
      width: 45px;
      height: 45px;
      color: #2D2F36;
      border-radius: 50%;
      font-weight: 800;
      font-size: 20px;
      line-height: 45px;
      margin: 0 auto 15px;
    }
    .step h3 {
      font-weight: 700;
      font-size: 16px;
      color: #EEE;
      margin-bottom: 8px;
    }
    .step p {
      font-weight: 400;
      font-size: 13px;
      color: #CCC;
    }

    section.jenis-bangunan {
      padding: 70px 0px;
      text-align: center;
    }
    section.jenis-bangunan h2 {
      font-weight: 700;
      font-size: 22px;
      margin-bottom: 25px;
      color: #EEE;
    }
    .building-types {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 20px;
      justify-items: center;
      width: 80%;
      margin: 70px auto; 
    }
    .building {
      background: #3B4A55;
      border-radius: 10px;
      padding: 25px 10px;
      width: 230px;
      display: flex;
      flex-direction: column;
      align-items: center;
      cursor: default;
      box-shadow: 0 0 10px rgba(0,0,0,0.3);
      transition: background-color 0.3s;
    }
    
    .building .icon {
      font-size: 28px;
      color: #F7C600;
      margin-bottom: 12px;
    }
    .building span {
      font-weight: 400;
      font-size: 14px;
      color: #EEE;
    }
    @media (max-width: 768px) {
      .building-types {
        grid-template-columns: repeat(2, 1fr);
      }
    }

    @media (max-width: 480px) {
      .building-types {
        grid-template-columns: 1fr;
      }
    }

    section.jenis-bangunan .constractionzone h1 {
      font-weight: 900;
      font-size: 78px;        
      letter-spacing: 2px;    
      color: #F7C600;
    }
    section.jenis-bangunan .constractionzone p {
      font-size: 20px;
      color: #CCCCCC;
      margin-bottom: 30px;
    }
    section.jenis-bangunan .constractionzone .btn-primary {
      background-color: transparent;
      color: #F7C600;
      border: 2px solid #F7C600;
      padding: 15px 26px;
      border-radius: 6px;
      font-weight: 700;
      cursor: pointer;
      transition: background-color 0.3s;
    }
    
    section.jenis-bangunan .constractionzone i {
      margin-right: 5px;
    }

    footer {
      margin: 50px 0 20px;
      text-align: center;
      font-size: 13px;
      color: #999;
      user-select: none;
    }

    .footer-menu {
      background: #2F3A42;
      padding: 25px 0 15px;
      margin-top: 30px;
      border-radius: 12px;
      text-align: center;
    }

    .footer-links {
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 70px;           
      margin-bottom: 20px;
    }

    .footer-links a {
      color: #FFF;        
      font-size: 14px;
      display: flex;
      align-items: center;
      gap: 6px;
      transition: 0.3s;
    }

    .footer-links .build {
      color: #FFF;        
      font-size: 14px;
      display: flex;
      align-items: center;
      gap: 6px;
      transition: 0.3s;
      padding: 15px 26px;
    }

    .footer-links a i {
      font-size: 16px;
      color: #FFF;        
      transition: 0.3s;
    }

    .footer-links a:hover {
      color: #F7C600;
      border: 2px solid #F7C600;
      border-radius: 6px;
      padding: 15px 26px;
      background-color: #2a2f35ff;
    }

    .footer-links a:hover i {
      color: #F7C600;
    }

    .footer-links a.active {
      color: #F7C600;
      font-weight: 600;
    }

    .footer-links a.active i {
      color: #F7C600;
    }

    .footer-build-btn {
      margin: 0 auto 25px;
      width: fit-content;
    }

    .footer-build-btn button {
      background: transparent;
      border: 2px solid #F7C600;
      color: #F7C600;
      padding: 8px 20px;
      font-size: 14px;
      border-radius: 6px;
      cursor: pointer;
    }

    .footer-logo {
      margin-bottom: 10px;
    }

    .footer-logo i {
      font-size: 22px;
      color: #F7C600;
    }

    .footer-copy {
      font-size: 12px;
      color: #AAA;
    }
    .user-box {
      background: #F7C600;
      color: #2D2F36;
      padding: 10px 20px;
      border-radius: 6px;
      font-weight: 600;
      display: flex;
      align-items: center;
      gap: 10px;
      cursor: pointer;
      position: relative;
      transition: 0.3s;
    }

    .user-box i {
      font-size: 18px;
    }

    .user-dropdown {
      position: absolute;
      top: 55px;
      right: 0;
      background: #3B4A55;
      width: 180px;
      border-radius: 8px;
      padding: 10px 0;
      box-shadow: 0 0 12px rgba(0,0,0,0.4);
      display: none;
      flex-direction: column;
      z-index: 999;
      animation: fadeIn 0.25s ease;
    }

    .user-dropdown a {
      padding: 12px 18px;
      color: #EEE;
      font-size: 14px;
      display: flex;
      align-items: center;
      gap: 8px;
      transition: 0.25s;
    }

    .user-dropdown a:hover {
      background: #505358;
      color: #F7C600;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(-5px); }
      to { opacity: 1; transform: translateY(0); }
    }

    .user-wrapper:hover .user-dropdown {
      display: flex;
    }
  </style>
</head>
<body>
  <div class="container">
    <nav>
      <img src="<?= base_url('assets/img/logo.svg'); ?>" alt="Logo" class="logo" />
      <div class="search-box">
        <i class="fa-solid fa-magnifying-glass"></i>
        <input type="search" placeholder="Cari produk, jasa, atau peralatan..." />
      </div>

      <div class="buttons">
          <?php if (empty($user['user_id'])) : ?>
              <button onclick="window.location.href='<?= base_url('login'); ?>'">
                  <i class="fa-solid fa-user"></i> Login
              </button>
              <button class="signup" onclick="window.location.href='<?= base_url('register'); ?>'">
                  Register
              </button>

          <?php else : ?>
          <div class="user-wrapper">
            <div class="user-box">
              <i class="fa-solid fa-user-circle"></i>
              <?= esc($user['full_name']); ?>
              <i class="fa-solid fa-caret-down"></i>
            </div>

            <div class="user-dropdown">
                <a href="<?= base_url('my-orders'); ?>">
                  <i class="fa-solid fa-box"></i> Pesanan Saya
                </a>

                <a href="<?= base_url('logout'); ?>">
                  <i class="fa-solid fa-right-from-bracket"></i> Logout
                </a>
            </div>
          </div>
          <?php endif; ?>
      </div>

    </nav>
    <header class="hero">
      <img src="<?= base_url('assets/img/home1.png'); ?>" height="570px" alt="Logo" class="logo" />
      <div class="text-content">
        <h1>Solusi Lengkap <span class="highlight">Konstruksi</span> Anda</h1>
        <p>Kami menyediakan bahan bangunan berkualitas, jasa konstruksi profesional, dan peralatan kerja terlengkap untuk mewujudkan proyek impian Anda dengan standar terbaik.</p>

        <a 
          href="https://wa.me/6288238267981?text=Halo%20saya%20ingin%20konsultasi%20terkait%20konstruksi" 
          target="_blank" 
          class="btn-primary"
        >
          <i class="fa-solid fa-phone"></i> Konsultasi Gratis
        </a>
      </div>
    </header>
    <section class="cara-pesan">
      <h1>Cara Pesan Layanan Kami</h1>
      <p>Proses mudah dalam 4 langkah sederhana</p>
      <div class="steps">
        <div class="step">
          <div class="icon"><i class="fa-solid fa-list-ul"></i></div>
          <h3>Pilih Layanan</h3>
          <p>Pilih layanan yang Anda butuhkan dari katalog lengkap kami</p>
        </div>
        <div class="step">
          <div class="icon"><i class="fa-solid fa-calculator"></i></div>
          <h3>Lihat Harga</h3>
          <p>Dapatkan estimasi harga yang transparan dan kompetitif</p>
        </div>
        <div class="step">
          <div class="icon"><i class="fa-solid fa-comments"></i></div>
          <h3>Konsultasi</h3>
          <p>Diskusi detail proyek dengan tim ahli kami</p>
        </div>
        <div class="step">
          <div class="icon"><i class="fa-solid fa-credit-card-alt"></i></div>
          <h3>Pembayaran</h3>
          <p>Proses pembayaran aman dengan berbagai metode</p>
        </div>
      </div>
    </section>
    <section class="jenis-bangunan">
      <h1>Jenis Bangunan Yang Kami Kerjakan</h1>
      <p>Pengalaman puas dalam berbagai layanan konstruksi</p>
      <div class="building-types">

        <div class="building">
          <div class="icon"><i class="fa-solid fa-house-chimney"></i></div>
          <span>Rumah Tinggal</span>
        </div>

        <div class="building">
          <div class="icon"><i class="fa-solid fa-building"></i></div>
          <span>Perkantoran</span>
        </div>

        <div class="building">
          <div class="icon"><i class="fa-solid fa-school"></i></div>
          <span>Sekolah</span>
        </div>

        <div class="building">
          <div class="icon"><i class="fa-solid fa-city"></i></div>
          <span>Apartement</span>
        </div>

        <div class="building">
          <div class="icon"><i class="fa-solid fa-mosque"></i></div>
          <span>Masjid</span>
        </div>

        <div class="building">
          <div class="icon"><i class="fa-solid fa-industry"></i></div>
          <span>Pabrik</span>
        </div>

        <div class="building">
          <div class="icon"><i class="fa-solid fa-landmark"></i></div>
          <span>Gedung</span>
        </div>

        <div class="building">
          <div class="icon"><i class="fa-solid fa-hotel"></i></div>
          <span>Hotel</span>
        </div>
      </div>
      <div class="constractionzone">
        <h1>CONSTRUCTION ZONE</h1>
        <p>Area Kerja Profesional • Keselamatan Utama</p>
      </div>
    </section>
    <div class="footer-menu">
      <div class="footer-links">
        <a href="<?= base_url('/home'); ?>"><i class="fa-solid fa-house"></i> Home</a>

        <a href="<?= base_url('/build'); ?>" class="build">
          <i class="fa-solid fa-hammer"></i> Build
        </a>

        <a href="<?= base_url('/shop'); ?>"><i class="fa-solid fa-shop"></i> Shop</a>
        <a href="<?= base_url('/contact'); ?>"><i class="fa-solid fa-phone"></i> Contact</a>
      </div>

      <footer>
        <img src="<?= base_url('assets/img/logo.svg'); ?>" alt="Logo" class="logo" />
        <div class="footer-copy">
          © 2024 Bangun Bangsa. All rights reserved.
        </div>
      </footer>
    </div>
  </div>
</body>
</html>
