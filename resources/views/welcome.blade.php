<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Genggong Bali Batuan — Warisan Suara Tradisi Bali</title>
    <meta name="description" content="Genggong Bali Batuan — menjaga harmoni tradisi, melestarikan suara leluhur. Mengenal sejarah, seniman, dan keindahan alat musik tradisional Genggong Bali dari Desa Batuan.">
    <meta name="keywords" content="Genggong Bali, Batuan, Musik Tradisional Bali, Budaya Bali, Kesenian Bali">
    <meta property="og:title" content="Genggong Bali Batuan">
    <meta property="og:description" content="Warisan Suara Tradisi Bali — dokumentasi budaya modern Genggong Bali Batuan.">
    <meta property="og:type" content="website">
    <link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><rect width='100' height='100' rx='18' fill='%23C1272D'/><text x='50%' y='58%' dominant-baseline='middle' text-anchor='middle' font-size='48' fill='white' font-family='serif'>G</text></svg>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    @vite(['resources/css/genggong.css', 'resources/js/genggong.js'])
</head>
<body>

<div id="loader" aria-hidden="true">
    <div class="loader-logo">
        <span style="font-family:'Cinzel',serif; font-weight:700; color:#F5D48A; font-size:28px; letter-spacing:0.06em">G</span>
    </div>
    <div style="margin-top:16px; text-align:center">
        <div style="font-family:'Cinzel',serif; letter-spacing:0.18em; font-size:11px; color:#D4A84B">GENGGONG BALI BATUAN</div>
        <div style="font-size:12px; color:rgba(255,247,232,0.6); margin-top:4px; letter-spacing:0.08em">Memuat harmoni tradisi...</div>
    </div>
    <div class="loader-bar"><div class="loader-progress"></div></div>
</div>

<nav class="navbar" id="navbar">
    <div class="nav-container">
        <a href="#beranda" class="logo" aria-label="Genggong Bali Batuan Beranda">
            <div class="logo-mark">G</div>
            <div class="logo-text">
                <strong>GENGGONG BALI BATUAN</strong>
                <span>WARISAN SUARA TRADISI</span>
            </div>
        </a>
        <ul class="nav-links" role="navigation">
            <li><a href="#beranda">Beranda</a></li>
            <li><a href="#tentang">Genggong</a></li>
            <li><a href="#sejarah">Sejarah</a></li>
            <li><a href="#seniman">Seniman</a></li>
            <li><a href="#galeri">Galeri</a></li>
            <li><a href="#informasi">Informasi</a></li>
            <li><a href="#kontak">Kontak</a></li>
        </ul>
        <a href="#kontak" class="nav-cta">Hubungi Kami</a>
        <button class="hamburger" id="hamburger" aria-label="Buka menu" aria-expanded="false">
            <span></span><span></span><span></span>
        </button>
    </div>
</nav>

<div class="mobile-menu" id="mobileMenu" aria-hidden="true">
    <a href="#beranda" style="transition-delay:0.05s">Beranda</a>
    <a href="#tentang" style="transition-delay:0.10s">Genggong</a>
    <a href="#sejarah" style="transition-delay:0.15s">Sejarah</a>
    <a href="#tokoh" style="transition-delay:0.18s">Tokoh</a>
    <a href="#seniman" style="transition-delay:0.22s">Seniman</a>
    <a href="#galeri" style="transition-delay:0.26s">Galeri</a>
    <a href="#informasi" style="transition-delay:0.30s">Informasi</a>
    <a href="#kontak" style="transition-delay:0.34s">Kontak</a>
    <div style="margin-top:12px">
        <a href="#kontak" style="font-size:12px; letter-spacing:0.14em; background:linear-gradient(135deg,#C1272D,#7A0F14); padding:12px 28px; border-radius:999px; border:1px solid rgba(212,168,75,0.2)">Hubungi Kami</a>
    </div>
</div>

<section class="hero" id="beranda">
    <div class="hero-video-wrap" aria-hidden="true">
        <video id="heroVideo" autoplay muted loop playsinline preload="metadata"
               poster="https://bulelengkab.go.id/uploads/konten/81_genggong-kesenian-tradisional-langka-buleleng-pukau-penonton-bdf-2024.jpg">
            <source src="{{ asset('videos/genggong-batuan.mp4') }}" type="video/mp4">
        </video>
    </div>
    <div class="hero-overlay"></div>
    <button type="button" class="hero-mute-btn" id="heroMuteBtn" aria-label="Matikan/Suara video">
        <i class="fa-solid fa-volume-xmark" id="heroMuteIcon"></i>
        <span id="heroMuteText">Suara Mati</span>
    </button>
    <div class="hero-content">
        <div>
            <div class="hero-badge"><i></i> Warisan Budaya Tak Benda • Desa Batuan, Gianyar</div>
            <h1>Genggong Bali <em>Batuan</em></h1>
            <p class="hero-desc">Menjaga harmoni tradisi, melestarikan suara leluhur, dan memperkenalkan keindahan Genggong Bali kepada generasi masa kini.</p>
            <div class="hero-actions">
                <a href="#sejarah" class="btn-primary"><i class="fa-solid fa-compass"></i> Jelajahi Sejarah</a>
                <a href="#tentang" class="btn-ghost"><i class="fa-solid fa-music"></i> Kenali Genggong</a>
            </div>
            <div class="hero-social-row">
                <div style="display:flex; align-items:center; gap:10px">
                    <div style="display:flex; margin-left:6px">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=100&auto=format&fit=crop" style="width:34px;height:34px;border-radius:50%;object-fit:cover;border:2px solid #070A0C; margin-left:-6px" alt="">
                        <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?q=80&w=100&auto=format&fit=crop" style="width:34px;height:34px;border-radius:50%;object-fit:cover;border:2px solid #070A0C; margin-left:-6px" alt="">
                        <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?q=80&w=100&auto=format&fit=crop" style="width:34px;height:34px;border-radius:50%;object-fit:cover;border:2px solid #070A0C; margin-left:-6px" alt="">
                    </div>
                    <div style="font-size:12px; color:rgba(255,247,232,0.7); line-height:1.3"><strong style="color:var(--cream); font-weight:600">50+ Seniman</strong><br>aktif melestarikan</div>
                </div>
                <div class="divider-v"></div>
                <div style="font-size:12px; color:rgba(255,247,232,0.6)"><i class="fa-solid fa-star" style="color:var(--gold)"></i> Dipercaya wisatawan & peneliti budaya sejak 1980-an</div>
            </div>
        </div>
        <div class="hero-visual">
            <div class="hero-card">
                <img src="https://cdn-jpr.jawapos.com/images/22/baliexpress/2017/08/genggong-batuan-tampilkan-materi-gong-kebyar_m_4860.jpeg" alt="Pertunjukan Genggong Batuan - tampilkan materi Gong Kebyar" loading="eager">
                <div class="hero-card-body">
                    <div>
                        <h4>Pertunjukan Genggong</h4>
                        <p><i class="fa-solid fa-location-dot" style="color:var(--red)"></i> Balai Banjar Batuan • Gianyar, Bali</p>
                    </div>
                    <span style="width:40px;height:40px;border-radius:50%;background:var(--gold);display:grid;place-items:center;color:var(--bg-900)"><i class="fa-solid fa-play" style="margin-left:2px"></i></span>
                </div>
            </div>
            <div class="hero-float top">
                <span style="width:42px;height:42px;border-radius:10px;background:linear-gradient(135deg,#C1272D,#7A0F14);display:grid;place-items:center;color:white"><i class="fa-solid fa-waveform-lines"></i></span>
                <div><div style="font-size:11px; letter-spacing:0.12em; text-transform:uppercase; color:var(--gold); font-weight:600">Suara Getar Unik</div><div style="font-size:12px; color:var(--cream)">Resonansi rongga mulut</div></div>
            </div>
            <div class="hero-float bottom">
                <span style="width:42px;height:42px;border-radius:10px;background:rgba(212,168,75,0.18);border:1px solid rgba(212,168,75,0.25);display:grid;place-items:center;color:var(--gold-light)"><i class="fa-solid fa-leaf"></i></span>
                <div><div style="font-size:11px; letter-spacing:0.12em; text-transform:uppercase; color:var(--gold); font-weight:600">Bahan Alami</div><div style="font-size:12px; color:var(--cream)">Bambu & pelepah aren</div></div>
            </div>
        </div>
    </div>
    <div class="scroll-indicator" aria-hidden="true">
        <div class="scroll-mouse"><div class="scroll-dot"></div></div>
        <span>Scroll</span>
    </div>
