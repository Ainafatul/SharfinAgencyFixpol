<?php

use Illuminate\Database\Seeder;

class PropertyUpdatesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('property_updates')->delete();
        
        \DB::table('property_updates')->insert(array (
            0 => 
            array (
                'id' => 1,
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
                'created_at' => '2020-07-19 07:24:07',
                'updated_at' => '2020-07-19 07:24:07',
            ),
            1 => 
            array (
                'id' => 2,
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
                'created_at' => '2020-07-19 07:24:14',
                'updated_at' => '2020-07-19 07:24:14',
            ),
            2 => 
            array (
                'id' => 3,
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
                'created_at' => '2020-07-19 07:24:17',
                'updated_at' => '2020-07-19 07:24:17',
            ),
            3 => 
            array (
                'id' => 4,
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
                'created_at' => '2020-07-19 07:24:22',
                'updated_at' => '2020-07-19 07:24:22',
            ),
            4 => 
            array (
                'id' => 5,
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
                'created_at' => '2020-07-19 07:24:39',
                'updated_at' => '2020-07-19 07:24:39',
            ),
            5 => 
            array (
                'id' => 6,
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
                'created_at' => '2020-07-19 07:24:43',
                'updated_at' => '2020-07-19 07:24:43',
            ),
            6 => 
            array (
                'id' => 7,
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
                'created_at' => '2020-07-19 07:24:53',
                'updated_at' => '2020-07-19 07:24:53',
            ),
            7 => 
            array (
                'id' => 8,
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
                'created_at' => '2020-07-19 07:24:56',
                'updated_at' => '2020-07-19 07:24:56',
            ),
        ));
        
        
    }
}