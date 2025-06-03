@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <section class="bg-gradient-to-br from-blue-50 to-teal-50 pt-10 pb-16 lg:pt-16 lg:pb-16">
        <div class="container mx-auto px-10"> 
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="order-2 lg:order-1">
                    <h1 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-4">
                        Find Health Facility
                    </h1>
                    <h2 class="text-4xl lg:text-5xl font-bold text-blue-600 mb-6">
                        With Detailed Information
                    </h2>
                    <p class="text-gray-600 text-lg mb-8 leading-relaxed">
                        We use only the best quality materials on the market in order to provide the best products to our patients, so don't worry about anything and book yourself.
                    </p>
                    <a href="{{ route('search') }}" class="inline-flex items-center px-8 py-4 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition-colors">
                        Find Now
                        <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
                
                <div class="order-1 lg:order-2">
                    <div class="relative">
                        <img src="assets/images/hero/dokter.png" alt="Health Professionals" class="w-full h-auto rounded-lg">
                        <div class="absolute -top-4 -right-4 w-8 h-8 bg-blue-500 rounded-full"></div>
                        <div class="absolute top-10 -left-6 w-4 h-4 bg-teal-400 rounded-full"></div>
                        <div class="absolute -bottom-6 left-10 w-6 h-6 bg-red-400 rounded-full"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Latest Listed Health Facility</h2>
                <p class="text-gray-600">We're constantly adding new facilities to help you find the right healthcare.</p>
            </div>
            
            <div class="relative">
                <div class="absolute left-0 top-0 bottom-0 w-32 bg-gradient-to-r from-white to-transparent pointer-events-none z-10"></div>
                <div class="absolute right-0 top-0 bottom-0 w-32 bg-gradient-to-l from-white to-transparent pointer-events-none z-10"></div>
                <div class="overflow-x-auto pb-6 mx-6 scrollbar-hide">
                    <div class="flex space-x-6 min-w-max">
                        @foreach($latestHospitals as $item)
                            @php
                                // Pastikan $item->name adalah string dan escape untuk atribut alt HTML
                                $itemNameString = strval($item->name ?? 'Gambar Fasilitas Kesehatan');
                                $altTextHtml = htmlspecialchars($itemNameString, ENT_QUOTES, 'UTF-8');

                                // Pastikan $item->thumbnail adalah string, default ke string kosong jika null
                                $thumbnailNameString = strval($item->thumbnail ?? '');

                                // Path utama menggunakan helper asset() Laravel
                                // Hanya buat path jika thumbnailNameString tidak kosong
                                $primarySrc = $thumbnailNameString ? asset($thumbnailNameString) : '';

                                // Path fallback menggunakan Storage::url()
                                // Hanya buat path jika thumbnailNameString tidak kosong
                                $fallbackSrcUrl = $thumbnailNameString ? Storage::url($thumbnailNameString) : '';
                                // Escape untuk string JavaScript
                                $fallbackSrcForJs = str_replace("'", "\\'", str_replace("\\", "\\\\", $fallbackSrcUrl));

                                // Escape alt text (yang sudah di-HTML-escape) untuk string JavaScript
                                $altTextForJs = str_replace("'", "\\'", str_replace("\\", "\\\\", $altTextHtml));

                                $now = strtotime(date('H:i:s'));
                                $open = strtotime($item->open ?? '00:00:00'); // default jika null
                                $close = strtotime($item->close ?? '00:00:00'); // default jika null
                                
                                $isOpen = false;
                                if ($item->open && $item->close) { // Hanya cek jika open dan close time ada
                                    $isOpen = $open < $close
                                        ? ($now >= $open && $now <= $close) // Kasus normal: buka 08:00, tutup 17:00
                                        : ($now >= $open || $now <= $close); // Kasus lewat tengah malam: buka 22:00, tutup 06:00
                                }
                            @endphp
                            <div class="w-[300px] flex-none">
                                @if($thumbnailNameString && $primarySrc)
                                    <div class="w-full h-[200px] overflow-hidden rounded-md mb-5">
                                        <img src="{{ $primarySrc }}" 
                                             alt="{{ $altTextHtml }}"
                                             class="w-full h-full object-cover"
                                             onerror="this.onerror=null; if ('{{ $fallbackSrcForJs }}' !== '') { this.src='{{ $fallbackSrcForJs }}'; this.alt='{{ $altTextForJs }} (fallback)'; } else { this.alt='{{ $altTextForJs }} (gambar tidak tersedia)'; this.parentNode.innerHTML = '<div class=\'w-full h-full flex items-center justify-center bg-gray-100 text-gray-400\'><span class=\'text-xs\'>Gambar tidak dapat dimuat</span></div>'; }" />
                                    </div>
                                @else
                                    <div class="w-full h-[200px] overflow-hidden rounded-md mb-5 flex items-center justify-center bg-gray-100">
                                        <span class="text-gray-400">Gambar tidak tersedia</span>
                                    </div>
                                @endif

                                <div class="flex items-center justify-between gap-2 mb-2">
                                    <span class="bg-blue-50 text-biru font-medium rounded-md text-xs py-1 px-2">
                                        <a href="#">{{ $item->category->name ?? 'Tanpa Kategori' }}</a>
                                    </span>

                                    <div class="flex items-center gap-4">
                                        @if ($item->open && $item->close)
                                            @if ($isOpen)
                                                <span class="text-sm font-semibold px-2 py-1 rounded bg-green-100 text-green-600">
                                                    Open
                                                </span>
                                            @else
                                                <span class="text-sm font-semibold px-2 py-1 rounded bg-red-100 text-red-600">
                                                    Close
                                                </span>
                                            @endif
                                        @else
                                            <span class="text-sm font-semibold px-2 py-1 rounded bg-gray-100 text-gray-500">
                                                N/A
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <h1 class="text-lg font-semibold my-3 transition-all text-biru hover:text-blue-800">
                                    <a href="{{ route('detail', $item->slug) }}">
                                        {{ $item->category->name ?? '' }} {{ $item->name }}
                                    </a>
                                </h1>
                                <p class="text-sm/relaxed tracking-wider text-gray-500 truncate mb-2">
                                    {{ $item->description ?? 'Deskripsi tidak tersedia.' }}
                                </p>
                                <a href="{{ route('detail', $item->slug) }}" class="text-biru font-bold text-sm hover:text-blue-800">
                                    read more
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-16 bg-blue-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">OUR SERVICES</h2>
            </div>
            
            <div class="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                <div class="text-center">
                    <div class="bg-blue-600 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">See Medicine Content</h3>
                    <p class="text-gray-600">
                    Akses informasi detail mengenai berbagai jenis obat, termasuk komposisi, dosis, efek samping, dan interaksi obat yang penting untuk Anda ketahui.
                    </p>
                </div>
                
                <div class="text-center">
                    <div class="bg-teal-500 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Map Navigation</h3>
                    <p class="text-gray-600">
                    Temukan lokasi fasilitas kesehatan dengan mudah dan dapatkan panduan rute langsung ke tujuan Anda melalui peta interaktif kami.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="py-16 bg-white">
        <div class="container mx-auto px-10">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Health Facilities in Bandung</h2>
            </div>
            
            <div class="grid grid-cols-2 md:grid-cols-3 gap-6">
                @foreach($categoryCounts as $index => $categoryData)
                    @php
                        // Get random hospital from this category for thumbnail
                        $randomHospital = \App\Models\Hospital::where('category_id', $categoryData['id'])
                            ->inRandomOrder()
                            ->first();
                        
                        // Determine size class based on index
                        $sizeClass = match($index) {
                            0 => 'row-span-2 col-span-1', // Apotek - Tall
                            1 => 'col-span-1', // Posyandu - Normal
                            2 => 'col-span-1', // Laboratorium - Normal
                            3 => 'col-span-2', // Puskesmas - Wide
                            4 => 'row-span-2 col-span-2', // Rumah Sakit - Large
                            default => 'col-span-1'
                        };
                    @endphp
                    
                    <a href="{{ route('search', ['category_id' => $categoryData['id']]) }}" 
                       class="group relative overflow-hidden rounded-2xl {{ $sizeClass }}">
                        <div class="absolute inset-0 bg-black/40 group-hover:bg-black/50 transition-all z-10"></div>
                        
                        @if($randomHospital && $randomHospital->thumbnail)
                            <img src="{{ asset($randomHospital->thumbnail) }}" 
                                 alt="{{ $categoryData['name'] }}"
                                 class="w-full h-full object-cover"
                                 onerror="this.src='{{ asset('assets/images/default-hospital.jpg') }}'"
                            />
                        @else
                            <div class="w-full h-full bg-gray-200 flex items-center justify-center">
                                <span class="text-gray-400">No image available</span>
                            </div>
                        @endif
                        
                        <div class="absolute inset-0 z-20 p-6 flex flex-col justify-end text-white">
                            <div class="text-4xl md:text-5xl font-bold mb-2">{{ $categoryData['count'] }}</div>
                            <div class="text-lg md:text-xl font-medium">{{ $categoryData['name'] }}</div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>
    <section class="py-16 bg-gray-900 text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-8 text-teal-400">Tentang NaviTal</h2>
            
            <div class="max-w-4xl mx-auto space-y-6 text-lg leading-relaxed text-gray-300 mb-12">
                <p>
                    Halo para pengguna NaviTal! Kami, tim di balik NaviTal, memahami betul betapa krusialnya <strong class="text-white">akses cepat dan akurat ke layanan kesehatan</strong>, terutama dalam situasi mendesak.
                </p>
                <p>
                    NaviTal hadir sebagai <strong class="text-white">jembatan informasi yang menghubungkan Anda langsung dengan rumah sakit yang tepat</strong> di mana pun Anda berada di Bandung Raya.
                </p>
                <p>
                    Lebih dari sekadar aplikasi, NaviTal adalah wujud komitmen kami untuk mendukung <strong class="text-white">Sustainable Development Goals (SDG) 3: Good Health and Well-Being</strong>.
                </p>
            </div>
            
            <a href="{{ route('search') }}" class="inline-flex items-center justify-center px-10 py-4 bg-teal-500 text-white text-xl font-bold rounded-full shadow-xl hover:bg-teal-600 transition transform hover:scale-105 duration-300">
                Mulai Pencarian Sekarang!
                <svg class="ml-3 w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
            
            <div class="mt-16 pt-8 border-t border-gray-700 text-gray-400">
                <p class="text-lg">Terima kasih atas kepercayaan Anda menggunakan NaviTal.</p>
                <p class="text-lg mt-2 font-semibold text-teal-400">Salam hangat,<br>Tim Developer NaviTal</p>
            </div>
        </div>
    </section>
    @endsection

@push('after-style')
<style>
.line-clamp-2 {
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

/* Hide scrollbar for Chrome, Safari and Opera */
.scrollbar-hide::-webkit-scrollbar {
    display: none;
}

/* Hide scrollbar for IE, Edge and Firefox */
.scrollbar-hide {
    -ms-overflow-style: none;  /* IE and Edge */
    scrollbar-width: none;  /* Firefox */
}
</style>
@endpush