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
                      <!-- Form -->
                      <form action="{{ route('search') }}" method="GET">
                        @csrf
                        <div class="relative z-10 flex space-x-3 p-3">
                          <div class="flex-[1_0_0%]">
                            <label for="keyword" class="block text-sm text-gray-700 font-medium"><span class="sr-only">Search article</span></label>
                            <input type="text" name="keyword" id="keyword" class="py-2.5 px-4 block w-full border-2 rounded-lg border-teal-600 placeholder:text-gray-500 text-gray-500" placeholder="Cari Faskes">
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
                      <!-- End Form -->
                    </div>
                  </div>
                </div>
            </div>
            

            <div class="grid lg:grid-cols-3 grid-cols-1 gap-6 lg:py-16 py-14" data-aos="fade-up">

                @forelse ($hospitals ?? [] as $item)
                    <div>
                        <img src="{{ Storage::url($item->thumbnail) }}" alt="{{ $item->name }}" class="rounded-md mb-5"
                            style="max-height: 250px; min-width:100%; object-fit:cover">

                        <span class="bg-teal-50 text-ijo font-medium rounded-md text-xs py-1 px-2"><a
                                href="#">{{ $item->category->name }}</a></span>
                        <h1 class="text-lg my-3 transition-all text-ijo hover:text-teal-800"><a
                                href="{{ route('detail', $item->slug) }}">{{ $item->category->name }}
                                {{ $item->name }}</a></h1>
                        <p class="text-sm/relaxed tracking-wider text-gray-500 truncate">{{ $item->description }}
                            
                        </p>
                        <a href="{{ route('detail', $item->slug) }}" class="text-ijo font-bold text-sm hover:text-teal-800">read more</a>
                    </div>


                @empty
                <p class="text-center">Tidak ada data faskes yang ditemukan.</p>
                @endforelse
            </div>

            <div class="mb-24 mx-auto">
                {{ $hospitals->links() }}
            </div>


            <div class="col-12">
                <div class="mb-3 mt-5">
                    <div style="height: 300px">
                        <div id="map" class="rounded"></div>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <!-- features end -->

@endsection

@push('after-style')
    <style>
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
    />
    <script
        src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js">
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const businessData = {!! isset($hospitals) ? json_encode($hospitals) : 'null' !!};

            if (!businessData) return;

            // Inisialisasi peta
            const map = L.map('map').setView([-6.922187861246663, 107.61946363551262], 13);

            // Tambahkan tile layer dari OpenStreetMap
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '© OpenStreetMap contributors'
            }).addTo(map);

            const markers = [];

            const locateControl = L.control({ position: 'topright' });

            locateControl.onAdd = function (map) {
                const div = L.DomUtil.create('div', 'leaflet-bar leaflet-control');
                div.style.backgroundColor = 'white';
                div.style.cursor = 'pointer';
                div.title = 'Klik untuk mendapatkan lokasi Anda';

                const button = document.createElement('button');
                button.innerHTML = '📍';
                button.style.width = '32px';
                button.style.height = '32px';
                button.style.fontSize = '18px';
                button.style.lineHeight = '30px';
                button.style.border = 'none';
                button.style.background = 'transparent';

                button.onclick = () => {
                    if (navigator.geolocation) {
                        navigator.geolocation.getCurrentPosition((position) => {
                            const lat = position.coords.latitude;
                            const lng = position.coords.longitude;

                            const userLatLng = [lat, lng];

                            L.marker(userLatLng, {
                                icon: L.icon({
                                    iconUrl: 'https://maps.google.com/mapfiles/ms/icons/red-dot.png',
                                    iconSize: [30, 35],
                                    iconAnchor: [12, 41],
                                })
                            }).addTo(map).bindPopup("Lokasi Anda").openPopup();

                            map.setView(userLatLng, 13);
                        }, (error) => {
                            alert("Gagal mendapatkan lokasi Anda.");
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

            businessData.data.forEach((business) => {
                const lat = parseFloat(business.latitude);
                const lng = parseFloat(business.longitude);

                const marker = L.marker([lat, lng]).addTo(map);

                marker.bindPopup(`
                    <strong>${business.category.name} - ${business.name}</strong><br>
                    ${business.address}<br>
                    <a href="/detail/${business.slug}" class="text-blue-500 hover:underline">Detail</a>
                `);

                markers.push(marker);
            });

            // Fit bounds
            const group = new L.featureGroup(markers);
            map.fitBounds(group.getBounds());

        });
    </script>
@endpush
