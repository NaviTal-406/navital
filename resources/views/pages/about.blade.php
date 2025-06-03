@extends('layouts.app')

@section('title', 'About Us - Navital')

@section('content')
    <section class="bg-gradient-to-br from-blue-50 to-teal-50 pt-32 pb-16">
        <div class="container mx-auto px-10">
            <div class="text-center max-w-3xl mx-auto">
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">About Navital</h1>
                <p class="text-lg text-gray-600 leading-relaxed">
                    Navital adalah platform inovatif yang <strong>menghubungkan masyarakat dengan layanan kesehatan di Bandung</strong>.
                    Kami berkomitmen untuk memudahkan akses informasi fasilitas kesehatan dan mendukung tercapainya
                    <strong>Sustainable Development Goals (SDG) 3: Good Health and Well-Being.</strong>
                </p>
            </div>
        </div>
    </section>

    <section class="py-16 bg-white">
        <div class="container mx-auto px-10">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="order-1 md:order-1">
                    <img src="{{ asset('assets/images/hero/Medicine-pana.png') }}" alt="Visi Navital" class="rounded-lg shadow-xl aspect-video object-cover">
                </div>
                <div class="order-2 md:order-2">
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">Visi NaviTal</h2>
                    <p class="text-gray-600 leading-relaxed">
                        Menjadi solusi terdepan yang <strong>mempermudah akses informasi layanan kesehatan</strong> secara <strong>cepat dan efisien</strong>, serta turut <strong>mendukung peningkatan kualitas layanan kesehatan</strong> untuk seluruh masyarakat, khususnya di wilayah Bandung Raya.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 bg-blue-50">
        <div class="container mx-auto px-10">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="order-2 md:order-1">
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">Misi NaviTal</h2>
                    <div class="space-y-4">
                        <p class="text-gray-600">
                            Misi kami adalah menyediakan informasi yang <strong>akurat dan terpercaya</strong> tentang <strong>fasilitas kesehatan di Bandung</strong>, membantu masyarakat dalam menemukan <strong>layanan kesehatan yang sesuai</strong> dengan kebutuhan mereka.
                        </p>
                        <p class="text-gray-600 mt-2">
                            Memberikan kemudahan akses melalui platform web yang intuitif, dilengkapi fitur-fitur unggulan untuk mendukung pengambilan keputusan yang lebih baik dalam memilih fasilitas kesehatan.
                        </p>
                    </div>
                </div>
                <div class="order-1 md:order-2">
                    <img src="{{ asset('assets/images/hero/Dokter.png') }}" alt="Misi Navital" class="rounded-lg shadow-xl aspect-video object-cover">
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-10">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Meet Our Team</h2>
                <p class="text-gray-600">
                    Tim kami terdiri dari para profesional yang berkomitmen untuk mengembangkan solusi teknologi
                    dalam bidang kesehatan.
                </p>
            </div>

            <div class="w-full">
                <div class="flex justify-center mb-8">
                    <div class="w-full sm:w-2/3 md:w-1/2 lg:w-1/3 xl:w-1/4">
                        <a href="https://instagram.com/laroiba_syifauttamam" target="_blank" rel="noopener noreferrer" class="block hover:shadow-xl transition-shadow duration-300 rounded-xl">
                            <div class="bg-white rounded-xl shadow-md overflow-hidden">
                                <div class="aspect-square">
                                    <img src="{{ asset('assets/images/hero/Roi1-foto.jpg') }}" alt="Sarah Johnson" class="w-full h-full object-cover">
                                </div>
                                <div class="p-4 text-center">
                                    <h3 class="font-semibold text-gray-900">Laroiba Syifauttamam</h3>
                                    <p class="text-sm text-gray-500">Project Manager</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-8 mb-8 max-w-3xl mx-auto">
                    <a href="https://instagram.com/fathikhlfh" target="_blank" rel="noopener noreferrer" class="block hover:shadow-xl transition-shadow duration-300 rounded-xl">
                        <div class="bg-white rounded-xl shadow-md overflow-hidden">
                            <div class="aspect-square">
                                <img src="{{ asset('assets/images/hero/Fathi-foto.jpg') }}" alt="Michael Chen" class="w-full h-full object-cover">
                            </div>
                            <div class="p-4 text-center">
                                <h3 class="font-semibold text-gray-900">Fathi Adhli Khalafah</h3>
                                <p class="text-sm text-gray-500">Developer</p>
                            </div>
                        </div>
                    </a>
                    <a href="https://instagram.com/rcholatte" target="_blank" rel="noopener noreferrer" class="block hover:shadow-xl transition-shadow duration-300 rounded-xl">
                        <div class="bg-white rounded-xl shadow-md overflow-hidden">
                            <div class="aspect-square">
                                <img src="{{ asset('assets/images/hero/Ricko-foto.png') }}" alt="Amanda Silva" class="w-full h-full object-cover">
                            </div>
                            <div class="p-4 text-center">
                                <h3 class="font-semibold text-gray-900">Muhammad Ricko Arif A</h3>
                                <p class="text-sm text-gray-500">Developer</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-8 max-w-3xl mx-auto">
                    <a href="https://instagram.com/marsahaekalll" target="_blank" rel="noopener noreferrer" class="block hover:shadow-xl transition-shadow duration-300 rounded-xl">
                        <div class="bg-white rounded-xl shadow-md overflow-hidden">
                            <div class="aspect-square">
                                <img src="{{ asset('assets/images/hero/Akow1-foto.jpg') }}" alt="David Kim" class="w-full h-full object-cover">
                            </div>
                            <div class="p-4 text-center">
                                <h3 class="font-semibold text-gray-900">Marsa Haikal</h3>
                                <p class="text-sm text-gray-500">Developer</p>
                            </div>
                        </div>
                    </a>
                    <a href="https://instagram.com/vinnnrmdhnnn" target="_blank" rel="noopener noreferrer" class="block hover:shadow-xl transition-shadow duration-300 rounded-xl">
                        <div class="bg-white rounded-xl shadow-md overflow-hidden">
                            <div class="aspect-square">
                                <img src="{{ asset('assets/images/hero/Kevin-foto.jpg') }}" alt="Emily Zhang" class="w-full h-full object-cover">
                            </div>
                            <div class="p-4 text-center">
                                <h3 class="font-semibold text-gray-900">Kevin Ramadhan</h3>
                                <p class="text-sm text-gray-500">Developer</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 md:py-24 bg-slate-900"> {{-- Background gelap seperti contoh gambar --}}
        <div class="container mx-auto px-10">
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="text-3xl font-bold text-cyan-400 mb-8">Sepatah Kata dari Tim Kami</h2>
                <div class="space-y-4 text-slate-300 leading-relaxed">
                    <p>
                        Halo Pengguna NaviTal!
                    </p>
                    <p>
                        NaviTal kami rancang sebagai sebuah aplikasi web dengan tujuan mulia: <strong>membantu masyarakat</strong> dalam proses pencarian rumah sakit yang paling sesuai dengan kebutuhan unik setiap individu. Kami percaya bahwa informasi rumah sakit yang <strong>mudah diakses</strong> adalah kunci. Oleh karena itu, kami memungkinkan pengguna untuk mencari rumah sakit berdasarkan berbagai kriteria esensial seperti <strong>lokasi</strong>, <strong>jenis layanan</strong> yang ditawarkan, hingga detail <strong>fasilitas yang tersedia</strong>.
                    </p>
                    <p>
                        Untuk lebih menyempurnakan pencarian Anda, NaviTal dilengkapi dengan <strong>fitur filter layanan</strong> yang canggih. Fitur ini memungkinkan Anda untuk menyaring pilihan rumah sakit berdasarkan kebutuhan yang sangat spesifik, mulai dari pencarian <strong>poli spesialis</strong> tertentu, informasi ketersediaan <strong>rawat inap atau rawat jalan</strong>, hingga layanan krusial seperti <strong>IGD 24 jam</strong>.
                    </p>
                    <p>
                        Salah satu keunggulan NaviTal adalah integrasinya dengan <strong>map atau peta navigasi</strong>. Ini berarti Anda bisa langsung mendapatkan <strong>petunjuk arah menuju ke rumah sakit</strong> yang telah Anda pilih, tanpa perlu lagi repot mencari rute secara manual. Selain itu, kami sangat memahami betapa pentingnya masukan dari sesama pengguna. Oleh karena itu, NaviTal menyediakan fitur <strong>ulasan dan rating</strong>, yang memungkinkan Anda untuk melihat <strong>pengalaman pasien lain</strong> sebagai bahan pertimbangan berharga dalam membuat keputusan.
                    </p>
                    <p>
                        Dengan berbagai fitur unggulan tersebut, NaviTal hadir bukan hanya sebagai aplikasi, melainkan sebagai <strong>solusi komprehensif yang mempermudah akses informasi layanan kesehatan</strong>. Kami berupaya agar pencarian rumah sakit oleh masyarakat menjadi proses yang <strong>lebih cepat dan efisien</strong>. Pada akhirnya, kami berharap NaviTal dapat turut <strong>mendukung peningkatan kualitas layanan kesehatan</strong> secara keseluruhan bagi masyarakat.
                    </p>
                    <p class="mt-6">
                        Terima kasih telah mempercayai NaviTal.
                    </p>
                    <p class="font-semibold text-cyan-400 mt-2">
                        Salam Sehat, <br>
                        Tim Developer NaviTal
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection