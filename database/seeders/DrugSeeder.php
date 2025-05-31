<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Drug;
use Illuminate\Support\Str; // Untuk Str::slug
use Carbon\Carbon;

class DrugSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $drugsData = [
            // --- Huruf A ---
            [
                'name' => 'Aspirin 80mg',
                'image' => 'assets/images/drugs/aspirin.jpg', // Disesuaikan dari screenshot
                'description' => 'Aspirin 80mg adalah obat antiplatelet yang digunakan untuk membantu mencegah pembentukan gumpalan darah. Sering diresepkan untuk pasien dengan riwayat penyakit jantung koroner, stroke, atau kondisi lain yang memerlukan pengenceran darah. Dosis rendah ini bukan untuk pereda nyeri atau demam biasa.',
            ],
            [
                'name' => 'Amoxicillin 500mg',
                'image' => 'assets/images/drugs/Amoxicillin.jpg', // Disesuaikan dari screenshot
                'description' => 'Amoxicillin 500mg adalah antibiotik golongan penisilin yang efektif melawan berbagai jenis infeksi bakteri. Digunakan untuk mengobati infeksi saluran pernapasan, infeksi telinga, infeksi kulit, dan infeksi saluran kemih. Penting untuk menghabiskan dosis yang diresepkan untuk mencegah resistensi antibiotik.',
            ],
            [
                'name' => 'Antasida Doen Tablet',
                'image' => 'assets/images/drugs/AntasidaDoen.jpg', // Disesuaikan dari screenshot
                'description' => 'Antasida Doen adalah kombinasi aluminium hidroksida dan magnesium hidroksida yang bekerja menetralkan asam lambung berlebih. Digunakan untuk meredakan gejala maag, nyeri ulu hati, kembung, dan rasa tidak nyaman akibat dispepsia. Sebaiknya dikonsumsi setelah makan atau saat gejala timbul.',
            ],
            [
                'name' => 'Alprazolam 0.5mg',
                'image' => 'assets/images/drugs/Alprazolam.jpg', // Disesuaikan dari screenshot
                'description' => 'Alprazolam 0.5mg adalah obat golongan benzodiazepine yang bekerja pada sistem saraf pusat untuk menghasilkan efek menenangkan. Digunakan untuk pengobatan jangka pendek gangguan kecemasan dan serangan panik. Obat ini termasuk psikotropika dan harus dengan resep serta pengawasan dokter karena risiko ketergantungan.',
            ],

            // --- Huruf B ---
            [
                'name' => 'Bodrex Forte Tablet',
                'image' => 'assets/images/drugs/BodrexForte.png', // Disesuaikan dari screenshot
                'description' => 'Bodrex Forte adalah obat bebas yang mengandung Paracetamol dan Kafein. Efektif untuk meredakan sakit kepala, migrain, dan demam. Kombinasi Paracetamol sebagai pereda nyeri dan demam, serta Kafein untuk meningkatkan efek analgesik dan mengurangi rasa kantuk.',
            ],
            [
                'name' => 'Betadine Antiseptik Cair',
                'image' => 'assets/images/drugs/BetadineAntiseptik.jpg', // Disesuaikan dari screenshot
                'description' => 'Betadine Antiseptik Cair mengandung Povidone-iodine yang berfungsi sebagai antiseptik spektrum luas. Digunakan untuk membersihkan luka, mencegah infeksi pada luka bakar minor, luka gores, dan sebagai persiapan sebelum operasi. Dapat membunuh bakteri, virus, dan jamur.',
            ],
            [
                'name' => 'Bisoprolol 5mg',
                'image' => 'assets/images/drugs/Bisoprolol.jpg', // Disesuaikan dari screenshot
                'description' => 'Bisoprolol 5mg adalah obat golongan beta-blocker yang bekerja menurunkan detak jantung dan tekanan darah. Digunakan untuk mengobati hipertensi (tekanan darah tinggi), angina (nyeri dada), dan gagal jantung kronis. Harus dikonsumsi sesuai resep dokter dan tidak boleh dihentikan tiba-tiba.',
            ],

            // --- Huruf C ---
            [
                'name' => 'Cetirizine 10mg',
                'image' => 'assets/images/drugs/Cetirizine.jpg', // Disesuaikan dari screenshot
                'description' => 'Cetirizine 10mg adalah antihistamin generasi kedua yang bekerja dengan memblokir histamin, zat penyebab reaksi alergi. Efektif meredakan gejala alergi seperti pilek, bersin-bersin, mata gatal dan berair, serta ruam kulit (biduran). Umumnya memiliki efek samping kantuk yang lebih ringan.',
            ],
            [
                'name' => 'Ciprofloxacin 500mg',
                'image' => 'assets/images/drugs/Ciprofloxacin.jpg', // Disesuaikan dari screenshot
                'description' => 'Ciprofloxacin 500mg adalah antibiotik golongan fluoroquinolone yang digunakan untuk mengobati infeksi bakteri yang lebih serius, termasuk infeksi saluran kemih, infeksi saluran pernapasan, infeksi kulit, dan beberapa jenis infeksi tulang/sendi. Penting untuk konsultasi dokter sebelum penggunaan.',
            ],
            [
                'name' => 'Chloramphenicol Salep Kulit',
                'image' => 'assets/images/drugs/ChloramphenicolSalep.jpg', // Disesuaikan dari screenshot
                'description' => 'Chloramphenicol Salep Kulit adalah antibiotik topikal yang digunakan untuk mengobati infeksi bakteri pada kulit, seperti impetigo, folikulitis, atau luka terinfeksi. Dioleskan tipis-tipis pada area yang terinfeksi sesuai petunjuk dokter atau apoteker.',
            ],
            [
                'name' => 'Contrexyn Anak Sirup',
                'image' => 'assets/images/drugs/ContrexynAnak.png', // Disesuaikan dari screenshot
                'description' => 'Contrexyn Anak Sirup adalah obat bebas yang diformulasikan khusus untuk anak-anak, mengandung Paracetamol dan Chlorpheniramine Maleate. Digunakan untuk meredakan demam, sakit kepala, serta gejala flu dan pilek seperti hidung tersumbat dan bersin-bersin pada anak.',
            ],

            // --- Huruf D ---
            [
                'name' => 'Dexamethasone 0.5mg',
                'image' => 'assets/images/drugs/Dexamethasone.jpg', // Disesuaikan dari screenshot
                'description' => 'Dexamethasone 0.5mg adalah kortikosteroid sintetis yang memiliki efek anti-inflamasi (anti-radang) dan imunosupresan (menekan sistem kekebalan tubuh) yang kuat. Digunakan untuk berbagai kondisi seperti alergi parah, asma, radang sendi, dan beberapa kondisi autoimun. Penggunaan harus di bawah pengawasan dokter.',
            ],
            [
                'name' => 'Diapet Kapsul',
                'image' => 'assets/images/drugs/DiapetKapsul.jpg', // Disesuaikan dari screenshot
                'description' => 'Diapet Kapsul adalah obat herbal untuk diare yang mengandung ekstrak daun jambu biji dan bahan alami lainnya. Bekerja dengan mengurangi frekuensi buang air besar dan membantu memadatkan feses. Cocok untuk diare non-spesifik.',
            ],
            [
                'name' => 'Dulcolax Tablet',
                'image' => 'assets/images/drugs/DulcolaxTablet.jpg', // Disesuaikan dari screenshot
                'description' => 'Dulcolax Tablet adalah obat pencahar stimulan yang mengandung Bisacodyl. Bekerja dengan merangsang otot-otot usus besar untuk membantu pergerakan feses, sehingga efektif untuk mengatasi sembelit jangka pendek atau persiapan prosedur medis. Tidak dianjurkan untuk penggunaan jangka panjang.',
            ],

            // --- Huruf E ---
            [
                'name' => 'Erythromycin 250mg',
                'image' => 'assets/images/drugs/Erythromycin.png', // Disesuaikan dari screenshot
                'description' => 'Erythromycin 250mg adalah antibiotik golongan makrolida yang menjadi alternatif bagi pasien yang alergi penisilin. Digunakan untuk mengobati berbagai infeksi bakteri, termasuk infeksi saluran pernapasan, kulit, dan beberapa infeksi menular seksual.',
            ],
            [
                'name' => 'Enervon-C Multivitamin',
                'image' => 'assets/images/drugs/Enervon-C.png', // Disesuaikan dari screenshot
                'description' => 'Enervon-C adalah suplemen multivitamin yang mengandung kombinasi Vitamin C, B kompleks, dan mineral. Dirancang untuk membantu menjaga daya tahan tubuh, meningkatkan metabolisme, serta mendukung aktivitas sehari-hari agar tidak mudah lelah.',
            ],

            // --- Huruf F ---
            [
                'name' => 'Farsifen 400mg',
                'image' => 'assets/images/drugs/Farsifen.png', // Disesuaikan dari screenshot
                'description' => 'Farsifen 400mg adalah obat anti-inflamasi nonsteroid (OAINS) yang mengandung Ibuprofen. Digunakan untuk meredakan nyeri ringan hingga sedang seperti sakit kepala, nyeri otot, nyeri haid, serta untuk menurunkan demam dan mengurangi peradangan.',
            ],
            [
                'name' => 'Flagyl 500mg',
                'image' => 'assets/images/drugs/Flagyl.jpg', // Disesuaikan dari screenshot
                'description' => 'Flagyl 500mg (Metronidazole) adalah antibiotik dan antiprotozoa yang efektif melawan infeksi bakteri anaerob dan parasit tertentu. Digunakan untuk mengobati infeksi saluran pencernaan, infeksi ginekologi, dan abses. Penting untuk tidak mengonsumsi alkohol selama pengobatan.',
            ],
            [
                'name' => 'Folic Acid 1mg',
                'image' => 'assets/images/drugs/FolicAcid.jpg', // Disesuaikan dari screenshot
                'description' => 'Folic Acid 1mg adalah suplemen asam folat yang penting untuk pembentukan sel darah merah dan sintesis DNA. Sangat direkomendasikan untuk wanita hamil atau yang merencanakan kehamilan untuk mencegah cacat tabung saraf pada bayi, serta untuk pengobatan anemia defisiensi folat.',
            ],

            // --- Huruf G ---
            [
                'name' => 'Gentamicin Salep Kulit',
                'image' => 'assets/images/drugs/GentamicinSalep.jpg', // Disesuaikan dari screenshot
                'description' => 'Gentamicin Salep Kulit adalah antibiotik topikal golongan aminoglikosida yang digunakan untuk mengobati infeksi bakteri pada kulit, seperti impetigo, folikulitis, atau luka bakar ringan yang terinfeksi. Aplikasikan tipis-tipis pada area yang terinfeksi.',
            ],
            [
                'name' => 'Glimepiride 2mg',
                'image' => 'assets/images/drugs/Glimepiride.png', // Disesuaikan dari screenshot
                'description' => 'Glimepiride 2mg adalah obat antidiabetes oral dari golongan sulfonilurea. Bekerja dengan merangsang pankreas untuk melepaskan lebih banyak insulin, sehingga membantu menurunkan kadar gula darah pada penderita diabetes tipe 2. Penggunaan harus di bawah pengawasan dokter.',
            ],

            // --- Huruf H ---
            [
                'name' => 'Hydrocortisone Cream 1%',
                'image' => 'assets/images/drugs/HydrocortisoneCream.png', // Disesuaikan dari screenshot
                'description' => 'Hydrocortisone Cream 1% adalah kortikosteroid topikal ringan yang digunakan untuk meredakan gatal, kemerahan, dan peradangan pada berbagai kondisi kulit seperti eksim, dermatitis, alergi, atau gigitan serangga. Tidak untuk infeksi jamur atau bakteri tanpa antibiotik.',
            ],
            [
                'name' => 'Histapan Tablet',
                'image' => 'assets/images/drugs/HistapanTablet.jpg', // Disesuaikan dari screenshot
                'description' => 'Histapan Tablet adalah antihistamin yang digunakan untuk meredakan gejala alergi seperti gatal-gatal pada kulit (biduran), pilek alergi, dan bersin-bersin. Dapat menyebabkan efek samping kantuk.',
            ],

            // --- Huruf I ---
            [
                'name' => 'Ibuprofen 200mg',
                'image' => 'assets/images/drugs/Ibuprofen.png', // Disesuaikan dari screenshot
                'description' => 'Ibuprofen 200mg adalah obat anti-inflamasi nonsteroid (OAINS) yang digunakan untuk meredakan nyeri ringan hingga sedang seperti sakit kepala, nyeri otot, nyeri sendi, nyeri haid, dan untuk menurunkan demam. Tersedia bebas di pasaran.',
            ],
            [
                'name' => 'Imodium Kapsul',
                'image' => 'assets/images/drugs/ImodiumKapsul.jpg', // Disesuaikan dari screenshot
                'description' => 'Imodium Kapsul mengandung Loperamide, yang bekerja dengan memperlambat pergerakan usus, sehingga mengurangi frekuensi dan volume buang air besar. Efektif untuk mengatasi diare akut non-spesifik. Tidak dianjurkan untuk diare yang disertai demam tinggi atau feses berdarah.',
            ],

            // --- Huruf J ---
            [
                'name' => 'Jamu Tolak Angin Sido Muncul',
                'image' => 'assets/images/drugs/JamuTolak.png', // Disesuaikan dari screenshot
                'description' => 'Jamu Tolak Angin Sido Muncul adalah herbal tradisional yang dikenal untuk meredakan masuk angin, perut kembung, mual, pegal-pegal, dan kelelahan. Terbuat dari bahan-bahan alami seperti jahe, mint, dan adas, sering dikonsumsi saat merasa tidak enak badan.',
            ],

            // --- Huruf K ---
            [
                'name' => 'Ketanoval Tablet',
                'image' => 'assets/images/drugs/KetanovalTablet.jpg', // Disesuaikan dari screenshot
                'description' => 'Ketanoval Tablet (Ketorolac) adalah obat anti-inflamasi nonsteroid (OAINS) yang sangat kuat. Digunakan untuk penanganan nyeri akut sedang hingga berat, seperti nyeri pasca operasi atau nyeri akibat cedera. Hanya boleh digunakan dalam jangka pendek dan dengan resep dokter.',
            ],
            [
                'name' => 'Kalpanax Cair',
                'image' => 'assets/images/drugs/KalpanaxCair.png', // Disesuaikan dari screenshot
                'description' => 'Kalpanax Cair adalah obat topikal untuk infeksi jamur pada kulit seperti panu, kadas, dan kurap. Mengandung Miconazole Nitrate atau Tolnaftate yang bekerja membunuh atau menghambat pertumbuhan jamur. Oleskan pada area yang terinfeksi setelah dibersihkan.',
            ],

            // --- Huruf L ---
            [
                'name' => 'Loperamide 2mg',
                'image' => 'assets/images/drugs/Loperamide.png', // Disesuaikan dari screenshot
                'description' => 'Loperamide 2mg adalah obat yang bekerja dengan memperlambat pergerakan usus dan mengurangi jumlah cairan yang masuk ke dalam usus. Sangat efektif untuk menghentikan diare akut pada orang dewasa. Tidak boleh digunakan untuk diare yang disebabkan oleh infeksi bakteri tertentu.',
            ],
            [
                'name' => 'Loratadine 10mg',
                'image' => 'assets/images/drugs/Loratadine.jpg', // Disesuaikan dari screenshot
                'description' => 'Loratadine 10mg adalah antihistamin non-sedatif yang digunakan untuk meredakan gejala alergi musiman maupun kronis, seperti bersin-bersin, pilek, mata gatal atau berair, dan ruam kulit (biduran). Keunggulan utamanya adalah efek kantuk yang minimal.',
            ],

            // --- Huruf M ---
            [
                'name' => 'Mefenamic Acid 500mg',
                'image' => 'assets/images/drugs/MefenamicAcid.jpg', // Disesuaikan dari screenshot
                'description' => 'Mefenamic Acid 500mg adalah obat anti-inflamasi nonsteroid (OAINS) yang digunakan untuk meredakan nyeri ringan hingga sedang, seperti nyeri otot, nyeri sendi, sakit gigi, dan nyeri haid (dismenore). Bekerja dengan menghambat produksi prostaglandin yang menyebabkan nyeri.',
            ],
            [
                'name' => 'Metformin 500mg',
                'image' => 'assets/images/drugs/Metformin.jpg', // Disesuaikan dari screenshot
                'description' => 'Metformin 500mg adalah obat antidiabetes oral yang paling sering diresepkan untuk penderita diabetes tipe 2. Bekerja dengan menurunkan produksi glukosa oleh hati dan meningkatkan sensitivitas tubuh terhadap insulin. Seringkali menjadi pilihan pertama untuk penanganan diabetes.',
            ],
            [
                'name' => 'Mylanta Cair',
                'image' => 'assets/images/drugs/MylantaCair.png', // Disesuaikan dari screenshot
                'description' => 'Mylanta Cair adalah kombinasi antasida dan simetikon yang digunakan untuk meredakan gejala maag seperti nyeri lambung, mulas, kembung, dan rasa tidak nyaman akibat gas berlebih di saluran pencernaan. Bentuk cair lebih cepat memberikan efek.',
            ],

            // --- Huruf N ---
            [
                'name' => 'Neurobion Forte Tablet',
                'image' => 'assets/images/drugs/NeurobionForte.jpg', // Disesuaikan dari screenshot
                'description' => 'Neurobion Forte adalah suplemen vitamin B kompleks yang mengandung vitamin B1, B6, dan B12 dalam dosis tinggi. Dirancang untuk membantu menjaga kesehatan sistem saraf, mengatasi gejala neuropati (kerusakan saraf), dan meningkatkan energi.',
            ],
            [
                'name' => 'Nifedipine 10mg',
                'image' => 'assets/images/drugs/Nifedipine.jpg', // Disesuaikan dari screenshot
                'description' => 'Nifedipine 10mg adalah obat golongan calcium channel blocker yang digunakan untuk menurunkan tekanan darah tinggi dan mengobati angina pektoris (nyeri dada akibat penyempitan pembuluh darah jantung). Bekerja dengan merelaksasi pembuluh darah.',
            ],

            // --- Huruf O ---
            [
                'name' => 'Omeprazole 20mg',
                'image' => 'assets/images/drugs/Omeprazole.jpg', // Disesuaikan dari screenshot
                'description' => 'Omeprazole 20mg adalah obat golongan Proton Pump Inhibitor (PPI) yang bekerja dengan sangat efektif dalam mengurangi produksi asam lambung. Digunakan untuk mengobati penyakit refluks gastroesofageal (GERD), tukak lambung, dan sindrom Zollinger-Ellison.',
            ],
            [
                'name' => 'Oralit Bubuk',
                'image' => 'assets/images/drugs/OralitBubuk.jpg', // Disesuaikan dari screenshot
                'description' => 'Oralit adalah larutan rehidrasi oral yang mengandung campuran garam dan gula. Digunakan untuk mengganti cairan dan elektrolit yang hilang akibat diare atau muntah, mencegah dehidrasi. Penting untuk disiapkan dengan air minum yang bersih.',
            ],

            // --- Huruf P ---
            [
                'name' => 'Paracetamol 500mg',
                'image' => 'assets/images/drugs/Paracetamol.png', // Disesuaikan dari screenshot
                'description' => 'Paracetamol 500mg adalah obat pereda demam dan nyeri yang paling umum dan aman. Efektif untuk sakit kepala, nyeri otot, nyeri gigi, dan demam. Dapat digunakan oleh hampir semua kalangan usia dengan dosis yang sesuai.',
            ],
            [
                'name' => 'Promag Tablet',
                'image' => 'assets/images/drugs/PromagTablet.jpg', // Disesuaikan dari screenshot
                'description' => 'Promag Tablet adalah antasida yang cepat meredakan gejala maag seperti mulas, nyeri ulu hati, dan kembung. Mengandung Hydrotalcite dan Magnesium Hydroxide yang menetralkan asam lambung, serta Simethicone untuk mengurangi gas.',
            ],
            [
                'name' => 'Panadol Biru Tablet',
                'image' => 'assets/images/drugs/PanadolBiru.jpg', // Disesuaikan dari screenshot
                'description' => 'Panadol Biru adalah merk dagang Paracetamol 500mg yang populer untuk meredakan nyeri dan demam. Dikenal karena kemampuannya yang cepat diserap dan efektif dalam mengatasi sakit kepala, nyeri tubuh, dan demam.',
            ],

            // --- Huruf Q ---
            [
                'name' => 'Quinidine Sulfate 200mg',
                'image' => 'assets/images/drugs/QuinidineSulfate.png', // Disesuaikan dari screenshot
                'description' => 'Quinidine Sulfate 200mg adalah obat antiaritmia yang digunakan untuk mengobati gangguan irama jantung tertentu, seperti fibrilasi atrium dan takikardia ventrikel. Memerlukan pengawasan ketat dari dokter karena potensi efek samping pada jantung.',
            ],

            // --- Huruf R ---
            [
                'name' => 'Ranitidine 150mg',
                'image' => 'assets/images/drugs/Ranitidine.jpg', // Disesuaikan dari screenshot
                'description' => 'Ranitidine 150mg adalah obat golongan H2 blocker yang bekerja dengan mengurangi produksi asam lambung. Digunakan untuk mengobati tukak lambung, GERD, dan kondisi lain yang disebabkan oleh asam lambung berlebih. Kini penggunaannya banyak digantikan oleh PPI.',
            ],
            [
                'name' => 'Redoxon Tablet Effervescent',
                'image' => 'assets/images/drugs/RedoxonTablet.jpg', // Disesuaikan dari screenshot
                'description' => 'Redoxon adalah suplemen vitamin C dalam bentuk tablet effervescent yang larut dalam air. Memberikan dosis tinggi Vitamin C untuk membantu menjaga daya tahan tubuh, mengurangi risiko flu, dan berperan sebagai antioksidan. Tersedia dalam berbagai rasa.',
            ],

            // --- Huruf S ---
            [
                'name' => 'Sanmol Sirup Anak',
                'image' => 'assets/images/drugs/SanmolSirup.jpg', // Disesuaikan dari screenshot
                'description' => 'Sanmol Sirup Anak adalah obat pereda demam dan nyeri yang mengandung Paracetamol, diformulasikan khusus untuk anak-anak. Tersedia dalam rasa buah yang disukai anak, dosis disesuaikan dengan berat badan dan usia anak.',
            ],
            [
                'name' => 'Strepsils Original',
                'image' => 'assets/images/drugs/Strepsils.jpg', // Disesuaikan dari screenshot
                'description' => 'Strepsils Original adalah lozenges (permen hisap) yang mengandung Amylmetacresol dan Dichlorobenzyl Alcohol sebagai antiseptik. Digunakan untuk meredakan sakit tenggorokan, suara serak, dan ketidaknyamanan di mulut atau tenggorokan.',
            ],
            [
                'name' => 'Sangobion Kapsul',
                'image' => 'assets/images/drugs/SangobionKapsul.jpg', // Disesuaikan dari screenshot
                'description' => 'Sangobion Kapsul adalah suplemen penambah darah yang mengandung kombinasi zat besi, vitamin B kompleks (termasuk asam folat), dan Vitamin C. Digunakan untuk mengatasi anemia akibat kekurangan zat besi, sering direkomendasikan untuk wanita hamil atau penderita anemia.',
            ],

            // --- Huruf T ---
            [
                'name' => 'Tetracycline 250mg',
                'image' => 'assets/images/drugs/Tetracycline250mg.png', // Disesuaikan dari screenshot
                'description' => 'Tetracycline 250mg adalah antibiotik spektrum luas yang digunakan untuk mengobati berbagai infeksi bakteri, termasuk infeksi saluran pernapasan, saluran kemih, kulit, dan jerawat. Memiliki interaksi dengan produk susu dan antasida.',
            ],
            [
                'name' => 'Tolak Angin Cair',
                'image' => 'assets/images/drugs/TolakAnginCair.jpg', // Disesuaikan dari screenshot
                'description' => 'Tolak Angin Cair adalah minuman herbal tradisional Indonesia yang dipercaya dapat meredakan gejala masuk angin seperti mual, perut kembung, pusing, dan kelelahan. Terbuat dari ekstrak tanaman herbal seperti jahe, mint, dan madu.',
            ],
            [
                'name' => 'Tolak Linu Sido Muncul',
                'image' => 'assets/images/drugs/TolakLinu.jpg', // Disesuaikan dari screenshot
                'description' => 'Tolak Linu Sido Muncul adalah jamu cair yang diformulasikan untuk meredakan pegal linu, nyeri otot, dan sendi. Mengandung bahan-bahan herbal seperti jahe, temulawak, dan cabe jawa yang memiliki khasiat menghangatkan tubuh dan mengurangi rasa sakit.',
            ],

            // --- Huruf U ---
            [
                'name' => 'Ulinastatin Injeksi 100000 IU',
                'image' => 'assets/images/drugs/Ulinastatin.jpg', // Disesuaikan dari screenshot
                'description' => 'Ulinastatin Injeksi adalah inhibitor protease yang digunakan dalam pengobatan pankreatitis akut dan syok. Bekerja dengan menghambat enzim protease yang dapat merusak jaringan. Pemberiannya dilakukan melalui injeksi intravena di bawah pengawasan medis.',
            ],

            // --- Huruf V ---
            [
                'name' => 'Voltaren Emulgel',
                'image' => 'assets/images/drugs/voltaren-emulgel.jpg', // Disesuaikan dari screenshot
                'description' => 'Voltaren Emulgel mengandung Diclofenac sebagai anti-inflamasi nonsteroid (OAINS) topikal. Digunakan untuk meredakan nyeri dan peradangan pada sendi, otot, dan tendon akibat keseleo, tegang, atau arthritis. Dioleskan langsung pada area yang sakit.',
            ],
            [
                'name' => 'Vitamin B Complex Tablet',
                'image' => 'assets/images/drugs/VitaminB_Complex.png', // Disesuaikan dari screenshot
                'description' => 'Vitamin B Complex adalah suplemen yang mengandung berbagai jenis vitamin B (B1, B2, B3, B5, B6, B7, B9, B12). Penting untuk metabolisme energi, fungsi saraf, dan kesehatan sel darah merah. Membantu mengurangi rasa lelah dan meningkatkan vitalitas.',
            ],

            // --- Huruf W ---
            [
                'name' => 'Wood\'s Peppermint Antitussive',
                'image' => 'assets/images/drugs/WoodPeppermint.jpg', // Disesuaikan dari screenshot
                'description' => 'Wood\'s Peppermint Antitussive adalah sirup obat batuk dengan kandungan dekstrometorfan dan guaifenesin, serta mentol. Digunakan untuk meredakan batuk kering atau batuk tidak berdahak, memberikan efek menenangkan pada tenggorokan dengan rasa mint.',
            ],

            // --- Huruf X ---
            [
                'name' => 'Xylocain Spray',
                'image' => 'assets/images/drugs/XylocaineSpray.jpg', // Disesuaikan dari screenshot
                'description' => 'Xylocain Spray mengandung Lidocaine, yang merupakan anestesi lokal. Digunakan untuk memberikan efek mati rasa pada area tertentu di kulit atau selaput lendir sebelum prosedur medis minor, atau untuk meredakan nyeri akibat kondisi tertentu.',
            ],

            // --- Huruf Y ---
            [
                'name' => 'Yasmin Tablet Kontrasepsi',
                'image' => 'assets/images/drugs/YasminTablet.jpg', // Disesuaikan dari screenshot
                'description' => 'Yasmin adalah pil kontrasepsi oral kombinasi yang mengandung Drospirenone dan Ethinyl Estradiol. Digunakan untuk mencegah kehamilan, dan juga dapat membantu mengatasi masalah jerawat serta gejala PMS pada beberapa wanita. Penggunaan harus di bawah petunjuk dokter.',
            ],

            // --- Huruf Z ---
            [
                'name' => 'Zantac Injeksi',
                'image' => 'assets/images/drugs/ZantacInjeksi.jpg', // Disesuaikan dari screenshot
                'description' => 'Zantac Injeksi (Ranitidine) adalah obat golongan H2 blocker yang diberikan melalui injeksi untuk mengurangi produksi asam lambung secara cepat. Digunakan pada kondisi medis yang memerlukan penekanan asam lambung segera, seperti pada pasien rawat inap atau sebelum operasi tertentu.',
            ],
            [
                'name' => 'Zinc Tablet 20mg',
                'image' => 'assets/images/drugs/ZincTablet.jpg', // Disesuaikan dari screenshot
                'description' => 'Zinc Tablet adalah suplemen mineral Zinc yang esensial untuk banyak fungsi tubuh, termasuk kekebalan tubuh, penyembuhan luka, dan pertumbuhan sel. Sering digunakan sebagai terapi tambahan untuk diare pada anak-anak atau untuk mengatasi defisiensi Zinc.',
            ],
        ];

        foreach ($drugsData as $drugItem) {
            Drug::updateOrCreate(
                [
                    'name' => $drugItem['name'],
                ],
                [
                    'image' => $drugItem['image'],
                    'description' => $drugItem['description'],
                    // 'deleted_at' => null, // Opsional: Untuk memastikan data tidak soft-deleted saat di-update/create
                ]
            );

            echo "Drug inserted/updated: {$drugItem['name']}\n";
        }
    }
}