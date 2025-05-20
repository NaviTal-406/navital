@extends('layouts.app')

@section('title', 'Home')

@section('content')

    <section class="pt-20">
        <div class="container">

            <div class="py-14">
                <div class="flex flex-wrap items-center gap-2 bg-gray-50 py-2 px-3 text-black">
                    <a href="{{ route('home') }}" class="transition-all text-biru hover:text-blue-800">Home</a> /
                    <a href="{{ route('search') }}" class="transition-all text-biru hover:text-blue-800">Detail</a> /
                    <p class="text-biru">{{ $hospital->name }}</p>
                </div>
            </div>

            <div class="lg:w-4/5">
                <span class="bg-blue-50 text-biru font-medium rounded-md text-xs py-1 px-2"><a
                        href="#">{{ $hospital->category->name }}</a></span>
                <h1 class="lg:text-5xl/snug text-3xl/snug mt-3 text-biru">{{ $hospital->category->name }} {{ $hospital->name }}</h1>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div>
                <img src="{{ Storage::url($hospital->thumbnail) }}" alt="{{ $hospital->name }}"
                    style="max-height: 300px; width: 100%; object-fit: contain;" class="rounded-md my-10" />

            </div>  

            {{-- <p class="text-sm/relaxed tracking-wider text-gray-600 mb-6"><i class="fa-solid fa-minus me-2"></i>{{ $hospital->address }}</p> --}}

            <div class="bg-gray-100 p-8 mb-6">
                <h5 class="text-base sm:text-lg font-normal text-gray-600 mb-3">{{ $hospital->category->name }} {{ $hospital->name }}</h5>
                <p class="text-gray-500 font-light text-sm mt-5"><i class="fa-solid fa-minus me-2"></i>Description</p>
                <p class="text-gray-500 font-light text-sm mt-2">{{ $hospital->description }}</p>
                <p class="text-gray-500 font-light text-sm mt-5"><i class="fa-solid fa-minus me-2"></i>Category</p>
                <p class="text-gray-500 font-light text-sm mt-2"></i>{{ $hospital->category->name }}</p>
                <p class="text-gray-500 font-light text-sm mt-5"><i class="fa-solid fa-minus me-2"></i>Addres</p>
                <p class="text-gray-500 font-light text-sm mt-2"></i>{{ $hospital->address }}</p>
            </div>

            <h2 class="text-xl font-bold mt-6">Ulasan</h2>

            @foreach ($hospital->reviews as $review)
                <div class="my-4 p-4 border rounded bg-gray-100">
                    <strong>
                        {{ substr($review->name, 0, 1) . str_repeat('*', strlen($review->name) - 2) . substr($review->name, -1) }}
                    </strong>
                    <div class="text-yellow-400">
                        @for ($i = 0; $i < 5; $i++)
                            @if ($i < $review->rating)
                                ★
                            @else
                                ☆
                            @endif
                        @endfor
                        <span class="text-gray-600 ml-2">{{ $review->rating }}/5</span>
                    </div>
                    <p>{{ $review->comment }}</p>
                    <p class="text-xs text-gray-500">{{ $review->created_at->diffForHumans() }}</p>
                </div>
            @endforeach

            <h3 class="text-lg font-semibold mt-8">Beri Ulasan</h3>

            <form action="{{ route('review.store', $hospital->id) }}" method="POST" class="mt-4">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block font-medium">Nama Anda</label>
                    <input type="text" name="name" id="name" required class="w-full p-2 border rounded">
                </div>
                <div class="mb-4">
                    <label for="rating" class="block font-medium">Rating</label>
                    <select name="rating" id="rating" required class="w-full p-2 border rounded">
                        <option value="">-- Pilih --</option>
                        @for ($i = 1; $i <= 5; $i++)
                            <option value="{{ $i }}">{{ $i }}</option>
                        @endfor
                    </select>
                </div>
                <div class="mb-4">
                    <label for="comment" class="block font-medium">Komentar</label>
                    <textarea name="comment" id="comment" rows="4" required class="w-full p-2 border rounded"></textarea>
                </div>
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">
                    Kirim Review
                </button>
            </form>

            <div class="mt-4 flex gap-4">
                <button id="getUserLocationButton" class="bg-ijo hover:bg-teal-800 text-white font-bold py-2 px-4 rounded">
                    Dapatkan Lokasi Pengguna
                </button>

                <button id="getRouteBtn" class="bg-ijo hover:bg-teal-800 text-white font-bold py-2 px-4 rounded">
                    Dapatkan Rute
                </button>
            </div>

            <div class="col-12">
                <div class="mb-3 mt-5">
                    <div class="h-[500px]"> <!-- Tinggi diperbesar -->
                        <div id="map" class="rounded w-full h-full"></div> <!-- Tambahkan h-full -->
                    </div>
                </div>
            </div>
            
            <div id="route-steps" class="mt-4"></div>

            <div class="flex gap-2 mt-8 mb-14">
                <p class="text-sm text-gray-500">SHARE:</p>
                <div class="flex gap-3">
                    <span>
                        <a href="#">
                            <svg class="w-5 h-5 text-blue-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                            </svg>
                        </a>
                    </span>
                    <span>
                        <a href="#">
                            <svg class="w-5 h-5 text-teal-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path
                                    d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z">
                                </path>
                            </svg>
                        </a>
                    </span>
                    <span>
                        <a href="#">
                            <svg class="w-5 h-5 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                            </svg>
                        </a>
                    </span>
                </div>
            </div>

        </div>
    </section>


    <!-- features end -->