</section>

<section class="section section-alt" id="tentang">
    <div class="container">
        <div class="section-head reveal">
            <div class="kicker">Bab Pertama — Pertemuan</div>
            <h2>Bisikan Bambu yang Hidup dari Napas</h2>
            <p>Sebelum menjadi pertunjukan, Genggong adalah bisikan. Instrumen mungil dari bambu dan baja yang hanya bernyanyi ketika napas, rongga mulut, dan rasa menyatu — bukan sekadar alat musik, melainkan jiwa yang bergetar untuk <em>dirasakan</em>, bukan hanya didengar.</p>
        </div>
        <div class="about-grid">
            <div class="about-media reveal">
                <img src="https://upload.wikimedia.org/wikipedia/commons/0/0e/Genggong_2.jpg" alt="Genggong Bambu — instrumen tradisional Bali dari pelepah aren (pugpug), tampak detail lidah getar" loading="lazy">
                <div class="media-caption">
                    <div class="label">
                        <strong>Genggong Bambu</strong><br><span>Panjang 18–22 cm • Lidah baja • Pelepah aren</span>
                    </div>
                    <span style="width:44px;height:44px;border-radius:50%;background:rgba(212,168,75,0.95);display:grid;place-items:center;color:var(--bg-900)"><i class="fa-solid fa-magnifying-glass"></i></span>
                </div>
            </div>
            <div class="reveal reveal-delay-1">
                <h3 style="font-size:24px; margin:0 0 12px">Getaran yang Hidup dari Napas & Rasa</h3>
                <p style="color:rgba(255,247,232,0.68); font-weight:300; line-height:1.8">Tidak seperti gamelan yang megah, Genggong bersifat intim dan meditatif. Pemain menempelkan instrumen pada bibir, menarik dan mengembuskan napas sambil menggetarkan lidah — menciptakan drone hipnotik yang menyatu dengan alam.</p>
                <div class="info-cards">
                    <div class="info-card">
                        <div class="icon"><i class="fa-solid fa-landmark"></i></div>
                        <h4>Asal Tradisi</h4>
                        <p>Berkembang di desa-desa agraris Bali & Lombok sebagai musik pergaulan dan ritual.</p>
                    </div>
                    <div class="info-card">
                        <div class="icon"><i class="fa-solid fa-tree"></i></div>
                        <h4>Bahan Pembuatan</h4>
                        <p>Bambu pilihan, kayu aren, lidah dari baja atau bambu tipis yang dibentuk presisi.</p>
                    </div>
                    <div class="info-card">
                        <div class="icon"><i class="fa-solid fa-hand"></i></div>
                        <h4>Cara Memainkan</h4>
                        <p>Ditempelkan di mulut, digetarkan dengan jari sambil mengatur rongga mulut & napas.</p>
                    </div>
                    <div class="info-card">
                        <div class="icon"><i class="fa-solid fa-heart"></i></div>
                        <h4>Nilai Budaya</h4>
                        <p>Simbol keharmonisan manusia-alam, media edukasi rasa dan kebersamaan.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section" id="sejarah">
    <div class="container">
        <div class="section-head reveal">
            <div class="kicker">Bab Kedua — Jejak Waktu</div>
            <h2>Dari Petak Sawah Menuju Panggung Dunia</h2>
            <p>Perjalanannya tak tertulis di atas kertas, melainkan di lumpur sawah, di balai banjar yang temaram, dan di ingatan para tetua. Dari hiburan petani yang melepas lelah, perlahan ia tumbuh menjadi kebanggaan panggung kebudayaan Bali.</p>
        </div>
        <div class="timeline" id="timeline">
            <div class="timeline-item reveal">
                <div class="timeline-year">Masa Awal</div>
                <div class="timeline-card">
                    <span class="timeline-dot"></span>
                    <h3>Asal-Usul Genggong</h3>
                    <p>Genggong diyakini berakar dari tradisi musik mulut (jew&rsquo;s harp) yang tersebar di Asia Tenggara. Di Bali, ia tumbuh bersama kehidupan agraris — dimainkan petani di waktu istirahat sebagai hiburan sederhana.</p>
                    <span class="timeline-tag"><i class="fa-solid fa-book-open"></i> Placeholder — menunggu verifikasi sumber lisan</span>
                </div>
            </div>
            <div class="timeline-item reveal">
                <div class="timeline-year">Abad 19–20</div>
                <div class="timeline-card">
                    <span class="timeline-dot"></span>
                    <h3>Perkembangan di Bali</h3>
                    <p>Memasuki panggung seni desa, Genggong mulai diiringi suling, kendang kecil, dan ceng-ceng. Grup mulai terbentuk di Batuan, Sukawati — menjadi identitas banjar.</p>
                    <span class="timeline-tag">Edukasi — struktur mudah diedit</span>
                </div>
            </div>
            <div class="timeline-item reveal">
                <div class="timeline-year">1970 — 1990</div>
                <div class="timeline-card">
                    <span class="timeline-dot"></span>
                    <h3>Perkembangan di Batuan</h3>
                    <p>Desa Batuan yang dikenal sebagai pusat seni lukis dan tari mengembangkan Genggong sebagai atraksi budaya. Sanggar dan sekaa (kelompok) mulai mendokumentasikan repertoar.</p>
                    <span class="timeline-tag">Placeholder komunitas</span>
                </div>
            </div>
            <div class="timeline-item reveal">
                <div class="timeline-year">1990 — 2010</div>
                <div class="timeline-card">
                    <span class="timeline-dot"></span>
                    <h3>Masa Kejayaan</h3>
                    <p>Genggong tampil di festival budaya nasional, menyambut wisatawan, dan masuk kurikulum sanggar. Kolaborasi dengan gamelan kontemporer memperluas audiens.</p>
                    <span class="timeline-tag">Prestasi & panggung</span>
                </div>
            </div>
            <div class="timeline-item reveal">
                <div class="timeline-year">Kini</div>
                <div class="timeline-card">
                    <span class="timeline-dot"></span>
                    <h3>Pelestarian Modern</h3>
                    <p>Generasi muda Batuan menghidupkan kembali Genggong melalui media sosial, workshop, dan pertunjukan interaktif untuk wisatawan — menjaga tradisi tetap relevan tanpa kehilangan akar.</p>
                    <span class="timeline-tag"><i class="fa-solid fa-leaf"></i> Tradisi hidup</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-alt" id="tokoh">
    <div class="container">
        <div class="section-head reveal">
            <div class="kicker">Bab Ketiga — Asal Muasal</div>
            <h2>Lahir Tanpa Nama, Hidup oleh Kebersamaan</h2>
            <p>Tak ada satu nama yang mengklaim sebagai pencipta. Genggong lahir dari pelukan komunal — tangan petani, bisik tetua, dan tawa anak desa yang mewariskannya tanpa pernah menuliskannya. Ia milik semua, dijaga oleh semua.</p>
        </div>
        <div class="tokoh-grid">
            <div class="tokoh-card reveal">
                <div class="tokoh-img">
                    <img src="{{ asset('images/tokoh/anonim-kolektif.jpg') }}" alt="Anonim Kolektif — petani di sawah terasering Bali, akar tradisi Genggong" loading="lazy">
                    <span class="tokoh-badge">Tradisi Lisan</span>
                </div>
                <div class="tokoh-body">
                    <h4>Anonim Kolektif</h4>
                    <div class="tokoh-role">Petani & Seniman Desa — Masa Awal</div>
                    <p>Genggong lahir dari kreativitas komunal — bukan individu. Pengetahuan diwariskan dari mulut ke mulut tanpa dokumentasi tertulis.</p>
                </div>
            </div>
            <div class="tokoh-card reveal reveal-delay-1">
                <div class="tokoh-img">
                    <img src="{{ asset('images/tokoh/tetua-batuan.jpg') }}" alt="Para Tetua Batuan — tetua ber-udeng memegang Genggong bambu di balai banjar" loading="lazy">
                    <span class="tokoh-badge">Tetua Batuan</span>
                </div>
                <div class="tokoh-body">
                    <h4>Para Tetua Batuan</h4>
                    <div class="tokoh-role">Pengembang Repertoar — 1970-an</div>
                    <p>Figur-figur tetua banjar yang menyusun pola permainan, memperkenalkan Genggong kepada generasi sanggar.</p>
                </div>
            </div>
            <div class="tokoh-card reveal reveal-delay-2">
                <div class="tokoh-img">
                    <img src="{{ asset('images/tokoh/pelestari-modern.jpg') }}" alt="Pelestari Masa Kini — generasi muda sanggar Genggong berlatih bersama" loading="lazy">
                    <span class="tokoh-badge">Pelestari Modern</span>
                </div>
                <div class="tokoh-body">
                    <h4>Pelestari Masa Kini</h4>
                    <div class="tokoh-role">Sanggar & Sekaa — Era Kontemporer</div>
                    <p>Kolektif seniman yang mendokumentasikan, mengajar, dan membawa Genggong ke panggung global dengan tetap hormat pada pakem.</p>
                </div>
            </div>
        </div>
        <div class="verified-note reveal">
            <i class="fa-solid fa-circle-info" style="color:var(--gold)"></i> Informasi sejarah spesifik akan diperbarui setelah verifikasi sumber tertulis dan wawancara tetua adat. Struktur ini dirancang agar mudah diganti tanpa mengubah desain.
        </div>
    </div>
