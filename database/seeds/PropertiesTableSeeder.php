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
            1 => 
            array (
                'id' => 43,
                'agent' => 20,
                'category' => 'Kontrakan',
                'isSell' => NULL,
                'isRent' => 13,
                'name' => 'Rumah Jakarta Pusat Cempaka Baru',
                'bath_room' => 1,
                'bed_room' => 3,
                'stories' => 1,
                'land_area' => 122,
                'building_area' => 117,
                'location' => '11,156,1906,24973',
                'address' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
                'image' => 'storage/image/property/15955869110.jpeg,storage/image/property/15955869111.webp,storage/image/property/15955869112.jpeg,storage/image/property/15955869113.jpeg',
                'main_image' => 'storage/image/property/15955869110.jpeg',
                'created_at' => '2020-07-24 10:35:11',
                'updated_at' => '2020-07-24 10:35:11',
            ),
            2 => 
            array (
                'id' => 44,
                'agent' => 20,
                'category' => 'Rumah',
                'isSell' => NULL,
                'isRent' => 14,
                'name' => 'Kontrakan strategis aman dan nyaman',
                'bath_room' => 1,
                'bed_room' => 1,
                'stories' => 1,
                'land_area' => 100,
                'building_area' => 24,
                'location' => '11,155,1901,24945',
                'address' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
                'image' => 'storage/image/property/15955870960.webp,storage/image/property/15955870961.jpeg',
                'main_image' => 'storage/image/property/15955870960.webp',
                'created_at' => '2020-07-24 10:38:16',
                'updated_at' => '2020-07-24 10:38:16',
            ),
            3 => 
            array (
                'id' => 46,
                'agent' => 20,
                'category' => 'Kontrakan',
                'isSell' => NULL,
                'isRent' => 16,
                'name' => 'Dikontrakan Rumah Lokasi strategis daerah Surabaya Selatan',
                'bath_room' => 2,
                'bed_room' => 3,
                'stories' => 1,
                'land_area' => 40,
                'building_area' => 40,
                'location' => '15,262,3833,48389',
                'address' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
                'image' => 'storage/image/property/15955875640.jpeg,storage/image/property/15955875641.jpeg,storage/image/property/15955875642.jpeg,storage/image/property/15955875643.jpeg',
                'main_image' => 'storage/image/property/15955875640.jpeg',
                'created_at' => '2020-07-24 10:46:04',
                'updated_at' => '2020-07-24 10:46:04',
            ),
            4 => 
            array (
                'id' => 48,
                'agent' => 5,
                'category' => 'Rumah',
                'isSell' => 20,
                'isRent' => NULL,
                'name' => 'JUAL RUMAH SIAP PAKAI DAN STRATEGIS',
                'bath_room' => 3,
                'bed_room' => 3,
                'stories' => 1,
                'land_area' => 80,
                'building_area' => 60,
                'location' => '13,207,2948,37174',
                'address' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
                'image' => 'storage/image/property/15955889020.jpeg,storage/image/property/15955889021.jpeg',
                'main_image' => 'storage/image/property/15955889020.jpeg',
                'created_at' => '2020-07-24 11:08:22',
                'updated_at' => '2020-07-24 11:08:22',
            ),
        ));
        
        
    }
}