<?php

use Illuminate\Database\Seeder;

class PropertiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('properties')->delete();
        
        \DB::table('properties')->insert(array (
            0 => 
            array (
                'id' => 1,
                'agent' => 5,
                'category' => 'Rumah',
                'isSell' => 1,
                'isRent' => NULL,
                'name' => 'Samira Regency Bekasi',
                'bath_room' => 1,
                'bed_room' => 2,
                'stories' => 1,
                'land_area' => 40,
                'building_area' => 35,
                'location' => '12,174,2415,30121',
                'address' => 'Mustikajaya, Bekasi',
                'description' => 'Bagaimana tidak, perumahan di Bekasi berkonsep ‘Affordable Modern Living’ ini memiliki lokasi yang dekat dengan berbagai akses jalan serta moda transportasi umum, seperti:
• 5 menit dari Pintu Tol Grand Wisata
• 15 menit ke Stasiun KRL Tambun
• 15 menit ke Stasiun LRT Bekasi Timur
Ditambah lagi, dengan lokasinya yang sangat strategus Samira Residence dikelilingi berbagai fasilitas publik yang sangat memukau, seperti Mall Living World yang bisa ditempuh beberapa Langkah dari lokasi perumahan, sarana kesehatan, sarana pendidikan, berbagai pusat hiburan, bisnis dan pertokoan.
Fasilitas sosial yang tersedia di dalam perumahan juga lengkap, seperti teknolgi smart green home, CCTV, club house, serta berbagai fasiltas lain yang mampu memanjakan penghuninya.',
                'image' => 'storage/image/property/15942587130.jpeg,storage/image/property/15942587131.jpeg,storage/image/property/15942587132.jpeg',
                'main_image' => 'storage/image/property/15942587130.jpeg',
                'created_at' => '2020-07-09 01:38:34',
                'updated_at' => '2020-07-09 01:38:34',
            ),
            1 => 
            array (
                'id' => 2,
                'agent' => 5,
                'category' => 'Rumah',
                'isSell' => 2,
                'isRent' => NULL,
                'name' => 'Clover Hill Residence',
                'bath_room' => 2,
                'bed_room' => 4,
                'stories' => 2,
                'land_area' => 50,
                'building_area' => 40,
                'location' => '16,268,3987,49857',
                'address' => 'Larangan, Tangerang',
                'description' => 'Joglo sebagai lokasi hunian agaknya menjadi pilihan yang tepat.
Kenyamanan penghuni juga semakin dimanjakan dengan banyaknya fasilitas umum dan infrastruktur pendukung yang dibangun di kawasan perumahan tersebut, seperti:
• Memiliki akses ke JORR W2 Tol Joglo
• Beberapa menit dari kawasan Kebon Jeruk
• Dekat dengan Puri Botanical Residence
• Dekat kampus Mercubuana
• Dekat berbagai pusat perbelanjaan, rumah sakit, dan lain sebagainya.',
                'image' => 'storage/image/property/15942588950.jpeg,storage/image/property/15942588951.jpeg,storage/image/property/15942588952.jpeg',
                'main_image' => 'storage/image/property/15942588950.jpeg',
                'created_at' => '2020-07-09 01:41:35',
                'updated_at' => '2020-07-09 01:41:35',
            ),
            2 => 
            array (
                'id' => 3,
                'agent' => 5,
                'category' => 'Rumah',
                'isSell' => 3,
                'isRent' => NULL,
                'name' => 'Alesha House, Vanya Park BSD City',
                'bath_room' => 3,
                'bed_room' => 6,
                'stories' => 2,
                'land_area' => 32,
                'building_area' => 90,
                'location' => '16,271,4014,50072',
                'address' => 'BSD City, Tangerang',
                'description' => 'Alesha House terletak di Vanya Park BSD City, memiliki konsep hunian resort dimana setiap blok terdiri dari 8 unit rumah dengan kolam renang atau taman sebagai halaman tengah yang bisa dinikmati bersama-sama. Setiap sudut dari Alesha House didesain dengan apik dan menarik, sesuai dengan kebutuhan zaman untuk menghadirkan visual yang menarik sehingga layak untuk dinikmati oleh publik lewat beragam media untuk menjawab kebutuhan dari kaum millennial yang menjadi target utama Alesha House.',
                'image' => 'storage/image/property/15942593490.jpeg,storage/image/property/15942593491.jpeg,storage/image/property/15942593492.jpeg',
                'main_image' => 'storage/image/property/15942593490.jpeg',
                'created_at' => '2020-07-09 01:49:09',
                'updated_at' => '2020-07-09 01:49:09',
            ),
            3 => 
            array (
                'id' => 4,
                'agent' => 5,
                'category' => 'Kontrakan',
                'isSell' => NULL,
                'isRent' => 1,
                'name' => 'Rumah Sukamulya Pasteur',
                'bath_room' => 3,
                'bed_room' => 3,
                'stories' => 1,
                'land_area' => 396,
                'building_area' => 180,
                'location' => '12,179,2502,30786',
                'address' => 'Jalan Sukamulya Indah',
                'description' => 'Disewakan Rumah Sukamulya Pasteur Lt.396 m Lb.200m Kt.2+1, Km.2+1, gudang ,Taman depan Taman Blkg,Garasi , Carpot 6 mobil .Cocok dipakai tempat tinggal, Kantor Lokasi sangat strategis mainroad .',
                'image' => 'storage/image/property/15942600120.jpeg,storage/image/property/15942600121.jpeg,storage/image/property/15942600122.jpeg,storage/image/property/15942600123.jpeg,storage/image/property/15942600124.jpeg,storage/image/property/15942600125.jpeg,storage/image/property/15942600126.jpeg',
                'main_image' => 'storage/image/property/15942600120.jpeg',
                'created_at' => '2020-07-09 02:00:12',
                'updated_at' => '2020-07-09 02:00:12',
            ),
            4 => 
            array (
                'id' => 5,
                'agent' => 5,
                'category' => 'Kontrakan',
                'isSell' => NULL,
                'isRent' => 2,
                'name' => 'Rumah di Pejaten 4Br',
                'bath_room' => 4,
                'bed_room' => 4,
                'stories' => 1,
                'land_area' => 400,
                'building_area' => 300,
                'location' => '11,154,1883,24832',
                'address' => 'Pejaten, Pejaten, Jakarta Selatan, DKI Jakarta',
                'description' => 'Disewakan Rumah Di Pejaten 4 Br Idr. 185 Million Kompleks Aman
Detail:
Kompleks aman
Security 24jam
Lt400
Lb300
4BR
Semi furnish

Harga 185jt

(minimum 12 months) with advance payment of rent, plus 1 month refundable deposit.
The rent charge includes service and maintenance charge,
exclude : electricity, water, fixed-line phone, First Media internet and Cable TV services and parking fee (if any, pay as per usage).

Best Regards,

Dea Shanta Pariury
"Your trust is my priority"
Specialised Area South Jakarta
Mobile +62 87 888123202

Visit my web:
www.southjktproperty.com',
                'image' => 'storage/image/property/15942601890.jpeg,storage/image/property/15942601891.jpeg,storage/image/property/15942601892.jpeg,storage/image/property/15942601893.jpeg,storage/image/property/15942601894.jpeg,storage/image/property/15942601895.jpeg,storage/image/property/15942601896.jpeg',
                'main_image' => 'storage/image/property/15942601890.jpeg',
                'created_at' => '2020-07-09 02:03:09',
                'updated_at' => '2020-07-09 02:03:09',
            ),
            5 => 
            array (
                'id' => 6,
                'agent' => 5,
                'category' => 'Rumah',
                'isSell' => NULL,
                'isRent' => 3,
                'name' => 'Seminyak Sanur valley serpong',
                'bath_room' => 3,
                'bed_room' => 3,
                'stories' => 1,
                'land_area' => 72,
                'building_area' => 60,
                'location' => '16,271,4014,50072',
                'address' => 'Sanur Valley Serpong, Serpong, Tangerang Selatan, Banten',
                'description' => 'Rumah 2 Lantai Sanur Valley Serpong Tahunan
Rumah cantik minimalis, belum pernah ditempati, masih baru..2+1 kamar tidur, sudah masuk internet dan tv kabel, dekat ke jalan raya, pasar, sekolah dan rumah sakit, one gate sistem (aman), 15-20 mnt ke stasiun rawa buntu, ga jauh dari bsd. Sudah banyak tetangga.',
                'image' => 'storage/image/property/15942603150.jpeg,storage/image/property/15942603151.jpeg,storage/image/property/15942603152.jpeg,storage/image/property/15942603153.jpeg,storage/image/property/15942603154.jpeg,storage/image/property/15942603155.jpeg,storage/image/property/15942603156.jpeg',
                'main_image' => 'storage/image/property/15942603150.jpeg',
                'created_at' => '2020-07-09 02:05:15',
                'updated_at' => '2020-07-09 02:05:15',
            ),
            6 => 
            array (
                'id' => 7,
                'agent' => 5,
                'category' => 'Kos',
                'isSell' => NULL,
                'isRent' => 4,
                'name' => 'UB Griya Cengger Ayam 32A Tipe D Malang 565AL',
                'bath_room' => 1,
                'bed_room' => 1,
                'stories' => 1,
                'land_area' => 100,
                'building_area' => 20,
                'location' => '15,257,3816,48266',
                'address' => 'Griya Cengger Ayam 32A Tipe D Malang 565AL',
            'description' => 'Kos yang sangat strategis, dekat dengan: Universitas Brawijaya (4.0 km) • Universitas Negeri Malang (6.8 km) • Universitas Widyagama Malang (2.7 km) • Politeknik Malang (3.5 km) • UIN Maulana Malik Ibrahim (4.7 km) • RS Brawijaya (2.2 km) • RS Permata Bunda (1.9 km) • RSI UNISMA (3.9 km) • Malang Town Square (5.9 km) • Superindo Supermarket Sulfat (2.7 km) • Sardo Swalayan (4.0 km) • Hartono Malang (2.9 km) • Carrefour Malang Blimbing (2.5 km) • Togamas (2.0 km)',
                'image' => 'storage/image/property/15942608030.jpeg,storage/image/property/15942608031.jpeg,storage/image/property/15942608032.jpeg,storage/image/property/15942608033.jpeg,storage/image/property/15942608034.jpeg,storage/image/property/15942608035.jpeg,storage/image/property/15942608036.jpeg',
                'main_image' => 'storage/image/property/15942608030.jpeg',
                'created_at' => '2020-07-09 02:13:23',
                'updated_at' => '2020-07-09 02:13:23',
            ),
            7 => 
            array (
                'id' => 8,
                'agent' => 5,
                'category' => 'Kos',
                'isSell' => NULL,
                'isRent' => 5,
                'name' => 'Kost Putri Beringin',
                'bath_room' => 1,
                'bed_room' => 1,
                'stories' => 1,
                'land_area' => 100,
                'building_area' => 9,
                'location' => '16,268,3991,49894',
                'address' => 'Jl. Beringin Golf No. 82 ,Claster Taman Cendana Golf Lippo',
                'description' => 'Cluster Cendana Golf Lippo Karawaci ,Tanggerang 15811  Banten, Indonesia. Tempat Kost Khusus PUTRI , mayoritas penghuni mahasiswi dan profesional muda. Fasilitas : AC, Cuci Gosok, Internet, Free Wi-Fi, TV kabel Internasional channels, Westafel dan Kamar mandi dalam, Hot and Cool Bath Water, Tempat tidur Sringbed , Lemari pakaian, Meja dan Kursi belajar, Brankas, Air minum dispenser , Kulkas, Dapur, Ruang makan, Ruang tamu, Ruang nonton, Free Parkir , Pembantu tinggal dî dalam, dekat taman, bersih nyaman keamanan 24 jam, CCTV ,dekat halte bis internal lippo karawaci, catering delivery, dan pastinya bebas macet. Akses Lokasi : 5 menit dari UPH,  Gedung Dynaplas , CIMB Niaga , Nobu Bank, UPH College, Mall Lippo karawaci, Menara Matahari, 5 menit dari keluar pintu tol karawaci, RS Siloam Karawaci, 5 menit jalan kaki ke Harvest',
                'image' => 'storage/image/property/15942610630.jpeg,storage/image/property/15942610631.jpeg,storage/image/property/15942610632.jpeg,storage/image/property/15942610633.jpeg,storage/image/property/15942610634.jpeg,storage/image/property/15942610635.jpeg,storage/image/property/15942610636.jpeg',
                'main_image' => 'storage/image/property/15942610630.jpeg',
                'created_at' => '2020-07-09 02:17:43',
                'updated_at' => '2020-07-09 02:17:43',
            ),
            8 => 
            array (
                'id' => 9,
                'agent' => 5,
                'category' => 'Kos',
                'isSell' => NULL,
                'isRent' => 6,
                'name' => 'Kost Gaz 3 Neglasari Tangerang',
                'bath_room' => 1,
                'bed_room' => 1,
                'stories' => 1,
                'land_area' => 70,
                'building_area' => 60,
                'location' => '16,268,3997,49942',
                'address' => 'Jl. Pembangunan 3 Kp. Golun 2 No. 36 Rt. 02/11',
                'description' => 'Listrik Sudah token masing-masing kamar
dekat Airnav Indonesia, pergudangan vivo Dan bandara soeta',
                'image' => 'storage/image/property/15942613920.jpeg,storage/image/property/15942613921.jpeg,storage/image/property/15942613922.jpeg,storage/image/property/15942613923.jpeg,storage/image/property/15942613924.jpeg,storage/image/property/15942613925.jpeg,storage/image/property/15942613926.jpeg',
                'main_image' => 'storage/image/property/15942613920.jpeg',
                'created_at' => '2020-07-09 02:23:12',
                'updated_at' => '2020-07-09 02:23:12',
            ),
            9 => 
            array (
                'id' => 10,
                'agent' => 16,
                'category' => 'Rumah',
                'isSell' => 4,
                'isRent' => NULL,
                'name' => 'rumah lokasi nyaman pondok indah',
                'bath_room' => 3,
                'bed_room' => 4,
                'stories' => 2,
                'land_area' => 426,
                'building_area' => 780,
                'location' => '11,154,1886,24846',
                'address' => 'Pondok Indah',
                'description' => 'Tim 99.co sudah melakukan pengecekan dokumen, lokasi asli, dan harga sesuai
Silahkan laporkan dan dapatkan kompensasi apabila listingan bukti tidak sesuai
Pasti Aman, Harga Sesuai, Respon cepat!',
                'image' => 'storage/image/property/15942622450.jpeg,storage/image/property/15942622451.jpeg,storage/image/property/15942622452.jpeg,storage/image/property/15942622453.jpeg,storage/image/property/15942622454.jpeg,storage/image/property/15942622455.jpeg,storage/image/property/15942622456.jpeg',
                'main_image' => 'storage/image/property/15942622450.jpeg',
                'created_at' => '2020-07-09 02:37:25',
                'updated_at' => '2020-07-09 02:37:25',
            ),
            10 => 
            array (
                'id' => 11,
                'agent' => 16,
                'category' => 'Rumah',
                'isSell' => 5,
                'isRent' => NULL,
                'name' => 'Cluster Strategis 2 Lantai di Kelapa Dua Depok',
                'bath_room' => 2,
                'bed_room' => 3,
                'stories' => 2,
                'land_area' => 109,
                'building_area' => 84,
                'location' => '12,182,2528,30908',
                'address' => 'Kelapa Dua Depok  Cimanggis',
                'description' => 'rumah di kelapa dua Depok

strategis di pinggir jalan RTM kelapa dua.

type 84/109

harga 1.195.000.000

promo
diskon 10 jt untuk kpr
diskon 25 jt untuk cash tunai

bonus AC 1/2 PK merek samsung',
                'image' => 'storage/image/property/15942624660.jpeg,storage/image/property/15942624661.jpeg,storage/image/property/15942624662.jpeg,storage/image/property/15942624663.jpeg,storage/image/property/15942624664.jpeg,storage/image/property/15942624665.jpeg,storage/image/property/15942624666.jpeg',
                'main_image' => 'storage/image/property/15942624660.jpeg',
                'created_at' => '2020-07-09 02:41:06',
                'updated_at' => '2020-07-09 02:41:06',
            ),
            11 => 
            array (
                'id' => 12,
                'agent' => 16,
                'category' => 'Rumah',
                'isSell' => 6,
                'isRent' => NULL,
                'name' => 'rumah bagus siap huni full furnished',
                'bath_room' => 4,
                'bed_room' => 2,
                'stories' => 3,
                'land_area' => 356,
                'building_area' => 600,
                'location' => '13,218,3102,39415',
                'address' => 'Tumpang',
                'description' => 'rumah di gajah mungkur bagus lengkap siap huni ada view depan dan belakang rumah ada taman depan dan belakang, nyaman, home teater',
                'image' => 'storage/image/property/15942626460.jpeg,storage/image/property/15942626461.jpeg,storage/image/property/15942626462.jpeg,storage/image/property/15942626463.jpeg,storage/image/property/15942626464.jpeg,storage/image/property/15942626465.jpeg',
                'main_image' => 'storage/image/property/15942626460.jpeg',
                'created_at' => '2020-07-09 02:44:06',
                'updated_at' => '2020-07-09 02:44:06',
            ),
            12 => 
            array (
                'id' => 13,
                'agent' => 16,
                'category' => 'Kontrakan',
                'isSell' => NULL,
                'isRent' => 7,
                'name' => 'Rumah baru di mayjen sungkono malang, Buring, Malang',
                'bath_room' => 2,
                'bed_room' => 6,
                'stories' => 2,
                'land_area' => 137,
                'building_area' => 220,
                'location' => '15,257,3812,48220',
                'address' => 'Mayjen sungkono V',
                'description' => 'Rumah baru 6 kamar di Mayjen sungkono V malang Lokasi aman dan nyaman Dekat Indomaret Tengah kota malang 6 kamar tidur 2 kamar mandi
car port 1 mobil, garasi 2 mobil Disewakan 29 jt/th Hubungi Flo 082335248689',
                'image' => 'storage/image/property/15942755940.jpeg,storage/image/property/15942755941.jpeg,storage/image/property/15942755942.jpeg,storage/image/property/15942755943.jpeg,storage/image/property/15942755944.jpeg,storage/image/property/15942755955.jpeg,storage/image/property/15942755956.jpeg',
                'main_image' => 'storage/image/property/15942755940.jpeg',
                'created_at' => '2020-07-09 06:19:55',
                'updated_at' => '2020-07-09 06:19:55',
            ),
            13 => 
            array (
                'id' => 14,
                'agent' => 16,
                'category' => 'Rumah',
                'isSell' => NULL,
                'isRent' => 8,
                'name' => 'Rumah siap huni pucang asri, Ngagel, Surabaya',
                'bath_room' => 2,
                'bed_room' => 4,
                'stories' => 1,
                'land_area' => 260,
                'building_area' => 200,
                'location' => '15,262,3841,48436',
                'address' => 'pucang asri',
                'description' => '13x20, 1lt rumah siap huni , min sewa 2th hub 08123042600',
                'image' => 'storage/image/property/15942757690.jpeg,storage/image/property/15942757691.jpeg,storage/image/property/15942757692.jpeg,storage/image/property/15942757693.jpeg,storage/image/property/15942757694.jpeg,storage/image/property/15942757695.jpeg,storage/image/property/15942757696.jpeg',
                'main_image' => 'storage/image/property/15942757690.jpeg',
                'created_at' => '2020-07-09 06:22:50',
                'updated_at' => '2020-07-09 06:22:50',
            ),
            14 => 
            array (
                'id' => 15,
                'agent' => 16,
                'category' => 'Kontrakan',
                'isSell' => NULL,
                'isRent' => 9,
                'name' => 'Rumah HIJAU LUAS',
                'bath_room' => 1,
                'bed_room' => 4,
                'stories' => 1,
                'land_area' => 150,
                'building_area' => 100,
                'location' => '14,224,3176,39961',
                'address' => 'dekat Kampus UPN dan Lottemart Maguwoharjo, Depok, Sleman',
                'description' => 'DISEWAKAN... ! Muraaah aja...!

Rumah Minimalis di Maguwoharjo dekat Kampus UPN, Amikom, Instiper, dan Lotte mart


4 Kamar tidur/ 1 Kamar mandi/ Kamar tamu/ Kamar Keluarga/ Air sumur/1300 watt

Parkir bisa 3 Mobil dan 4 Motor di garasi belakang

Harga:
22 juta/ tahun
40 juta/ 2 tahun

Info :
Ayanti Sahabat Properti
Wa 085 7800 51 780',
                'image' => 'storage/image/property/15942758790.jpeg,storage/image/property/15942758791.jpeg,storage/image/property/15942758792.jpeg,storage/image/property/15942758793.jpeg,storage/image/property/15942758794.jpeg,storage/image/property/15942758795.jpeg,storage/image/property/15942758796.jpeg',
                'main_image' => 'storage/image/property/15942758790.jpeg',
                'created_at' => '2020-07-09 06:24:39',
                'updated_at' => '2020-07-09 06:24:58',
            ),
            15 => 
            array (
                'id' => 16,
                'agent' => 16,
                'category' => 'Kos',
                'isSell' => NULL,
                'isRent' => 10,
                'name' => 'Kost Depok Homey Beji Tipe B',
                'bath_room' => 1,
                'bed_room' => 1,
                'stories' => 1,
                'land_area' => 100,
                'building_area' => 12,
                'location' => '12,182,2530,30925',
                'address' => 'Jalan Haji Koja II No 10A RT 005/ RW 03',
            'description' => 'Kos yang sangat strategis, dekat dengan : Universitas Indonesia (7.5 km) • Politeknik Negeri Jakarta (4.3 km) • Institut Sains dan Teknologi Nasional (2.7 km) • Universitas Gunadarma (6.9 km) • RS Grha Permata Ibu (1.4 km) • RSIA Sofa Marwa (1.9 km) • Rumah Sakit UI (7.0 km) • Margo City (7.4 km) • Gramedia Margonda (7.9 km) • Superindo Express Beji (600 m) • Stasiun UI (6.8 km) • Polsek Beji (2.1 km)',
                'image' => 'storage/image/property/15942762590.jpeg,storage/image/property/15942762591.jpeg,storage/image/property/15942762592.jpeg,storage/image/property/15942762593.jpeg,storage/image/property/15942762594.jpeg,storage/image/property/15942762595.jpeg',
                'main_image' => 'storage/image/property/15942762590.jpeg',
                'created_at' => '2020-07-09 06:30:59',
                'updated_at' => '2020-07-09 06:30:59',
            ),
            16 => 
            array (
                'id' => 17,
                'agent' => 16,
                'category' => 'Kos',
                'isSell' => NULL,
                'isRent' => 11,
                'name' => 'Kost My Place',
                'bath_room' => 1,
                'bed_room' => 1,
                'stories' => 1,
                'land_area' => 100,
                'building_area' => 15,
                'location' => '25,378,5249,63730',
                'address' => 'Jl. Parigi 7 no. 15',
            'description' => 'My Place memiliki kamar-kamar kost yang luas, bersih, dengan sirkulasi udara yang baik karena setiap kamar memiliki jendela ke luar, sangat nyaman untuk ditinggali. Setiap kamar standar berukuran 3 x 5.5 m2, sudah dilengkapi furniture: springbed (uk.double), lemari pakaian 2 pintu, meja tulis dan kursi, AC Split, TV LCD (40 ch) dan kamar mandi dalam. Ruang terbuka berupa taman dan kolam ikan, dilengkapi dengan meja dan kursi-kursi taman untuk bersantai dan menerima tamu, dapur umum & ruang makan.',
                'image' => 'storage/image/property/15942764050.jpeg,storage/image/property/15942764051.jpeg,storage/image/property/15942764052.jpeg,storage/image/property/15942764053.jpeg,storage/image/property/15942764054.jpeg,storage/image/property/15942764055.jpeg,storage/image/property/15942764056.jpeg',
                'main_image' => 'storage/image/property/15942764050.jpeg',
                'created_at' => '2020-07-09 06:33:25',
                'updated_at' => '2020-07-09 06:33:25',
            ),
            17 => 
            array (
                'id' => 18,
                'agent' => 16,
                'category' => 'Kos',
                'isSell' => NULL,
                'isRent' => 12,
                'name' => 'Kost Wilson Tipe B Medan Baru 458TD',
                'bath_room' => 1,
                'bed_room' => 1,
                'stories' => 2,
                'land_area' => 120,
                'building_area' => 12,
                'location' => '2,53,682,12066',
                'address' => 'Jl sei muara no 6/31',
                'description' => 'akses mudah kemana.',
                'image' => 'storage/image/property/15942765600.jpeg,storage/image/property/15942765601.jpeg,storage/image/property/15942765602.jpeg,storage/image/property/15942765603.jpeg',
                'main_image' => 'storage/image/property/15942765600.jpeg',
                'created_at' => '2020-07-09 06:36:00',
                'updated_at' => '2020-07-09 06:36:00',
            ),
        ));
        
        
    }
}