</section>

<section class="section" id="seniman">
    <div class="container">
        <div class="section-head reveal">
            <div class="kicker">Bab Keempat — Sang Penjaga</div>
            <h2>Mereka yang Menjaga Getar Tetap Bernyawa</h2>
            <p>Jika Genggong adalah napas, maka seniman adalah jantungnya. Di tangan merekalah getar itu tak pernah padam — diajarkan, dirawat, dan diwariskan dari telapak tangan ke telapak tangan.</p>
        </div>
        <div class="seniman-grid">
            <div class="artist-card reveal" data-name="I Wayan Sudana" data-role="Pemimpin Sekaa • 20+ Tahun" data-origin="Batuan, Sukawati — Gianyar" data-desc="Beliau memimpin sekaa Genggong Batuan sejak awal 2000-an, aktif mengajarkan teknik napas dan resonansi kepada generasi muda. Telah tampil di Bali Arts Festival dan program pertukaran budaya.">
                <div class="artist-img">
                    <img src="{{ asset('images/seniman/wayan-sudana.jpg') }}" alt="I Wayan Sudana — pemimpin sekaa Genggong Batuan ber-udeng memegang Genggong" loading="lazy">
                    <div class="artist-overlay">
                        <h4>I Wayan Sudana</h4>
                        <div class="meta">Pemimpin Sekaa • Batuan</div>
                    </div>
                </div>
                <div class="artist-body">
                    <p>20+ tahun menjaga repertoar klasik Batuan dengan pendekatan disiplin & kekeluargaan.</p>
                    <button class="btn-small" data-artist>Lihat Profil</button>
                </div>
            </div>
            <div class="artist-card reveal reveal-delay-1" data-name="I Made Artawan" data-role="Pembuat Genggong • Pengrajin Bambu" data-origin="Batuan Kaler" data-desc="Pengrajin yang memilih bambu petung tua, mengeringkan alami, dan membentuk lidah baja dengan presisi. Setiap Genggong diuji nada sebelum diberikan kepada penabuh.">
                <div class="artist-img">
                    <img src="{{ asset('images/seniman/made-artawan.jpg') }}" alt="I Made Artawan — pengrajin Genggong menatah bambu di bengkel" loading="lazy">
                    <div class="artist-overlay">
                        <h4>I Made Artawan</h4>
                        <div class="meta">Pengrajin • Batuan Kaler</div>
                    </div>
                </div>
                <div class="artist-body">
                    <p>Ahli pemilihan bambu & tuning lidah — menjaga kualitas suara tetap hangat & nyaring.</p>
                    <button class="btn-small" data-artist>Lihat Profil</button>
                </div>
            </div>
            <div class="artist-card reveal reveal-delay-2" data-name="Ni Luh Ayu Suartini" data-role="Penabuh Muda • Duta Generasi Z" data-origin="Batuan — Sanggar Yowana" data-desc="Generasi penerus yang membawa Genggong ke TikTok & workshop kampus. Ia menggabungkan teknik tradisional dengan storytelling modern untuk menarik minat remaja.">
                <div class="artist-img">
                    <img src="{{ asset('images/seniman/ayu-suartini.jpg') }}" alt="Ni Luh Ayu Suartini — penabuh muda Genggong generasi Z" loading="lazy">
                    <div class="artist-overlay">
                        <h4>Ni Luh Ayu Suartini</h4>
                        <div class="meta">Penabuh Muda • Sanggar Yowana</div>
                    </div>
                </div>
                <div class="artist-body">
                    <p>Menghidupkan Genggong di media sosial — menjembatani tradisi & bahasa generasi baru.</p>
                    <button class="btn-small" data-artist>Lihat Profil</button>
                </div>
            </div>
            <div class="artist-card reveal" data-name="I Ketut Darmayasa" data-role="Penata Musik • Etnomusikolog Desa" data-origin="Ubud — Kolaborator Batuan" data-desc="Meneliti pola ritme Genggong dan hubungannya dengan gamelan. Menciptakan aransemen baru tanpa menghilangkan karakter drone Genggong.">
                <div class="artist-img">
                    <img src="{{ asset('images/seniman/ketut-darmayasa.jpg') }}" alt="I Ketut Darmayasa — penata musik dan etnomusikolog" loading="lazy">
                    <div class="artist-overlay">
                        <h4>I Ketut Darmayasa</h4>
                        <div class="meta">Penata Musik • Ubud</div>
                    </div>
                </div>
                <div class="artist-body">
                    <p>Peneliti & arranger yang menghubungkan Genggong dengan lanskap gamelan Bali.</p>
                    <button class="btn-small" data-artist>Lihat Profil</button>
                </div>
            </div>
            <div class="artist-card reveal reveal-delay-1" data-name="I Nyoman Tridanarta" data-role="Pelatih Sanggar Anak" data-origin="Batuan — SDN 1 Batuan" data-desc="Mengajar ekstrakurikuler Genggong di sekolah dasar. Metode belajarnya bermain sambil bernapas — anak-anak diajak merasakan getar sebelum menghafal pola.">
                <div class="artist-img">
                    <img src="{{ asset('images/seniman/nyoman-tridanarta.jpg') }}" alt="I Nyoman Tridanarta — pelatih sanggar anak Genggong" loading="lazy">
                    <div class="artist-overlay">
                        <h4>I Nyoman Tridanarta</h4>
                        <div class="meta">Pelatih Anak • Batuan</div>
                    </div>
                </div>
                <div class="artist-body">
                    <p>Membangun regenerasi lewat kelas anak — sabar, bermain, dan penuh tawa.</p>
                    <button class="btn-small" data-artist>Lihat Profil</button>
                </div>
            </div>
            <div class="artist-card reveal reveal-delay-2" data-name="Sanggar Genggong Yowana" data-role="Kolektif • 18 Anggota Aktif" data-origin="Balai Banjar Batuan" data-desc="Kolektif lintas generasi yang rutin latihan tiap Selasa & Jumat. Terbuka untuk wisatawan yang ingin mencoba — dari percobaan 5 menit hingga magang 3 bulan.">
                <div class="artist-img">
                    <img src="{{ asset('images/seniman/sanggar-yowana.jpg') }}" alt="Sanggar Genggong Yowana Batuan — kolektif lintas generasi" loading="lazy">
                    <div class="artist-overlay">
                        <h4>Sanggar Yowana Batuan</h4>
                        <div class="meta">Kolektif • 18 Anggota</div>
                    </div>
                </div>
                <div class="artist-body">
                    <p>Kolektif lintas generasi — ruang belajar, panggung, dan keluarga.</p>
                    <button class="btn-small" data-artist>Lihat Profil</button>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-alt" id="batuan">
    <div class="container">
        <div class="section-head reveal">
            <div class="kicker">Bab Kelima — Rumah Kami</div>
            <h2>Batuan: Di Mana Genggong Menemukan Rumah dan Keluarga</h2>
            <p>Di Desa Batuan, di antara harum dupa dan goresan kanvas para pelukis, Genggong menemukan rumahnya. Bukan sekadar tempat berlatih — melainkan rahim budaya di mana seni lukis, tari, dan musik bernapas dalam satu irama.</p>
        </div>
        <div class="batuan-grid">
            <div class="story-card reveal">
                <h3>Perjalanan Komunitas</h3>
                <p>Berawal dari sekaa kecil di balai banjar, kini Genggong Batuan menjadi etalase budaya yang menyambut wisatawan, peneliti, dan pelajar dari seluruh dunia. Kami tidak sekadar tampil — kami mengundang Anda untuk mencoba, merasakan getar, dan memahami filosofi di baliknya.</p>
                <ul class="story-list">
                    <li><i class="fa-solid fa-location-dot"></i><span><strong>Lokasi:</strong> Desa Batuan, Sukawati, Gianyar — 15 menit dari Ubud, diapit galeri lukis & pura bersejarah.</span></li>
                    <li><i class="fa-solid fa-drum"></i><span><strong>Aktivitas:</strong> Latihan rutin, workshop wisatawan, pementasan odalan, festival & kolaborasi lintas seni.</span></li>
                    <li><i class="fa-solid fa-trophy"></i><span><strong>Prestasi:</strong> Tampil di Bali Arts Festival, penyambutan delegasi budaya, dokumentasi oleh etnolog asing.</span></li>
                    <li><i class="fa-solid fa-hand-holding-heart"></i><span><strong>Kontribusi:</strong> Kelas gratis untuk anak desa, pendampingan UMKM pengrajin Genggong.</span></li>
                </ul>
            </div>
            <div class="reveal reveal-delay-1">
                <div class="stats-grid">
                    <div class="stat"><strong data-count="1982">0</strong><span>Tahun Berdiri*</span></div>
                    <div class="stat"><strong data-count="50" data-suffix="+">0</strong><span>Seniman Aktif</span></div>
                    <div class="stat"><strong data-count="300" data-suffix="+">0</strong><span>Pertunjukan</span></div>
                    <div class="stat"><strong data-count="3" data-suffix="">0</strong><span>Generasi Penerus</span></div>
                </div>
                <p style="font-size:11px; color:rgba(255,247,232,0.4); text-align:center; margin:8px 0 0">* Placeholder — sesuaikan dengan data komunitas</p>
                <div class="map-card">
                    <img src="https://images.unsplash.com/photo-1533105079780-92b9be482077?q=80&w=800&auto=format&fit=crop" alt="Peta Batuan" loading="lazy">
                    <div class="map-pin"><i class="fa-solid fa-location-dot"></i></div>
                    <div style="position:absolute; left:12px; bottom:12px; background:rgba(7,10,12,0.75); backdrop-filter:blur(10px); border:1px solid rgba(255,255,255,0.14); padding:10px 12px; border-radius:12px; display:flex; gap:10px; align-items:center">
                        <span style="width:8px;height:8px;background:#22c55e;border-radius:50%;box-shadow:0 0 10px #22c55e"></span>
                        <span style="font-size:12px; color:var(--cream)"><strong>Balai Banjar Batuan</strong><br><span style="color:rgba(255,247,232,0.6)">Buka latihan: Selasa & Jumat 19.00 WITA</span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section" id="galeri">
    <div class="container">
        <div class="section-head reveal">
            <div class="kicker">Bab Keenam — Album Kenangan</div>
            <h2>Membingkai Getar: Potret yang Menyimpan Cerita</h2>
            <p>Setiap foto adalah jeda dari sebuah cerita panjang. Tataplah — di sanalah tawa latihan, khidmatnya pementasan, dan binar mata anak-anak yang pertama kali merasakan getar di bibir mereka.</p>
        </div>
        <div class="gallery reveal">
            <div class="gallery-item">
                <img src="https://upload.wikimedia.org/wikipedia/commons/0/0b/Pertunjukan_Seni_Genggong.jpg" alt="Pertunjukan Seni Genggong — ansambel di panggung" loading="lazy">
                <div class="gallery-caption"><span>Pertunjukan Seni Genggong</span><i class="fa-solid fa-expand"></i></div>
            </div>
            <div class="gallery-item">
                <img src="https://upload.wikimedia.org/wikipedia/commons/6/64/Memainkan_Genggong.jpg" alt="Teknik memainkan Genggong di mulut" loading="lazy">
                <div class="gallery-caption"><span>Teknik Memainkan</span><i class="fa-solid fa-expand"></i></div>
            </div>
            <div class="gallery-item">
                <img src="https://upload.wikimedia.org/wikipedia/commons/0/0e/Genggong_2.jpg" alt="Detail instrumen Genggong bambu" loading="lazy">
                <div class="gallery-caption"><span>Detail Instrumen</span><i class="fa-solid fa-expand"></i></div>
            </div>
            <div class="gallery-item">
                <img src="https://upload.wikimedia.org/wikipedia/commons/2/21/Bagian_Genggong.jpg" alt="Diagram bagian-bagian Genggong" loading="lazy">
                <div class="gallery-caption"><span>Bagian-Bagian Genggong</span><i class="fa-solid fa-expand"></i></div>
            </div>
            <div class="gallery-item">
                <img src="https://upload.wikimedia.org/wikipedia/commons/0/0d/Genggong_1.jpg" alt="Genggong close-up" loading="lazy">
                <div class="gallery-caption"><span>Genggong — Tampak Dekat</span><i class="fa-solid fa-expand"></i></div>
            </div>
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1529156069898-49953e39b3ac?q=80&w=700&auto=format&fit=crop" alt="Latihan komunitas Batuan" loading="lazy">
                <div class="gallery-caption"><span>Latihan Komunitas Batuan</span><i class="fa-solid fa-expand"></i></div>
            </div>
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1518998053901-5348d3961a04?q=80&w=700&auto=format&fit=crop" alt="Suasana pementasan" loading="lazy">
                <div class="gallery-caption"><span>Suasana Pementasan</span><i class="fa-solid fa-expand"></i></div>
            </div>
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1493225457124-a3eb161ffa5f?q=80&w=700&auto=format&fit=crop" alt="Edukasi generasi muda" loading="lazy">
                <div class="gallery-caption"><span>Edukasi Generasi Muda</span><i class="fa-solid fa-expand"></i></div>
            </div>
        </div>
        <div style="margin-top:16px; display:flex; flex-wrap:wrap; gap:8px; align-items:center; justify-content:center; font-size:11px; color:rgba(255,247,232,0.5); text-align:center; line-height:1.6">
            <span><i class="fa-solid fa-circle-info" style="color:var(--gold)"></i> 5 foto pertama © Wikimedia Commons — <a href="https://commons.wikimedia.org/wiki/Category:Genggong" target="_blank" rel="noopener" style="color:var(--gold-light); text-decoration:underline; text-underline-offset:3px">Category:Genggong</a> (CC BY-SA 4.0). Klik nama file untuk atribusi: </span>
            <a href="https://commons.wikimedia.org/wiki/File:Pertunjukan_Seni_Genggong.jpg" target="_blank" rel="noopener" style="color:rgba(255,247,232,0.7); text-decoration:underline">Pertunjukan</a> •
            <a href="https://commons.wikimedia.org/wiki/File:Memainkan_Genggong.jpg" target="_blank" rel="noopener" style="color:rgba(255,247,232,0.7); text-decoration:underline">Memainkan</a> •
            <a href="https://commons.wikimedia.org/wiki/File:Genggong_2.jpg" target="_blank" rel="noopener" style="color:rgba(255,247,232,0.7); text-decoration:underline">Genggong 2</a> •
            <a href="https://commons.wikimedia.org/wiki/File:Bagian_Genggong.jpg" target="_blank" rel="noopener" style="color:rgba(255,247,232,0.7); text-decoration:underline">Bagian</a> •
            <a href="https://commons.wikimedia.org/wiki/File:Genggong_1.jpg" target="_blank" rel="noopener" style="color:rgba(255,247,232,0.7); text-decoration:underline">Genggong 1</a>
        </div>
        <p style="text-align:center; font-size:11px; color:rgba(255,247,232,0.35); margin-top:6px">Foto-foto dari artikel sering berhak cipta (detikTravel, Balai Pelestarian Kebudayaan, dll) — tidak dapat di-hotlink tanpa izin. Gunakan foto Commons di atas yang legal untuk produksi. Untuk menambah foto Batuan asli, upload via <a href="https://commons.wikimedia.org/wiki/Special:UploadWizard" target="_blank" rel="noopener" style="color:var(--gold-light)">UploadWizard</a> atau simpan ke <code>public/images/galeri/</code>.</p>
    </div>
