@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 pt-6 space-y-10">

    <!-- 1. Hero Section (Inspirasi Gambar 1: Full Rounded Banner dengan Search Capsule) -->
   <section class="relative rounded-[2.5rem] overflow-hidden bg-cover bg-center h-[480px] shadow-lg flex flex-col justify-between p-8 md:p-14 text-white" 
         style="background-image: linear-gradient(rgba(20, 50, 35, 0.55), rgba(15, 30, 20, 0.75)), url('{{ asset('images/gedung.jpg') }}');">
        
        <div>
            <span class="inline-block px-4 py-1.5 rounded-full bg-white/20 backdrop-blur-md text-xs font-medium tracking-wide uppercase">
                Selamat Datang di Portal Resmi 
            </span>
            <h2 class="text-3xl md:text-5xl font-extrabold mt-4 leading-tight max-w-2xl">
                PONDOK PESANTREN NURUL JADID AL ISLAMI
            </h2>
            <p class="text-slate-200 text-sm md:text-base mt-3 max-w-lg">
                Jl. KH. Salim no.99 Sumber Wringin - Sukowono - Jember
            </p>
        </div>

        <!-- Floating Search & Info Box (Persis Gaya Gambar 1) -->
        <div class="bg-white text-slate-800 p-3 rounded-2xl md:rounded-full shadow-xl flex flex-col md:flex-row items-center gap-3 max-w-3xl">
            <div class="flex-1 px-4 w-full">
                <span class="block text-[11px] text-slate-400 font-bold uppercase tracking-wider">Cari Informasi</span>
                <input type="text" placeholder="Cari kajian, jadwal sambang, artikel..." class="w-full text-sm outline-none bg-transparent">
            </div>
            <div class="hidden md:block w-[1px] h-8 bg-slate-200"></div>
            <div class="flex-1 px-4 w-full">
                <span class="block text-[11px] text-slate-400 font-bold uppercase tracking-wider">Kategori Program</span>
                <select class="w-full text-sm outline-none bg-transparent text-slate-600">
                    <option>Tahfidzul Quran</option>
                    <option>Madrasah Diniyah</option>
                    <option>Perguruan Tinggi</option>
                </select>
            </div>
            <button class="w-full md:w-auto bg-emerald-800 hover:bg-emerald-900 text-white font-medium px-8 py-3 rounded-full text-sm transition">
                Telusuri
            </button>
        </div>
    </section>

    <!-- 2. Portal Berita & Informasi Terkini (Struktur Konten Gambar 2 dipadukan Style Modern) -->
    <section class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Berita Utama / Highlight (Kiri: 2 Kolom) -->
        <div class="lg:col-span-2 space-y-4">
            <div class="border-b-2 border-emerald-800 pb-2">
                <h3 class="text-xl font-bold text-slate-800">Warta Pesantren</h3>
            </div>
            <div class="bg-white rounded-3xl overflow-hidden border border-slate-100 shadow-sm hover:shadow-md transition">
                <img src="{{ asset('images/warta.jpg') }}" class="w-full h-80 object-cover" alt="Berita">
                <div class="p-6">
                    <span class="text-xs font-semibold text-emerald-700 bg-emerald-50 px-3 py-1 rounded-full">Keislaman & Wawasan</span>
                    <h4 class="text-2xl font-bold mt-3 text-slate-900 leading-snug hover:text-emerald-800 cursor-pointer">
                        Santri Pesantren Nurul Jadid Al Islami Melaksanakan Upacara Peringatan Hari Santri Nasional 2026
                    </h4>
                    <p class="text-slate-500 text-sm mt-3 leading-relaxed">
                        Pondok pesantren terus mendorong santri untuk memiliki komitmen kebangsaan yang kokoh sejalan dengan penguasaan ilmu agama mendalam...
                    </p>
                    <div class="mt-4 pt-4 border-t border-slate-100 flex items-center justify-between text-xs text-slate-400">
                        <span>Oleh: Humas Pesantren</span>
                        <span>{{ date('d F Y') }}</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Kolom Kanan: List Berita & Pengumuman (Sesuai List di Gambar 2) -->
        <div class="space-y-4">
            <div class="border-b-2 border-emerald-800 pb-2">
                <h3 class="text-xl font-bold text-slate-800">Kabar Terbaru</h3>
            </div>
            <div class="bg-white rounded-3xl p-6 border border-slate-100 shadow-sm space-y-5">
                @php
                    $sampleList = [
                        ['date' => '25 Okt 2026', 'title' => 'Capaian Akademik Santri Harus Bermuara pada Manfaat Nyata bagi Masyarakat'],
                        ['date' => '24 Okt 2026', 'title' => 'Kiai Berpesan Lulusan Santri Wajib Hadirkan Manfaat dan Akhlak Terpuji'],
                        ['date' => '22 Okt 2026', 'title' => 'Gelar Pengabdian Masyarakat, Poskestren Layani Ratusan Warga Sekitar'],
                        ['date' => '20 Okt 2026', 'title' => 'Surat Edaran Libur Santri dan Ketentuan Jadwal Sambang Wali Santri']
                    ];
                @endphp

                @foreach($sampleList as $item)
                <div class="flex gap-4 items-start group cursor-pointer pb-4 border-b border-slate-100 last:border-0 last:pb-0">
                    <div class="w-16 h-16 rounded-xl bg-slate-100 flex-shrink-0 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1519452635265-7b1fbfd1e4e0?auto=format&fit=crop&w=300&q=80" class="w-full h-full object-cover group-hover:scale-105 transition" alt="">
                    </div>
                    <div>
                        <span class="text-[11px] text-emerald-700 font-semibold">{{ $item['date'] }}</span>
                        <h5 class="text-xs font-bold text-slate-800 group-hover:text-emerald-700 transition leading-snug mt-1">
                            {{ $item['title'] }}
                        </h5>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- 3. Section Tiga Kartu / Pengasuh (Inspirasi Grid 3 Kartu Gambar 1 + Section Pengasuh Gambar 2) -->
    <section class="space-y-6 pt-6">
        <div class="text-center max-w-xl mx-auto">
            <span class="text-xs font-bold text-emerald-800 uppercase tracking-widest">Hikmah & Tausiyah</span>
            <h3 class="text-2xl font-bold text-slate-900 mt-1">Dawuh & Nasihat Pengasuh</h3>
            <p class="text-xs text-slate-500 mt-1">Mutiara nasihat pengasuh pondok pesantren penyejuk rohani santri dan umat.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Card 1 -->
            <div class="bg-white rounded-3xl p-5 border border-slate-100 shadow-sm hover:shadow-md transition flex flex-col justify-between">
                <div class="rounded-2xl overflow-hidden h-48 bg-slate-100 mb-4">
                    <img src="https://images.unsplash.com/photo-1544717305-2782549b5136?auto=format&fit=crop&w=600&q=80" class="w-full h-full object-cover" alt="Pengasuh">
                </div>
                <div>
                    <span class="text-[11px] font-semibold text-emerald-700">Tausiyah Harian</span>
                    <h4 class="text-base font-bold text-slate-800 mt-1">Khusyu' Saat Raga Mematung dan Hati Menghadap Ilahi</h4>
                    <p class="text-xs text-slate-500 mt-2 line-clamp-3">
                        Ibadah bukan sekadar rutinitas lahiriah, melainkan ketundukan batin yang tercermin dalam perbuatan sehari-hari.
                    </p>
                </div>
                <div class="mt-5 pt-3 border-t border-slate-100 flex items-center justify-between">
                    <span class="text-xs font-medium text-slate-600">K.H. Penasihat</span>
                    <button class="text-xs font-semibold text-emerald-700 bg-emerald-50 px-3 py-1.5 rounded-full hover:bg-emerald-100">Baca Selengkapnya</button>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="bg-white rounded-3xl p-5 border border-slate-100 shadow-sm hover:shadow-md transition flex flex-col justify-between">
                <div class="rounded-2xl overflow-hidden h-48 bg-slate-100 mb-4">
                    <img src="https://images.unsplash.com/photo-1497633762265-9d179a990aa6?auto=format&fit=crop&w=600&q=80" class="w-full h-full object-cover" alt="Pengasuh">
                </div>
                <div>
                    <span class="text-[11px] font-semibold text-emerald-700">Akhlak Santri</span>
                    <h4 class="text-base font-bold text-slate-800 mt-1">Ilmu Tidak Ditentukan oleh Simbol Lahiriah Semata</h4>
                    <p class="text-xs text-slate-500 mt-2 line-clamp-3">
                        Keluasan ilmu seorang penuntut ilmu tercermin dari kerendahan hati, adab terhadap guru, dan manfaatnya bagi sesama.
                    </p>
                </div>
                <div class="mt-5 pt-3 border-t border-slate-100 flex items-center justify-between">
                    <span class="text-xs font-medium text-slate-600">Majelis Keilmuan</span>
                    <button class="text-xs font-semibold text-emerald-700 bg-emerald-50 px-3 py-1.5 rounded-full hover:bg-emerald-100">Baca Selengkapnya</button>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="bg-white rounded-3xl p-5 border border-slate-100 shadow-sm hover:shadow-md transition flex flex-col justify-between">
                <div class="rounded-2xl overflow-hidden h-48 bg-slate-100 mb-4">
                    <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?auto=format&fit=crop&w=600&q=80" class="w-full h-full object-cover" alt="Pengasuh">
                </div>
                <div>
                    <span class="text-[11px] font-semibold text-emerald-700">Pendidikan Karakter</span>
                    <h4 class="text-base font-bold text-slate-800 mt-1">Menjaga Amanah Tradisi di Era Transformasi Digital</h4>
                    <p class="text-xs text-slate-500 mt-2 line-clamp-3">
                        Santri masa depan harus cakap teknologi namun tetap memegang teguh sanad keilmuan dan adab turats pesantren.
                    </p>
                </div>
                <div class="mt-5 pt-3 border-t border-slate-100 flex items-center justify-between">
                    <span class="text-xs font-medium text-slate-600">Dewan Pengasuh</span>
                    <button class="text-xs font-semibold text-emerald-700 bg-emerald-50 px-3 py-1.5 rounded-full hover:bg-emerald-100">Baca Selengkapnya</button>
                </div>
            </div>
        </div>
    </section>


@endsection