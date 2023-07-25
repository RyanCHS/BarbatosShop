<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'category_id' => 1,
            'name' => 'Hydra x Barrier For Oily Skin Sensitive',
            'detail' => 'Hydra X Barrier merupakan pelembab wajah yang ringan dan mampu memberikan kelembaban ekstra pada kulit. Diformulasikan khusus oleh dermatologist dengan Barrier Repair & Protection, Anti-Inflammatory, dan Antioxidant, membuat produk ini mampu mengembalikan dan memperkuat fungsi skin barrier kamu yang rusak. Dengan kandungan centella asiatica dan ceremide, yang berfungsi sebagai anti-aging, melawan jerawat, melembapkan, serta memberi rasa sejuk bagi kulit. Selain itu, cream ini juga mengandung aloe vera dan mugwort yang bisa mengatasi iritasi serta memberi hidrasi pada kulit yang sensitif, sehingga kulit kamu menjadi lebih sehat.',
            'price' => 69000,
            'image' => 'b429403e-44e9-4ca6-9857-23b5b6c69d1d.jpg'
        ]);

        DB::table('products')->insert([
            'category_id' => 1,
            'name' => 'MISSHA Speedy Solution Anti Trouble Patch',
            'detail' => 'Missha Speedy Solution Anti Trouble Patch. Patch (Stiker) yang membantu melindungi jerawat dari bakteri dan virus dan mencegahnya tumbuh dan menyebar. Patch mengandung bahan anti-inflamasi, termasuk asam Salisilat dan minyak Pohon Teh, untuk mengurangi jerawat, kemerahan dan mempercepat proses pemulihan. ',
            'price' => 5000,
            'image' => '3107e315-adcc-467e-876d-c935b7a5b744.jpg'
        ]);

        DB::table('products')->insert([
            'category_id' => 1,
            'name' => 'Viva Ultra Foundation 30 ml - Rachel',
            'detail' => 'Alas bedak cair yang kental untuk semua jenis kulit. Diperkaya Emollient dan Mosturizer untuk melembutkan dan melembabkan kulit wajah dengan berbagai pilihan warna.',
            'price' => 6712,
            'image' => '7aa550eb-b1db-441b-b837-97ef95db21cf.jpg'
        ]);

        DB::table('products')->insert([
            'category_id' => 1,
            'name' => 'USO Instant Face Life Tape For V Shape isi 40 tape Stiker Penirus Waja',
            'detail' => 'DODO LABE FACE LIFT TAPE. Digunakan untuk Mengencangkan pipi dan meniruskan wajah secara instan tanpa operasi plastik, cara penggunaan plester wajah cukup mudah hanya dengan menempelkan plester disekitar pipi dan rahang. meski plester ini bening, tapi penggunaan bisa menutupinya dengan makeup. ',
            'price' => 18999,
            'image' => '130dbb19-0883-467d-95b3-bdbe796926ed.jpg'
        ]);

        DB::table('products')->insert([
            'category_id' => 1,
            'name' => 'Parfum Giorgio Armani attitud extrime man 75 ml edt',
            'detail' => 'Kualitas Original EROPA Botol Tebal HALUS BUKAN Parfum KW, Bukan parfum Original Singapur (OS), BUKAN SUPER ',
            'price' => 195000,
            'image' => 'ab6e95a0-4c72-436c-99f1-f715b0da8106.jpg'
        ]);

        DB::table('products')->insert([
            'category_id' => 1,
            'name' => 'Viva Skin Food Cream with Vit A, E & F (22 gr & 30gr) - 22 gr',
            'detail' => 'Krim yang berfungsi untuk menutrisi dan menjaga kelembapan kulit hingga ke dalam kulit. Sehingga mampu menjaga vitalitas kulit.',
            'price' => 7546,
            'image' => '5824ca4d-35ec-4e27-a210-fd36117a1247.jpg'
        ]);

        DB::table('products')->insert([
            'category_id' => 1,
            'name' => 'BPOM Grace & Glow Black Opium Brightening - English Pear & Freesia Ant - ROUGE',
            'detail' => 'Body Wash dengan wangi mewah parfum YSL varian Black Opium yang diformulasikan sebagai sabun mandi yang dapat membuat tubuh lebih cerah, lembut dan lembab.',
            'price' => 44850,
            'image' => '57bc8159-07b0-48f6-b648-2e738c84b8b1.jpg'
        ]);

        DB::table('products')->insert([
            'category_id' => 1,
            'name' => 'Wardah Lightening Serum Ampoule 8 ml',
            'detail' => 'Wardah Lightening Serum Ampoule, serum dengan tekstur cair yang ringan dan cepat meresap,mengandung 10x* Advanced Niacinamide konsentrat tinggi yang berfungsi untuk mencerahkan kulit,menyamarkan bekas jerawat, membuat warna kulit tampak merata, menjaga kelembaban kulit, danmelindungi kulit dari paparan blue light.',
            'price' => 15725,
            'image' => '1355430_2d85cfc4-50ea-4b07-b20b-ea398d4f30a8.jpg'
        ]);

        DB::table('products')->insert([
            'category_id' => 1,
            'name' => 'SOME BY MI Snail Truecica Toner Miracle Repair Toner 135 ml',
            'detail' => 'Formulated with black snail extract, snail truecica and a patented combination of plant extracts, this refreshing and moisturizing toner boasts whitening and anti-wrinkle effects. It makes use of snail’s powerful regenerative power to strengthen the skin barrier, heal damaged skin and soothe sensitive skin, while its special acne spot care solution stops melanin production, protects skin from ultraviolet rays, and effectively reduces acne scars and hyperpigmentation.',
            'price' => 115000,
            'image' => 'd6f5e2ac-cb14-4e04-b6ac-ef7ccf04c3b8.jpg'
        ]);

        DB::table('products')->insert([
            'category_id' => 1,
            'name' => 'H&H Loose Powder ( bedak tabur pencerah ) - Loose Powder',
            'detail' => 'Bedak tabur untuk perawatan kulit berminyak dan berjerawat. Gunakan bedak tabur secara merata pada wajah setelah memakai pelembab atau alas bedak khusus untuk kulit berminyak atau berjerawat.',
            'price' => 149399,
            'image' => '248eae94-e218-40d4-9231-ccf15d4e701c.jpg'
        ]);

        DB::table('products')->insert([
            'category_id' => 1,
            'name' => 'Product 11',
            'detail' => 'detail produk',
            'price' => 5000,
            'image' => 'beauty1.jpg'
        ]);

        DB::table('products')->insert([
            'category_id' => 1,
            'name' => 'Product 12',
            'detail' => 'detail produk',
            'price' => 5000,
            'image' => 'beauty1.jpg'
        ]);

        DB::table('products')->insert([
            'category_id' => 1,
            'name' => 'Product 13',
            'detail' => 'detail produk',
            'price' => 5000,
            'image' => 'beauty1.jpg'
        ]);

        DB::table('products')->insert([
            'category_id' => 1,
            'name' => 'Product 14',
            'detail' => 'detail produk',
            'price' => 5000,
            'image' => 'beauty1.jpg'
        ]);

        DB::table('products')->insert([
            'category_id' => 1,
            'name' => 'Product 15',
            'detail' => 'detail produk',
            'price' => 5000,
            'image' => 'beauty1.jpg'
        ]);

        DB::table('products')->insert([
            'category_id' => 1,
            'name' => 'Product 16',
            'detail' => 'detail produk',
            'price' => 5000,
            'image' => 'beauty1.jpg'
        ]);

        DB::table('products')->insert([
            'category_id' => 1,
            'name' => 'Product 17',
            'detail' => 'detail produk',
            'price' => 5000,
            'image' => 'beauty1.jpg'
        ]);

        DB::table('products')->insert([
            'category_id' => 1,
            'name' => 'Product 18',
            'detail' => 'detail produk',
            'price' => 5000,
            'image' => 'beauty1.jpg'
        ]);

        DB::table('products')->insert([
            'category_id' => 1,
            'name' => 'Product 19',
            'detail' => 'detail produk',
            'price' => 5000,
            'image' => 'beauty1.jpg'
        ]);

        DB::table('products')->insert([
            'category_id' => 1,
            'name' => 'Product 20',
            'detail' => 'detail produk',
            'price' => 5000,
            'image' => 'beauty1.jpg'
        ]);

        DB::table('products')->insert([
            'category_id' => 2,
            'name' => 'Brica B-PRO5 Alpha Edition 4K Mark III S Black',
            'detail' => 'Brica B-PRO5 Alpha Edition 4K Mark III S hadir dengan 2 versi, EIS dan super wide, untuk kebutuhan yang berbeda. Dengan sensor Gambar SONY EXMOR-R 12 Megapiksel yang baru dan lebih baik, lensa 8 lapisan. Rekam aksi Anda dalam Resolusi TINGGI dengan Brica B-PRO5α Alpha Edition mark 3 [s]. Rekam semuanya dalam resolusi 4K, Resolusi 2,7K, atau pada FULL HD pada 60 bingkai per detik dengan kualitas video yang lebih cerah dan lebih jelas.',
            'price' => 1299000,
            'image' => '40309e97-694c-408b-ab26-d619d7f85db2.jpg'
        ]);

        DB::table('products')->insert([
            'category_id' => 2,
            'name' => 'Sony HDR-CX405 HD Handycam',
            'detail' => 'Handycam Sony HDR-CX405 HD, bisa merekam video Full HD 1920×1080 60p, memiliki resolusi 9.2MP, sensor CMOS Exmor R, image prosesor Bionz X, Lensa Zeiss 30x Zoom Optik. Sensor Exmor R CMOS dirancang untuk meningkatkan sensitivitas dalam situasi low light dan Optical SteadyShot image stabilization dengan Intelligent Active Mode menghasilkan video yang smooth. Pengguna dapat memantau dan memutar rekaman melalui layar LCD 2,7″ dengan resolusi dot 230K.',
            'price' => 3399000,
            'image' => '8b05ee1d-a5ec-4fd1-8ec4-bb7af7f98556.jpg'
        ]);

        DB::table('products')->insert([
            'category_id' => 2,
            'name' => 'J Hook & Screw Aksesoris GoPro SJCAM Xiaomi YI Brica BPro Kogan',
            'detail' => 'J Hook Mount Adapter ini merupakan salah Satu aksesoris wajib untuk para pengguna action cam. Berbentuk seperti huruf J membuat penempatan posisi action cam lebih tinggi sehingga membantu untuk mendapatkan Sudut Pengambilan Gambar yang lebih baik . ',
            'price' => 13000,
            'image' => '3926301_c8a2707d-8428-41c1-8ec6-c7a2810a18fd_1000_1000.jpg'
        ]);

        DB::table('products')->insert([
            'category_id' => 2,
            'name' => '360 Clip Mount Aksesoris GoPro Xiaomi YI SJCAM Brica BPro Kogan',
            'detail' => 'Salah satu aksesoris wajib untuk anda pengguna action cam , Clip Mount ini dapat berputar 360 derajat , memudahkan anda mengatur posisi action cam. Penggunaan yang mudah yakni dengan cara menjepitkan 360 Clip Mount di media yang datar dan tipis seperti tepi meja , Strap ransel / kamera .',
            'price' => 29000,
            'image' => '3926301_82d59041-f3ef-4ed5-9a0f-0b8c09b42df5_1000_1000.jpg'
        ]);

        DB::table('products')->insert([
            'category_id' => 2,
            'name' => '3 Way Pivot Arm Aksesoris GoPro Xiaomi YI SJCAM BPro Kogan Action Cam - Type A',
            'detail' => 'Merupakan Salah Satu Aksesoris Standard untuk anda pengguna action cam , 3 Way Pivot Arm ini membantu menyuasaikan sudut pengambilan gambar yang di inginkan. Cocok digunakan di Helm , Mounting Sepeda , Monopod atau Suction cup dengan cara kombiinasikan bersama Mounting helm , Buckle mount / Base Mount , 360 Helmet Mount , Handlebar seatpost atau dengan J Hook. Sehingga anda dapat mengambil gambar dengan sudut yang pas saat merekam kegiatan surfing , skateboard , bersepeda , motor maupun di mobil . ',
            'price' => 15000,
            'image' => 'e0418a3a-2523-460a-8873-66cbf969390b.jpg'
        ]);

        DB::table('products')->insert([
            'category_id' => 2,
            'name' => 'Insta360 ONE RS Twin Edition Acton Camera Original ',
            'detail' => 'Kamera Insta360 ONE RS Twin Edition adalah salah satu konfigurasi utama dari sistem kamera aksi ONE RS modular. Edisi Kembar mencakup modul Inti, Mod Boost 4K, Mod 360, dan Basis Baterai yang diperlukan untuk menyatukan modul. ONE RS memiliki kapasitas baterai 21% lebih banyak daripada ONE R, dan juga menampilkan audio yang lebih tajam dengan tiga mikrofon dan transfer Wi-Fi yang lebih cepat. Modul Core, yang merupakan otak, dan modul lain pilihan Anda, dipasang berdampingan di Basis Baterai. Mod Sudut Lebar 1", yang merekam video beresolusi 5.3K, juga tersedia secara terpisah dan dapat ditukar.',
            'price' => 8889000,
            'image' => '2d9a34d6-c168-4528-b3fd-3e7acc1ea63c.jpg'
        ]);

        DB::table('products')->insert([
            'category_id' => 2,
            'name' => 'Akaso Brave 7 LE Action Camera 4k 30FPS 20MP Dual Screen - Unit Only',
            'detail' => 'Brave 7 LE menghadirkan desain layar ganda yang revolusioner. Layar belakang untuk merekam sudut belakang; Layar depan untuk Framing diri sendiri. Dapatkan tangkapan lebih luas dari jalur gunung ke laut yang bergelombang, berkat sistem EIS yang ditingkatkan',
            'price' => 2249000,
            'image' => 'd34e95e8-0c80-4f69-aeaf-5fb3d74d798a.jpg'
        ]);

        DB::table('products')->insert([
            'category_id' => 2,
            'name' => 'IP Camera CCTV Dual Antenna 2 Antena 720P HD IR Night Vision',
            'detail' => 'CCTV IPCAM/BABYCAM WIRELES 1,3MP 2 ANTENA-LEBIH RESPON MENAPKAP SINYAL DENGAN Dual antena MIMO. CCTV IP Camera/kamera wireless 1,3mp. Praktis tanpa kabel, portable mudah di pasang dan di pindah. CCTV IP Camera,P2P-PTZ Indoor Night Vision 720P HD WiFi 1,3mp bisa langsung dilihat via HP- Android/iPhone/pc/laptop. Sangat cocok untuk agan yang sering berpergian dan ingin sesekali mengecek keadaan disekitar camera diletakan',
            'price' => 270000,
            'image' => '50649573_b6305af9-65af-4e6f-9f25-ad88c34e352f.jpg'
        ]);

        DB::table('products')->insert([
            'category_id' => 2,
            'name' => 'Tongsis Round Mount for Action Camera GoPro / Xiaomi Yi / Smartphone',
            'detail' => 'Monopod / tongkat narsis / tongsis / selfie menawarkan dukungan kamera handal, yang sesuai dengan ekspektasi para pecinta fotografi. Dirancang untuk dibawa berpergian oleh para fotografer, monopod ini cukup kokoh, ringan, dan anti slip. Hand Held Monopod adalah sebuah alat penopang kamera yang sempurna untuk bagi Anda yang suka berpergian, aktif dalam fotografi dan suka menangkap improvisasi gambar yang lebih hidup. Dengan tongsis Anda dapat berfoto ria dengan orang-orang disekitar Anda. ',
            'price' => 39500,
            'image' => '2924315_f0083bde-a670-4680-bddb-056de92524e6.jpg'
        ]);

        DB::table('products')->insert([
            'category_id' => 2,
            'name' => 'Bcare X5 Action Camera 4K 16MP ultraHD Dual Screen Touch Screen - Hitam',
            'detail' => '16 MP kamera, 4K Ultra HD (3840 x 2160). Sony sensor, slow motion function, memory card hingga 64 GB. Compact Size, dual screen, layar 2inc HD,Waterproof 30M (IP X8 tested). WiFi untuk Android dan iOS. 4x digital zoom dan Lensa high definition ultra wide angle 170 hemat baterai dan tahan lama (3.7V 900 mAh)',
            'price' => 595000,
            'image' => '4704d218-61e7-4df7-b8c7-76c3d6217efa.jpg'
        ]);

        DB::table('products')->insert([
            'category_id' => 2,
            'name' => 'Camera 11',
            'detail' => 'detail produk',
            'price' => 5000,
            'image' => 'GUEST_86a9c2be-9727-4296-9f58-91d85dde1e62.jpg'
        ]);

        DB::table('products')->insert([
            'category_id' => 2,
            'name' => 'Camera 12',
            'detail' => 'detail produk',
            'price' => 5000,
            'image' => 'GUEST_86a9c2be-9727-4296-9f58-91d85dde1e62.jpg'
        ]);

        DB::table('products')->insert([
            'category_id' => 2,
            'name' => 'Camera 13',
            'detail' => 'detail produk',
            'price' => 5000,
            'image' => 'GUEST_86a9c2be-9727-4296-9f58-91d85dde1e62.jpg'
        ]);

        DB::table('products')->insert([
            'category_id' => 2,
            'name' => 'Camera 14',
            'detail' => 'detail produk',
            'price' => 5000,
            'image' => 'GUEST_86a9c2be-9727-4296-9f58-91d85dde1e62.jpg'
        ]);

        DB::table('products')->insert([
            'category_id' => 2,
            'name' => 'Camera 15',
            'detail' => 'detail produk',
            'price' => 5000,
            'image' => 'GUEST_86a9c2be-9727-4296-9f58-91d85dde1e62.jpg'
        ]);

        DB::table('products')->insert([
            'category_id' => 2,
            'name' => 'Camera 16',
            'detail' => 'detail produk',
            'price' => 5000,
            'image' => 'GUEST_86a9c2be-9727-4296-9f58-91d85dde1e62.jpg'
        ]);

        DB::table('products')->insert([
            'category_id' => 2,
            'name' => 'Camera 17',
            'detail' => 'detail produk',
            'price' => 5000,
            'image' => 'GUEST_86a9c2be-9727-4296-9f58-91d85dde1e62.jpg'
        ]);

        DB::table('products')->insert([
            'category_id' => 2,
            'name' => 'Camera 18',
            'detail' => 'detail produk',
            'price' => 5000,
            'image' => 'GUEST_86a9c2be-9727-4296-9f58-91d85dde1e62.jpg'
        ]);

        DB::table('products')->insert([
            'category_id' => 2,
            'name' => 'Camera 19',
            'detail' => 'detail produk',
            'price' => 5000,
            'image' => 'GUEST_86a9c2be-9727-4296-9f58-91d85dde1e62.jpg'
        ]);

        DB::table('products')->insert([
            'category_id' => 2,
            'name' => 'Camera 20',
            'detail' => 'detail produk',
            'price' => 5000,
            'image' => 'GUEST_86a9c2be-9727-4296-9f58-91d85dde1e62.jpg'
        ]);
    }
}
