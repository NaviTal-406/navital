@extends('layouts.app')

@section('title', $hospital->name ?? 'Detail Fasilitas Kesehatan')

@section('content')

    <section class="pt-20">
        <div class="container">

            <div class="py-14">
                <div class="flex flex-wrap items-center gap-2 bg-gray-50 py-2 px-3 text-sm text-gray-700">
                    <a href="{{ route('home') }}" class="transition-all text-biru hover:text-blue-800">Home</a> /
                    <a href="{{ route('search') }}" class="transition-all text-biru hover:text-blue-800">Fasilitas Kesehatan</a> /
                    <p class="text-gray-500">{{ $hospital->name ?? 'Detail' }}</p>
                </div>
            </div>

            <div class="lg:w-4/5">
                @if($hospital->category)
                <span class="bg-blue-50 text-biru font-medium rounded-md text-xs py-1 px-2">
                    <a href="#">{{ $hospital->category->name }}</a>
                </span>
                @endif
                <h1 class="lg:text-5xl/snug text-3xl/snug mt-3 text-biru font-semibold">
                    @if($hospital->category){{ $hospital->category->name }} - @endif {{ $hospital->name }}
                </h1>
            </div>
        </div>
    </section>

    <section class="py-10">
        <div class="container">
            <div>
                @php
                    $hospitalNameString = strval($hospital->name ?? 'Gambar Fasilitas Kesehatan');
                    $altTextHtml = htmlspecialchars($hospitalNameString, ENT_QUOTES, 'UTF-8');
                    $thumbnailNameString = strval($hospital->thumbnail ?? '');
                    $primarySrc = $thumbnailNameString ? asset($thumbnailNameString) : '';
                    $fallbackSrcUrl = $thumbnailNameString ? Storage::url($thumbnailNameString) : '';
                    $fallbackSrcForJs = str_replace("'", "\\'", str_replace("\\", "\\\\", $fallbackSrcUrl));
                    $primarySrcForJs = str_replace("'", "\\'", str_replace("\\", "\\\\", $primarySrc));
                    $altTextForJs = str_replace("'", "\\'", str_replace("\\", "\\\\", $altTextHtml));
                @endphp

                @if($thumbnailNameString && $primarySrc)
                    <img src="{{ $primarySrc }}"
                         alt="{{ $altTextHtml }}"
                         style="max-height: 400px; width: 100%; object-fit: contain;"
                         class="rounded-lg my-10 shadow-md bg-gray-50"
                         onerror="this.onerror=null; const fallback = '{{ $fallbackSrcForJs }}'; const primary = '{{ $primarySrcForJs }}'; if (fallback && fallback !== primary && fallback !== window.location.origin + '/') { this.src=fallback; this.alt='{{ $altTextForJs }} (fallback)'; } else { this.alt='{{ $altTextForJs }} (gambar utama tidak dapat dimuat)'; this.parentNode.innerHTML = `<div style='max-height: 400px; min-height: 200px; width: 100%; display: flex; align-items: center; justify-content: center; background-color: #f3f4f6;' class='rounded-lg my-10 shadow-md'><span style=\'color: #9ca3af;\'>Gambar tidak dapat dimuat</span></div>`; }" />
                @else
                    <div style="max-height: 400px; min-height: 200px; width: 100%; display: flex; align-items: center; justify-content: center; background-color: #f3f4f6;" class="rounded-lg my-10 shadow-md">
                        <span style="color: #9ca3af;" class="text-lg">Gambar tidak tersedia</span>
                    </div>
                @endif
            </div>

            <div class="bg-gray-50 p-6 sm:p-8 mb-6 rounded-lg shadow">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Detail Informasi</h2>
                @if($hospital->description)
                <div class="mb-5">
                    <p class="text-gray-700 font-semibold text-md"><i class="fas fa-info-circle me-2 text-biru"></i>Deskripsi</p>
                    <p class="text-gray-600 font-light text-sm mt-1 pl-6">{!! nl2br(e($hospital->description)) !!}</p>
                </div>
                @endif
                @if($hospital->category)
                <div class="mb-5">
                    <p class="text-gray-700 font-semibold text-md"><i class="fas fa-tags me-2 text-biru"></i>Kategori</p>
                    <p class="text-gray-600 font-light text-sm mt-1 pl-6">{{ $hospital->category->name }}</p>
                </div>
                @endif
                @if($hospital->address)
                <div class="mb-3">
                    <p class="text-gray-700 font-semibold text-md"><i class="fas fa-map-marker-alt me-2 text-biru"></i>Alamat</p>
                    <p class="text-gray-600 font-light text-sm mt-1 pl-6">{{ $hospital->address }}</p>
                </div>
                @endif
            </div>

            @if($hospital->layanans && $hospital->layanans->count() > 0)
            <h2 class="text-2xl font-semibold mt-10 mb-4 text-gray-800">Layanan dan Dokter</h2>
            <div class="space-y-6">
                @foreach ($hospital->layanans as $layanan)
                    <div class="p-4 border rounded-lg bg-white shadow-sm hover:shadow-md transition-shadow">
                        <h3 class="text-xl font-semibold text-biru">{{ $layanan->name }}</h3>
                        @if ($layanan->dokters && $layanan->dokters->count() > 0)
                            <ul class="list-none pl-0 mt-3 space-y-2">
                                @foreach ($layanan->dokters as $dokter)
                                    <li class="text-sm text-gray-700 pb-1 border-b border-gray-100 last:border-b-0">
                                        <strong class="font-medium">{{ $dokter->name }}</strong>
                                        @if ($dokter->jadwal_praktik)
                                            <span class="text-xs text-gray-500 block sm:inline sm:ml-2"> Jadwal: {{ $dokter->jadwal_praktik }}</span>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            <p class="text-sm text-gray-500 mt-2">Belum ada dokter terdaftar untuk layanan ini.</p>
                        @endif
                    </div>
                @endforeach
            </div>
            @else
                <p class="text-gray-500 mt-6 py-4 text-center bg-gray-50 rounded-lg">Belum ada informasi layanan tersedia di fasilitas kesehatan ini.</p>
            @endif

            <h2 class="text-2xl font-semibold mt-10 mb-4 text-gray-800">Ulasan Pengguna</h2>
            @if($hospital->reviews && $hospital->reviews->count() > 0)
                <div class="space-y-4">
                @foreach ($hospital->reviews as $review)
                    @php
                        $displayName = $review->name ?? 'Anonim';
                        if (strlen($displayName) > 2) {
                            $displayName = substr($displayName, 0, 1) . str_repeat('*', strlen($displayName) - 2) . substr($displayName, -1);
                        } elseif (strlen($displayName) == 2) {
                            $displayName = substr($displayName, 0, 1) . '*';
                        } elseif (strlen($displayName) == 1 && $displayName !== '*') {
                             $displayName = '*';
                        }
                    @endphp
                    <div class="p-4 border rounded-lg bg-gray-50 shadow-sm">
                        <div class="flex items-center mb-1">
                            <strong class="text-gray-800 font-semibold">{{ $displayName }}</strong>
                            <span class="text-yellow-400 ml-3 flex items-center">
                                @for ($i = 0; $i < 5; $i++)
                                    @if ($i < $review->rating)
                                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                    @else
                                        <svg class="w-4 h-4 fill-current text-gray-300" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                    @endif
                                @endfor
                                <span class="text-gray-600 text-xs ml-2">({{ $review->rating }}/5)</span>
                            </span>
                        </div>
                        <p class="text-gray-700 text-sm mb-1">{{ $review->comment }}</p>
                        <p class="text-xs text-gray-400">{{ $review->created_at->translatedFormat('d F Y, H:i') }}</p>
                    </div>
                @endforeach
                </div>
            @else
                <p class="text-gray-500 mt-4 py-4 text-center bg-gray-50 rounded-lg">Belum ada ulasan untuk fasilitas kesehatan ini.</p>
            @endif

            <h3 class="text-xl font-semibold mt-8 mb-3 text-gray-800">Beri Ulasan Anda</h3>
            <form action="{{ route('review.store', $hospital->id) }}" method="POST" class="mt-4 p-6 bg-white rounded-lg shadow-md">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block font-medium text-gray-700 text-sm mb-1">Nama Anda</label>
                    <input type="text" name="name" id="name" required class="w-full p-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" value="{{ old('name') }}">
                    @error('name') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                </div>
                <div class="mb-4">
                    <label for="rating" class="block font-medium text-gray-700 text-sm mb-1">Rating (1-5)</label>
                    <select name="rating" id="rating" required class="w-full p-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500">
                        <option value="">-- Pilih Rating --</option>
                        @for ($i = 1; $i <= 5; $i++)
                            <option value="{{ $i }}" {{ old('rating') == $i ? 'selected' : '' }}>{{ $i }} ★</option>
                        @endfor
                    </select>
                    @error('rating') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                </div>
                <div class="mb-4">
                    <label for="comment" class="block font-medium text-gray-700 text-sm mb-1">Komentar Anda</label>
                    <textarea name="comment" id="comment" rows="4" required class="w-full p-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500">{{ old('comment') }}</textarea>
                    @error('comment') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                </div>
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-5 py-2.5 rounded-md font-medium transition-colors">
                    Kirim Ulasan
                </button>
            </form>

            <div class="mt-8 flex flex-wrap gap-4">
                <button id="getUserLocationButton" class="bg-teal-600 hover:bg-teal-700 text-white font-semibold py-2 px-4 rounded-md transition-colors">
                    <i class="fas fa-location-arrow mr-2"></i>Dapatkan Lokasi Saya
                </button>
                <button id="getRouteBtn" class="bg-sky-600 hover:bg-sky-700 text-white font-semibold py-2 px-4 rounded-md transition-colors">
                    <i class="fas fa-route mr-2"></i>Dapatkan Rute ke Sini
                </button>
            </div>

            <div class="col-12">
                <div class="mb-3 mt-5">
                    <div class="h-[400px] sm:h-[500px]">
                        <div id="map" class="rounded-lg w-full h-full shadow-md"></div>
                    </div>
                </div>
            </div>
            
            {{-- <div id="route-steps" class="mt-4 text-sm"></div> --}} {{-- DIV INI DIHAPUS/DIKOMENTARI --}}

            <div class="flex gap-2 mt-8 mb-14 items-center">
                <p class="text-sm text-gray-600 font-medium">BAGIKAN:</p>
                <div class="flex gap-3">
                    <a href="#" title="Bagikan ke Facebook" class="text-blue-600 hover:text-blue-800 transition-colors">
                        <svg class="w-6 h-6" viewBox="0 0 24 24" fill="currentColor"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>
                    </a>
                    <a href="#" title="Bagikan ke Twitter" class="text-sky-500 hover:text-sky-700 transition-colors">
                        <svg class="w-6 h-6" viewBox="0 0 24 24" fill="currentColor"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>
                    </a>
                    <a href="#" title="Bagikan ke Instagram" class="text-pink-600 hover:text-pink-800 transition-colors">
                         <svg class="w-6 h-6" viewBox="0 0 24 24" fill="currentColor"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5" stroke="white" stroke-width="2"></line></svg>
                    </a>
                </div>
            </div>

        </div>
    </section>
