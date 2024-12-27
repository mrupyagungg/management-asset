<?php

namespace Database\Seeders;

use App\Models\CommodityCategory;
use Illuminate\Database\Seeder;

class CommodityCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CommodityCategory::create([
            'name' => 'Aset Tetap',
            'description' => 'Aset yang memiliki masa manfaat panjang, seperti peralatan dan furniture.'
        ]);

        CommodityCategory::create([
            'name' => 'Barang Habis Pakai',
            'description' => 'Barang yang habis terpakai dalam jangka pendek, seperti tinta printer.'
        ]);

        CommodityCategory::create([
            'name' => 'Peralatan Elektronik',
            'description' => 'Perangkat elektronik, seperti komputer, printer, dan scanner.'
        ]);

        CommodityCategory::create([
            'name' => 'Furniture',
            'description' => 'Barang seperti meja, kursi, dan lemari.'
        ]);

        CommodityCategory::create([
            'name' => 'Perangkat Lunak',
            'description' => 'Lisensi software seperti Microsoft Office atau aplikasi desain.'
        ]);

        CommodityCategory::create([
            'name' => 'Alat Laboratorium',
            'description' => 'Peralatan laboratorium seperti mikroskop, timbangan digital, dll.'
        ]);

        CommodityCategory::create([
            'name' => 'Bahan Percobaan',
            'description' => 'Bahan yang digunakan dalam eksperimen, seperti bahan kimia atau alat uji.'
        ]);

        CommodityCategory::create([
            'name' => 'Kendaraan',
            'description' => 'Aset berupa kendaraan untuk operasional, seperti sepeda motor atau mobil.'
        ]);

        CommodityCategory::create([
            'name' => 'Peralatan Jaringan',
            'description' => 'Router, switch, kabel LAN, dan perangkat jaringan lainnya.'
        ]);

        CommodityCategory::create([
            'name' => 'Alat Tulis Kantor (ATK)',
            'description' => 'Barang seperti pulpen, kertas, buku catatan, dan stapler.'
        ]);
    }
}
