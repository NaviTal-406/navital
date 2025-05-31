@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <section class="py-24">
        <div class="container">

            <div class="relative overflow-hidden">
                <div class="max-w-[85rem] mx-auto px-4">
                    <div class="text-center">
                        <div class="relative flex justify-between items-center">
                            <div class="">
                                <span class="text-3xl font-bold text-biru">
                                    Health Facility In Bandung
                                </span>
                            </div>
                            <form action="{{ route('search') }}" method="GET">
                                @csrf {{-- Sebaiknya @csrf tidak diperlukan untuk GET request, tapi tidak masalah jika ada --}}
                                <div class="relative z-10 flex space-x-3 p-3">
                                    <div class="flex-[1_0_0%]">
                                        <label for="keyword" class="block text-sm text-gray-700 font-medium"><span class="sr-only">Search article</span></label>
                                        <input type="text" name="keyword" id="keyword" value="{{ request('keyword') }}" class="py-2.5 px-4 block w-full border-2 rounded-lg border-teal-600 placeholder:text-gray-500 text-gray-500" placeholder="Cari Faskes">
                                    </div>
                                    <div class="flex-[0_0_auto]">
                                        <button type="submit" class="w-[46px] h-[46px] inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border bg-red-400 text-white hover:bg-red-500 disabled:opacity-50 disabled:pointer-events-none">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </form>
                            </div>
                    </div>
                </div>
            </div>
            

            <div class="grid lg:grid-cols-3 grid-cols-1 gap-6 lg:py-16 py-14" data-aos="fade-up">

                @forelse ($hospitals ?? [] as $item)
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
                    @endphp
                    <div>
                        @if($thumbnailNameString && $primarySrc) {{-- Hanya tampilkan blok gambar jika ada thumbnail --}}
                            <div class="w-full h-[200px] overflow-hidden rounded-md mb-5">
                                <img src="{{ $primarySrc }}" 
                                     alt="{{ $altTextHtml }}"
                                     class="w-full h-full object-cover"
                                     onerror="this.onerror=null; if ('{{ $fallbackSrcForJs }}' !== '') { this.src='{{ $fallbackSrcForJs }}'; this.alt='{{ $altTextForJs }} (fallback)'; } else { this.alt='{{ $altTextForJs }} (gambar tidak tersedia)'; this.parentNode.innerHTML = '<div class=\'w-full h-full flex items-center justify-center bg-gray-100 text-gray-400\'><span class=\'text-xs\'>Gambar tidak dapat dimuat</span></div>'; }" />
                            </div>
                        @else
                            {{-- Placeholder jika tidak ada thumbnail sama sekali --}}
                            <div class="w-full h-[200px] overflow-hidden rounded-md mb-5 flex items-center justify-center bg-gray-100">
                                <span class="text-gray-400">Gambar tidak tersedia</span>
                            </div>
                        @endif

                        <div class="flex items-center justify-between gap-2 mb-2">
                            <span class="bg-blue-50 text-biru font-medium rounded-md text-xs py-1 px-2">
                                {{-- Sebaiknya ada link yang valid jika kategori bisa diklik --}}
                                <a href="#">{{ $item->category->name ?? 'Tanpa Kategori' }}</a>
                            </span>

                            @php
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

                            <div class="flex items-center gap-4">
                                @if ($item->open && $item->close) {{-- Tampilkan status hanya jika jam operasional ada --}}
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

                @empty
                    <div class="col-span-full text-center"> {{-- Menggunakan col-span-full agar pesan di tengah grid --}}
                        <p class="text-gray-500">Tidak ada data faskes yang ditemukan.</p>
                    </div>
                @endforelse
            </div>

            <div class="my-12 mx-auto"> {{-- Mengubah mb-24 menjadi my-12 untuk konsistensi margin --}}
                @if ($hospitals instanceof \Illuminate\Pagination\AbstractPaginator && $hospitals->hasPages())
                    {{ $hospitals->links() }}
                @endif
            </div>

            <div class="col-12"> {{-- Kelas col-12 mungkin dari Bootstrap, pastikan grid Tailwind digunakan secara konsisten --}}
                <div class="mb-3 mt-5">
                    <div style="height: 300px"> {{-- Atau gunakan kelas Tailwind h-[300px] --}}
                        <div id="map" class="rounded w-full h-full"></div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    @endsection

@push('after-style')
    <style>
        #map {
            height: 100%;
        }

        /* CSS lainnya tetap sama */
        #description {
            font-family: Roboto;
            font-size: 15px;
            font-weight: 300;
        }

        #infowindow-content .title {
            font-weight: bold;
        }

        #infowindow-content {
            display: none;
        }

        #map #infowindow-content {
            display: inline;
        }

        .pac-card {
            background-color: #fff;
            border: 0;
            border-radius: 2px;
            box-shadow: 0 1px 4px -1px rgba(0, 0, 0, 0.3);
            margin: 10px;
            padding: 0 0.5em;
            font: 400 18px Roboto, Arial, sans-serif;
            overflow: hidden;
            font-family: Roboto;
            padding: 0;
        }

        #pac-container {
            padding-bottom: 12px;
            margin-right: 12px;
        }

        .pac-controls {
            display: inline-block;
            padding: 5px 11px;
        }

        .pac-controls label {
            font-family: Roboto;
            font-size: 13px;
            font-weight: 300;
        }

        #pac-input {
            background-color: #fff;
            font-family: Roboto;
            font-size: 15px;
            font-weight: 300;
            margin-left: 12px;
            padding: 0 11px 0 13px;
            text-overflow: ellipsis;
            width: 400px;
        }

        #pac-input:focus {
            border-color: #4d90fe;
        }

        #title {
            color: #fff;
            background-color: #4d90fe;
            font-size: 25px;
            font-weight: 500;
            padding: 6px 12px;
        }

        #target {
            width: 345px;
        }
    </style>