@endsection

@push('after-style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .w-button-custom { width: auto; }
        .uploader { position: relative; overflow: hidden; width: 50%; min-height: 75px; background: #ffffff; border-radius: 10px; border: 2px dashed #e8e8e8; }
        @media (min-width:280px) and (max-width: 576px) { .w-button-custom { width: 100%; } .uploader { width: 100%; } }
        .uploader .image-uploader { width: 75px; max-height: 75px; object-fit: cover; object-position: center; }
        #filePhoto { position: absolute; border-radius: 15px; width: 105px; height: 75px; left: 0; z-index: 2; opacity: 0; cursor: pointer; }
        .uploader img { border-radius: 10px; object-position: center; object-fit: cover; width: 105px; height: 75px; border: none; }
        #map { height: 100%; }
        #description { font-family: Roboto, sans-serif; font-size: 15px; font-weight: 300; }
        #infowindow-content .title { font-weight: bold; }
        #infowindow-content { display: none; }
        #map #infowindow-content { display: inline; }
        .pac-card { background-color: #fff; border: 0; border-radius: 2px; box-shadow: 0 1px 4px -1px rgba(0, 0, 0, 0.3); margin: 10px; padding: 0 0.5em; font: 400 18px Roboto, Arial, sans-serif; overflow: hidden; padding: 0; }
        #pac-container { padding-bottom: 12px; margin-right: 12px; }
        .pac-controls { display: inline-block; padding: 5px 11px; }
        .pac-controls label { font-family: Roboto, sans-serif; font-size: 13px; font-weight: 300; }
        #pac-input { background-color: #fff; font-family: Roboto, sans-serif; font-size: 15px; font-weight: 300; margin-left: 12px; margin-top: 12px; padding: 0 11px 0 13px; text-overflow: ellipsis; width: 400px; }
        #pac-input:focus { border-color: #4d90fe; }
        #title { color: #fff; background-color: #4d90fe; font-size: 25px; font-weight: 500; padding: 6px 12px; }
        #target { width: 345px; }
        .custom-user-marker div { background-color: #2563EB !important; width: 18px !important; height: 18px !important; border-radius: 50% !important; border: 3px solid white !important; box-shadow: 0 0 8px rgba(0,0,0,0.6) !important; }
        /* .leaflet-routing-alternatives-container { display: none !important; } */ /* Ini bisa diaktifkan jika alternatif tidak diinginkan sama sekali */
    </style>
@endpush

@push('after-script')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@3.2.12/dist/leaflet-routing-machine.css" />
    <script src="https://unpkg.com/leaflet-routing-machine@3.2.12/dist/leaflet-routing-machine.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const hospitalData = {!! isset($hospital) && $hospital ? json_encode($hospital->loadMissing('category')) : 'null' !!};
            
            if (!hospitalData || hospitalData.latitude == null || hospitalData.longitude == null) {
                console.error("Data rumah sakit tidak lengkap atau tidak ditemukan untuk memuat peta.");
                const mapContainer = document.getElementById('map');
                if (mapContainer) mapContainer.innerHTML = '<p class="text-center text-red-500 p-4">Peta tidak dapat dimuat karena data lokasi tidak lengkap.</p>';
                const getUserLocationButton = document.getElementById('getUserLocationButton');
                const getRouteBtn = document.getElementById('getRouteBtn');
                if(getUserLocationButton) getUserLocationButton.style.display = 'none';
                if(getRouteBtn) getRouteBtn.style.display = 'none';
                return;
            }

            const hospitalLatitude = parseFloat(hospitalData.latitude);
            const hospitalLongitude = parseFloat(hospitalData.longitude);

            if (isNaN(hospitalLatitude) || isNaN(hospitalLongitude)) {
                console.error("Latitude atau Longitude rumah sakit tidak valid.");
                 const mapContainer = document.getElementById('map');
                if (mapContainer) mapContainer.innerHTML = '<p class="text-center text-red-500 p-4">Peta tidak dapat dimuat karena data koordinat tidak valid.</p>';
                return;
            }

            const map = L.map('map').setView([hospitalLatitude, hospitalLongitude], 14);

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '© <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);

            const hospitalCategoryName = hospitalData.category ? hospitalData.category.name : 'Fasilitas';
            const hospitalMarker = L.marker([hospitalLatitude, hospitalLongitude]).addTo(map);
            hospitalMarker.bindPopup(`<strong>${hospitalCategoryName} ${hospitalData.name}</strong><br>${hospitalData.address || 'Alamat tidak tersedia'}`).openPopup();

            let userMarker = null;
            let routingControl = null;
            let userPosition = null; 

            document.getElementById('getUserLocationButton').addEventListener('click', function () {
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(function (position) {
                        const lat = position.coords.latitude;
                        const lng = position.coords.longitude;
                        userPosition = { lat, lng }; 

                        if (userMarker) {
                            map.removeLayer(userMarker);
                        }
                        
                        const userIcon = L.divIcon({
                            className: 'custom-user-marker',
                            html: '<div></div>',
                            iconSize: [18, 18],
                            iconAnchor: [9, 9]
                        });

                        userMarker = L.marker([lat, lng], { icon: userIcon })
                            .addTo(map)
                            .bindPopup("Lokasi Anda Saat Ini")
                            .openPopup();
                        
                        if (hospitalMarker) {
                            const bounds = L.latLngBounds([userPosition.lat, userPosition.lng], [hospitalLatitude, hospitalLongitude]);
                            map.fitBounds(bounds.pad(0.2)); 
                        } else {
                            map.setView([lat, lng], 14);
                        }

                    }, function (error) {
                        alert("Gagal mendapatkan lokasi pengguna. Pastikan izin lokasi telah diberikan.");
                        console.error("Error Geolocation:", error);
                    });
                } else {
                    alert("Browser Anda tidak mendukung geolocation.");
                }
            });

            document.getElementById('getRouteBtn').addEventListener('click', function () {
                if (!userPosition) {
                    alert("Silakan klik 'Dapatkan Lokasi Saya' terlebih dahulu untuk menentukan titik awal rute.");
                    return;
                }

                if (routingControl) {
                    map.removeControl(routingControl); // Hapus kontrol rute sebelumnya dari peta
                    routingControl = null; // Reset variabel kontrol
                }
                
                routingControl = L.Routing.control({
                    waypoints: [
                        L.latLng(userPosition.lat, userPosition.lng),
                        L.latLng(hospitalLatitude, hospitalLongitude)
                    ],
                    routeWhileDragging: true, // Izinkan drag waypoint jika diperlukan
                    showAlternatives: false,   // Tetap sembunyikan alternatif rute agar lebih simpel
                    router: L.Routing.osrmv1({ 
                        serviceUrl: 'https://router.project-osrm.org/route/v1'
                    }),
                    lineOptions: {
                        styles: [{ color: '#007bff', opacity: 0.8, weight: 6 }]
                    },
                    // createMarker: function() { return null; }, // Biarkan default atau sesuaikan jika perlu
                    // Hapus atau set 'show: true' (atau biarkan default) agar panel tampil
                    // show: true, // Ini adalah default, jadi tidak perlu eksplisit jika ingin ditampilkan
                }).addTo(map);
            });
        });
    </script>
@endpush