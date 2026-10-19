<?php

namespace Database\Seeders;

use App\Models\Plant;
use Illuminate\Database\Seeder;

class PlantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $plants = [
            [
                'name' => 'Monstera Deliciosa',
                'species' => 'Monstera deliciosa',
                'price' => 150000.00,
                'description' => 'Tanaman hias popular dengan daun berlubang alami yang memberikan kesan tropis pada ruangan.',
                'image' => 'monstera.jpg',
                'sunlight_requirements' => 'Cahaya tidak langsung (Bright indirect light)',
            ],
            [
                'name' => 'Snake Plant (Lidah Mertua)',
                'species' => 'Sansevieria trifasciata',
                'price' => 75000.00,
                'description' => 'Tanaman pembersih udara yang sangat tangguh dan mudah dirawat bagi pemula.',
                'image' => 'snake_plant.jpg',
                'sunlight_requirements' => 'Tahan cahaya rendah hingga terik langsung',
            ],
            [
                'name' => 'Sirih Gading (Golden Pothos)',
                'species' => 'Epipremnum aureum',
                'price' => 45000.00,
                'description' => 'Tanaman merambat yang sangat cantik diletakkan di pot gantung atau rak dinding.',
                'image' => 'sirih_gading.jpg',
                'sunlight_requirements' => 'Cahaya teduh / indirect light',
            ],
            [
                'name' => 'Peace Lily',
                'species' => 'Spathiphyllum',
                'price' => 95000.00,
                'description' => 'Memiliki bunga putih bersih yang elegan dan sangat efektif menyerap polutan udara.',
                'image' => 'peace_lily.jpg',
                'sunlight_requirements' => 'Cahaya teduh (hindari matahari langsung)',
            ],
            [
                'name' => 'Kaktus Mini Sukulen',
                'species' => 'Succulent mix',
                'price' => 35000.00,
                'description' => 'Kumpulan kaktus mini hias yang cocok untuk mempercantik meja kerja atau sudut ruangan.',
                'image' => 'kaktus.jpg',
                'sunlight_requirements' => 'Cahaya matahari penuh (Full sun)',
            ],
            [
                'name' => 'Lidah Buaya (Aloe Vera)',
                'species' => 'Aloe barbadensis miller',
                'price' => 50000.00,
                'description' => 'Tanaman herbal multifungsi yang daunnya sering digunakan untuk perawatan kulit.',
                'image' => 'aloe_vera.jpg',
                'sunlight_requirements' => 'Cahaya matahari terang',
            ],
            [
                'name' => 'Calathea Medallion',
                'species' => 'Goeppertia roseopicta',
                'price' => 120000.00,
                'description' => 'Dikenal karena motif daunnya yang sangat indah menyerupai lukisan tangan.',
                'image' => 'calathea.jpg',
                'sunlight_requirements' => 'Cahaya teduh / tidak langsung',
            ],
            [
                'name' => 'Fiddle Leaf Fig (Ketapang Biola)',
                'species' => 'Ficus lyrata',
                'price' => 225000.00,
                'description' => 'Tanaman hias berukuran besar dengan daun berbentuk seperti biola, cocok untuk sudut ruangan modern.',
                'image' => 'fiddle_leaf.jpg',
                'sunlight_requirements' => 'Cahaya terang tidak langsung',
            ],
            [
                'name' => 'Tanaman Laba-Laba (Spider Plant)',
                'species' => 'Chlorophytum comosum',
                'price' => 40000.00,
                'description' => 'Tanaman gantung yang aktif memproduksi anakkan dan sangat aman bagi hewan peliharaan.',
                'image' => 'spider_plant.jpg',
                'sunlight_requirements' => 'Cahaya sedang hingga terang',
            ],
            [
                'name' => 'ZZ Plant (Zamioculcas)',
                'species' => 'Zamioculcas zamiifolia',
                'price' => 110000.00,
                'description' => 'Tanaman hias daun mengkilap yang hampir tidak bisa mati karena sangat tahan kekeringan.',
                'image' => 'zz_plant.jpg',
                'sunlight_requirements' => 'Tahan di tempat minim cahaya (Low light)',
            ],
            [
                'name' => 'Sirih Merah',
                'species' => 'Piper crocatum',
                'price' => 60000.00,
                'description' => 'Tanaman herbal merambat dengan corak daun kemerahan yang eksotis.',
                'image' => 'sirih_merah.jpg',
                'sunlight_requirements' => 'Cahaya teduh (50% intensitas)',
            ],
            [
                'name' => 'Bunga Anggrek Bulan',
                'species' => 'Phalaenopsis amabilis',
                'price' => 175000.00,
                'description' => 'Bunga nasional Indonesia yang memiliki kelopak anggun dan tahan lama.',
                'image' => 'anggrek.jpg',
                'sunlight_requirements' => 'Cahaya terang tidak langsung (sejuk)',
            ],
            [
                'name' => 'Boston Fern (Paku Boston)',
                'species' => 'Nephrolepis exaltata',
                'price' => 65000.00,
                'description' => 'Tanaman paku hias berdaun rimbun yang sangat menyukai kelembapan tinggi.',
                'image' => 'boston_fern.jpg',
                'sunlight_requirements' => 'Cahaya teduh / lembap',
            ],
            [
                'name' => 'Aglonema Red Sumatra',
                'species' => 'Aglaonema',
                'price' => 250000.00,
                'description' => 'Ratu daun penjelajah dengan kombinasi warna hijau dan merah menyala yang mewah.',
                'image' => 'aglonema.jpg',
                'sunlight_requirements' => 'Cahaya teduh (70% naungan)',
            ],
            [
                'name' => 'Pohon Bahagia (Chinese Evergreen)',
                'species' => 'Aglaonema modestum',
                'price' => 85000.00,
                'description' => 'Dipercaya membawa peruntungan serta mudah beradaptasi di dalam ruangan ber-AC.',
                'image' => 'chinese_evergreen.jpg',
                'sunlight_requirements' => 'Cahaya rendah hingga sedang',
            ],
        ];

        foreach ($plants as $plant) {
            Plant::create($plant);
        }
    }
}