</section>

<section class="section section-alt" id="video">
    <div class="container">
        <div class="section-head reveal">
            <div class="kicker">Bab Ketujuh — Suara yang Hidup</div>
            <h2>Dengarkan: Ketika Napas Menjelma Menjadi Melodi</h2>
            <p>Tutup mata sejenak. Biarkan getar itu menuntunmu — dari desir lembut latihan di balai banjar hingga gemuruh tepuk tangan di panggung festival. Inilah suara Genggong yang sesungguhnya.</p>
        </div>
        <div class="video-wrap reveal">
            <div class="video-placeholder" id="videoPlaceholder" role="button" aria-label="Putar video">
                <div class="play-btn"><i class="fa-solid fa-play" style="margin-left:3px"></i></div>
                <div class="video-meta">
                    <h4>Pertunjukan Lengkap — Genggong Batuan di Balai Banjar</h4>
                    <span>4:32 • HD</span>
                </div>
            </div>
        </div>
        <div class="video-grid reveal">
            <div class="video-thumb" data-video="https://www.youtube.com/embed/9bZkp7q19f0?autoplay=1">
                <img src="https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?q=80&w=600&auto=format&fit=crop" alt="Video 1" loading="lazy">
            </div>
            <div class="video-thumb" data-video="https://www.youtube.com/embed/dQw4w9WgXcQ?autoplay=1">
                <img src="https://images.unsplash.com/photo-1493225457124-a3eb161ffa5f?q=80&w=600&auto=format&fit=crop" alt="Proses pembuatan" loading="lazy">
            </div>
            <div class="video-thumb" data-video="https://www.youtube.com/embed/9bZkp7q19f0?autoplay=1">
                <img src="https://images.unsplash.com/photo-1529156069898-49953e39b3ac?q=80&w=600&auto=format&fit=crop" alt="Cerita seniman" loading="lazy">
            </div>
        </div>
        <p style="text-align:center; font-size:12px; color:rgba(255,247,232,0.45); margin-top:14px">Ganti URL YouTube pada atribut <code>data-video</code> untuk video asli komunitas.</p>
    </div>
