<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPDB SMKN Tugumulyo - Penerimaan Peserta Didik Baru</title>

    <!-- Tailwind CSS CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome untuk Ikon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Google Fonts (Poppins) -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Konfigurasi Tailwind & Custom Styles -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#0f4c81', /* Classic Blue */
                        secondary: '#f59e0b', /* Amber/Gold */
                        dark: '#1e293b',
                    },
                    fontFamily: {
                        sans: ['Poppins', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <style>
        /* Animasi Fade In saat scroll */
        .fade-in-section {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
            will-change: opacity, visibility;
        }

        .fade-in-section.is-visible {
            opacity: 1;
            transform: none;
        }

        /* Hero Background Pattern */
        .hero-bg {
            background-image: linear-gradient(rgba(15, 76, 129, 0.85), rgba(30, 41, 59, 0.9)), url('https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }
    </style>
</head>

<body class="font-sans text-gray-700 antialiased overflow-x-hidden">

    <!-- NAVBAR -->
    <nav id="navbar" class="fixed w-full z-50 transition-all duration-300 bg-white/90 backdrop-blur-md shadow-sm py-4">
        <div class="container mx-auto px-6 flex justify-between items-center">
            <!-- Logo -->
            <a href="#" class="flex items-center gap-2 group">
                <div
                    class="bg-primary text-white w-10 h-10 rounded flex items-center justify-center text-xl font-bold group-hover:bg-secondary transition-colors">
                    <i class="fa-solid fa-graduation-cap"></i>
                </div>
                <div>
                    <span
                        class="block text-primary font-bold text-lg leading-tight">{{ $settings['app_name'] ?? 'PPDB Online' }}</span>
                    <span
                        class="block text-gray-500 text-xs font-semibold tracking-wider">{{ $settings['school_year'] ?? '2024' }}</span>
                </div>
            </a>

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="#home" class="text-gray-600 hover:text-primary font-medium transition">Beranda</a>
                <a href="#jurusan" class="text-gray-600 hover:text-primary font-medium transition">Jurusan</a>
                <a href="#alur" class="text-gray-600 hover:text-primary font-medium transition">Alur Pendaftaran</a>
                <a href="#faq" class="text-gray-600 hover:text-primary font-medium transition">FAQ</a>
                @if ($settings['registration_open'])
                    <a href="#daftar"
                        class="bg-primary hover:bg-blue-800 text-white px-5 py-2.5 rounded-full font-medium transition shadow-lg shadow-blue-500/30">
                        Daftar Sekarang <i class="fa-solid fa-arrow-right ml-2"></i>
                    </a>
                @endif
                <a href="{{ route('login') }}"
                    class="bg-secondary hover:bg-blue-800 text-white px-5 py-2.5 rounded-full font-medium transition shadow-lg shadow-blue-500/30">
                    Login Sekarang <i class="fa-solid fa-arrow-right ml-2"></i>
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <button id="mobile-menu-btn" class="md:hidden text-gray-700 text-2xl focus:outline-none">
                <i class="fa-solid fa-bars"></i>
            </button>
        </div>

        <!-- Mobile Menu Dropdown -->
        <div id="mobile-menu" class="hidden md:hidden bg-white border-t absolute w-full left-0 shadow-lg">
            <div class="flex flex-col px-6 py-4 space-y-4">
                <a href="#home" class="mobile-link text-gray-600 font-medium">Beranda</a>
                <a href="#jurusan" class="mobile-link text-gray-600 font-medium">Jurusan</a>
                <a href="#alur" class="mobile-link text-gray-600 font-medium">Alur Pendaftaran</a>
                <a href="#faq" class="mobile-link text-gray-600 font-medium">FAQ</a>
                @if ($settings['registration_open'])<a href="#daftar" class="mobile-link text-primary font-bold">Daftar
                Sekarang</a>@endif
                <a href="{{ route('login') }}" class="mobile-link text-secondary font-bold">Login Sekarang</a>
            </div>
        </div>
    </nav>

    <!-- HERO SECTION -->
    <section id="home" class="hero-bg min-h-screen flex items-center pt-20 relative">
        <div class="container mx-auto px-6 grid md:grid-cols-2 gap-12 items-center text-white">
            <div class="space-y-6 fade-in-section">
                <div
                    class="inline-block bg-secondary text-white px-3 py-1 rounded-full text-xs font-bold tracking-wide uppercase mb-2">
                    Tahun Ajaran 2025/2026
                </div>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight">
                    Siap Mencetak Generasi <span class="text-secondary">Kompeten</span> & Berkarakter
                </h1>
                <p class="text-gray-300 text-lg md:text-xl max-w-lg">
                    Bergabunglah bersama SMKN Tugumulyo. Pusat keunggulan pendidikan vokasi untuk masa depan yang
                    gemilang.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 pt-4">
                    @if($settings['registration_open'] == 1)
                        <a href="#daftar"
                            class="bg-secondary hover:bg-yellow-600 text-white px-8 py-3.5 rounded-full font-bold text-center transition shadow-lg transform hover:-translate-y-1">
                            Daftar Online
                        </a>
                    @else
                        <a href="#daftar"
                            class="bg-primary hover:bg-yellow-600 text-white px-8 py-3.5 rounded-full font-bold text-center transition shadow-lg transform hover:-translate-y-1">
                            Pendaftaran Ditutup
                        </a>
                    @endif

                    <a href="#jurusan"
                        class="bg-transparent border-2 border-white hover:bg-white hover:text-primary text-white px-8 py-3.5 rounded-full font-bold text-center transition">
                        Lihat Jurusan
                    </a>
                </div>

                <!-- Simple Stats -->

            </div>

            <!-- Hero Image/Illustration (Hidden on small mobile) -->
            <div class="hidden md:block relative fade-in-section delay-200">
                <img src="https://images.unsplash.com/photo-1571260899304-425eee4c7efc?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                    alt="Siswa SMK"
                    class="rounded-2xl shadow-2xl border-4 border-white/20 transform rotate-2 hover:rotate-0 transition duration-500">

                @if ($settings['registration_open'])
                    <div class="absolute -bottom-6 -left-6 bg-white p-4 rounded-xl shadow-xl text-gray-800 flex items-center gap-4 animate-bounce"
                        style="animation-duration: 3s;">
                        <div class="bg-green-100 p-3 rounded-full text-green-600">
                            <i class="fa-solid fa-check-circle text-2xl"></i>
                        </div>
                        <div>
                            <p class="text-xs text-gray-500 font-bold uppercase">Status Pendaftaran</p>
                            <p class="font-bold text-green-600">DIBUKA</p>

                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>
    @php
        use Carbon\Carbon;

        $start = Carbon::parse($settings['registration_start_date']);
        $end = Carbon::parse($settings['registration_end_date']);
        $today = Carbon::today();

        $showCountdown = $today->between($start, $end);
    @endphp

    @if ($showCountdown)
        <section id="registration-countdown-section" class="bg-primary py-10 text-white transition-all">
            <div class="container mx-auto px-6 text-center relative">
                <h3 class="text-xl mb-6 font-semibold">Batas Waktu Pendaftaran Gelombang 1</h3>

                <div id="countdown" class="flex flex-wrap justify-center gap-4 md:gap-8 transition-all">
                    <div class="time-box bg-white/10 backdrop-blur-sm px-4 py-3 rounded-lg min-w-[80px]">
                        <span id="days" class="block text-3xl font-bold"></span>
                        <span class="text-xs uppercase tracking-widest">Hari</span>
                    </div>

                    <div class="time-box bg-white/10 backdrop-blur-sm px-4 py-3 rounded-lg min-w-[80px]">
                        <span id="hours" class="block text-3xl font-bold"></span>
                        <span class="text-xs uppercase tracking-widest">Jam</span>
                    </div>

                    <div class="time-box bg-white/10 backdrop-blur-sm px-4 py-3 rounded-lg min-w-[80px]">
                        <span id="minutes" class="block text-3xl font-bold"></span>
                        <span class="text-xs uppercase tracking-widest">Menit</span>
                    </div>

                    <div class="time-box bg-white/10 backdrop-blur-sm px-4 py-3 rounded-lg min-w-[80px]">
                        <span id="seconds" class="block text-3xl font-bold text-secondary"></span>
                        <span class="text-xs uppercase tracking-widest">Detik</span>
                    </div>
                </div>

                <!-- hidden overlay pesan saat habis -->
                <div id="expired-overlay"
                    class="absolute inset-0 flex items-center justify-center pointer-events-none opacity-0">
                    <div id="expired-card"
                        class="px-6 py-4 rounded-2xl bg-white/90 text-primary font-bold text-2xl shadow-lg transform scale-75 opacity-0">
                        Waktu Habis!
                    </div>
                </div>
            </div>
        </section>

        <style>
            /* Animations */
            @keyframes popIn {
                0% {
                    transform: scale(.6) translateY(8px);
                    opacity: 0;
                }

                60% {
                    transform: scale(1.05) translateY(-4px);
                    opacity: 1;
                }

                100% {
                    transform: scale(1) translateY(0);
                    opacity: 1;
                }
            }

            @keyframes popOut {
                0% {
                    transform: scale(1);
                    opacity: 1;
                }

                100% {
                    transform: scale(.92) translateY(-12px);
                    opacity: 0;
                }
            }

            @keyframes pulseGlow {
                0% {
                    box-shadow: 0 0 0 0 rgba(255, 255, 255, 0.0);
                }

                70% {
                    box-shadow: 0 0 24px 6px rgba(255, 255, 255, 0.06);
                }

                100% {
                    box-shadow: 0 0 0 0 rgba(255, 255, 255, 0.0);
                }
            }

            /* state class applied when expired */
            #registration-countdown-section.expired {
                /* blur background and slightly shrink 
                                                    filter: blur(2px) grayscale(.1); */
                transition: filter .6s ease, transform .6s ease;
                transform-origin: center;
            }

            /* animate each time-box to fade out */
            #registration-countdown-section.expired .time-box {
                animation: popOut .6s forwards;
            }

            /* show overlay card */
            #expired-overlay.show {
                pointer-events: auto;
                opacity: 1;
                transition: opacity .3s ease .2s;
            }

            #expired-card.show {
                animation: popIn .6s cubic-bezier(.2, .9, .3, 1) forwards;
            }

            /* quick blink effect on seconds box to emphasize 'end' */
            @keyframes blink {
                0% {
                    opacity: 1
                }

                50% {
                    opacity: .15
                }

                100% {
                    opacity: 1
                }
            }

            .blink {
                animation: blink .9s ease-in-out 0s 3;
            }

            /* subtle glow on overlay card */
            #expired-card.show {
                animation: popIn .6s both, pulseGlow 2s ease-in-out .6s infinite;
            }
        </style>

        <script>
                (function () {
                    const endDate = new Date("{{ $settings['registration_end_date'] }}").getTime();

                    const daysEl = document.getElementById("days");
                    const hoursEl = document.getElementById("hours");
                    const minutesEl = document.getElementById("minutes");
                    const secondsEl = document.getElementById("seconds");

                    const section = document.getElementById("registration-countdown-section");
                    const expiredOverlay = document.getElementById("expired-overlay");
                    const expiredCard = document.getElementById("expired-card");

                    function update() {
                        const now = new Date().getTime();
                        let distance = endDate - now;

                        if (distance <= 0) {
                            // set zeros
                            daysEl.innerHTML = 0;
                            hoursEl.innerHTML = 0;
                            minutesEl.innerHTML = 0;
                            secondsEl.innerHTML = 0;

                            // play animations
                            section.classList.add('expired');

                            // blink seconds box once to catch attention
                            secondsEl.classList.add('blink');

                            // after slight delay, show overlay card
                            setTimeout(() => {
                                expiredOverlay.classList.add('show');
                                expiredCard.classList.add('show');
                            }, 400);

                            // stop the interval (no more updates)
                            return true; // signal finished
                        }

                        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
                        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                        const seconds = Math.floor((distance % (1000 * 60)) / 1000);

                        daysEl.innerHTML = days;
                        hoursEl.innerHTML = hours;
                        minutesEl.innerHTML = minutes;
                        secondsEl.innerHTML = seconds;

                        return false;
                    }

                    // initial update
                    if (update()) {
                        // already expired on load -> ensure overlay shown (in case timings)
                        expiredOverlay.classList.add('show');
                        expiredCard.classList.add('show');
                    } else {
                        const interval = setInterval(() => {
                            if (update()) clearInterval(interval);
                        }, 1000);
                    }
                })();
        </script>
    @endif



    <!-- JURUSAN SECTION -->
    <section id="jurusan" class="py-20 bg-gray-50 place-items-center">

        <div class="container mx-auto px-6">
            <div class="text-center mb-16 fade-in-section">
                <span class="text-secondary font-bold uppercase tracking-widest text-sm">Program Keahlian</span>
                <h2 class="text-3xl md:text-4xl font-bold text-dark mt-2">Pilih Minat & Bakatmu</h2>
                <div class="w-20 h-1 bg-primary mx-auto mt-4 rounded"></div>
                <p class="text-gray-500 mt-4 max-w-2xl mx-auto">Kami menyediakan berbagai kompetensi keahlian yang
                    relevan dengan kebutuhan industri saat ini.</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                @foreach ($major as $j)
                    <div
                        class="bg-white rounded-xl shadow-lg hover:shadow-2xl transition duration-300 overflow-hidden group fade-in-section">
                        <div class="h-40 bg-blue-100 flex items-center justify-center relative overflow-hidden">
                            <div
                                class="absolute inset-0 bg-primary opacity-0 group-hover:opacity-10 transition duration-300">
                            </div>
                            <i
                                class="fa-solid fa-network-wired text-6xl text-primary group-hover:scale-110 transition duration-300"></i>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-dark mb-2">{{ $j->name }}</h3>
                            <p class="text-gray-500 text-sm mb-4">{{ $j->quota }} Siswa</p>
                            <a target="_blank" href="https://smkn-tgm.sch.id/"
                                class="text-primary font-semibold text-sm hover:underline">Selengkapnya &rarr;</a>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </section>

    <!-- ALUR PENDAFTARAN -->
    <section id="alur" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16 fade-in-section">
                <span class="text-secondary font-bold uppercase tracking-widest text-sm">Langkah Mudah</span>
                <h2 class="text-3xl md:text-4xl font-bold text-dark mt-2">Alur Pendaftaran</h2>
                <div class="w-20 h-1 bg-primary mx-auto mt-4 rounded"></div>
            </div>

            <div class="relative">
                <!-- Connecting Line (Desktop) -->
                <div class="hidden md:block absolute top-1/2 left-0 w-full h-1 bg-gray-200 -translate-y-1/2 z-0"></div>

                <div class="grid md:grid-cols-4 gap-8 relative z-10">
                    <!-- Step 1 -->
                    <div class="bg-white p-6 rounded-lg shadow-md border border-gray-100 text-center fade-in-section">
                        <div
                            class="w-16 h-16 bg-primary text-white rounded-full flex items-center justify-center text-2xl font-bold mx-auto mb-4 border-4 border-white shadow-lg">
                            1</div>
                        <h4 class="text-lg font-bold mb-2">Daftar Online</h4>
                        <p class="text-sm text-gray-500">Isi formulir biodata lengkap melalui website ini.</p>
                    </div>

                    <!-- Step 2 -->
                    <div
                        class="bg-white p-6 rounded-lg shadow-md border border-gray-100 text-center fade-in-section delay-100">
                        <div
                            class="w-16 h-16 bg-primary text-white rounded-full flex items-center justify-center text-2xl font-bold mx-auto mb-4 border-4 border-white shadow-lg">
                            2</div>
                        <h4 class="text-lg font-bold mb-2">Verifikasi Berkas</h4>
                        <p class="text-sm text-gray-500">Datang ke sekolah membawa berkas fisik untuk diverifikasi
                            panitia.</p>
                    </div>

                    <!-- Step 3 -->
                    <div
                        class="bg-white p-6 rounded-lg shadow-md border border-gray-100 text-center fade-in-section delay-200">
                        <div
                            class="w-16 h-16 bg-primary text-white rounded-full flex items-center justify-center text-2xl font-bold mx-auto mb-4 border-4 border-white shadow-lg">
                            3</div>
                        <h4 class="text-lg font-bold mb-2">Tes Seleksi</h4>
                        <p class="text-sm text-gray-500">Mengikuti tes akademik dan tes khusus sesuai jurusan.</p>
                    </div>

                    <!-- Step 4 -->
                    <div
                        class="bg-white p-6 rounded-lg shadow-md border border-gray-100 text-center fade-in-section delay-300">
                        <div
                            class="w-16 h-16 bg-secondary text-white rounded-full flex items-center justify-center text-2xl font-bold mx-auto mb-4 border-4 border-white shadow-lg">
                            4</div>
                        <h4 class="text-lg font-bold mb-2">Daftar Ulang</h4>
                        <p class="text-sm text-gray-500">Jika dinyatakan lulus, lakukan registrasi ulang siswa baru.</p>
                    </div>
                </div>
            </div>

            <div class="text-center mt-12 fade-in-section">
                <a href="docs/brosur-ppdb-2025.pdf"
                    class="inline-flex items-center text-gray-600 hover:text-primary transition font-medium border-b-2 border-transparent hover:border-primary pb-1">
                    <i class="fa-solid fa-download mr-2"></i> Download Brosur Lengkap
                </a>
            </div>
        </div>
    </section>

    <!-- FORM PENDAFTARAN & CTA -->
    <section id="daftar" class="py-20 bg-dark text-white relative overflow-hidden">
        <!-- Decoration Circles -->
        <div class="absolute top-0 right-0 -mr-20 -mt-20 w-80 h-80 bg-primary opacity-20 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-80 h-80 bg-secondary opacity-10 rounded-full blur-3xl">
        </div>
        @if ($settings['registration_open'])
            <div class="container mx-auto px-6 relative z-10">
                <div class="grid lg:grid-cols-2 gap-16 items-center">
                    <div class="fade-in-section">
                        <h2 class="text-4xl font-bold mb-6">Siap Menjadi Bagian dari Kami?</h2>
                        <p class="text-gray-300 mb-8 text-lg">Jangan lewatkan kesempatan emas untuk belajar di lingkungan
                            yang mendukung kreativitas dan inovasi. Kuota terbatas!</p>

                        <ul class="space-y-4 mb-8">
                            <li class="flex items-center gap-3">
                                <i class="fa-solid fa-check text-green-400"></i> Fasilitas Lab Lengkap
                            </li>
                            <li class="flex items-center gap-3">
                                <i class="fa-solid fa-check text-green-400"></i> Guru Tersertifikasi Industri
                            </li>
                            <li class="flex items-center gap-3">
                                <i class="fa-solid fa-check text-green-400"></i> Bursa Kerja Khusus (BKK) Aktif
                            </li>
                        </ul>

                        <div class="bg-white/10 p-6 rounded-lg border-l-4 border-secondary">
                            <h4 class="font-bold text-secondary mb-1">Hubungi Panitia</h4>
                            <p class="text-sm">Jika mengalami kesulitan saat mendaftar:</p>
                            <p class="text-xl font-mono mt-2"><i class="fa-brands fa-whatsapp mr-2"></i> 0812-3456-7890 (Pak
                                Budi)</p>
                        </div>
                    </div>

                    <!-- Simple Registration Form -->
                    <div class="bg-white text-gray-800 p-8 rounded-2xl shadow-2xl fade-in-section delay-200">
                        <h3 class="text-2xl font-bold mb-6 text-center text-primary">Formulir Peminatan Awal</h3>
                        <form id="ppdbForm" method="POST" action="{{ route('register.submit') }}">
                            @csrf
                            <div class="space-y-4">
                                <div>
                                    <label class="block text-sm font-medium mb-1">Nama Lengkap</label>
                                    <input type="text"
                                        class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-primary focus:border-primary outline-none"
                                        placeholder="Sesuai Ijazah SMP" name="nama_siswa">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium mb-1">Asal Sekolah (SMP/Mts)</label>
                                    <input type="text"
                                        class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-primary focus:border-primary outline-none"
                                        placeholder="Contoh: SMPN 1 Contoh" name="smp_asal">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium mb-1">Nomor WhatsApp</label>
                                    <input type="tel"
                                        class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-primary focus:border-primary outline-none"
                                        placeholder="08xx-xxxx-xxxx" name="no_wa">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium mb-1">Pilihan Jurusan</label>
                                    <select name="jurusan"
                                        class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-primary focus:border-primary outline-none bg-white">
                                        <option value="" disabled selected>Pilih Jurusan</option>
                                        @foreach ($major as $j)
                                            <option value="{{ $j->id }}">{{ $j->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium mb-1">Password</label>
                                    <input type="password"
                                        class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-primary focus:border-primary outline-none"
                                        placeholder="*******" name="password">
                                </div>
                                <button type="submit"
                                    class="w-full bg-secondary hover:bg-yellow-600 text-white font-bold py-3 rounded-lg transition shadow-lg mt-2">
                                    Daftar Sekarang
                                </button>
                                <p class="text-xs text-center text-gray-400 mt-4">Data Anda aman dan hanya digunakan untuk
                                    keperluan seleksi PPDB.</p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endif
    </section>

    <!-- FAQ SECTION -->
    <section id="faq" class="py-20 bg-gray-50">
        <div class="container mx-auto px-6 max-w-4xl">
            <div class="text-center mb-12 fade-in-section">
                <h2 class="text-3xl font-bold text-dark">Pertanyaan Umum (FAQ)</h2>
            </div>

            <div class="space-y-4 fade-in-section">
                <!-- FAQ Item 1 -->
                <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden">
                    <button
                        class="w-full px-6 py-4 text-left font-semibold flex justify-between items-center focus:outline-none"
                        onclick="toggleFaq(this)">
                        <span>Kapan pendaftaran gelombang 1 dibuka?</span>
                        <i class="fa-solid fa-chevron-down transition-transform duration-300"></i>
                    </button>
                    <div class="px-6 pb-4 hidden text-gray-600 border-t border-gray-100 pt-4 bg-gray-50">
                        Pendaftaran gelombang 1 dibuka mulai tanggal 1 Maret 2025 hingga 30 Mei 2025. Segera daftar
                        sebelum kuota terpenuhi.
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden">
                    <button
                        class="w-full px-6 py-4 text-left font-semibold flex justify-between items-center focus:outline-none"
                        onclick="toggleFaq(this)">
                        <span>Apakah ada biaya pendaftaran?</span>
                        <i class="fa-solid fa-chevron-down transition-transform duration-300"></i>
                    </button>
                    <div class="px-6 pb-4 hidden text-gray-600 border-t border-gray-100 pt-4 bg-gray-50">
                        Biaya formulir pendaftaran adalah Rp 50.000,- yang dapat dibayarkan saat verifikasi berkas di
                        sekolah atau transfer bank.
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden">
                    <button
                        class="w-full px-6 py-4 text-left font-semibold flex justify-between items-center focus:outline-none"
                        onclick="toggleFaq(this)">
                        <span>Berkas apa saja yang harus disiapkan?</span>
                        <i class="fa-solid fa-chevron-down transition-transform duration-300"></i>
                    </button>
                    <div class="px-6 pb-4 hidden text-gray-600 border-t border-gray-100 pt-4 bg-gray-50">
                        Siapkan Fotocopy KK, Akta Kelahiran, Rapor semester 1-5, Pas foto 3x4 (2 lembar), dan NISN.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="bg-dark text-gray-400 pt-16 pb-8 border-t border-gray-800">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-3 gap-12 mb-12">
                <!-- Info Sekolah -->
                <div>
                    <div class="flex items-center gap-2 mb-6 text-white">
                        <i class="fa-solid fa-graduation-cap text-3xl"></i>
                        <span class="text-xl font-bold">SMKN TUGUMULYO</span>
                    </div>
                    <p class="text-sm leading-relaxed mb-6">
                        Mencetak lulusan yang kompeten, berakhlak mulia, dan siap bersaing di dunia industri maupun
                        wirausaha.
                    </p>
                    <div class="flex gap-4">
                        <a href="#"
                            class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center hover:bg-primary hover:text-white transition"><i
                                class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"
                            class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center hover:bg-pink-600 hover:text-white transition"><i
                                class="fa-brands fa-instagram"></i></a>
                        <a href="#"
                            class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center hover:bg-red-600 hover:text-white transition"><i
                                class="fa-brands fa-youtube"></i></a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h4 class="text-white font-bold mb-6">Tautan Cepat</h4>
                    <ul class="space-y-3 text-sm">
                        <li><a href="#home" class="hover:text-secondary transition">Beranda</a></li>
                        <li><a href="#jurusan" class="hover:text-secondary transition">Profil Jurusan</a></li>
                        <li><a href="#" class="hover:text-secondary transition">Prestasi Siswa</a></li>
                        <li><a href="#" class="hover:text-secondary transition">Ekstrakurikuler</a></li>
                        <li><a href="#" class="hover:text-secondary transition">Login Siswa/Guru</a></li>
                    </ul>
                </div>

                <!-- Kontak -->
                <div>
                    <h4 class="text-white font-bold mb-6">Kontak Kami</h4>
                    <ul class="space-y-4 text-sm">
                        <li class="flex items-start gap-3">
                            <i class="fa-solid fa-location-dot mt-1 text-secondary"></i>
                            <span>Jl. Raya Tugumulyo, Musi Rawas, Sumatera Selatan 31661</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fa-solid fa-envelope text-secondary"></i>
                            <span>ppdb@smkntugumulyo.sch.id</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fa-solid fa-phone text-secondary"></i>
                            <span>(0733) 123456</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-gray-800 pt-8 text-center text-sm">
                <p>&copy; 2025 SMKN Tugumulyo. All Rights Reserved.</p>
                <p class="mt-2 text-xs text-gray-600">Made with HTML & Tailwind</p>
            </div>
        </div>
    </footer>

    <!-- Button Scroll Top -->
    <button id="scrollTopBtn"
        class="fixed bottom-6 right-6 bg-primary text-white w-12 h-12 rounded-full shadow-lg items-center justify-center hidden hover:bg-blue-800 transition z-40">
        <i class="fa-solid fa-arrow-up"></i>
    </button>

    <!-- Custom Modal for Success -->
    <div id="successModal"
        class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 hidden opacity-0 transition-opacity duration-300">
        <div class="bg-white rounded-lg p-8 max-w-sm text-center transform scale-90 transition-transform duration-300">
            <div
                class="w-16 h-16 bg-green-100 text-green-500 rounded-full flex items-center justify-center mx-auto mb-4 text-3xl">
                <i class="fa-solid fa-check"></i>
            </div>
            <h3 class="text-xl font-bold mb-2">Pendaftaran Berhasil!</h3>
            <p class="text-gray-600 mb-6">Data Anda telah kami terima. Silakan cek WhatsApp Anda untuk info selanjutnya.
            </p>
            <a href="siswa.html" class="bg-primary text-white px-6 py-2 rounded-lg hover:bg-blue-800 w-full">Tutup</a>
        </div>
    </div>

    <!-- JAVASCRIPT LOGIC -->
    <script>
        // 1. Mobile Menu Toggle
        const btn = document.getElementById('mobile-menu-btn');
        const menu = document.getElementById('mobile-menu');
        const mobileLinks = document.querySelectorAll('.mobile-link');

        btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });

        // Close menu when link is clicked
        mobileLinks.forEach(link => {
            link.addEventListener('click', () => {
                menu.classList.add('hidden');
            });
        });

        // 2. Navbar Scroll Effect
        const navbar = document.getElementById('navbar');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                navbar.classList.add('shadow-md');
                navbar.classList.remove('py-4');
                navbar.classList.add('py-2');
            } else {
                navbar.classList.remove('shadow-md');
                navbar.classList.remove('py-2');
                navbar.classList.add('py-4');
            }
        });

        // 3. Countdown Timer (Set date to 1 month from now)
        const targetDate = new Date();
        targetDate.setDate(targetDate.getDate() + 30);

        // function updateCountdown() {
        //     const now = new Date().getTime();
        //     const distance = targetDate - now;

        //     const days = Math.floor(distance / (1000 * 60 * 60 * 24));
        //     const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        //     const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        //     const seconds = Math.floor((distance % (1000 * 60)) / 1000);

        //     document.getElementById('days').innerText = String(days).padStart(2, '0');
        //     document.getElementById('hours').innerText = String(hours).padStart(2, '0');
        //     document.getElementById('minutes').innerText = String(minutes).padStart(2, '0');
        //     document.getElementById('seconds').innerText = String(seconds).padStart(2, '0');
        // }
        // setInterval(updateCountdown, 1000);

        // 4. FAQ Toggle
        function toggleFaq(button) {
            const content = button.nextElementSibling;
            const icon = button.querySelector('i');

            if (content.classList.contains('hidden')) {
                content.classList.remove('hidden');
                icon.style.transform = 'rotate(180deg)';
            } else {
                content.classList.add('hidden');
                icon.style.transform = 'rotate(0deg)';
            }
        }

        // 5. Scroll to Top & Fade In Animation
        const scrollTopBtn = document.getElementById('scrollTopBtn');
        const observerOptions = {
            root: null,
            rootMargin: '0px',
            threshold: 0.1
        };

        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    observer.unobserve(entry.target); // Only animate once
                }
            });
        }, observerOptions);

        document.querySelectorAll('.fade-in-section').forEach(section => {
            observer.observe(section);
        });

        window.addEventListener('scroll', () => {
            if (window.scrollY > 300) {
                scrollTopBtn.classList.remove('hidden');
                scrollTopBtn.classList.add('flex');
            } else {
                scrollTopBtn.classList.add('hidden');
                scrollTopBtn.classList.remove('flex');
            }
        });

        scrollTopBtn.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });

        // 6. Form Handling (Mockup)
        function handleFormSubmit(e) {
            e.preventDefault();
            const modal = document.getElementById('successModal');
            const modalContent = modal.querySelector('div');

            modal.classList.remove('hidden');
            // Small delay to allow display:block to apply before changing opacity
            setTimeout(() => {
                modal.classList.remove('opacity-0');
                modalContent.classList.remove('scale-90');
                modalContent.classList.add('scale-100');
            }, 10);

            document.getElementById('ppdbForm').reset();
        }

        function closeModal() {
            const modal = document.getElementById('successModal');
            const modalContent = modal.querySelector('div');

            modal.classList.add('opacity-0');
            modalContent.classList.remove('scale-100');
            modalContent.classList.add('scale-90');

            setTimeout(() => {
                modal.classList.add('hidden');
            }, 300);
        }
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        @if (session('success'))
            toastr.success("{{ session('success') }}", "Berhasil!", {
                closeButton: true,
                progressBar: true,
                timeOut: 3500,
            });
        @endif

        @if (session('error'))
            toastr.error("{{ session('error') }}", "Error!", {
                closeButton: true,
                progressBar: true,
                timeOut: 3500,
            });
        @endif
    </script>

</body>

</html>