@endsection

@push('after-style')
    <style>
        .w-button-custom {
            width: auto;
        }

        .uploader {
            position: relative;
            overflow: hidden;
            width: 50%;
            min-height: 75px;
            background: #ffffff;

            border-radius: 10px;
            border: 2px dashed #e8e8e8;
        }

        @media (min-width:280px) and (max-width: 576px) {
            .w-button-custom {
                width: 100%;
            }

            .uploader {
                width: 100%;
            }
        }

        .uploader .image-uploader {
            width: 75px;
            max-height: 75px;
            object-fit: cover;
            object-position: center;
        }

        #filePhoto {
            position: absolute;
            border-radius: 15px;
            width: 105px;
            height: 75px;
            left: 0;
            z-index: 2;
            opacity: 0;
            cursor: pointer;
        }

        .uploader img {
            border-radius: 10px;
            object-position: center;
            object-fit: cover;
            width: 105px;
            height: 75px;
            border: none;
        }

        #map {
            height: 100%;
        }

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
            margin-top: 12px;
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
    <!-- Leaflet CSS & JS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

    <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine/dist/leaflet-routing-machine.css" />
    <script src="https://unpkg.com/leaflet-routing-machine/dist/leaflet-routing-machine.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const hospitalData = {!! isset($hospital) ? json_encode($hospital) : 'null' !!};
            const hospitalLatitude = parseFloat({{ $hospital->latitude }});
            const hospitalLongitude = parseFloat({{ $hospital->longitude }});

            const map = L.map('map').setView([hospitalLatitude, hospitalLongitude], 13);

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '© OpenStreetMap contributors'
            }).addTo(map);

            const hospitalMarker = L.marker([hospitalLatitude, hospitalLongitude]).addTo(map);
            hospitalMarker.bindPopup(`<strong>${hospitalData.category.name} ${hospitalData.name}</strong><br>${hospitalData.address}`).openPopup();

            let userMarker = null;
            let routingControl = null;
            let userPosition = null; // <-- simpan posisi user

            // tombol 1: dapatkan lokasi pengguna
            document.getElementById('getUserLocationButton').addEventListener('click', function () {
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(function (position) {
                        const lat = position.coords.latitude;
                        const lng = position.coords.longitude;
                        userPosition = { lat, lng }; // simpan lokasi

                        if (userMarker) {
                            map.removeLayer(userMarker);
                        }

                        userMarker = L.marker([lat, lng], {
                            icon: L.icon({
                                iconUrl: 'https://maps.google.com/mapfiles/ms/icons/red-dot.png',
                                iconSize: [25, 41],
                                iconAnchor: [12, 41],
                            })
                        }).addTo(map).bindPopup("Lokasi Anda").openPopup();

                        map.setView([lat, lng], 13);
                    }, function (error) {
                        alert("Gagal mendapatkan lokasi pengguna.");
                        console.error(error);
                    });
                } else {
                    alert("Browser tidak mendukung geolocation.");
                }
            });

            // tombol 2: dapatkan rute
            document.getElementById('getRouteBtn').addEventListener('click', function () {
                if (!userPosition) {
                    alert("Silakan klik 'Dapatkan Lokasi Pengguna' terlebih dahulu.");
                    return;
                }

                if (routingControl) {
                    map.removeControl(routingControl);
                }

                routingControl = L.Routing.control({
                    waypoints: [
                        L.latLng(userPosition.lat, userPosition.lng),
                        L.latLng(hospitalLatitude, hospitalLongitude)
                    ],
                    routeWhileDragging: false,
                    showAlternatives: false,
                    router: L.Routing.osrmv1({
                        serviceUrl: 'https://router.project-osrm.org/route/v1'
                    }),
                    lineOptions: {
                        styles: [{ color: 'blue', opacity: 0.6, weight: 5 }]
                    },
                    createMarker: function () { return null; }
                }).addTo(map);
            });
        });
    </script>
@endpush