</section>

<section class="section" id="fakta">
    <div class="container">
        <div class="section-head reveal">
            <div class="kicker">Bab Kedelapan — Rahasia Kecil</div>
            <h2>Keajaiban Tersembunyi di Balik Getar Sederhana</h2>
            <p>Di balik bentuknya yang mungil, Genggong menyimpan misteri yang hanya diketahui mereka yang pernah merasakannya. Arahkan kursor — atau sentuh di mobile — untuk membalik kartu dan menemukan rahasianya.</p>
        </div>
        <div class="facts-grid">
            <div class="flip-card reveal">
                <div class="flip-inner">
                    <div class="flip-front">
                        <div class="icon"><i class="fa-solid fa-waveform-lines"></i></div>
                        <h4>Keunikan Suara</h4>
                        <p>Tidak ada dua Genggong yang berbunyi sama persis — resonansi mulut tiap pemain berbeda.</p>
                    </div>
                    <div class="flip-back">
                        <strong>Resonansi Personal</strong>
                        <p>Bentuk rongga mulut, posisi lidah, dan napas menciptakan spektrum harmonik unik — seperti sidik jari suara.</p>
                    </div>
                </div>
            </div>
            <div class="flip-card reveal reveal-delay-1">
                <div class="flip-inner">
                    <div class="flip-front">
                        <div class="icon"><i class="fa-solid fa-lungs"></i></div>
                        <h4>Cara Memainkan</h4>
                        <p>Ditarik, bukan ditiup — getaran dihasilkan oleh tarikan jari, mulut sebagai amplifier.</p>
                    </div>
                    <div class="flip-back">
                        <strong>Drone & Napas</strong>
                        <p>Pemain mengatur vokal &ldquo;ng&rdquo; dan &ldquo;a&rdquo; untuk mengubah nada tanpa menyentuh instrumen — murni akustik tubuh.</p>
                    </div>
                </div>
            </div>
            <div class="flip-card reveal reveal-delay-2">
                <div class="flip-inner">
                    <div class="flip-front">
                        <div class="icon"><i class="fa-solid fa-seedling"></i></div>
                        <h4>Bahan Tradisional</h4>
                        <p>Bambu petung & aren dipilih karena serat lurus dan resonansi hangat.</p>
                    </div>
                    <div class="flip-back">
                        <strong>Alam Sebagai Lutier</strong>
                        <p>Bambu dikeringkan berbulan-bulan, dibelah tipis, lalu dipasangi lidah baja — proses yang diwariskan turun-temurun.</p>
                    </div>
                </div>
            </div>
            <div class="flip-card reveal">
                <div class="flip-inner">
                    <div class="flip-front">
                        <div class="icon"><i class="fa-solid fa-om"></i></div>
                        <h4>Hubungan Budaya</h4>
                        <p>Dulu dimainkan saat menjaga sawah — kini mengiringi odalan dan penyambutan tamu.</p>
                    </div>
                    <div class="flip-back">
                        <strong>Dari Sawah ke Pura</strong>
                        <p>Fungsinya bergeser dari hiburan agraris menjadi simbol keramahan dan spiritualitas komunitas.</p>
                    </div>
                </div>
            </div>
            <div class="flip-card reveal reveal-delay-1">
                <div class="flip-inner">
                    <div class="flip-front">
                        <div class="icon"><i class="fa-solid fa-scale-balanced"></i></div>
                        <h4>Berbeda dari Gamelan</h4>
                        <p>Bukan pukul, bukan tiup — Genggong adalah satu-satunya musik mulut di Bali.</p>
                    </div>
                    <div class="flip-back">
                        <strong>Minimal & Meditatif</strong>
                        <p>Tanpa bilah perunggu, tanpa kendang — hanya bambu, baja, dan tubuh manusia. Intim dan hening.</p>
                    </div>
                </div>
            </div>
            <div class="flip-card reveal reveal-delay-2">
                <div class="flip-inner">
                    <div class="flip-front">
                        <div class="icon"><i class="fa-solid fa-people-group"></i></div>
                        <h4>Musik Pergaulan</h4>
                        <p>Dahulu menjadi &ldquo;bahasa&rdquo; perkenalan muda-mudi di malam terang bulan.</p>
                    </div>
                    <div class="flip-back">
                        <strong>Diplomasi Getar</strong>
                        <p>Melodi Genggong digunakan untuk berbalas pantun tanpa kata — komunikasi rasa yang halus.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-alt" id="informasi">
    <div class="container">
        <div class="section-head reveal">
            <div class="kicker">Bab Kesembilan — Tutur Warisan</div>
            <h2>Kisah yang Terus Ditulis untuk Generasi Mendatang</h2>
            <p>Karena tradisi yang tak diceritakan akan perlahan hilang. Di sini kami merangkai tulisan — bukan sekadar artikel, melainkan bekal agar Genggong tetap hidup di ingatan dan percakapan.</p>
        </div>
        <div class="articles-grid">
            <article class="article-card reveal">
                <img src="https://images.unsplash.com/photo-1533105079780-92b9be482077?q=80&w=700&auto=format&fit=crop" alt="Sejarah Genggong" loading="lazy">
                <div class="article-body">
                    <div class="article-meta"><span class="cat">Sejarah</span> <span><i class="fa-regular fa-calendar"></i> 12 Jan 2026</span></div>
                    <h3>Mengenal Sejarah Genggong Bali dari Batuan</h3>
                    <p>Menelusuri jejak Genggong dari sawah hingga panggung — bagaimana tradisi lisan membentuk identitas.</p>
                    <a href="#" class="read-more" onclick="event.preventDefault(); alert('Halaman artikel — siap dihubungkan ke route Laravel.')">Baca Selengkapnya <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </article>
            <article class="article-card reveal reveal-delay-1">
                <img src="https://images.unsplash.com/photo-1518998053901-5348d3961a04?q=80&w=700&auto=format&fit=crop" alt="Seniman" loading="lazy">
                <div class="article-body">
                    <div class="article-meta"><span class="cat">Seniman</span> <span><i class="fa-regular fa-calendar"></i> 28 Des 2025</span></div>
                    <h3>Seniman yang Menjaga Tradisi Tetap Hidup</h3>
                    <p>Kisah para penabuh yang menolak Genggong jadi museum — mereka membuatnya relevan setiap hari.</p>
                    <a href="#" class="read-more" onclick="event.preventDefault(); alert('Halaman artikel — siap dihubungkan ke route Laravel.')">Baca Selengkapnya <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </article>
            <article class="article-card reveal reveal-delay-2">
                <img src="https://images.unsplash.com/photo-1529156069898-49953e39b3ac?q=80&w=600&auto=format&fit=crop" alt="Generasi muda" loading="lazy">
                <div class="article-body">
                    <div class="article-meta"><span class="cat">Edukasi</span> <span><i class="fa-regular fa-calendar"></i> 05 Des 2025</span></div>
                    <h3>Genggong di Era Generasi Muda</h3>
                    <p>Bagaimana TikTok, workshop kampus, dan kelas anak menjadi strategi regenerasi yang efektif.</p>
                    <a href="#" class="read-more" onclick="event.preventDefault(); alert('Halaman artikel — siap dihubungkan ke route Laravel.')">Baca Selengkapnya <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </article>
        </div>
    </div>