@endpush

@push('after-script')
    <link
        rel="stylesheet"
        href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
        crossorigin=""/>
    <script
        src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
        crossorigin=""></script>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            // Cek apakah $hospitals ada dan merupakan objek (bukan array kosong hasil json_encode('null'))
            const businessDataEncoded = {!! isset($hospitals) && count($hospitals) ? json_encode($hospitals) : 'null' !!};
            
            // Periksa apakah businessDataEncoded adalah null atau tidak memiliki properti 'data'
            if (!businessDataEncoded || !businessDataEncoded.data || businessDataEncoded.data.length === 0) {
                console.warn("Tidak ada data fasilitas kesehatan untuk ditampilkan di peta.");
                // Anda mungkin ingin menyembunyikan peta atau menampilkan pesan jika tidak ada data
                 const mapElement = document.getElementById('map');
                if(mapElement && mapElement.parentNode && mapElement.parentNode.parentNode) {
                     mapElement.parentNode.parentNode.style.display = 'none'; // Sembunyikan kontainer peta
                }
                return;
            }

            const hospitalsData = businessDataEncoded.data;

            // Inisialisasi peta
            const map = L.map('map').setView([-6.922187861246663, 107.61946363551262], 13); // Default Bandung

            // Tambahkan tile layer dari OpenStreetMap
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '© <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);

            const markers = [];

            const locateControl = L.control({ position: 'topright' });

            locateControl.onAdd = function (mapInstance) {
                const div = L.DomUtil.create('div', 'leaflet-bar leaflet-control leaflet-control-custom'); // Tambahkan kelas custom
                div.style.backgroundColor = 'white';
                div.style.cursor = 'pointer';
                div.title = 'Klik untuk mendapatkan lokasi Anda';

                const button = document.createElement('button');
                button.innerHTML = '📍'; // Menggunakan emoji lokasi
                button.style.width = '30px'; // Sesuaikan ukuran
                button.style.height = '30px';
                button.style.fontSize = '1.2em'; // Sesuaikan ukuran font emoji
                button.style.lineHeight = '30px';
                button.style.border = 'none';
                button.style.background = 'transparent';
                button.setAttribute('aria-label', 'Dapatkan lokasi saya');


                button.onclick = (e) => {
                    e.preventDefault(); // Mencegah perilaku default jika di dalam form
                    e.stopPropagation(); // Mencegah event bubbling

                    if (navigator.geolocation) {
                        navigator.geolocation.getCurrentPosition((position) => {
                            const lat = position.coords.latitude;
                            const lng = position.coords.longitude;
                            const userLatLng = [lat, lng];

                            // Hapus marker lokasi pengguna sebelumnya jika ada
                            if (window.userLocationMarker) {
                                mapInstance.removeLayer(window.userLocationMarker);
                            }
                            
                            // Icon kustom untuk lokasi pengguna (contoh sederhana)
                            const userIcon = L.divIcon({
                                className: 'custom-user-marker',
                                html: '<div style="background-color: #2563EB; width: 16px; height: 16px; border-radius: 50%; border: 2px solid white; box-shadow: 0 0 5px rgba(0,0,0,0.5);"></div>',
                                iconSize: [16, 16],
                                iconAnchor: [8, 8]
                            });

                            window.userLocationMarker = L.marker(userLatLng, { icon: userIcon })
                                .addTo(mapInstance)
                                .bindPopup("Lokasi Anda Saat Ini")
                                .openPopup();

                            mapInstance.setView(userLatLng, 14); // Zoom lebih dekat ke lokasi pengguna
                        }, (error) => {
                            alert("Gagal mendapatkan lokasi Anda. Pastikan izin lokasi telah diberikan.");
                            console.error("Geolocation error:", error);
                        });
                    } else {
                        alert("Geolocation tidak didukung oleh browser Anda.");
                    }
                };

                div.appendChild(button);
                return div;
            };

            locateControl.addTo(map);

            hospitalsData.forEach((business) => {
                // Pastikan latitude dan longitude ada dan valid
                if (business.latitude != null && business.longitude != null) {
                    const lat = parseFloat(business.latitude);
                    const lng = parseFloat(business.longitude);

                    if (!isNaN(lat) && !isNaN(lng)) {
                        const marker = L.marker([lat, lng]).addTo(map);
                        const detailUrl = `/detail/${business.slug}`; // Asumsi route detail adalah /detail/{slug}

                        marker.bindPopup(`
                            <div style="font-family: Arial, sans-serif; font-size: 14px;">
                                <strong style="font-size: 16px; color: #333;">${business.category && business.category.name ? business.category.name + ' - ' : ''}${business.name}</strong><br>
                                <span style="color: #555;">${business.address || 'Alamat tidak tersedia'}</span><br>
                                <a href="${detailUrl}" target="_blank" style="color: #007bff; text-decoration: none; font-weight: bold;">Lihat Detail</a>
                            </div>
                        `);
                        markers.push(marker);
                    }
                }
            });

            // Fit bounds jika ada marker
            if (markers.length > 0) {
                const group = new L.featureGroup(markers);
                map.fitBounds(group.getBounds().pad(0.1)); // Tambahkan sedikit padding
            } else if (hospitalsData.length > 0 && markers.length === 0) {
                // Jika ada data tapi tidak ada marker valid (misal lat/lng salah semua)
                console.warn("Data fasilitas ada, tetapi tidak ada koordinat yang valid untuk ditampilkan di peta.");
            }
        });
    </script>
@endpush