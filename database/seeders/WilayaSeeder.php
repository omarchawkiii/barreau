<?php

namespace Database\Seeders;

use App\Models\Wilaya;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WilayaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('wilayas')->delete();

        Wilaya::create([
            'code' => 1,
            'name' => 'Adrar',
        ]);

        Wilaya::create([
            'code' => 2,
            'name' => 'Chlef',
        ]);

        Wilaya::create([
            'code' => 3,
            'name' => 'Laghouat',
        ]);

        Wilaya::create([
            'code' => 4,
            'name' => 'Oum El Bouaghi',
        ]);

        Wilaya::create([
            'code' => 5,
            'name' => 'Batna',
        ]);

        Wilaya::create([
            'code' => 6,
            'name' => 'Béjaïa',
        ]);

        Wilaya::create([
            'code' => 7,
            'name' => 'Biskra',
        ]);

        Wilaya::create([
            'code' => 8,
            'name' => 'Béchar',
        ]);

        Wilaya::create([
            'code' => 9,
            'name' => 'Blida',
        ]);

        Wilaya::create([
            'code' => 10,
            'name' => 'Bouira',
        ]);

        Wilaya::create([
            'code' => 11,
            'name' => 'Tamanrasset',
        ]);

        Wilaya::create([
            'code' => 12,
            'name' => 'Tébessa',
        ]);

        Wilaya::create([
            'code' => 13,
            'name' => 'Tlemcen',
        ]);

        Wilaya::create([
            'code' => 14,
            'name' => 'Tiaret',
        ]);

        Wilaya::create([
            'code' => 15,
            'name' => 'Tizi Ouzou',
        ]);

        Wilaya::create([
            'code' => 16,
            'name' => 'Alger',
        ]);

        Wilaya::create([
            'code' => 17,
            'name' => 'Djelfa',
        ]);

        Wilaya::create([
            'code' => 18,
            'name' => 'Jijel',
        ]);

        Wilaya::create([
            'code' => 19,
            'name' => 'Sétif',
        ]);

        Wilaya::create([
            'code' => 20,
            'name' => 'Saïda',
        ]);

        Wilaya::create([
            'code' => 21,
            'name' => 'Skikda',
        ]);

        Wilaya::create([
            'code' => 22,
            'name' => 'Sidi-Bel-Abbès',
        ]);

        Wilaya::create([
            'code' => 23,
            'name' => 'Annaba',
        ]);

        Wilaya::create([
            'code' => 24,
            'name' => 'Guelma',
        ]);

        Wilaya::create([
            'code' => 25,
            'name' => 'Constantine',
        ]);

        Wilaya::create([
            'code' => 26,
            'name' => 'Médéa',
        ]);

        Wilaya::create([
            'code' => 27,
            'name' => 'Mostaganem',
        ]);

        Wilaya::create([
            'code' => 28,
            'name' => 'M\'sila',
        ]);

        Wilaya::create([
            'code' => 29,
            'name' => 'Mascara',
        ]);

        Wilaya::create([
            'code' => 30,
            'name' => 'Ouargla',
        ]);

        Wilaya::create([
            'code' => 31,
            'name' => 'Oran',
        ]);

        Wilaya::create([
            'code' => 32,
            'name' => 'El-Bayadh',
        ]);

        Wilaya::create([
            'code' => 33,
            'name' => 'Illizi',
        ]);

        Wilaya::create([
            'code' => 34,
            'name' => 'Bordj Bou Arreridj',
        ]);

        Wilaya::create([
            'code' => 35,
            'name' => 'Boumerdès',
        ]);

        Wilaya::create([
            'code' => 36,
            'name' => 'El Tarf',
        ]);

        Wilaya::create([
            'code' => 37,
            'name' => 'Tindouf',
        ]);

        Wilaya::create([
            'code' => 38,
            'name' => 'Tissemsilt',
        ]);

        Wilaya::create([
            'code' => 39,
            'name' => 'El-Oued',
        ]);

        Wilaya::create([
            'code' => 40,
            'name' => 'Khenchela',
        ]);

        Wilaya::create([
            'code' => 41,
            'name' => 'Souk-Ahras',
        ]);

        Wilaya::create([
            'code' => 42,
            'name' => 'Tipaza',
        ]);

        Wilaya::create([
            'code' => 43,
            'name' => 'Mila',
        ]);

        Wilaya::create([
            'code' => 44,
            'name' => 'Aïn Defla',
        ]);

        Wilaya::create([
            'code' => 45,
            'name' => 'Naâma',
        ]);

        Wilaya::create([
            'code' => 46,
            'name' => 'Aïn Témouchent',
        ]);

        Wilaya::create([
            'code' => 47,
            'name' => 'Ghardaïa',
        ]);

        Wilaya::create([
            'code' => 48,
            'name' => 'Relizane',
        ]);

        Wilaya::create([
            'code' => 49,
            'name' => 'El M\'ghair',
        ]);

        Wilaya::create([
            'code' => 50,
            'name' => 'El Menia',
        ]);

        Wilaya::create([
            'code' => 51,
            'name' => 'Ouled Djellal',
        ]);

        Wilaya::create([
            'code' => 52,
            'name' => 'Bordj Baji Mokhtar',
        ]);

        Wilaya::create([
            'code' => 53,
            'name' => 'Béni Abbès',
        ]);

        Wilaya::create([
            'code' => 54,
            'name' => 'Timimoun',
        ]);

        Wilaya::create([
            'code' => 55,
            'name' => 'Touggourt',
        ]);

        Wilaya::create([
            'code' => 56,
            'name' => 'Djanet',
        ]);

        Wilaya::create([
            'code' => 57,
            'name' => 'In Salah',
        ]);

        Wilaya::create([
            'code' => 58,
            'name' => 'In Guezzam',
        ]);

        $this->command->info('Wilayas Seeded !');
    }
}
