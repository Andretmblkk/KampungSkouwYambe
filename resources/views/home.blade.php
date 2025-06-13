@extends('layouts.app')

@section('title', 'Beranda')

@section('scripts')
<!-- Leaflet JS -->
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Koordinat Kampung Skouw Yambe yang akurat
        const skouwYambe = [-2.612338, 140.850206];
        
        // Membuat peta dengan zoom level yang lebih dekat
        const map = L.map('map').setView(skouwYambe, 16);

        // Menambahkan tile layer satelit dari Google
        L.tileLayer('https://mt1.google.com/vt/lyrs=s&x={x}&y={y}&z={z}', {
            attribution: '&copy; <a href="https://www.google.com/maps">Google Maps</a>',
            maxZoom: 20
        }).addTo(map);

        // Menambahkan marker dengan ikon kustom
        const marker = L.marker(skouwYambe, {
            title: "Kampung Skouw Yambe"
        }).addTo(map);

        // Menambahkan popup dengan informasi lebih detail
        marker.bindPopup(`
            <div class="p-2">
                <h3 class="font-bold text-lg">Kampung Skouw Yambe</h3>
                <p class="text-sm">Kampung Skouw Yambe, Muara Tami</p>
                <p class="text-sm">Jayapura, Papua</p>
                <p class="text-sm mt-2">Koordinat: 2°36'44.4"S 140°51'00.7"E</p>
                <a href="https://www.google.com/maps?q=-2.612338,140.850206" 
                   target="_blank" 
                   class="inline-block mt-2 px-3 py-1 bg-green-600 text-white text-sm rounded hover:bg-green-700 transition-colors">
                    Lihat di Google Maps
                </a>
            </div>
        `);

        // Menambahkan circle untuk area kampung dengan radius yang lebih sesuai
        const circle = L.circle(skouwYambe, {
            color: '#22c55e',
            fillColor: '#22c55e',
            fillOpacity: 0.1,
            radius: 300 // Radius disesuaikan dengan ukuran kampung
        }).addTo(map);

        // Menambahkan kontrol zoom
        L.control.zoom({
            position: 'bottomright'
        }).addTo(map);
    });
</script>
@endsection

