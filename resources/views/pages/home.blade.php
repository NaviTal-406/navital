@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <!-- =========== Hero Section Start =========== -->

    <!-- =========== Hero Section End =========== -->

    <!-- =========== feature Section Start =========== -->
    <section class="overflow-hidden">
        <div class="xl:py-24 py-16">
            <div class="container">

                <div class="relative overflow-hidden">
                    <div class="max-w-[85rem] mx-auto px-4 py-10">
                      <div class="text-center">
                        <h1 class="text-2xl sm:text-4xl font-bold text-biru">
                          Find Hospital in Bandung Raya 
                        </h1>
                
                        <p class="text-2xl sm:text-4xl font-bold mt-3 text-biru">
                          With Detailed Information.
                        </p>
                
                        <div class="mt-7 sm:mt-12 mx-auto max-w-xl relative">
                            <!-- Form -->
                            <form action="{{ route('search') }}" method="GET">
                                @csrf
                                <div class="relative z-10 space-y-3 p-3 bg-white rounded-lg shadow">

                                    {{-- Input Keyword --}}
                                    <div>
                                        <label for="keyword" class="block text-sm text-gray-700 font-medium">Cari Faskes</label>
                                        <input type="text" name="keyword" id="keyword" class="py-2.5 px-4 block w-full border-2 rounded-lg border-teal-600 placeholder:text-gray-500 text-gray-700" placeholder="Masukkan nama RS, dokter, layanan...">
                                    </div>

                                    {{-- Filter: Kategori --}}
                                    <div>
                                        <label for="category" class="block text-sm text-gray-700 font-medium">Kategori Rumah Sakit</label>
                                        <select name="category_id" id="category" class="py-2.5 px-4 block w-full border-2 rounded-lg border-teal-600 text-gray-700">
                                            <option value="">-- Semua Kategori --</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}" {{ request('category_id') == $category->id ? 'selected' : '' }}>
                                                    {{ $category->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    {{-- Filter: Layanan --}}
                                    <div>
                                        <label for="layanan" class="block text-sm text-gray-700 font-medium">Jenis Layanan</label>
                                        <select name="layanan" id="layanan" class="py-2.5 px-4 block w-full border-2 rounded-lg border-teal-600 text-gray-700">
                                            <option value="">-- Semua Layanan --</option>
                                            @foreach ($allLayanans as $layanan)
                                                <option value="{{ $layanan->name }}" {{ request('layanan') == $layanan->name ? 'selected' : '' }}>
                                                    {{ $layanan->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    {{-- Tombol Submit --}}
                                    <div class="text-right">
                                        <button type="submit" class="inline-flex items-center px-5 py-2 bg-red-500 text-white font-semibold rounded-lg hover:bg-red-600">
                                            Cari
                                        </button>
                                    </div>

                                </div>
                            </form>
                            <!-- End Form -->
                        </div>
                      </div>
                    </div>
                  </div>

                <div class="text-center mt-14">
                    <h1 class="text-3xl/tight font-bold mt-3 mb-4 text-biru">Solution For Find Health Facilities</h1>
                    <h1 class="text-3xl/tight font-bold mt-3 mb-4 text-biru">Our Vision & Mision</h1>
                </div>

                <div class="xl:pt-16 xl:pb-28 py-16">
                    <div class="grid lg:grid-cols-2 grid-cols-1 gap-6 items-center">

                        <div class="relative">
                            <img src="assets/images/hero/navitals.png" alt="Medicine" data-aos="fade-right"
                                data-aos-duration="400">
                        </div>

                        <div class="lg:ms-24">
                            <div data-fc-type="accordion" data-aos="fade-up" data-aos-duration="500">

                                <!-- 1 (Penghubung) -->
                                <button
                                    class="pt-2 inline-flex items-center gap-x-4 w-full font-medium text-left text-gray-800 transition-all hover:text-gray-500 dark:text-gray-200 dark:hover:text-gray-400"
                                    data-fc-type="collapse">
                                    <div class="bg-emerald-50 rounded-lg flex items-center justify-center h-12 w-12">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#92E3A9" d="M7 14v-3.09c-.72-.33-1.39-.73-2-1.2V14zm-2 4H3v-2H1v-2h2V7h2v1.43C6.8 10 9.27 11 12 11c2.73 0 5.2-1 7-2.57V7h2v7h2v2h-2v2h-2v-2H5zm12-7.09V14h2V9.71c-.61.47-1.28.87-2 1.2M16 14v-2.68c-.64.23-1.31.4-2 .52V14zm-3 0v-2.04L12 12l-1-.04V14zm-3 0v-2.16c-.69-.12-1.36-.29-2-.52V14z"/></svg> 
                                    </div>
                                    <h1 class="font-medium mb-4 mt-2">Our Vision</h1>
                                </button>
                                <div class="w-full overflow-hidden duration-300 ps-16">
                                    <p class="text-gray-700 dark:text-gray-300">
                                        Menjadi platform digital utama yang merevolusi cara masyarakat Indonesia mengakses dan memilih layanan kesehatan, memastikan setiap individu dapat menemukan fasilitas medis terbaik yang sesuai dengan kebutuhan mereka, kapan pun dan di mana pun.
                                    </p>
                                </div>

                                <div class="border-b my-6"></div>

                                <!-- 2 -->
                                <button
                                    class="pt-2 inline-flex items-center gap-x-4 w-full font-medium text-left text-gray-800 transition hover:text-gray-500 dark:text-gray-200 dark:hover:text-gray-400"
                                    data-fc-type="collapse">
                                    <div class="bg-yellow-200/50 rounded-lg flex items-center justify-center h-12 w-12">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"><path fill="#475569" d="M6.813 2.406L5.405 3.812L7.5 5.906L8.906 4.5zm18.375 0L23.093 4.5L24.5 5.906l2.094-2.093zM16 3.03c-.33.004-.664.023-1 .064c-.01 0-.02-.002-.03 0c-4.056.465-7.284 3.742-7.845 7.78c-.448 3.25.892 6.197 3.125 8.095a5.238 5.238 0 0 1 1.75 3.03v6h2.28c.348.597.983 1 1.72 1s1.372-.403 1.72-1H20v-4h.094v-1.188c0-1.466.762-2.944 2-4.093C23.75 17.06 25 14.705 25 12c0-4.94-4.066-9.016-9-8.97m0 2c3.865-.054 7 3.11 7 6.97c0 2.094-.97 3.938-2.313 5.28l.032.032A7.792 7.792 0 0 0 18.279 22h-4.374c-.22-1.714-.955-3.373-2.344-4.563c-1.767-1.5-2.82-3.76-2.468-6.312c.437-3.15 2.993-5.683 6.125-6.03a6.91 6.91 0 0 1 .78-.064zM2 12v2h3v-2zm25 0v2h3v-2zM7.5 20.094l-2.094 2.093l1.407 1.407L8.905 21.5zm17 0L23.094 21.5l2.093 2.094l1.407-1.407zM14 24h4v2h-4z"/></svg>
                                    </div>
                                    <h1 class="font-medium mb-4 mt-2">Our Mision</h1>
                                </button>
                                <div class="hidden w-full overflow-hidden duration-300 ps-16">
                                    <p class="text-gray-700 dark:text-gray-300">
                                        <ol class="list-decimal list-inside">
                                            <li>Menyediakan data rumah sakit yang komprehensif, akurat, dan mudah diakses.</li>
                                            <li>Mengembangkan sistem pencarian yang intuitif berbasis web, memungkinkan untuk mengidentifikasi rumah sakit yang sesuai dengan kebutuhan spesifik, terutama dalam kondisi darurat.</li>
                                            <li>Berkontribusi pada pencapaian SDG 3 (Good Health and Well-Being) khususnya SDG 3.8 (Universal Health Coverage) dengan mempermudah akses masyarakat terhadap layanan kesehatan yang berkualitas dan relevan dengan kebutuhan mereka.</li>
                                        </ol>
                                    </p>
                                </div>

                                <div class="border-b my-6"></div>

                                <!-- 3 -->
                                <button
                                    class="pt-2 inline-flex items-center gap-x-4 w-full font-medium text-left text-gray-800 transition hover:text-gray-500 dark:text-gray-200 dark:hover:text-gray-400"
                                    data-fc-type="collapse">
                                    <div class="bg-gray-500/10 rounded-lg flex items-center justify-center h-12 w-12">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#b91c1c" d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12c5.16-1.26 9-6.45 9-12V5Zm0 3.9a3 3 0 1 1-3 3a3 3 0 0 1 3-3m0 7.9c2 0 6 1.09 6 3.08a7.2 7.2 0 0 1-12 0c0-1.99 4-3.08 6-3.08"/></svg>
                                    </div>
                                    <h1 class="font-medium mb-4 mt-2">NaviTal</h1>
                                </button>
                                <div class="hidden w-full overflow-hidden duration-300 ps-16">
                                    <p class="text-gray-700 dark:text-gray-300">
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div id="aboutus" class="xl:pt-20 xl:pb-28 py-16 bg-gray-900 dark:bg-gray-900 text-white overflow-hidden">
                    <div class="container mx-auto px-6 lg:px-24"> {{-- Increased horizontal padding significantly for text-only layout --}}
                        <h1 class="text-4xl lg:text-5xl font-extrabold mb-10 text-center text-teal-400 dark:text-teal-300">Tentang NaviTal</h1>

                        {{-- Menghapus grid dan kolom gambar, fokus pada satu kolom teks --}}
                        <div class="max-w-3xl mx-auto space-y-8 text-center"> {{-- Centered text block, increased space-y for paragraphs --}}
                            <p class="text-lg text-gray-200 leading-relaxed">
                                Halo para pengguna NaviTal! Kami, tim di balik NaviTal, memahami betul betapa krusialnya <strong>akses cepat dan akurat ke layanan kesehatan</strong>, terutama dalam situasi mendesak. Di Bandung Raya, dengan banyaknya pilihan rumah sakit, mencari informasi yang lengkap, terkini, dan sesuai kebutuhan seringkali menjadi tantangan yang menghabiskan waktu, bahkan bisa berdampak pada keselamatan.
                            </p>
                            <p class="text-lg text-gray-200 leading-relaxed">
                                Melihat urgensi tersebut, kami mengembangkan NaviTal. Aplikasi web ini hadir sebagai <strong>jembatan informasi yang menghubungkan Anda langsung dengan rumah sakit yang tepat</strong> di mana pun Anda berada di Bandung Raya. Kami telah berupaya keras mengumpulkan data rumah sakit secara detail, memungkinkan Anda mencari berdasarkan lokasi terdekat, ketersediaan IGD 24 jam, jenis layanan spesialis, atau fasilitas rawat inap/jalan yang Anda butuhkan.
                            </p>
                            <p class="text-lg text-gray-200 leading-relaxed">
                                NaviTal tidak hanya menyediakan informasi, tetapi juga <strong>terintegrasi dengan peta navigasi</strong> untuk memandu Anda langsung ke tujuan tanpa hambatan. Kami percaya, dengan kemudahan ini, waktu yang sangat berharga dalam kondisi darurat dapat dimaksimalkan.
                            </p>
                            <p class="text-lg text-gray-200 leading-relaxed">
                                Lebih dari sekadar aplikasi, NaviTal adalah wujud komitmen kami untuk mendukung peningkatan kualitas layanan kesehatan dan sejalan dengan <strong>Sustainable Development Goals (SDG) 3: Good Health and Well-Being</strong>, khususnya dalam memastikan akses kesehatan yang universal. Kami berharap, NaviTal dapat menjadi solusi yang efisien, cepat, dan handal bagi Anda semua.
                            </p>

                            <div class="mt-12"> {{-- Increased margin top for the button --}}
                                <a href="{{ route('search') }}" class="inline-flex items-center justify-center px-10 py-4 bg-teal-500 text-white text-xl font-bold rounded-full shadow-xl hover:bg-teal-600 transition transform hover:scale-105 duration-300 ease-in-out border-2 border-teal-500 hover:border-teal-600">
                                    Mulai Pencarian Sekarang!
                                    <svg class="ms-3 w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                                </a>
                            </div>
                        </div>

                        <div class="text-center mt-16 pt-8 border-t border-gray-700 dark:border-gray-700 text-gray-400">
                            <p class="text-lg">Terima kasih atas kepercayaan Anda menggunakan NaviTal. Kami akan terus berinovasi demi kesehatan dan kesejahteraan masyarakat.</p>
                            <p class="text-lg mt-2 font-semibold text-teal-400">Salam hangat,<br>Tim Developer NaviTal</p>
                        </div>
                    </div>
                </div>

                        <div class="relative order-1 lg:order-2">
                            <img src="assets/images/hero/dokter.png" alt="saas2" data-aos="fade-left"
                                data-aos-duration="600">
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </section>
    <!-- =========== feature Section end =========== -->

    
@endsection

@push('after-style')
@endpush

@push('after-script')
    {{-- <script>
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                var latitude = position.coords.latitude;
                var longitude = position.coords.longitude;

                document.getElementById('latitude').value = latitude;
                document.getElementById('longitude').value = longitude;

                document.getElementById('serviceLatitude').value = latitude;
                document.getElementById('serviceLongitude').value = longitude;

            }, function(error) {
                console.error('Error getting location:', error);
            });
        } else {
            console.error('Geolocation is not supported by this browser.');
        }
    </script> --}}
@endpush
