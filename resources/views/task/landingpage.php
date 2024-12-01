<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
    <title>Web Application Premium</title>
    <style>
        body {
            margin: 0; /* Remove default margin */
            padding-top: 64px; /* Add padding to prevent content from hiding under fixed header */
        }
        .header {
            position: fixed; /* Fix header to top */
            top: 0;
            left: 0;
            right: 0;
            z-index: 10; /* Ensure it stays above other content */
        }
        .navMenu {
            display: none; /* Hide the menu icon */
        }
        .nav {
            position: relative;
        }
        .social-list {
            display: flex;
            justify-content: center;
            gap: 16px; /* Space between icons */
        }
        .social-list li {
            display: flex;
            align-items: center;
        }
    </style>
</head>
<body class="bg-gray-100">

    <header class="bg-white shadow header">
        <div class="container mx-auto flex justify-between items-center p-4">
            <div class="navMenu" id="menu">
                <span class="text-2xl"><i class="ri-menu-line"></i></span>
            </div>
            <nav class="nav">
                <ul class="flex space-x-4 text-lg" id="list">
                    <li><a href="#home" class="text-gray-700 hover:text-pink-500">Home</a></li>
                    <li><a href="#app" class="text-gray-700 hover:text-pink-500">Application</a></li>
                    <li><a href="#contact" class="text-gray-700 hover:text-pink-500">Contact Us</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="container mx-auto my-8" id="home">
        <div class="imgHeader">
            <img src="img/header.png" alt="Header Image" class="w-full h-auto" />
        </div>
        <div class="content text-center mt-4">
            <h1 class="text-3xl font-bold mb-4">Akses ratusan film, musik favorit tanpa iklan, dan alat editing profesional dengan harga terjangkau</h1>
            <p class="desc text-gray-600">
                "Dapatkan pengalaman hiburan yang lengkap dengan akses ratusan film dan acara TV, nikmati musik favorit tanpa iklan, dan ciptakan karya seni menakjubkan dengan alat editing profesional—all dalam satu platform, semua dengan harga terjangkau! Bergabunglah sekarang dan rasakan semua manfaatnya!"
            </p>
        </div>
    </section>

    <section class="text-center my-8">
        <h2 class="text-2xl font-semibold">Akses Produk Kami</h2>
        <p class="desc1 text-gray-600 mt-2">
            Nikmati fitur-fitur yang ada di dalam aplikasi dengan harga lebih terjangkau. Bergabunglah bersama kami dan nikmati hiburannya tanpa batas.
        </p>
    </section>

    <section class="container mx-auto my-8" id="app">
        <h2 class="produk text-2xl font-semibold mb-4">Berbagai aplikasi yang tersedia :</h2>
        <ul class="app-list grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
            <li class="bg-white p-4 rounded shadow hover:shadow-lg transition">
                <img src="img/ne.jpeg" alt="Netflix Icon" class="h-20 mx-auto mb-2">
                <div class="text-center">
                    <h3 class="font-semibold">Netflix</h3>
                </div>
            </li>
            <li class="bg-white p-4 rounded shadow hover:shadow-lg transition">
                <img src="img/vi.png" alt="Viu Icon" class="h-20 mx-auto mb-2">
                <div class="text-center">
                    <h3 class="font-semibold">Viu</h3>
                </div>
            </li>
            <li class="bg-white p-4 rounded shadow hover:shadow-lg transition">
                <img src="img/we.png" alt="Wetv Icon" class="h-20 mx-auto mb-2">
                <div class="text-center">
                    <h3 class="font-semibold">Wetv</h3>
                </div>
            </li>
            <li class="bg-white p-4 rounded shadow hover:shadow-lg transition">
                <img src="img/pr.png" alt="Prime Video Icon" class="h-20 mx-auto mb-2">
                <div class="text-center">
                    <h3 class="font-semibold">Prime Video</h3>
                </div>
            </li>
            <li class="bg-white p-4 rounded shadow hover:shadow-lg transition">
                <img src="img/iq.jpeg" alt="Iqiy Icon" class="h-20 mx-auto mb-2">
                <div class="text-center">
                    <h3 class="font-semibold">Iqiy</h3>
                </div>
            </li>
            <li class="bg-white p-4 rounded shadow hover:shadow-lg transition">
                <img src="img/yt.png" alt="Youtube Icon" class="h-20 mx-auto mb-2">
                <div class="text-center">
                    <h3 class="font-semibold">Youtube</h3>
                </div>
            </li>
            <li class="bg-white p-4 rounded shadow hover:shadow-lg transition">
                <img src="img/am.png" alt="Alight Motion Icon" class="h-20 mx-auto mb-2">
                <div class="text-center">
                    <h3 class="font-semibold">Alight Motion</h3>
                </div>
            </li>
            <li class="bg-white p-4 rounded shadow hover:shadow-lg transition">
                <img src="img/cap.png" alt="Capcut Icon" class="h-20 mx-auto mb-2">
                <div class="text-center">
                    <h3 class="font-semibold">Capcut</h3>
                </div>
            </li>
            <li class="bg-white p-4 rounded shadow hover:shadow-lg transition">
                <img src="img/Spotify.png" alt="Spotify Icon" class="h-20 mx-auto mb-2">
                <div class="text-center">
                    <h3 class="font-semibold">Spotify</h3>
                </div>
            </li>
            <li class="bg-white p-4 rounded shadow hover:shadow-lg transition">
                <img src="img/ca.png" alt="Canva Icon" class="h-20 mx-auto mb-2">
                <div class="text-center">
                    <h3 class="font-semibold">Canva</h3>
                </div>
            </li>
        </ul>
    </section>

    <section class="contact my-8">
        <div class="logoCon text-center">
            <img src="img/logo.png" alt="Logo" class="logoC mx-auto mb-4">
            <div class="desc3">
                <p class="text-gray-600">Nikmati tayangan terbaru, musik premium tanpa iklan, dan ciptakan karya seni dengan alat editing profesional. Semua untuk pengalaman hiburan dan kreativitas terbaik!</p>
            </div>
        </div>
        <ul class="social-list mt-4">
            <li>
                <img src="img/email.png" alt="Email" class="h-6" />
                <a href="mailto:storemowies@gmail.com" class="text-gray-700 hover:text-pink-500">Email</a>
            </li>
            <li>
                <img src="img/ins.png" alt="Instagram" class="h-6" />
                <a href="https://www.instagram.com/mowiestore" target="_blank" class="text-gray-700 hover:text-pink-500">Instagram</a>
            </li>
            <li>
                <img src="img/wa.png" alt="WhatsApp" class="h-6" />
                <a href="https://wa.me/081585955825" target="_blank" class="text-gray-700 hover:text-pink-500">WhatsApp</a>
            </li>
        </ul>
    </section>

    <script src="premium.js"></script>
</body>
</html>