@section('content')
    <!-- Hero Section -->
    <div class="relative h-screen">
        <div class="absolute inset-0">
            <img src="{{ asset('images/1.png') }}" alt="Kampung Skouw Yambe" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-black/50"></div>
        </div>
        <div class="relative max-w-7xl mx-auto px-4 h-full flex items-center">
            <div class="text-white">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">
                    <span class="inline-block animate-slide-in-right">Selamat Datang di</span>
                    <span class="inline-block animate-slide-in-left animation-delay-200">Kampung Skouw Yambe</span>
                </h1>
                <p class="text-base md:text-lg mb-6 animate-fade-in-up animation-delay-200 max-w-xl">
                    Kampung yang terletak di perbatasan Indonesia-Papua Nugini dengan keindahan alam 
                    dan kekayaan budaya yang unik.
                </p>
                <div class="animate-fade-in-up animation-delay-400">
                    <button onclick="window.location.href='#tentang'" class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-6 rounded-md transition-colors duration-300">
                        Jelajahi Kampung Kami
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Potensi Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12 text-gray-900">Potensi Kampung</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-gray-50 rounded-xl p-6 shadow-lg hover:shadow-xl transition duration-300 transform hover:-translate-y-2">
                    <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Pertanian</h3>
                    <p class="text-gray-600">Kampung Skouw Yambe memiliki lahan pertanian yang subur dengan hasil panen melimpah.</p>
                </div>
                <div class="bg-gray-50 rounded-xl p-6 shadow-lg hover:shadow-xl transition duration-300 transform hover:-translate-y-2">
                    <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Pariwisata</h3>
                    <p class="text-gray-600">Destinasi wisata alam yang menawarkan pemandangan indah dan pengalaman budaya.</p>
                </div>
                <div class="bg-gray-50 rounded-xl p-6 shadow-lg hover:shadow-xl transition duration-300 transform hover:-translate-y-2">
                    <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Budaya</h3>
                    <p class="text-gray-600">Kekayaan budaya lokal yang terjaga dengan baik dan menjadi daya tarik wisata.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12 text-gray-900">Galeri Kampung</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="relative group overflow-hidden rounded-lg">
                    <img src="/images/2.png" alt="Galeri 1" class="w-full h-64 object-cover transform group-hover:scale-110 transition duration-300">
                    <div class="absolute inset-0 bg-black bg-opacity-40 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center">
                        <p class="text-white text-lg font-medium">Pemandangan Alam</p>
                    </div>
                </div>
                <div class="relative group overflow-hidden rounded-lg">
                    <img src="/images/3.png" alt="Galeri 2" class="w-full h-64 object-cover transform group-hover:scale-110 transition duration-300">
                    <div class="absolute inset-0 bg-black bg-opacity-40 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center">
                        <p class="text-white text-lg font-medium">Budaya Tradisional</p>
                    </div>
                </div>
                <div class="relative group overflow-hidden rounded-lg">
                    <img src="/images/4.png" alt="Galeri 3" class="w-full h-64 object-cover transform group-hover:scale-110 transition duration-300">
                    <div class="absolute inset-0 bg-black bg-opacity-40 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center">
                        <p class="text-white text-lg font-medium">Kegiatan Masyarakat</p>
                    </div>
                </div>
            </div>
            <div class="text-center mt-8">
                <a href="/galeri" class="inline-block bg-green-600 hover:bg-green-700 text-white px-8 py-3 rounded-lg text-lg font-medium transition duration-300">
                    Lihat Semua Galeri
                </a>
            </div>
        </div>
    </section>

    <!-- Berita Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Berita Terkini</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Berita Card 1 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-200 dark:border-gray-800 transition-all duration-300 hover:shadow-2xl hover:-translate-y-2 group">
                    <div class="relative overflow-hidden">
                        <img src="/images/1.png" alt="Berita 1" class="w-full h-48 object-cover transition-transform duration-500 group-hover:scale-110">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2 text-gray-900 dark:text-white group-hover:text-green-600 dark:group-hover:text-green-400 transition-colors">Pembangunan Infrastruktur di Kampung Skouw Yambe</h3>
                        <p class="text-black mb-4">Pemerintah setempat melakukan pembangunan infrastruktur untuk meningkatkan kualitas hidup warga.</p>
                        <a href="https://www.papua.go.id/view-detail-berita-123/pembangunan-infrastruktur-di-kampung-skouw-yambe" target="_blank" class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-green-600 text-white hover:bg-green-700 h-10 px-4 py-2 w-full border-2 border-green-600 hover:border-green-700 shadow-md hover:shadow-lg transform hover:-translate-y-0.5 transition-all duration-200">
                            Baca Selengkapnya
                        </a>
                    </div>
                </div>

                <!-- Berita Card 2 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-200 dark:border-gray-800 transition-all duration-300 hover:shadow-2xl hover:-translate-y-2 group">
                    <div class="relative overflow-hidden">
                        <img src="/images/2.png" alt="Berita 2" class="w-full h-48 object-cover transition-transform duration-500 group-hover:scale-110">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2 text-gray-900 dark:text-white group-hover:text-green-600 dark:group-hover:text-green-400 transition-colors">Festival Budaya Kampung Skouw Yambe</h3>
                        <p class="text-black mb-4">Festival budaya tahunan kembali digelar untuk melestarikan warisan budaya lokal.</p>
                        <a href="https://www.papua.go.id/view-detail-berita-124/festival-budaya-kampung-skouw-yambe" target="_blank" class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-green-600 text-white hover:bg-green-700 h-10 px-4 py-2 w-full border-2 border-green-600 hover:border-green-700 shadow-md hover:shadow-lg transform hover:-translate-y-0.5 transition-all duration-200">
                            Baca Selengkapnya
                        </a>
                    </div>
                </div>

                <!-- Berita Card 3 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-200 dark:border-gray-800 transition-all duration-300 hover:shadow-2xl hover:-translate-y-2 group">
                    <div class="relative overflow-hidden">
                        <img src="/images/3.png" alt="Berita 3" class="w-full h-48 object-cover transition-transform duration-500 group-hover:scale-110">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2 text-gray-900 dark:text-white group-hover:text-green-600 dark:group-hover:text-green-400 transition-colors">Program Pemberdayaan Masyarakat</h3>
                        <p class="text-black mb-4">Program pemberdayaan masyarakat untuk meningkatkan ekonomi warga kampung.</p>
                        <a href="https://www.papua.go.id/view-detail-berita-125/program-pemberdayaan-masyarakat-kampung-skouw-yambe" target="_blank" class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-green-600 text-white hover:bg-green-700 h-10 px-4 py-2 w-full border-2 border-green-600 hover:border-green-700 shadow-md hover:shadow-lg transform hover:-translate-y-0.5 transition-all duration-200">
                            Baca Selengkapnya
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-8">
                <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-2">Lokasi Kami</h2>
                <p class="text-base text-black ">Kampung Skouw Yambe, Muara Tami, Jayapura, Papua</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <div id="map" class="w-full h-[400px] z-0"></div>
                </div>
                <div class="space-y-6">
                    <div class="bg-white rounded-xl shadow-lg p-6">
                        <h3 class="text-xl font-semibold mb-4">Alamat</h3>
                        <p class="text-gray-600">Kampung Skouw Yambe, Jayapura, Papua</p>
                    </div>
                    <div class="bg-white rounded-xl shadow-lg p-6">
                        <h3 class="text-xl font-semibold mb-4">Akses</h3>
                        <ul class="text-gray-600 space-y-2">
                            <li>• 30 menit dari Bandara Sentani</li>
                            <li>• 45 menit dari Kota Jayapura</li>
                            <li>• Akses transportasi umum tersedia</li>
                        </ul>
                    </div>
                    <div class="bg-white rounded-xl shadow-lg p-6">
                        <h3 class="text-xl font-semibold mb-4">Jam Operasional</h3>
                        <ul class="text-gray-600 space-y-2">
                            <li>• Senin - Jumat: 08:00 - 17:00</li>
                            <li>• Sabtu: 08:00 - 15:00</li>
                            <li>• Minggu: Tutup</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sejarah Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12 text-gray-900">Sejarah Kampung</h2>
            <div class="text-center mb-8">
                <p class="text-gray-800 max-w-2xl mx-auto mb-6 text-lg">
                    Kampung Skouw Yambe memiliki sejarah panjang yang kaya akan budaya dan peran penting dalam sejarah Indonesia. 
                    Mari kita jelajahi lebih dalam tentang asal-usul dan perjalanan kampung kami.
                </p>
                <a href="{{ route('sejarah') }}" class="inline-flex items-center justify-center rounded-md bg-green-600 px-6 py-3 text-sm font-medium text-white shadow transition-colors hover:bg-green-700 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-green-500 disabled:pointer-events-none disabled:opacity-50">
                    Baca Selengkapnya
                </a>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-gray-50 p-6 rounded-xl shadow-lg hover:shadow-xl transition duration-300">
                    <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2 text-gray-900">Asal Usul</h3>
                    <p class="text-gray-800">Kampung yang kaya akan sejarah dan budaya di Distrik Muara Tami, Kota Jayapura, Papua.</p>
                </div>
                <div class="bg-gray-50 p-6 rounded-xl shadow-lg hover:shadow-xl transition duration-300">
                    <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2 text-gray-900">Perang Dunia II</h3>
                    <p class="text-gray-800">Memiliki peran penting dalam sejarah Perang Dunia II dengan peninggalan lapangan terbang Jepang.</p>
                </div>
                <div class="bg-gray-50 p-6 rounded-xl shadow-lg hover:shadow-xl transition duration-300">
                    <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2 text-gray-900">Masa Kini</h3>
                    <p class="text-gray-800">Desa Wisata Tetang Pe yang masuk 500 besar ADWI 2024 dengan berbagai potensi wisata.</p>
                </div>
            </div>
        </div>
    </section>
@endsection 