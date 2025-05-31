<?php

namespace Database\Seeders;

use App\Models\Hospital;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class HospitalSeeder extends Seeder
{
    public function run(): void
    {
        $hospitals = [
            [
                'category_id' => 2,
                'name' => 'Kota Bandung',
                'description' => <<<TEXT
Rumah Sakit Umum Daerah Kota Bandung adalah salah satu fasilitas pelayanan kesehatan milik pemerintah daerah yang berada di bawah naungan Dinas Kesehatan Kota Bandung. Rumah sakit ini menyediakan berbagai layanan medis, termasuk IGD 24 jam, rawat jalan, rawat inap, dan penunjang medis lainnya.
TEXT,
                'address' => 'Jl. Rumah Sakit No. 22, Kelurahan Cigereleng, Kecamatan Regol, Kota Bandung, Jawa Barat',
                'thumbnail' => 'hospitals/RSUDkotabandung.jpg',
                'latitude' => '-6.915596521839833',
                'longitude' => '107.69875388192958',
                'open' => '00:00:00',
                'close' => '23:59:00',
            ],
            [
                'category_id' => 3, 
                'name' => 'Advent Bandung',
                'description' => <<<TEXT
Rumah Sakit Advent Bandung adalah rumah sakit umum swasta tipe B yang terletak di Jalan Cihampelas No. 161, Kota Bandung. Dikenal luas karena pelayanannya yang ramah dan profesional, rumah sakit ini berdiri di bawah naungan Gereja Masehi Advent Hari Ketujuh dan memiliki berbagai layanan unggulan seperti bedah, anak, penyakit dalam, serta penunjang medis modern.
TEXT,
                'address' => 'Jl. Cihampelas No. 161, Bandung, Jawa Barat',
                'thumbnail' => 'hospitals/RSadventbandung.jpg',
                'latitude' => '-6.891906172108347',
                'longitude' => '107.60326896685179',
                'open' => '00:00:00',
                'close' => '23:59:00',
            ],
            [
                'category_id' => 3, 
                'name' => 'Al Islam Bandung ',
                'description' => <<<TEXT
RS Al Islam Bandung adalah rumah sakit umum swasta tipe B yang berlokasi di Jl. Soekarno Hatta No. 644, Bandung, Jawa Barat. Didirikan pada 1 Agustus 1990 oleh Yayasan RSI KSWI Jawa Barat, rumah sakit ini memiliki visi "Menjadi Rumah Sakit yang Unggul, Terpercaya dan Islami dalam Pelayanan dan Pendidikan" .
TEXT,
                'address' => 'Jl. Soekarno Hatta No. 644, Bandung, Jawa Barat',
                'thumbnail' => 'hospitals/RSalislambandung.jpg',
                'latitude' => '-6.938772987460888',
                'longitude' => '107.66911152267289',
                'open' => '00:00:00',
                'close' => '23:59:00',
            ],
            [
                'category_id' => 5, 
                'name' => 'Bungsu',
                'description' => <<<TEXT
RSU Bungsu Bandung adalah rumah sakit umum swasta kelas D yang terletak di pusat Kota Bandung, tepatnya di Jl. Veteran No. 6, Kelurahan Kebon Pisang, Kecamatan Sumur Bandung. Didirikan pada tahun 1987, rumah sakit ini berada di bawah naungan Yayasan Bala Keselamatan dan mengusung moto "Dengan Kasih Sayang Kami Melayani" .
TEXT,
                'address' => 'Jl. Veteran No.6, Kb. Pisang, Kec. Sumur Bandung, Kota Bandung, Jawa Barat 40112',
                'thumbnail' => 'hospitals/RSUbungsu.jpg',
                'latitude' => '-6.918334378748967',
                'longitude' => '107.61331540918029',
                'open' => '00:00:00',
                'close' => '23:59:00',
            ],
            [
                'category_id' => 3, 
                'name' => 'Dr. H.A Rotinsulu',
                'description' => <<<TEXT
Rumah Sakit Paru Dr. H. A. Rotinsulu adalah rumah sakit khusus paru kelas A yang terletak di Jl. Bukit Jarian No. 40, Hegarmanah, Kecamatan Cidadap, Kota Bandung, Jawa Barat. Didirikan pada tahun 1935 oleh Pemerintah Hindia Belanda sebagai kelanjutan dari Sanatorium Solsana, rumah sakit ini awalnya fokus pada perawatan tuberkulosis (TBC). Seiring waktu, layanan berkembang mencakup berbagai penyakit paru lainnya. Nama rumah sakit ini diambil dari Dr. Hendrik Alexander Rotinsulu, yang menjabat sebagai direktur pada periode 1963–1975.
TEXT,
                'address' => 'Jl. Bukit Jarian No. 40, Hegarmanah, Cidadap, Bandung 40141',
                'thumbnail' => 'hospitals/rsDr.H.ARotinsulu.jpg',
                'latitude' => '-6.876676166653894',
                'longitude' => '107.60754580917995',
                'open' => '00:00:00',
                'close' => '23:59:00',
            ],
            [
                'category_id' => 6, 
                'name' => 'Dr. Hasan Sadikin',
                'description' => <<<TEXT
Rumah Sakit Umum Pusat dr. Hasan Sadikin (RSHS) adalah rumah sakit vertikal milik Kementerian Kesehatan Republik Indonesia yang terletak di Kota Bandung, Jawa Barat. RSHS berfungsi sebagai rumah sakit rujukan utama di Jawa Barat dan merupakan rumah sakit pendidikan bagi Fakultas Kedokteran Universitas Padjadjaran.
TEXT,
                'address' => 'Jl. Pasteur No.38, Pasteur, Kec. Sukajadi, Kota Bandung, Jawa Barat 40161',
                'thumbnail' => 'hospitals/rsupDrHasanSadikin.jpg',
                'latitude' => '-6.897945769584868',
                'longitude' => '107.59837393801594',
                'open' => '00:00:00',
                'close' => '23:59:00',
            ],
            [
                'category_id' => 7, 
                'name' => 'Rumah Sakit Khusus Gigi dan Mulut Kota Bandung',
                'description' => <<<TEXT
Rumah Sakit Khusus Gigi dan Mulut Kota Bandung (RSKGM) adalah satu-satunya rumah sakit milik Pemerintah Kota Bandung yang fokus pada layanan kesehatan gigi dan mulut. RSKGM berperan sebagai pusat pelayanan kesehatan gigi dan mulut bagi masyarakat Kota Bandung dan sekitarnya.
TEXT,
                'address' => 'Jl. R.E. Martadinata No. 45, Citarum, Kec. Bandung Wetan, Kota Bandung, Jawa Barat',
                'thumbnail' => 'hospitals/rskgmKotaBandung.jpeg',
                'latitude' => '-6.90574923049747',
                'longitude' => '107.61474143556266',
                'open' => '07:30:00',
                'close' => '14:30:00',
            ],
            [
                'category_id' => 8, 
                'name' => 'Halmahera Siaga',
                'description' => <<<TEXT
RS Khusus Bedah Halmahera Siaga (RSKB Halmahera Siaga) adalah rumah sakit swasta yang berfokus pada layanan bedah, khususnya ortopedi dan traumatologi. Didirikan pada 12 Juli 1992 oleh Prof. DR. M. Ahmad Djojosugito, dr., Sp.OT., MHA., MBA., FICS, seorang ahli bedah ortopedi yang juga pernah menjabat sebagai Direktur RSCM dan Kepala Dirjen Kesehatan di Kementerian Kesehatan RI .
TEXT,
                'address' => 'Jl. L.L.R.E Martadinata No.28, Citarum, Kec. Bandung Wetan, Kota Bandung, Jawa Barat 40115',
                'thumbnail' => 'hospitals/rsHalmaheraSiaga.jpg',
                'latitude' => '-6.906616632280283',
                'longitude' => '107.61561875335948',
                'open' => '00:00:00',
                'close' => '23:59:00',
            ],
            [
                'category_id' => 3,
                'name' => 'Hermina Arcamanik',
                'description' => <<<TEXT
RS Hermina Arcamanik adalah rumah sakit swasta yang berlokasi di kawasan Arcamanik, Bandung. Rumah sakit ini menyediakan layanan kesehatan lengkap dengan fasilitas modern dan tenaga medis profesional yang siap melayani pasien dengan berbagai kebutuhan kesehatan, termasuk layanan rawat inap, rawat jalan, dan penunjang medis lainnya.
TEXT,
                'address' => 'Jl. AH. Nasution No.50, Antapani Wetan, Kec. Antapani, Kota Bandung, Jawa Barat 40291',
                'thumbnail' => 'hospitals/rsHerminaArcamanik.jpg',
                'latitude' => '-6.903927717086749',
                'longitude' => '107.66672962267262',
                'open' => '00:00:00',
                'close' => '23:59:00',
            ],
            
            [
                'category_id' => 3,
                'name' => 'Hermina Pasteur',
                'description' => <<<TEXT
RS Hermina Pasteur adalah rumah sakit swasta yang terletak di Jalan Pasteur, Bandung. Rumah sakit ini menyediakan berbagai layanan kesehatan berkualitas dengan fasilitas lengkap dan tenaga medis profesional. RS Hermina Pasteur melayani rawat inap, rawat jalan, dan berbagai layanan penunjang medis lainnya untuk memenuhi kebutuhan pasien.
TEXT,
                'address' => 'Jl. Dr. Djundjunan No.107, Pasteur, Kec. Cicendo, Kota Bandung, Jawa Barat 40173',
                'thumbnail' => 'hospitals/rsHerminaPasteur.jpg',
                'latitude' => '-6.895733629597442',
                'longitude' => '107.58885215335928',
                'open' => '00:00:00',
                'close' => '23:59:00',
            ],


            [
                'category_id' => 3,
                'name' => 'Immanuel',
                'description' => <<<TEXT
RS Immanuel adalah rumah sakit umum swasta yang terletak di Kota Bandung. Dikenal sebagai salah satu rumah sakit dengan layanan medis lengkap dan profesional, RS Immanuel menyediakan berbagai layanan seperti rawat inap, rawat jalan, layanan bedah, dan fasilitas penunjang medis modern untuk kenyamanan dan kesehatan pasien.
TEXT,
                'address' => 'Jl. Raya Kopo No.161, Situsaeur, Kec. Bojongloa Kidul, Kota Bandung, Jawa Barat 40233',
                'thumbnail' => 'hospitals/rsImmanuel.jpg',
                'latitude' => '-6.935420838743752',
                'longitude' => '107.59601429383713',
                'open' => '00:00:00',
                'close' => '23:59:00',
            ],

            [
                'category_id' => 3,
                'name' => 'Kebon Jati',
                'description' => <<<TEXT
RS Kebon Jati adalah rumah sakit umum daerah di Kota Bandung yang menyediakan layanan kesehatan lengkap bagi masyarakat. Rumah sakit ini melayani berbagai layanan medis mulai dari rawat inap, rawat jalan, hingga pelayanan gawat darurat dengan tenaga medis yang kompeten dan fasilitas yang memadai.
TEXT,
                'address' => 'Jl. Kebon Jati No.152, Ciroyom, Kec. Andir, Kota Bandung, Jawa Barat 40181',
                'thumbnail' => 'hospitals/rsKebonJati.jpg',
                'latitude' => '-6.915911979194002',
                'longitude' => '107.59620137849349',
                'open' => '00:00:00',
                'close' => '23:59:00',
            ],

            [
                'category_id' => 4,
                'name' => 'Melinda',
                'description' => <<<TEXT
RSIA Melinda adalah rumah sakit ibu dan anak yang berfokus pada pelayanan kesehatan bagi ibu hamil, persalinan, dan perawatan bayi serta anak. Rumah sakit ini dilengkapi dengan fasilitas modern dan tenaga medis yang ahli di bidang kebidanan dan kesehatan anak, memberikan pelayanan terbaik untuk keluarga di Kota Bandung.
TEXT,
                'address' => 'Jl. Pajajaran No.46, Pasir Kaliki, Kec. Cicendo, Kota Bandung, Jawa Barat 40171',
                'thumbnail' => 'hospitals/rsiaMelinda.jpg',
                'latitude' => '-6.906755573541343',
                'longitude' => '107.60329042452364',
                'open' => '00:00:00',
                'close' => '23:59:00',
            ],

            [
                'category_id' => 4,
                'name' => 'Melinda 2',
                'description' => <<<TEXT
RSIA Melinda 2 adalah cabang rumah sakit ibu dan anak yang melanjutkan komitmen pelayanan kesehatan berkualitas bagi ibu dan anak di Kota Bandung. Rumah sakit ini menyediakan fasilitas modern dan layanan medis spesialis untuk kehamilan, persalinan, serta perawatan bayi dan anak.
TEXT,
                'address' => 'Jl. Dr. Cipto No.1, Pasir Kaliki, Kec. Cicendo, Kota Bandung, Jawa Barat 40171',
                'thumbnail' => 'hospitals/rsMelinda2.jpg',
                'latitude' => '-6.906167579203167',
                'longitude' => '107.59842413986698',
                'open' => '00:00:00',
                'close' => '23:59:00',
            ],

            [
                'category_id' => 3,
                'name' => 'Muhammadiyah Bandung',
                'description' => <<<TEXT
RS Muhammadiyah Bandung adalah rumah sakit swasta yang dikelola oleh organisasi Muhammadiyah. Rumah sakit ini menyediakan berbagai layanan kesehatan dengan standar profesional dan fasilitas lengkap, melayani pasien rawat inap, rawat jalan, serta berbagai layanan penunjang medis di Kota Bandung.
TEXT,
                'address' => 'Jl. K.H. Ahmad Dahlan No.53, Turangga, Kec. Lengkong, Kota Bandung, Jawa Barat 40264',
                'thumbnail' => 'hospitals/rsMuhammadiyahBandung.jpeg',
                'latitude' => '-6.933515290793109',
                'longitude' => '107.6232349975388',
                'open' => '00:00:00',
                'close' => '23:59:00',
            ],

            [
                'category_id' => 5,
                'name' => 'Pindad',
                'description' => <<<TEXT
RSU Pindad adalah rumah sakit milik PT Pindad yang menyediakan layanan kesehatan untuk karyawan dan masyarakat umum. Rumah sakit ini dilengkapi dengan fasilitas medis lengkap dan tenaga kesehatan profesional yang siap memberikan pelayanan terbaik di Kota Bandung.
TEXT,
                'address' => 'Jl. Gatot Subroto No.517, Sukapura, Kec. Kiaracondong, Kota Bandung, Jawa Barat 40285',
                'thumbnail' => 'hospitals/rsPindad.png',
                'latitude' => '-6.939850939130439',
                'longitude' => '107.6463518417182',
                'open' => '08:00:00',
                'close' => '20:00:00',
            ],

            [
                'category_id' => 9,
                'name' => 'R.A. Habibie',
                'description' => <<<TEXT
RSKG R.A. Habibie adalah rumah sakit umum yang memberikan layanan kesehatan komprehensif dengan fasilitas modern dan tenaga medis berpengalaman. Rumah sakit ini berkomitmen memberikan pelayanan terbaik bagi masyarakat Kota Bandung dan sekitarnya.
TEXT,
                'address' => 'Jl. Tubagus Ismail No.46, Sekeloa, Kecamatan Coblong, Kota Bandung, Jawa Barat 40134',
                'thumbnail' => 'hospitals/rskgRAHabibie.jpg',
                'latitude' => '-6.885150129916294',
                'longitude' => '107.62017729198577',
                'open' => '00:00:00',
                'close' => '23:59:00',
            ],

            [
                'category_id' => 3,
                'name' => 'Rajawali',
                'description' => <<<TEXT
RS Rajawali Bandung adalah rumah sakit umum swasta kelas C yang terletak di Bandung, tepatnya di Jl. Cijerah No. 135, Kecamatan Bandung Kulon. Didirikan sejak tahun 2002, rumah sakit ini menyediakan layanan medis komprehensif dengan berbagai spesialisasi dan fasilitas modern. RS Rajawali berkomitmen memberikan pelayanan kesehatan terbaik dengan mengusung moto "Pelayanan Prima untuk Kesehatan Anda".
TEXT,
                'address' => 'Jl. Rajawali Barat No.38, Maleber, Kec. Andir, Kota Bandung, Jawa Barat 40184',
                'thumbnail' => 'hospitals/rsRajawali.jpeg',
                'latitude' => '-6.912300635385606',
                'longitude' => '107.5733689515086',
                'open' => '00:00:00',
                'close' => '23:59:00',
            ],

            [
                'category_id' => 3,
                'name' => 'Santo Borromeus',
                'description' => <<<TEXT
RS Santo Borromeus Bandung adalah rumah sakit umum swasta kelas A yang terletak di pusat Kota Bandung, tepatnya di Jl. Borromeus No. 26. Didirikan pada tahun 1928, rumah sakit ini berada di bawah naungan Yayasan Katolik Santo Borromeus dan dikenal sebagai salah satu rumah sakit tertua dan terpercaya di Bandung. RS Santo Borromeus menyediakan berbagai layanan medis dengan teknologi modern dan tenaga medis profesional, serta mengusung moto "Melayani dengan Kasih dan Profesionalisme".
TEXT,
                'address' => 'Jl. Ir. H. Juanda No.100, Lebakgede, Kecamatan Coblong, Kota Bandung, Jawa Barat 40132',
                'thumbnail' => 'hospitals/rsSantoBorromeus.jpg',
                'latitude' => '-6.89393158547858',
                'longitude' => '107.61361532267249',
                'open' => '00:00:00',
                'close' => '23:59:00',
            ],

            [
                'category_id' => 3,
                'name' => 'Santo Yusup',
                'description' => <<<TEXT
RS Santo Yusup Bandung adalah rumah sakit umum swasta kelas B yang terletak di Kota Bandung, tepatnya di Jl. Cikutra No. 7. Didirikan sejak tahun 1937, rumah sakit ini berada di bawah naungan Yayasan Katolik Santo Yusup dan dikenal dengan pelayanan medis yang ramah dan profesional. RS Santo Yusup menyediakan berbagai layanan kesehatan dengan fasilitas modern dan tenaga medis berpengalaman, serta mengusung moto "Melayani dengan Hati dan Profesionalisme".
TEXT,
                'address' => 'Jl. Cikutra No.7, Cikutra, Kec. Cibeunying Kidul, Kota Bandung, Jawa Barat 40124',
                'thumbnail' => 'hospitals/rsSantoYusup.jpg',
                'latitude' => '-6.90680848330241',
                'longitude' => '107.64352265335937',
                'open' => '00:00:00',
                'close' => '23:59:00',
            ],

            [
                'category_id' => 5,
                'name' => 'Santosa Bandung Central',
                'description' => <<<TEXT
Rumah Sakit Santosa Bandung Central merupakan sebuah rumah sakit swasta terlengkap yang ada di daerah Jawa Barat dan menjadi RS Swasta Pertama di Indonesia yang menerima atau diakui sebagai RSU Tipe A. Rumah sakit tersebut telah berdiri dan beroperasional sejak tahun 2006, dan diresmikan langsung oleh Menteri Kesehatan RI Dr. dr. Siti Fadilah Supari, Sp.JP (K) pada tanggal 4 November 2006.
TEXT,
                'address' => 'Jl. Kebon Jati No.38, Kb. Jeruk, Kec. Andir, Kota Bandung, Jawa Barat 40181',
                'thumbnail' => 'hospitals/rsSantosaBandungCentral.jpeg',
                'latitude' => '-6.914839785035297',
                'longitude' => '107.60010648696993',
                'open' => '00:00:00',
                'close' => '23:59:00',
            ],

            [
                'category_id' => 3,
                'name' => 'Sariningsih',
                'description' => <<<TEXT
RS Sariningsih adalah rumah sakit umum swasta kelas C. Didirikan untuk melayani kebutuhan kesehatan masyarakat sekitar dengan berbagai layanan medis yang lengkap dan fasilitas yang memadai. RS Sariningsih mengedepankan pelayanan yang ramah dan profesional demi kenyamanan pasien.
TEXT,
                'address' => 'Jl. L. L. R.E. Martadinata No.9, Citarum, Kec. Bandung Wetan, Kota Bandung, Jawa Barat 40115',
                'thumbnail' => 'hospitals/rsSariningsih.jpg',
                'latitude' => '-6.9068202577877855',
                'longitude' => '107.61135124250484',
                'open' => '00:00:00',
                'close' => '23:59:00',
            ],

            [
                'category_id' => 3,
                'name' => 'Mayapada Bandung',
                'description' => <<<TEXT
RS Mayapada Bandung adalah rumah sakit swasta kelas A yang berlokasi di kawasan strategis Kota Bandung. Rumah sakit ini merupakan bagian dari jaringan RS Mayapada yang dikenal luas dengan layanan kesehatan modern, teknologi medis terkini, dan tenaga medis profesional. RS Mayapada Bandung berkomitmen memberikan pelayanan kesehatan yang berkualitas dan berorientasi pada kenyamanan pasien.
TEXT,
            'address' => 'Jl. Terusan Buah Batu No.5, Batununggal, Kec. Bandung Kidul, Kota Bandung, Jawa Barat 40266',
            'thumbnail' => 'hospitals/RSmayapada.jpg',
            'latitude' => '-6.935864323574909',
            'longitude' => '107.6352688899478',
            'open' => '00:00:00',
            'close' => '23:59:00',
        ],

        [
            'category_id' => 5,
            'name' => 'Oetomo Hospital',
            'description' => <<<TEXT
Oetomo Hospital adalah rumah sakit umum tipe C yang terletak di Kabupaten Bandung, tepatnya di Jl. Raya Bojongsoang No. 156, Desa Lengkong, Kecamatan Bojongsoang. Diresmikan pada 7 Maret 2023 oleh Ketua TP-PKK Provinsi Jawa Barat, rumah sakit ini didirikan oleh keluarga besar Oetomo Wijaya dengan visi untuk menyediakan layanan kesehatan berkualitas tinggi dengan asas welas asih, ketulusan, dan kepedulian. Oetomo Hospital menawarkan berbagai layanan medis komprehensif, didukung oleh tenaga medis profesional dan fasilitas modern, serta berkomitmen untuk menjadi rumah sakit pilihan utama bagi masyarakat di Kabupaten Bandung dan sekitarnya.
TEXT,
            'address' => 'Jl. Raya Bojongsoang No. 156, Desa Lengkong, Kec. Bojongsoang, Kab. Bandung, Jawa Barat 40287',
            'thumbnail' => 'hospitals/rsOetomo.jpg',
            'latitude' => '-6.966523294854343',
            'longitude' => '107.63361428302204',
            'open' => '00:00:00',
            'close' => '23:59:00',
        ],
        
        [
            'category_id' => 3,
            'name' => 'Mata Cicendo',
            'description' => <<<TEXT
Rumah Sakit Mata Cicendo adalah rumah sakit khusus mata yang berlokasi di Kota Bandung dan berstatus sebagai Rumah Sakit Khusus Tipe A. Didirikan sejak tahun 1909, RS Mata Cicendo memiliki sejarah panjang dalam pelayanan kesehatan mata dan kini menjadi pusat rujukan nasional di bidang oftalmologi. Dengan fasilitas yang lengkap dan tenaga medis ahli, rumah sakit ini menyediakan layanan mulai dari pemeriksaan dasar mata hingga tindakan bedah kompleks. Komitmen RS Mata Cicendo adalah memberikan pelayanan terbaik dalam menjaga dan memulihkan kesehatan mata masyarakat Indonesia.
TEXT,
            'address' => 'Jl. Cicendo No.4, Babakan Ciamis, Kec. Sumur Bandung, Kota Bandung, Jawa Barat 40117',
            'thumbnail' => 'hospitals/rsCicendo.jpg',
            'latitude' => '-6.910233233172756',
            'longitude' => '107.60432426500103',
            'open' => '07:30:00',
            'close' => '18:00:00',
        ],

        [
            'category_id' => 3,
            'name' => 'Santosa Bandung Kopo',
            'description' => <<<TEXT
RS Santosa Bandung Kopo adalah salah satu rumah sakit swasta yang berada di Kota Bandung, berlokasi strategis di area Kopo. Rumah sakit ini berkomitmen untuk memberikan pelayanan kesehatan yang komprehensif dan berkualitas tinggi bagi masyarakat, didukung oleh tim medis profesional dan fasilitas modern. RS Santosa Bandung Kopo melayani berbagai spesialisasi medis dan dilengkapi dengan unit gawat darurat, rawat inap, serta layanan penunjang lainnya untuk memenuhi kebutuhan kesehatan pasien.
TEXT,
            'address' => 'Jl. Raya Kopo No.462, Cirangrang, Kec. Babakan Ciparay, Kota Bandung, Jawa Barat 40227',
            'thumbnail' => 'hospitals/rsSantosaKopo.jpeg',
            'latitude' => '-6.952208593928235',
            'longitude' => '107.58631003801639',
            'open' => '00:00:00',
            'close' => '23:59:00',
        ],

        [
            'category_id' => 3,
            'name' => 'Bhayangkara Sartika Asih',
            'description' => <<<TEXT
Rumah Sakit Bhayangkara Sartika Asih adalah salah satu rumah sakit umum milik Polri yang berlokasi di Kota Bandung. Rumah sakit ini berkomitmen untuk memberikan pelayanan kesehatan yang optimal kepada anggota Polri, PNS Polri, dan masyarakat umum. Dengan dukungan tenaga medis profesional serta fasilitas kesehatan yang memadai dan terus dikembangkan, RS Bhayangkara Sartika Asih melayani berbagai kebutuhan medis mulai dari pelayanan gawat darurat, rawat inap, rawat jalan, hingga spesialisasi medis yang beragam, serta menjadi salah satu rujukan utama di wilayah Bandung dan sekitarnya.
TEXT,
            'address' => 'Jl. Moch. Toha No.369, Ciseureuh, Kec. Regol, Kota Bandung, Jawa Barat 40255',
            'thumbnail' => 'hospitals/rsSartikaAsih.jpg',
            'latitude' => '-6.956424013511322',
            'longitude' => '107.61252757249153',
            'open' => '00:00:00',
            'close' => '23:59:00',
        ],

        [
            'category_id' => 2,
            'name' => 'Bedas Cimaung', 
            'description' => <<<TEXT
RSUD Bedas Cimaung adalah rumah sakit umum daerah yang berlokasi di Kecamatan Cimaung, Kabupaten Bandung. Rumah sakit ini berkomitmen untuk menyediakan layanan kesehatan dasar dan rujukan bagi masyarakat di wilayah selatan Kabupaten Bandung. Didukung oleh fasilitas yang memadai dan tenaga medis profesional, RSUD Bedas Cimaung berupaya memberikan pelayanan kesehatan yang berkualitas, terjangkau, dan merata, serta menjadi pusat rujukan kesehatan yang dipercaya di daerahnya.
TEXT,
            'address' => 'Cikalong, Kec. Cimaung, Kabupaten Bandung, Jawa Barat 40374', 
            'thumbnail' => 'hospitals/rsudBedasCimaung.jpg',
            'latitude' => '-7.124430164888249',
            'longitude' => '107.55703195336139',
            'open' => '00:00:00',
            'close' => '23:59:00',
        ],

        [
            'category_id' => 2,
            'name' => 'Al-Ihsan Provinsi Jawa Barat',
            'description' => <<<TEXT
RSUD Al-Ihsan Provinsi Jawa Barat adalah rumah sakit umum milik Pemerintah Provinsi Jawa Barat yang berlokasi di Jl. Kiastramanggala, Baleendah, Kabupaten Bandung. Didirikan pada tahun 1993 dan beralih kepemilikan menjadi milik Pemerintah Provinsi Jawa Barat sejak 2004, rumah sakit ini saat ini berstatus Kelas B (dengan target menuju Kelas A). RSUD Al-Ihsan berkomitmen menyediakan pelayanan kesehatan yang komprehensif dan berkualitas tinggi dengan mengedepankan fungsi sosial dan ekonomi, didukung oleh 617 tempat tidur, fasilitas modern, dan tenaga medis profesional, serta telah meraih akreditasi Paripurna.
TEXT,
            'address' => 'Jl. Kiastramanggala, Baleendah, Kec. Baleendah, Kab. Bandung, Jawa Barat 40381',
            'thumbnail' => 'hospitals/rsudAlIhsan.jpg',
            'latitude' => '-7.007749911359155',
            'longitude' => '107.6231288091811',
            'open' => '00:00:00',
            'close' => '23:59:00',
        ],

        [
            'category_id' => 2,
            'name' => 'Kesehatan Kerja Provinsi Jawa Barat',
            'description' => <<<TEXT
RSUD Kesehatan Kerja Provinsi Jawa Barat adalah rumah sakit umum daerah milik Pemerintah Provinsi Jawa Barat yang berlokasi di Jl. Rancaekek KM. 27 No. 612, Desa Nanjungmekar, Kecamatan Rancaekek, Kabupaten Bandung. Rumah sakit ini memiliki keunggulan dalam bidang kesehatan kerja dan bertekad menjadi rumah sakit berstandar internasional pada tahun 2030. Menyediakan pelayanan kesehatan yang komprehensif dan holistik, RSUD Kesehatan Kerja menawarkan layanan Gawat Darurat 24 jam, Rawat Jalan, Rawat Inap, Laboratorium, Radiologi, Rehabilitasi Medik, dan Medical Check Up, serta berkontribusi dalam pendidikan, pelatihan, dan penelitian di bidang kesehatan kerja.
TEXT,
            'address' => 'Jl. Rancaekek KM. 27 No. 612, Desa Nanjungmekar, Kec. Rancaekek, Kab. Bandung, Jawa Barat 40394',
            'thumbnail' => 'hospitals/rsudKesehatanKerja.png',
            'latitude' => '-6.9671680031678935',
            'longitude' => '107.82626345335996',
            'open' => '00:00:00',
            'close' => '23:59:00',
        ],

        [
            'category_id' => 5,
            'name' => 'Unggul Karsa Medika',
            'description' => <<<TEXT
RSU Unggul Karsa Medika (RSUKM) adalah rumah sakit umum swasta yang berlokasi di Jl. Taman Kopo Indah III Blok H No. 1, Desa MekarRahayu, Kecamatan MargaAsih, Kabupaten Bandung. Diresmikan pada 18 Oktober 2018, RSUKM tidak hanya bertujuan memberikan pelayanan kesehatan paripurna bagi masyarakat, tetapi juga berfungsi sebagai rumah sakit pendidikan bagi Fakultas Kedokteran Universitas Kristen Maranatha. Dengan visi menjadi rumah sakit yang unggul, bermutu, terpercaya berbasis teknologi, RSUKM menyediakan layanan gawat darurat 24 jam, rawat jalan, rawat inap, serta berbagai fasilitas penunjang medis modern, didukung oleh tenaga profesional dengan mengedepankan nilai-nilai kemanusiaan.
TEXT,
            'address' => 'Jl. Taman Kopo Indah III Blok H No. 1, MekarRahayu, Kec. MargaAsih, Kab. Bandung, Jawa Barat 40218',
            'thumbnail' => 'hospitals/rsuUnggulKarsaMedika.jpg',
            'latitude' => '-6.970129750772184',
            'longitude' => '107.54915440918077',
            'open' => '00:00:00',
            'close' => '23:59:00',
        ],

        [
            'category_id' => 2,
            'name' => 'Daerah Cicalengka',
            'description' => <<<TEXT
RS Umum Daerah Cicalengka adalah rumah sakit umum milik Pemerintah Kabupaten Bandung yang berlokasi di Jl. H. Darham Cikopo No.35, Tenjolaya, Kecamatan Cicalengka. Status rumah sakit ini telah berubah dari Tipe C menjadi Tipe B pada tahun 2024, sebagai upaya peningkatan pelayanan kesehatan bagi masyarakat Kabupaten Bandung dan sekitarnya. RSUD Cicalengka menawarkan berbagai fasilitas dan layanan kesehatan yang lengkap dan modern, meliputi unit gawat darurat, rawat inap, poliklinik, laboratorium, radiologi, serta didukung oleh tenaga medis dan paramedis yang profesional dan berpengalaman, berkomitmen untuk memberikan pelayanan terbaik.
TEXT,
            'address' => 'Jl. H. Darham Cikopo No.35, Tenjolaya, Kec. Cicalengka, Bandung, Jawa Barat 40395',
            'thumbnail' => 'hospitals/rsudCicalengka.jpg',
            'latitude' => '-6.982326212114725',
            'longitude' => '107.84303902082257',
            'open' => '00:00:00',
            'close' => '23:59:00',
        ],
        
        [
            'category_id' => 2,
            'name' => 'Majalaya',
            'description' => <<<TEXT
RS Umum Daerah Majalaya adalah rumah sakit umum milik Pemerintah Kabupaten Bandung. Berstatus Tipe C, rumah sakit ini menjadi fasilitas kesehatan vital yang melayani kebutuhan medis masyarakat Majalaya dan wilayah sekitarnya. RSUD Majalaya menyediakan berbagai layanan kesehatan komprehensif, mulai dari unit gawat darurat 24 jam, rawat jalan dengan beragam poliklinik spesialis, hingga rawat inap, didukung oleh fasilitas memadai dan tenaga medis profesional yang berdedikasi untuk meningkatkan kualitas kesehatan masyarakat.
TEXT,
            'address' => 'Jl. Cipaku No.87, Cipaku, Kec. Paseh, Kabupaten Bandung, Jawa Barat 40383',
            'thumbnail' => 'hospitals/rsudMajalaya.jpg',
            'latitude' => '-7.048645124436917',
            'longitude' => '107.77209433801728',
            'open' => '00:00:00',
            'close' => '23:59:00',
        ],

        [
            'category_id' => 5,
            'name' => 'Bina Sehat Dayeuhkolot',
            'description' => <<<TEXT
Rumah Sakit Umum Bina Sehat adalah rumah sakit umum yang berlokasi di Jl. Raya Dayeuhkolot No.325, Citeureup, Kecamatan Dayeuhkolot, Kabupaten Bandung. Rumah sakit ini menyediakan berbagai layanan medis untuk masyarakat di Dayeuhkolot dan sekitarnya.
TEXT,
            'address' => 'Jl. Raya Dayeuhkolot No.325, Citeureup, Kec. Dayeuhkolot, Kabupaten Bandung, Jawa Barat 40257',
            'thumbnail' => 'hospitals/rsuBinaSehat.jpg',
            'latitude' => '-6.985567964843273',
            'longitude' => '107.62468816500174',
            'open' => '00:00:00',
            'close' => '23:59:00',
        ],

        [
            'category_id' => 10,
            'name' => 'dr. Norman T. Lubis',
            'description' => <<<TEXT
Rumah Sakit dr. Norman T. Lubis adalah fasilitas kesehatan militer. Sebagai bagian dari sistem kesehatan TNI AU, rumah sakit ini memiliki tugas utama melayani kesehatan prajurit TNI AU, PNS, keluarga, dan purnawirawan, namun juga membuka pelayanan untuk masyarakat umum. RS Umum TNI AU Lanud Sulaiman menyediakan berbagai layanan kesehatan dasar dan beberapa spesialisasi, didukung oleh tenaga medis yang terlatih dan fasilitas yang memadai untuk memenuhi kebutuhan kesehatan pasien.
TEXT,
            'address' => 'Jl. Terusan Kopo No.457, Sulaiman, Kec. Margahayu, Kabupaten Bandung, Jawa Barat 40229',
            'thumbnail' => 'hospitals/rsaudrNormanTLubis.jpg',
            'latitude' => '-6.98338815697485',
            'longitude' => '107.56397174276681',
            'open' => '00:00:00',
            'close' => '23:59:00',
        ],

        [
            'category_id' => 3, 
            'name' => 'AMC Bandung',
            'description' => <<<TEXT
RS AMC Bandung adalah rumah sakit umum swasta yang berkomitmen menyediakan pelayanan kesehatan secara profesional dan komprehensif. Rumah sakit ini didukung oleh fasilitas medis modern dan tenaga ahli yang berdedikasi, serta berupaya menjadi salah satu pilihan utama masyarakat untuk kebutuhan layanan kesehatan.
TEXT,
            'address' => 'Jl. Raya Cileunyi No.1, Cileunyi Wetan, Kec. Cileunyi, Kab. Bandung, Jawa Barat 40622',
            'thumbnail' => 'hospitals/rsAMC.jpeg',
            'latitude' => '-6.940155038366894',
            'longitude' => '107.7558199668522',
            'open' => '00:00:00',
            'close' => '23:59:00',
        ],

        [   
            'category_id' => 2, 
            'name' => 'Bedas Kertasari',
            'description' => <<<TEXT
RS Umum Daerah Bedas Kertasari adalah rumah sakit umum milik Pemerintah Kabupaten Bandung. Diresmikan pada 28 Maret 2023, rumah sakit ini dibangun untuk melayani kebutuhan kesehatan masyarakat di wilayah Kertasari dan Pacet. RSUD Bedas Kertasari menyediakan berbagai layanan kesehatan dasar dan terus meningkatkan fasilitasnya untuk memberikan pelayanan yang komprehensif, didukung oleh tenaga medis profesional.
TEXT,
            'address' => 'Jl. Raya Kertasari-Pacet, Desa Sukapura, Kec. Kertasari, Kab. Bandung, Jawa Barat 40386',
            'thumbnail' => 'hospitals/rsudBedasKertasari.jpg',
            'latitude' => '-7.169510263531889', 
            'longitude' => '107.68935352452593', 
            'open' => '00:00:00',
            'close' => '23:59:00',
        ],

        [
            'category_id' => 2,
            'name' => 'Oto Iskandar Dinata',
            'description' => <<<TEXT
RSUD Oto Iskandar Dinata adalah rumah sakit umum daerah milik Pemerintah Kabupaten Bandung. Dinamai sesuai pahlawan nasional, rumah sakit ini berkomitmen untuk menyediakan pelayanan kesehatan yang komprehensif dan berkualitas tinggi. RSUD Otista melayani berbagai kebutuhan medis masyarakat, didukung oleh fasilitas memadai serta tenaga medis profesional, dengan tujuan meningkatkan derajat kesehatan publik.
TEXT,
            'address' => 'Jl. Raya Gading Tutuka No.51, Cingcin, Kec. Soreang, Kab. Bandung, Jawa Barat 40913',
            'thumbnail' => 'hospitals/rsudOtoIskandarDinata.jpeg',
            'latitude' => '-7.027907169572585',
            'longitude' => '107.54353388219636',
            'open' => '00:00:00',
            'close' => '23:59:00',
        ],

        [
            'category_id' => 5,
            'name' => 'Hermina Soreang',
            'description' => <<<TEXT
RSU Hermina Soreang adalah rumah sakit swasta bagian dari jaringan Rumah Sakit Hermina Group. Rumah sakit ini berkomitmen menyediakan pelayanan kesehatan yang komprehensif dan berkualitas, dengan fokus pada kesehatan ibu dan anak serta layanan umum. RS Hermina Soreang menawarkan berbagai fasilitas dan spesialisasi medis, didukung oleh teknologi modern dan tim medis profesional, untuk memenuhi kebutuhan kesehatan masyarakat dengan mengutamakan keselamatan dan kenyamanan pasien.
TEXT,
            'address' => 'Jl. Terusan Al Fathu No.9A, Soreang, Kec. Soreang, Kabupaten Bandung, Jawa Barat 40911',
            'thumbnail' => 'hospitals/rsuHerminaSoreang.jpg',
            'latitude' => '-7.0315019708047775',
            'longitude' => '107.52675469568887',
            'open' => '00:00:00',
            'close' => '23:59:00',
        ],
        [
        'category_id' => 5,
        'name' => 'Avisena',
        'description' => <<<TEXT
RS Umum Avisena adalah rumah sakit swasta tipe C yang berlokasi di Cimahi, Jawa Barat. Dirintis sejak tahun 2007 dan beroperasi sebagai rumah sakit umum sejak 2012 di bawah naungan PT Avisena Mandiri Sejahtera. RSU Avisena memiliki visi menjadi Rumah Sakit terbaik di Cimahi dengan misi memberikan pelayanan yang profesional, kekeluargaan, dan amanah, serta mendukung program pemerintah untuk meningkatkan derajat kesehatan masyarakat. Rumah sakit ini menyediakan pelayanan IGD 24 jam, rawat inap, rawat jalan, dan berbagai klinik spesialis dengan komitmen melayani dengan sepenuh hati.
TEXT,
        'address' => 'Jl. Melong Raya No.170, Melong, Kec. Cimahi Selatan, Kota Cimahi, Jawa Barat 40534',
        'thumbnail' => 'hospitals/rsuAvisena.jpeg', 
        'latitude' => '-6.921730339378644', 
        'longitude' => '107.55591651053206', 
        'open' => '00:00:00', 
        'close' => '23:59:00', 
        ],
        [
        'category_id' => 1,
        'name' => 'TNI AD Tk. II Dustira',
        'description' => <<<TEXT
Rumah Sakit TNI AD Tk. II Dustira adalah rumah sakit umum milik TNI Angkatan Darat yang berlokasi di Cimahi, Jawa Barat. Didirikan pada tahun 1887, RS Dustira berkomitmen untuk memberikan pelayanan kesehatan yang prima dan paripurna, tidak hanya bagi personel TNI AD, PNS, dan keluarga, tetapi juga bagi anggota TNI lainnya, masyarakat umum, serta peserta BPJS. Sebagai rumah sakit rujukan tertinggi di wilayah Kodam III/Siliwangi, RS Dustira menyediakan berbagai layanan medis, dukungan kesehatan yang handal, serta menyelenggarakan pendidikan, pelatihan, penelitian, dan pengembangan sebagai Rumah Sakit Pendidikan. Moto "TeRPESoNA" (Tertib, Ramah, Profesional, Empati, Solid, Nyaman dan Aman) menjadi pedoman dalam setiap pelayanannya.
TEXT,
        'address' => 'Jl. dr. Dustira No.1, Baros, Kec. Cimahi Tengah, Kota Cimahi, Jawa Barat 40521',
        'thumbnail' => 'hospitals/rsDustira.png',
        'latitude' => '-6.885410146537146',
        'longitude' => '107.53486465150833',
        'open' => '00:00:00',
        'close' => '23:59:00',
        ],
        [
        'category_id' => 5,
        'name' => 'Kasih Bunda',
        'description' => <<<TEXT
Rumah Sakit Umum Kasih Bunda adalah rumah sakit tipe C yang berlokasi di Cimahi, Jawa Barat. Berawal dari Klinik Kasih Bunda pada tahun 2008, berkembang menjadi Rumah Sakit Bersalin Kasih Bunda pada tahun 2010, dan resmi beroperasi sebagai Rumah Sakit Umum Kasih Bunda sejak tahun 2012. RSUD Kasih Bunda telah terakreditasi oleh KARS dan berkomitmen memberikan pelayanan kesehatan yang terpadu, cepat, tepat, profesional, dan penuh kasih sayang bagi seluruh lapisan masyarakat dengan biaya terjangkau. Rumah sakit ini melayani pasien umum, BPJS Kesehatan, BPJS Ketenagakerjaan, serta berbagai asuransi dan perusahaan rekanan.
TEXT,
        'address' => 'Jl. Mahar Martanegara No.166, Baros, Kec. Cimahi Sel., Kota Cimahi, Jawa Barat 40533',
        'thumbnail' => 'hospitals/rsuKasihBunda.png', 
        'latitude' => '-6.900028901902843',
        'longitude' => '107.5471098155228',
        'open' => '00:00:00',
        'close' => '23:59:00',
        ],
        [
        'category_id' => 2,
        'name' => 'Cibabat',
        'description' => <<<TEXT
Rumah Sakit Umum Daerah Cibabat adalah rumah sakit umum milik Pemerintah Kota Cimahi yang berlokasi di Jawa Barat. Sebagai rumah sakit tipe B, RSUD Cibabat berkomitmen untuk menyediakan pelayanan kesehatan yang komprehensif, berkualitas, dan profesional bagi seluruh lapisan masyarakat, termasuk pasien BPJS. Dengan fasilitas yang memadai dan didukung oleh tenaga medis spesialis, RSUD Cibabat melayani berbagai kebutuhan medis mulai dari gawat darurat 24 jam, rawat inap, rawat jalan, hingga berbagai klinik spesialis, serta menjadi salah satu pusat rujukan kesehatan utama di wilayah Cimahi dan sekitarnya.
TEXT,
        'address' => 'Jl. Jend. H. Amir Machmud No.140, Cibabat, Kec. Cimahi Utara, Kota Cimahi, Jawa Barat 40513',
        'thumbnail' => 'hospitals/rsudCibabat.jpeg',
        'latitude' => '-6.878597606094888',
        'longitude' => '107.55098652267233',
        'open' => '00:00:00',
        'close' => '23:59:00',
        ],
        [
        'category_id' => 5,
        'name' => 'Mitra Anugrah Lestari',
        'description' => <<<TEXT
Rumah Sakit Umum Mitra Anugrah Lestari (RS MAL) adalah rumah sakit umum swasta tipe C yang berlokasi di Cimahi, Jawa Barat. Berdiri sejak 5 Juli 1997, RS MAL berkomitmen untuk melayani dengan cinta dan perhatian, menjadikan setiap pasien bagian dari keluarga. Rumah sakit ini menyediakan pelayanan kesehatan yang berkualitas, profesional, dan komprehensif, didukung oleh tenaga medis ahli dan fasilitas lengkap, termasuk IGD 24 jam, rawat inap, rawat jalan, dan berbagai poliklinik spesialis seperti Paru, Rehabilitasi Medik, Anak, Bedah Umum, Saraf, dan lain-lain.
TEXT,
        'address' => 'Jl. Cibaligo No.76, Cigugur Tengah, Kec. Cimahi Tengah, Kota Cimahi, Jawa Barat 40522',
        'thumbnail' => 'hospitals/rsuMitraAnugrahLestari.jpg',
        'latitude' => '-6.900435468470966',
        'longitude' => '107.55567892267263',
        'open' => '00:00:00',
        'close' => '23:59:00',
        ],
        [
        'category_id' => 3,
        'name' => 'Mitra Kasih',
        'description' => <<<TEXT
Rumah Sakit Mitra Kasih adalah rumah sakit umum swasta tipe C yang berlokasi di Cimahi, Jawa Barat. Berkomitmen untuk memberikan pelayanan kesehatan yang berkualitas, komprehensif, dan terjangkau bagi masyarakat. RS Mitra Kasih menyediakan fasilitas gawat darurat 24 jam, rawat inap, rawat jalan, serta berbagai layanan poliklinik spesialis yang didukung oleh tim medis profesional dan peralatan modern. Rumah sakit ini juga merupakan salah satu fasilitas kesehatan rujukan bagi peserta BPJS Kesehatan, menjadikannya pilihan layanan kesehatan yang dapat diandalkan di wilayah Cimahi dan sekitarnya.
TEXT,
        'address' => 'Jl. Jend. H. Amir Machmud No.341, Cigugur Tengah, Kec. Cimahi Tengah, Kota Cimahi, Jawa Barat 40522',
        'thumbnail' => 'hospitals/rsMitraKasih.jpeg',
        'latitude' => '-6.884053299043665',
        'longitude' => '107.5527772745234',
        'open' => '00:00:00',
        'close' => '23:59:00',
        ],
        [
        'category_id' => 11, 
        'name' => 'Unjani Cimahi',
        'description' => <<<TEXT
Rumah Sakit Gigi dan Mulut Universitas Jenderal Achmad Yani (RSGM Unjani) Cimahi adalah rumah sakit khusus yang berfokus pada pelayanan kesehatan gigi dan mulut. Berperan sebagai fasilitas pendidikan dan penelitian bagi Fakultas Kedokteran Gigi Unjani, RSGM Unjani juga melayani masyarakat umum dengan berbagai tindakan dan perawatan gigi, mulai dari pemeriksaan rutin, penambalan, pencabutan, perawatan ortodonti, hingga bedah mulut. Didukung oleh dokter gigi umum, dokter gigi spesialis, dan fasilitas modern, RSGM Unjani berkomitmen memberikan pelayanan gigi dan mulut yang berkualitas dan profesional.
TEXT,
        'address' => 'Jl. Encep Kartawiria No.88, Citeureup, Kec. Cimahi Utara, Kota Cimahi, Jawa Barat 40512',
        'thumbnail' => 'hospitals/rsgmUnjani.jpg', 
        'latitude' => '-6.868193245226552',
        'longitude' => '107.54462401103078',
        'open' => '00:00:00',
        'close' => '23:59:00',
        ],
        [
        'category_id' => 3,
        'name' => 'Baros',
        'description' => <<<TEXT
Rumah Sakit Baros adalah rumah sakit milik Pemerintah Kota Cimahi, berlokasi di kawasan Baros. Sebagai rumah sakit tipe D, RSUD Baros berkomitmen untuk menyediakan pelayanan kesehatan dasar dan gawat darurat yang berkualitas, humanis, dan terjangkau bagi masyarakat Cimahi dan sekitarnya. Rumah sakit ini terus berupaya mengembangkan fasilitas dan kapasitas layanan untuk memenuhi kebutuhan kesehatan publik, didukung oleh tenaga medis yang profesional dan siap siaga 24 jam. RSUD Baros juga melayani pasien dengan jaminan kesehatan BPJS.
TEXT,
        'address' => 'Jl. Baros No.E46, Baros, Kec. Cimahi Tengah, Kota Cimahi, Jawa Barat 40521',
        'thumbnail' => 'hospitals/rsBaros.jpg', 
        'latitude' => '-6.891202469207524',
        'longitude' => '107.5368937956876',
        'open' => '00:00:00',
        'close' => '23:59:00',
        ],

        
        ];

        foreach ($hospitals as $hospital) {
            Hospital::updateOrCreate(
                [
                    'name' => $hospital['name'],
                    'address' => $hospital['address'],
                ],
                [
                    'category_id' => $hospital['category_id'],
                    'description' => $hospital['description'],
                    'thumbnail' => $hospital['thumbnail'],
                    'latitude' => $hospital['latitude'],
                    'longitude' => $hospital['longitude'],
                    'slug' => Str::slug($hospital['name']),
                    'open' => $hospital['open'],
                    'close' => $hospital['close'],
                ]
            );

            echo "Hospital inserted/updated: {$hospital['name']}\n";
        }
    }
}