</section>

<section class="cta" id="cta">
    <div class="cta-inner reveal">
        <div class="kicker" style="justify-content:center; display:flex">Epilog — Sebuah Janji</div>
        <h2>&ldquo;Tradisi Tidak Akan Hilang Selama Ada yang Menjaganya.&rdquo;</h2>
        <p>Sebuah ajakan yang tak lekang oleh waktu — mari menjadi bagian dari penjaga. Datang, belajar, atau sekadar mendengarkan. Genggong menunggu untuk dicoba, dirasakan, dan dicintai kembali.</p>
        <div class="cta-actions">
            <a href="#tentang" class="btn-primary">Kenali Lebih Dekat <i class="fa-solid fa-arrow-right"></i></a>
            <a href="#kontak" class="btn-ghost">Hubungi Kami <i class="fa-regular fa-envelope"></i></a>
        </div>
    </div>
</section>

<section class="section" id="kontak">
    <div class="container">
        <div class="section-head reveal">
            <div class="kicker">Penutup — Pintu Terbuka</div>
            <h2>Mari Bertemu, Mendengar, dan Menjadi Bagian dari Cerita</h2>
            <p>Cerita Genggong belum selesai — ia menunggu bab selanjutnya yang akan kau tulis bersamanya. Datanglah ke Batuan, kirimkan pesan, atau sekadar dengarkan. Kami menanti dengan pintu dan hati yang terbuka.</p>
        </div>
        <div class="kontak-grid">
            <form id="contactForm" class="glass" style="border-radius:20px; padding:24px; display:grid; gap:14px">
                <div class="form-row">
                    <label style="display:grid; gap:6px; font-size:12px; letter-spacing:0.06em; text-transform:uppercase; color:rgba(255,247,232,0.7)">Nama
                        <input required type="text" placeholder="Nama Anda" style="background:rgba(255,255,255,0.06); border:1px solid rgba(255,255,255,0.10); border-radius:12px; padding:12px 14px; color:var(--cream); outline:none">
                    </label>
                    <label style="display:grid; gap:6px; font-size:12px; letter-spacing:0.06em; text-transform:uppercase; color:rgba(255,247,232,0.7)">Email
                        <input required type="email" placeholder="email@contoh.com" style="background:rgba(255,255,255,0.06); border:1px solid rgba(255,255,255,0.10); border-radius:12px; padding:12px 14px; color:var(--cream); outline:none">
                    </label>
                </div>
                <label style="display:grid; gap:6px; font-size:12px; letter-spacing:0.06em; text-transform:uppercase; color:rgba(255,247,232,0.7)">Pesan
                    <textarea required rows="4" placeholder="Tuliskan keperluan Anda — kunjungan, workshop, atau kolaborasi..." style="background:rgba(255,255,255,0.06); border:1px solid rgba(255,255,255,0.10); border-radius:12px; padding:12px 14px; color:var(--cream); outline:none; resize:vertical"></textarea>
                </label>
                <button type="submit" class="btn-primary" style="justify-content:center; border:none; cursor:pointer; width:100%"><i class="fa-solid fa-paper-plane"></i> Kirim Pesan</button>
                <p style="font-size:11px; color:rgba(255,247,232,0.45); text-align:center; margin:0">Demo form — hubungkan ke <code>Route::post('/contact')</code> Laravel.</p>
            </form>
            <div class="reveal reveal-delay-1" style="display:grid; gap:14px">
                <div class="glass" style="border-radius:16px; padding:18px; display:flex; gap:14px; align-items:center">
                    <span style="width:44px;height:44px;border-radius:12px;background:rgba(193,39,45,0.14);border:1px solid rgba(193,39,45,0.22);display:grid;place-items:center;color:var(--gold-light)"><i class="fa-solid fa-location-dot"></i></span>
                    <div><div style="font-size:13px; font-weight:600; color:var(--cream)">Desa Batuan, Sukawati, Gianyar</div><div style="font-size:12px; color:rgba(255,247,232,0.6)">Balai Banjar Batuan — 15 menit dari Ubud</div></div>
                </div>
                <div class="glass" style="border-radius:16px; padding:18px; display:flex; gap:14px; align-items:center">
                    <span style="width:44px;height:44px;border-radius:12px;background:rgba(212,168,75,0.12);border:1px solid rgba(212,168,75,0.18);display:grid;place-items:center;color:var(--gold-light)"><i class="fa-brands fa-whatsapp"></i></span>
                    <div><div style="font-size:13px; font-weight:600; color:var(--cream)">WhatsApp</div><div style="font-size:12px; color:rgba(255,247,232,0.6)">+62 812-XXXX-XXXX • Balas cepat</div></div>
                </div>
                <div class="glass" style="border-radius:16px; padding:18px; display:flex; gap:14px; align-items:center">
                    <span style="width:44px;height:44px;border-radius:12px;background:rgba(255,255,255,0.06);border:1px solid rgba(255,255,255,0.08);display:grid;place-items:center;color:var(--cream)"><i class="fa-regular fa-envelope"></i></span>
                    <div><div style="font-size:13px; font-weight:600; color:var(--cream)">Email</div><div style="font-size:12px; color:rgba(255,247,232,0.6)">halo@genggongbatuan.id</div></div>
                </div>
                <div style="border-radius:16px; overflow:hidden; border:1px solid rgba(255,255,255,0.07); height:180px; background:var(--bg-800)">
                    <img src="https://images.unsplash.com/photo-1555400038-63f5ba517a47?q=80&w=800&auto=format&fit=crop" alt="Pura Batuan" style="width:100%;height:100%;object-fit:cover; opacity:0.85" loading="lazy">
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="footer">
    <div class="container">
        <div class="footer-grid">
            <div>
                <div style="display:flex; align-items:center; gap:12px; margin-bottom:14px">
                    <div class="logo-mark">G</div>
                    <div class="logo-text"><strong style="color:var(--cream)">GENGGONG BALI BATUAN</strong><span>WARISAN SUARA TRADISI</span></div>
                </div>
                <p>Melestarikan suara leluhur melalui dokumentasi modern, edukasi generasi muda, dan pertunjukan yang mengundang siapa saja untuk mencoba.</p>
                <form id="newsletterForm" style="display:flex; gap:8px; margin-top:16px">
                    <input type="email" required placeholder="Email untuk update" style="flex:1; background:rgba(255,255,255,0.06); border:1px solid rgba(255,255,255,0.10); border-radius:999px; padding:10px 14px; color:var(--cream); outline:none; font-size:13px">
                    <button type="submit" style="background:var(--gold); color:var(--bg-900); border:none; border-radius:999px; padding:10px 16px; font-weight:700; font-size:12px; letter-spacing:0.06em; cursor:pointer">LANGGANAN</button>
                </form>
            </div>
            <div>
                <h4>Jelajahi</h4>
                <ul class="footer-links">
                    <li><a href="#beranda">Beranda</a></li>
                    <li><a href="#sejarah">Sejarah</a></li>
                    <li><a href="#seniman">Seniman</a></li>
                    <li><a href="#galeri">Galeri</a></li>
                    <li><a href="#kontak">Kontak</a></li>
                </ul>
            </div>
            <div>
                <h4>Informasi</h4>
                <ul class="footer-links">
                    <li><a href="#">Kebijakan Privasi</a></li>
                    <li><a href="#">Syarat Layanan</a></li>
                    <li><a href="#">Press Kit</a></li>
                    <li><a href="#">Kolaborasi</a></li>
                </ul>
            </div>
            <div>
                <h4>Ikuti Kami</h4>
                <p style="margin:0 0 12px">Temukan harmoni Genggong di media sosial.</p>
                <div class="socials">
                    <a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" aria-label="YouTube"><i class="fa-brands fa-youtube"></i></a>
                    <a href="#" aria-label="TikTok"><i class="fa-brands fa-tiktok"></i></a>
                </div>
                <div style="margin-top:18px; display:flex; gap:8px; align-items:center; font-size:12px; color:rgba(255,247,232,0.5)">
                    <i class="fa-solid fa-phone" style="color:var(--gold)"></i> +62 812-XXXX-XXXX &nbsp;•&nbsp; <i class="fa-regular fa-envelope" style="color:var(--gold)"></i> halo@genggongbatuan.id
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <span>© 2026 Genggong Bali Batuan. All Rights Reserved. Dibuat dengan ♥ untuk pelestarian budaya Bali.</span>
            <span style="display:flex; gap:12px; align-items:center"><span>Designed in Batuan</span> <span style="width:6px;height:6px;background:var(--gold);border-radius:50%;display:inline-block"></span> <span>Bali, Indonesia</span></span>
        </div>
    </div>
</footer>

<div class="lightbox" id="lightbox" aria-hidden="true">
    <button class="lightbox-close" id="lightboxClose" aria-label="Tutup"><i class="fa-solid fa-xmark"></i></button>
    <button class="lightbox-prev" id="lightboxPrev" aria-label="Sebelumnya"><i class="fa-solid fa-chevron-left"></i></button>
    <button class="lightbox-next" id="lightboxNext" aria-label="Selanjutnya"><i class="fa-solid fa-chevron-right"></i></button>
    <img id="lightboxImg" src="" alt="Galeri besar">
</div>

<div class="modal" id="artistModal" aria-hidden="true">
    <div class="modal-card">
        <div class="modal-head">
            <img id="modalImg" src="" alt="Seniman">
            <button class="modal-close" id="modalClose" aria-label="Tutup"><i class="fa-solid fa-xmark"></i></button>
        </div>
        <div class="modal-body">
            <h3 id="modalName" style="font-family:'Cinzel',serif">Nama Seniman</h3>
            <div class="role" id="modalRole">Peran</div>
            <div style="font-size:12px; color:rgba(255,247,232,0.5); margin-bottom:12px"><i class="fa-solid fa-location-dot" style="color:var(--gold)"></i> <span id="modalOrigin">Asal</span></div>
            <p id="modalDesc">Deskripsi lengkap seniman akan tampil di sini.</p>
            <div style="display:flex; gap:10px; margin-top:16px">
                <a href="#kontak" onclick="document.getElementById('artistModal').classList.remove('open')" class="btn-primary" style="flex:1; justify-content:center; padding:10px; font-size:12px">Hubungi</a>
                <button onclick="document.getElementById('artistModal').classList.remove('open'); document.body.style.overflow=''" class="btn-ghost" style="flex:1; justify-content:center; padding:10px; font-size:12px">Tutup</button>
            </div>
        </div>
    </div>
</div>

<button class="back-to-top" aria-label="Kembali ke atas"><i class="fa-solid fa-arrow-up"></i></button>

</body>
</html>
