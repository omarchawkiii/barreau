<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommuneSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('communes')->delete();

        DB::table('communes')->insert(array(
            0 =>
            array(
                'id' => 1,
                'wilayas_id' => 1,
                'name' => 'Adrar',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            1 =>
            array(
                'id' => 2,
                'wilayas_id' => 1,
                'name' => 'Tamest',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            2 =>
            array(
                'id' => 3,
                'wilayas_id' => 1,
                'name' => 'Charouine',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            3 =>
            array(
                'id' => 4,
                'wilayas_id' => 1,
                'name' => 'Reggane',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            4 =>
            array(
                'id' => 5,
                'wilayas_id' => 1,
                'name' => 'In Zghmir',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            5 =>
            array(
                'id' => 6,
                'wilayas_id' => 1,
                'name' => 'Tit',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            6 =>
            array(
                'id' => 7,
                'wilayas_id' => 1,
                'name' => 'Ksar Kaddour',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            7 =>
            array(
                'id' => 8,
                'wilayas_id' => 1,
                'name' => 'Tsabit',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            8 =>
            array(
                'id' => 9,
                'wilayas_id' => 1,
                'name' => 'Timimoun',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            9 =>
            array(
                'id' => 10,
                'wilayas_id' => 1,
                'name' => 'Ouled Said',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            10 =>
            array(
                'id' => 11,
                'wilayas_id' => 1,
                'name' => 'Zaouiet Kounta',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            11 =>
            array(
                'id' => 12,
                'wilayas_id' => 1,
                'name' => 'Aoulef',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            12 =>
            array(
                'id' => 13,
                'wilayas_id' => 1,
                'name' => 'Timokten',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            13 =>
            array(
                'id' => 14,
                'wilayas_id' => 1,
                'name' => 'Tamentit',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            14 =>
            array(
                'id' => 15,
                'wilayas_id' => 1,
                'name' => 'Fenoughil',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            15 =>
            array(
                'id' => 16,
                'wilayas_id' => 1,
                'name' => 'Tinerkouk',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            16 =>
            array(
                'id' => 17,
                'wilayas_id' => 1,
                'name' => 'Deldoul',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            17 =>
            array(
                'id' => 18,
                'wilayas_id' => 1,
                'name' => 'Sali',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            18 =>
            array(
                'id' => 19,
                'wilayas_id' => 1,
                'name' => 'Akabli',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            19 =>
            array(
                'id' => 20,
                'wilayas_id' => 1,
                'name' => 'Metarfa',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            20 =>
            array(
                'id' => 21,
                'wilayas_id' => 1,
                'name' => 'Ouled Ahmed Tammi',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            21 =>
            array(
                'id' => 22,
                'wilayas_id' => 1,
                'name' => 'Bouda',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            22 =>
            array(
                'id' => 23,
                'wilayas_id' => 1,
                'name' => 'Aougrout',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            23 =>
            array(
                'id' => 24,
                'wilayas_id' => 1,
                'name' => 'Talmine',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            24 =>
            array(
                'id' => 25,
                'wilayas_id' => 1,
                'name' => 'Bordj Badji Mokhtar',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            25 =>
            array(
                'id' => 26,
                'wilayas_id' => 1,
                'name' => 'Sbaa',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            26 =>
            array(
                'id' => 27,
                'wilayas_id' => 1,
                'name' => 'Ouled Aissa',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            27 =>
            array(
                'id' => 28,
                'wilayas_id' => 1,
                'name' => 'Timiaouine',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            28 =>
            array(
                'id' => 29,
                'wilayas_id' => 2,
                'name' => 'Chlef',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            29 =>
            array(
                'id' => 30,
                'wilayas_id' => 2,
                'name' => 'Tenes',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            30 =>
            array(
                'id' => 31,
                'wilayas_id' => 2,
                'name' => 'Benairia',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            31 =>
            array(
                'id' => 32,
                'wilayas_id' => 2,
                'name' => 'El Karimia',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            32 =>
            array(
                'id' => 33,
                'wilayas_id' => 2,
                'name' => 'Tadjna',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            33 =>
            array(
                'id' => 34,
                'wilayas_id' => 2,
                'name' => 'Taougrite',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            34 =>
            array(
                'id' => 35,
                'wilayas_id' => 2,
                'name' => 'Beni Haoua',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            35 =>
            array(
                'id' => 36,
                'wilayas_id' => 2,
                'name' => 'Sobha',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            36 =>
            array(
                'id' => 37,
                'wilayas_id' => 2,
                'name' => 'Harchoun',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            37 =>
            array(
                'id' => 38,
                'wilayas_id' => 2,
                'name' => 'Ouled Fares',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            38 =>
            array(
                'id' => 39,
                'wilayas_id' => 2,
                'name' => 'Sidi Akacha',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            39 =>
            array(
                'id' => 40,
                'wilayas_id' => 2,
                'name' => 'Boukadir',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            40 =>
            array(
                'id' => 41,
                'wilayas_id' => 2,
                'name' => 'Beni Rached',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            41 =>
            array(
                'id' => 42,
                'wilayas_id' => 2,
                'name' => 'Talassa',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            42 =>
            array(
                'id' => 43,
                'wilayas_id' => 2,
                'name' => 'Herenfa',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            43 =>
            array(
                'id' => 44,
                'wilayas_id' => 2,
                'name' => 'Oued Goussine',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            44 =>
            array(
                'id' => 45,
                'wilayas_id' => 2,
                'name' => 'Dahra',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            45 =>
            array(
                'id' => 46,
                'wilayas_id' => 2,
                'name' => 'Ouled Abbes',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            46 =>
            array(
                'id' => 47,
                'wilayas_id' => 2,
                'name' => 'Sendjas',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            47 =>
            array(
                'id' => 48,
                'wilayas_id' => 2,
                'name' => 'Zeboudja',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            48 =>
            array(
                'id' => 49,
                'wilayas_id' => 2,
                'name' => 'Oued Sly',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            49 =>
            array(
                'id' => 50,
                'wilayas_id' => 2,
                'name' => 'Abou El Hassen',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            50 =>
            array(
                'id' => 51,
                'wilayas_id' => 2,
                'name' => 'El Marsa',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            51 =>
            array(
                'id' => 52,
                'wilayas_id' => 2,
                'name' => 'Chettia',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            52 =>
            array(
                'id' => 53,
                'wilayas_id' => 2,
                'name' => 'Sidi Abderrahmane',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            53 =>
            array(
                'id' => 54,
                'wilayas_id' => 2,
                'name' => 'Moussadek',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            54 =>
            array(
                'id' => 55,
                'wilayas_id' => 2,
                'name' => 'El Hadjadj',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            55 =>
            array(
                'id' => 56,
                'wilayas_id' => 2,
                'name' => 'Labiod Medjadja',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            56 =>
            array(
                'id' => 57,
                'wilayas_id' => 2,
                'name' => 'Oued Fodda',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            57 =>
            array(
                'id' => 58,
                'wilayas_id' => 2,
                'name' => 'Ouled Ben Abdelkader',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            58 =>
            array(
                'id' => 59,
                'wilayas_id' => 2,
                'name' => 'Bouzghaia',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            59 =>
            array(
                'id' => 60,
                'wilayas_id' => 2,
                'name' => 'Ain Merane',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            60 =>
            array(
                'id' => 61,
                'wilayas_id' => 2,
                'name' => 'Oum Drou',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            61 =>
            array(
                'id' => 62,
                'wilayas_id' => 2,
                'name' => 'Breira',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            62 =>
            array(
                'id' => 63,
                'wilayas_id' => 2,
                'name' => 'Beni Bouateb',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            63 =>
            array(
                'id' => 64,
                'wilayas_id' => 3,
                'name' => 'Laghouat',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            64 =>
            array(
                'id' => 65,
                'wilayas_id' => 3,
                'name' => 'Ksar El Hirane',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            65 =>
            array(
                'id' => 66,
                'wilayas_id' => 3,
                'name' => 'Benacer Ben Chohra',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            66 =>
            array(
                'id' => 67,
                'wilayas_id' => 3,
                'name' => 'Sidi Makhlouf',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            67 =>
            array(
                'id' => 68,
                'wilayas_id' => 3,
                'name' => 'Hassi Delaa',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            68 =>
            array(
                'id' => 69,
                'wilayas_id' => 3,
                'name' => 'Hassi R\'Mel',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            69 =>
            array(
                'id' => 70,
                'wilayas_id' => 3,
                'name' => 'Ain Mahdi',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            70 =>
            array(
                'id' => 71,
                'wilayas_id' => 3,
                'name' => 'Tadjmout',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            71 =>
            array(
                'id' => 72,
                'wilayas_id' => 3,
                'name' => 'El Kheneg',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            72 =>
            array(
                'id' => 73,
                'wilayas_id' => 3,
                'name' => 'Gueltat Sidi Saad',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            73 =>
            array(
                'id' => 74,
                'wilayas_id' => 3,
                'name' => 'Ain Sidi Ali',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            74 =>
            array(
                'id' => 75,
                'wilayas_id' => 3,
                'name' => 'Beidha',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            75 =>
            array(
                'id' => 76,
                'wilayas_id' => 3,
                'name' => 'Brida',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            76 =>
            array(
                'id' => 77,
                'wilayas_id' => 3,
                'name' => 'El Ghicha',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            77 =>
            array(
                'id' => 78,
                'wilayas_id' => 3,
                'name' => 'Hadj Mechri',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            78 =>
            array(
                'id' => 79,
                'wilayas_id' => 3,
                'name' => 'Sebgag',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            79 =>
            array(
                'id' => 80,
                'wilayas_id' => 3,
                'name' => 'Taouiala',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            80 =>
            array(
                'id' => 81,
                'wilayas_id' => 3,
                'name' => 'Tadjrouna',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            81 =>
            array(
                'id' => 82,
                'wilayas_id' => 3,
                'name' => 'Aflou',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            82 =>
            array(
                'id' => 83,
                'wilayas_id' => 3,
                'name' => 'El Assafia',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            83 =>
            array(
                'id' => 84,
                'wilayas_id' => 3,
                'name' => 'Oued Morra',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            84 =>
            array(
                'id' => 85,
                'wilayas_id' => 3,
                'name' => 'Oued M\'Zi',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            85 =>
            array(
                'id' => 86,
                'wilayas_id' => 3,
                'name' => 'El Haouaita',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            86 =>
            array(
                'id' => 87,
                'wilayas_id' => 3,
                'name' => 'Sidi Bouzid',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            87 =>
            array(
                'id' => 88,
                'wilayas_id' => 4,
                'name' => 'Oum El Bouaghi',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            88 =>
            array(
                'id' => 89,
                'wilayas_id' => 4,
                'name' => 'Ain Beida',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            89 =>
            array(
                'id' => 90,
                'wilayas_id' => 4,
                'name' => 'Ain M\'lila',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            90 =>
            array(
                'id' => 91,
                'wilayas_id' => 4,
                'name' => 'Behir Chergui',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            91 =>
            array(
                'id' => 92,
                'wilayas_id' => 4,
                'name' => 'El Amiria',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            92 =>
            array(
                'id' => 93,
                'wilayas_id' => 4,
                'name' => 'Sigus',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            93 =>
            array(
                'id' => 94,
                'wilayas_id' => 4,
                'name' => 'El Belala',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            94 =>
            array(
                'id' => 95,
                'wilayas_id' => 4,
                'name' => 'Ain Babouche',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            95 =>
            array(
                'id' => 96,
                'wilayas_id' => 4,
                'name' => 'Berriche',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            96 =>
            array(
                'id' => 97,
                'wilayas_id' => 4,
                'name' => 'Ouled Hamla',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            97 =>
            array(
                'id' => 98,
                'wilayas_id' => 4,
                'name' => 'Dhala',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            98 =>
            array(
                'id' => 99,
                'wilayas_id' => 4,
                'name' => 'Ain Kercha',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            99 =>
            array(
                'id' => 100,
                'wilayas_id' => 4,
                'name' => 'Hanchir Toumghani',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            100 =>
            array(
                'id' => 101,
                'wilayas_id' => 4,
                'name' => 'El Djazia',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            101 =>
            array(
                'id' => 102,
                'wilayas_id' => 4,
                'name' => 'Ain Diss',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            102 =>
            array(
                'id' => 103,
                'wilayas_id' => 4,
                'name' => 'Fkirina',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            103 =>
            array(
                'id' => 104,
                'wilayas_id' => 4,
                'name' => 'Souk Naamane',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            104 =>
            array(
                'id' => 105,
                'wilayas_id' => 4,
                'name' => 'Zorg',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            105 =>
            array(
                'id' => 106,
                'wilayas_id' => 4,
                'name' => 'El Fedjoudj Boughrara Saoudi',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            106 =>
            array(
                'id' => 107,
                'wilayas_id' => 4,
                'name' => 'Ouled Zouai',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            107 =>
            array(
                'id' => 108,
                'wilayas_id' => 4,
                'name' => 'Bir Chouhada',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            108 =>
            array(
                'id' => 109,
                'wilayas_id' => 4,
                'name' => 'Ksar Sbahi',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            109 =>
            array(
                'id' => 110,
                'wilayas_id' => 4,
                'name' => 'Oued Nini',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            110 =>
            array(
                'id' => 111,
                'wilayas_id' => 4,
                'name' => 'Meskiana',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            111 =>
            array(
                'id' => 112,
                'wilayas_id' => 4,
                'name' => 'Ain Fekroune',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            112 =>
            array(
                'id' => 113,
                'wilayas_id' => 4,
                'name' => 'Rahia',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            113 =>
            array(
                'id' => 114,
                'wilayas_id' => 4,
                'name' => 'Ain Zitoun',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            114 =>
            array(
                'id' => 115,
                'wilayas_id' => 4,
                'name' => 'Ouled Gacem',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            115 =>
            array(
                'id' => 116,
                'wilayas_id' => 4,
                'name' => 'El Harmilia',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            116 =>
            array(
                'id' => 117,
                'wilayas_id' => 5,
                'name' => 'Batna',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            117 =>
            array(
                'id' => 118,
                'wilayas_id' => 5,
                'name' => 'Ghassira',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            118 =>
            array(
                'id' => 119,
                'wilayas_id' => 5,
                'name' => 'Maafa',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            119 =>
            array(
                'id' => 120,
                'wilayas_id' => 5,
                'name' => 'Merouana',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            120 =>
            array(
                'id' => 121,
                'wilayas_id' => 5,
                'name' => 'Seriana',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            121 =>
            array(
                'id' => 122,
                'wilayas_id' => 5,
                'name' => 'Menaa',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            122 =>
            array(
                'id' => 123,
                'wilayas_id' => 5,
                'name' => 'El Madher',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            123 =>
            array(
                'id' => 124,
                'wilayas_id' => 5,
                'name' => 'Tazoult',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            124 =>
            array(
                'id' => 125,
                'wilayas_id' => 5,
                'name' => 'Ngaous',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            125 =>
            array(
                'id' => 126,
                'wilayas_id' => 5,
                'name' => 'Guigba',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            126 =>
            array(
                'id' => 127,
                'wilayas_id' => 5,
                'name' => 'Inoughissen',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            127 =>
            array(
                'id' => 128,
                'wilayas_id' => 5,
                'name' => 'Ouyoun El Assafir',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            128 =>
            array(
                'id' => 129,
                'wilayas_id' => 5,
                'name' => 'Djerma',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            129 =>
            array(
                'id' => 130,
                'wilayas_id' => 5,
                'name' => 'Bitam',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            130 =>
            array(
                'id' => 131,
                'wilayas_id' => 5,
                'name' => 'Metkaouak',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            131 =>
            array(
                'id' => 132,
                'wilayas_id' => 5,
                'name' => 'Arris',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            132 =>
            array(
                'id' => 133,
                'wilayas_id' => 5,
                'name' => 'Kimmel',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            133 =>
            array(
                'id' => 134,
                'wilayas_id' => 5,
                'name' => 'Tilatou',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            134 =>
            array(
                'id' => 135,
                'wilayas_id' => 5,
                'name' => 'Ain Djasser',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            135 =>
            array(
                'id' => 136,
                'wilayas_id' => 5,
                'name' => 'Ouled Selam',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            136 =>
            array(
                'id' => 137,
                'wilayas_id' => 5,
                'name' => 'Tigherghar',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            137 =>
            array(
                'id' => 138,
                'wilayas_id' => 5,
                'name' => 'Ain Yagout',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            138 =>
            array(
                'id' => 139,
                'wilayas_id' => 5,
                'name' => 'Fesdis',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            139 =>
            array(
                'id' => 140,
                'wilayas_id' => 5,
                'name' => 'Sefiane',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            140 =>
            array(
                'id' => 141,
                'wilayas_id' => 5,
                'name' => 'Rahbat',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            141 =>
            array(
                'id' => 142,
                'wilayas_id' => 5,
                'name' => 'Tighanimine',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            142 =>
            array(
                'id' => 143,
                'wilayas_id' => 5,
                'name' => 'Lemsane',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            143 =>
            array(
                'id' => 144,
                'wilayas_id' => 5,
                'name' => 'Ksar Belezma',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            144 =>
            array(
                'id' => 145,
                'wilayas_id' => 5,
                'name' => 'Seggana',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            145 =>
            array(
                'id' => 146,
                'wilayas_id' => 5,
                'name' => 'Ichmoul',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            146 =>
            array(
                'id' => 147,
                'wilayas_id' => 5,
                'name' => 'Foum Toub',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            147 =>
            array(
                'id' => 148,
                'wilayas_id' => 5,
                'name' => 'Beni Foudhala El Hakania',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            148 =>
            array(
                'id' => 149,
                'wilayas_id' => 5,
                'name' => 'Oued El Ma',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            149 =>
            array(
                'id' => 150,
                'wilayas_id' => 5,
                'name' => 'Talkhamt',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            150 =>
            array(
                'id' => 151,
                'wilayas_id' => 5,
                'name' => 'Bouzina',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            151 =>
            array(
                'id' => 152,
                'wilayas_id' => 5,
                'name' => 'Chemora',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            152 =>
            array(
                'id' => 153,
                'wilayas_id' => 5,
                'name' => 'Oued Chaaba',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            153 =>
            array(
                'id' => 154,
                'wilayas_id' => 5,
                'name' => 'Taxlent',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            154 =>
            array(
                'id' => 155,
                'wilayas_id' => 5,
                'name' => 'Gosbat',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            155 =>
            array(
                'id' => 156,
                'wilayas_id' => 5,
                'name' => 'Ouled Aouf',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            156 =>
            array(
                'id' => 157,
                'wilayas_id' => 5,
                'name' => 'Boumagueur',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            157 =>
            array(
                'id' => 158,
                'wilayas_id' => 5,
                'name' => 'Barika',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            158 =>
            array(
                'id' => 159,
                'wilayas_id' => 5,
                'name' => 'Djezzar',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            159 =>
            array(
                'id' => 160,
                'wilayas_id' => 5,
                'name' => 'Tkout',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            160 =>
            array(
                'id' => 161,
                'wilayas_id' => 5,
                'name' => 'Ain Touta',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            161 =>
            array(
                'id' => 162,
                'wilayas_id' => 5,
                'name' => 'Hidoussa',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            162 =>
            array(
                'id' => 163,
                'wilayas_id' => 5,
                'name' => 'Teniet El Abed',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            163 =>
            array(
                'id' => 164,
                'wilayas_id' => 5,
                'name' => 'Oued Taga',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            164 =>
            array(
                'id' => 165,
                'wilayas_id' => 5,
                'name' => 'Ouled Fadel',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            165 =>
            array(
                'id' => 166,
                'wilayas_id' => 5,
                'name' => 'Timgad',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            166 =>
            array(
                'id' => 167,
                'wilayas_id' => 5,
                'name' => 'Ras El Aioun',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            167 =>
            array(
                'id' => 168,
                'wilayas_id' => 5,
                'name' => 'Chir',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            168 =>
            array(
                'id' => 169,
                'wilayas_id' => 5,
                'name' => 'Ouled Si Slimane',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            169 =>
            array(
                'id' => 170,
                'wilayas_id' => 5,
                'name' => 'Zanat El Beida',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            170 =>
            array(
                'id' => 171,
                'wilayas_id' => 5,
                'name' => 'M\'doukel',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            171 =>
            array(
                'id' => 172,
                'wilayas_id' => 5,
                'name' => 'Ouled Ammar',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            172 =>
            array(
                'id' => 173,
                'wilayas_id' => 5,
                'name' => 'El Hassi',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            173 =>
            array(
                'id' => 174,
                'wilayas_id' => 5,
                'name' => 'Lazrou',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            174 =>
            array(
                'id' => 175,
                'wilayas_id' => 5,
                'name' => 'Boumia',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            175 =>
            array(
                'id' => 176,
                'wilayas_id' => 5,
                'name' => 'Boulhilat',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            176 =>
            array(
                'id' => 177,
                'wilayas_id' => 5,
                'name' => 'Larbaa',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            177 =>
            array(
                'id' => 178,
                'wilayas_id' => 6,
                'name' => 'Bejaia',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            178 =>
            array(
                'id' => 179,
                'wilayas_id' => 6,
                'name' => 'Amizour',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            179 =>
            array(
                'id' => 180,
                'wilayas_id' => 6,
                'name' => 'Ferraoun',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            180 =>
            array(
                'id' => 181,
                'wilayas_id' => 6,
                'name' => 'Taourirt Ighil',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            181 =>
            array(
                'id' => 182,
                'wilayas_id' => 6,
                'name' => 'Chelata',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            182 =>
            array(
                'id' => 183,
                'wilayas_id' => 6,
                'name' => 'Tamokra',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            183 =>
            array(
                'id' => 184,
                'wilayas_id' => 6,
                'name' => 'Timzrit',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            184 =>
            array(
                'id' => 185,
                'wilayas_id' => 6,
                'name' => 'Souk El Thenine',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            185 =>
            array(
                'id' => 186,
                'wilayas_id' => 6,
                'name' => 'M\'cisna',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            186 =>
            array(
                'id' => 187,
                'wilayas_id' => 6,
                'name' => 'Thinabdher',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            187 =>
            array(
                'id' => 188,
                'wilayas_id' => 6,
                'name' => 'Tichi',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            188 =>
            array(
                'id' => 189,
                'wilayas_id' => 6,
                'name' => 'Semaoun',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            189 =>
            array(
                'id' => 190,
                'wilayas_id' => 6,
                'name' => 'Kendira',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            190 =>
            array(
                'id' => 191,
                'wilayas_id' => 6,
                'name' => 'Tifra',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            191 =>
            array(
                'id' => 192,
                'wilayas_id' => 6,
                'name' => 'Ighram',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            192 =>
            array(
                'id' => 193,
                'wilayas_id' => 6,
                'name' => 'Amalou',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            193 =>
            array(
                'id' => 194,
                'wilayas_id' => 6,
                'name' => 'Ighil Ali',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            194 =>
            array(
                'id' => 195,
                'wilayas_id' => 6,
                'name' => 'Ifelain Ilmathen',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            195 =>
            array(
                'id' => 196,
                'wilayas_id' => 6,
                'name' => 'Toudja',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            196 =>
            array(
                'id' => 197,
                'wilayas_id' => 6,
                'name' => 'Darguina',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            197 =>
            array(
                'id' => 198,
                'wilayas_id' => 6,
                'name' => 'Sidi Ayad',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            198 =>
            array(
                'id' => 199,
                'wilayas_id' => 6,
                'name' => 'Aokas',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            199 =>
            array(
                'id' => 200,
                'wilayas_id' => 6,
                'name' => 'Ait Djellil',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            200 =>
            array(
                'id' => 201,
                'wilayas_id' => 6,
                'name' => 'Adekar',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            201 =>
            array(
                'id' => 202,
                'wilayas_id' => 6,
                'name' => 'Akbou',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            202 =>
            array(
                'id' => 203,
                'wilayas_id' => 6,
                'name' => 'Seddouk',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            203 =>
            array(
                'id' => 204,
                'wilayas_id' => 6,
                'name' => 'Tazmalt',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            204 =>
            array(
                'id' => 205,
                'wilayas_id' => 6,
                'name' => 'Ait R\'zine',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            205 =>
            array(
                'id' => 206,
                'wilayas_id' => 6,
                'name' => 'Chemini',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            206 =>
            array(
                'id' => 207,
                'wilayas_id' => 6,
                'name' => 'Souk Oufella',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            207 =>
            array(
                'id' => 208,
                'wilayas_id' => 6,
                'name' => 'Taskriout',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            208 =>
            array(
                'id' => 209,
                'wilayas_id' => 6,
                'name' => 'Tibane',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            209 =>
            array(
                'id' => 210,
                'wilayas_id' => 6,
                'name' => 'Tala Hamza',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            210 =>
            array(
                'id' => 211,
                'wilayas_id' => 6,
                'name' => 'Barbacha',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            211 =>
            array(
                'id' => 212,
                'wilayas_id' => 6,
                'name' => 'Beni Ksila',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            212 =>
            array(
                'id' => 213,
                'wilayas_id' => 6,
                'name' => 'Ouzallaguen',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            213 =>
            array(
                'id' => 214,
                'wilayas_id' => 6,
                'name' => 'Bouhamza',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            214 =>
            array(
                'id' => 215,
                'wilayas_id' => 6,
                'name' => 'Beni Melikeche',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            215 =>
            array(
                'id' => 216,
                'wilayas_id' => 6,
                'name' => 'Sidi Aich',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            216 =>
            array(
                'id' => 217,
                'wilayas_id' => 6,
                'name' => 'El Kseur',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            217 =>
            array(
                'id' => 218,
                'wilayas_id' => 6,
                'name' => 'Melbou',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            218 =>
            array(
                'id' => 219,
                'wilayas_id' => 6,
                'name' => 'Akfadou',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            219 =>
            array(
                'id' => 220,
                'wilayas_id' => 6,
                'name' => 'Leflaye',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            220 =>
            array(
                'id' => 221,
                'wilayas_id' => 6,
                'name' => 'Kherrata',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            221 =>
            array(
                'id' => 222,
                'wilayas_id' => 6,
                'name' => 'Draa Kaid',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            222 =>
            array(
                'id' => 223,
                'wilayas_id' => 6,
                'name' => 'Tamridjet',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            223 =>
            array(
                'id' => 224,
                'wilayas_id' => 6,
                'name' => 'Ait Smail',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            224 =>
            array(
                'id' => 225,
                'wilayas_id' => 6,
                'name' => 'Boukhelifa',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            225 =>
            array(
                'id' => 226,
                'wilayas_id' => 6,
                'name' => 'Tizi N\'berber',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            226 =>
            array(
                'id' => 227,
                'wilayas_id' => 6,
                'name' => 'Beni Maouch',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            227 =>
            array(
                'id' => 228,
                'wilayas_id' => 6,
                'name' => 'Oued Ghir',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            228 =>
            array(
                'id' => 229,
                'wilayas_id' => 6,
                'name' => 'Boudjellil',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            229 =>
            array(
                'id' => 230,
                'wilayas_id' => 7,
                'name' => 'Biskra',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            230 =>
            array(
                'id' => 231,
                'wilayas_id' => 7,
                'name' => 'Oumache',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            231 =>
            array(
                'id' => 232,
                'wilayas_id' => 7,
                'name' => 'Branis',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            232 =>
            array(
                'id' => 233,
                'wilayas_id' => 7,
                'name' => 'Chetma',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            233 =>
            array(
                'id' => 234,
                'wilayas_id' => 7,
                'name' => 'Ouled Djellal',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            234 =>
            array(
                'id' => 235,
                'wilayas_id' => 7,
                'name' => 'Ras El Miaad',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            235 =>
            array(
                'id' => 236,
                'wilayas_id' => 7,
                'name' => 'Besbes',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            236 =>
            array(
                'id' => 237,
                'wilayas_id' => 7,
                'name' => 'Sidi Khaled',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            237 =>
            array(
                'id' => 238,
                'wilayas_id' => 7,
                'name' => 'Doucen',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            238 =>
            array(
                'id' => 239,
                'wilayas_id' => 7,
                'name' => 'Ech Chaiba',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            239 =>
            array(
                'id' => 240,
                'wilayas_id' => 7,
                'name' => 'Sidi Okba',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            240 =>
            array(
                'id' => 241,
                'wilayas_id' => 7,
                'name' => 'Mchouneche',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            241 =>
            array(
                'id' => 242,
                'wilayas_id' => 7,
                'name' => 'El Haouch',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            242 =>
            array(
                'id' => 243,
                'wilayas_id' => 7,
                'name' => 'Ain Naga',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            243 =>
            array(
                'id' => 244,
                'wilayas_id' => 7,
                'name' => 'Zeribet El Oued',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            244 =>
            array(
                'id' => 245,
                'wilayas_id' => 7,
                'name' => 'El Feidh',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            245 =>
            array(
                'id' => 246,
                'wilayas_id' => 7,
                'name' => 'El Kantara',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            246 =>
            array(
                'id' => 247,
                'wilayas_id' => 7,
                'name' => 'Ain Zaatout',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            247 =>
            array(
                'id' => 248,
                'wilayas_id' => 7,
                'name' => 'El Outaya',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            248 =>
            array(
                'id' => 249,
                'wilayas_id' => 7,
                'name' => 'Djemorah',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            249 =>
            array(
                'id' => 250,
                'wilayas_id' => 7,
                'name' => 'Tolga',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            250 =>
            array(
                'id' => 251,
                'wilayas_id' => 7,
                'name' => 'Lioua',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            251 =>
            array(
                'id' => 252,
                'wilayas_id' => 7,
                'name' => 'Lichana',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            252 =>
            array(
                'id' => 253,
                'wilayas_id' => 7,
                'name' => 'Ourlal',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            253 =>
            array(
                'id' => 254,
                'wilayas_id' => 7,
                'name' => 'M\'lili',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            254 =>
            array(
                'id' => 255,
                'wilayas_id' => 7,
                'name' => 'Foughala',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            255 =>
            array(
                'id' => 256,
                'wilayas_id' => 7,
                'name' => 'Bordj Ben Azzouz',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            256 =>
            array(
                'id' => 257,
                'wilayas_id' => 7,
                'name' => 'M\'ziraa',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            257 =>
            array(
                'id' => 258,
                'wilayas_id' => 7,
                'name' => 'Bouchagroun',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            258 =>
            array(
                'id' => 259,
                'wilayas_id' => 7,
                'name' => 'Mekhadma',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            259 =>
            array(
                'id' => 260,
                'wilayas_id' => 7,
                'name' => 'El Ghrous',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            260 =>
            array(
                'id' => 261,
                'wilayas_id' => 7,
                'name' => 'El Hadjab',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            261 =>
            array(
                'id' => 262,
                'wilayas_id' => 7,
                'name' => 'Khanguet Sidinadji',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            262 =>
            array(
                'id' => 263,
                'wilayas_id' => 8,
                'name' => 'Bechar',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            263 =>
            array(
                'id' => 264,
                'wilayas_id' => 8,
                'name' => 'Erg Ferradj',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            264 =>
            array(
                'id' => 265,
                'wilayas_id' => 8,
                'name' => 'Ouled Khoudir',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            265 =>
            array(
                'id' => 266,
                'wilayas_id' => 8,
                'name' => 'Meridja',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            266 =>
            array(
                'id' => 267,
                'wilayas_id' => 8,
                'name' => 'Timoudi',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            267 =>
            array(
                'id' => 268,
                'wilayas_id' => 8,
                'name' => 'Lahmar',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            268 =>
            array(
                'id' => 269,
                'wilayas_id' => 8,
                'name' => 'Beni Abbes',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            269 =>
            array(
                'id' => 270,
                'wilayas_id' => 8,
                'name' => 'Beni Ikhlef',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            270 =>
            array(
                'id' => 271,
                'wilayas_id' => 8,
                'name' => 'Mechraa Houari Boumedienne',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            271 =>
            array(
                'id' => 272,
                'wilayas_id' => 8,
                'name' => 'Kenedsa',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            272 =>
            array(
                'id' => 273,
                'wilayas_id' => 8,
                'name' => 'Igli',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            273 =>
            array(
                'id' => 274,
                'wilayas_id' => 8,
                'name' => 'Tabalbala',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            274 =>
            array(
                'id' => 275,
                'wilayas_id' => 8,
                'name' => 'Taghit',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            275 =>
            array(
                'id' => 276,
                'wilayas_id' => 8,
                'name' => 'El Ouata',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            276 =>
            array(
                'id' => 277,
                'wilayas_id' => 8,
                'name' => 'Boukais',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            277 =>
            array(
                'id' => 278,
                'wilayas_id' => 8,
                'name' => 'Mogheul',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            278 =>
            array(
                'id' => 279,
                'wilayas_id' => 8,
                'name' => 'Abadla',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            279 =>
            array(
                'id' => 280,
                'wilayas_id' => 8,
                'name' => 'Kerzaz',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            280 =>
            array(
                'id' => 281,
                'wilayas_id' => 8,
                'name' => 'Ksabi',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            281 =>
            array(
                'id' => 282,
                'wilayas_id' => 8,
                'name' => 'Tamtert',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            282 =>
            array(
                'id' => 283,
                'wilayas_id' => 8,
                'name' => 'Beni Ounif',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            283 =>
            array(
                'id' => 284,
                'wilayas_id' => 9,
                'name' => 'Blida',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            284 =>
            array(
                'id' => 285,
                'wilayas_id' => 9,
                'name' => 'Chebli',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            285 =>
            array(
                'id' => 286,
                'wilayas_id' => 9,
                'name' => 'Bouinan',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            286 =>
            array(
                'id' => 287,
                'wilayas_id' => 9,
                'name' => 'Oued El Alleug',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            287 =>
            array(
                'id' => 288,
                'wilayas_id' => 9,
                'name' => 'Ouled Yaich',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            288 =>
            array(
                'id' => 289,
                'wilayas_id' => 9,
                'name' => 'Chrea',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            289 =>
            array(
                'id' => 290,
                'wilayas_id' => 9,
                'name' => 'El Affroun',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            290 =>
            array(
                'id' => 291,
                'wilayas_id' => 9,
                'name' => 'Chiffa',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            291 =>
            array(
                'id' => 292,
                'wilayas_id' => 9,
                'name' => 'Hammam Melouane',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            292 =>
            array(
                'id' => 293,
                'wilayas_id' => 9,
                'name' => 'Ben Khlil',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            293 =>
            array(
                'id' => 294,
                'wilayas_id' => 9,
                'name' => 'Soumaa',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            294 =>
            array(
                'id' => 295,
                'wilayas_id' => 9,
                'name' => 'Mouzaia',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            295 =>
            array(
                'id' => 296,
                'wilayas_id' => 9,
                'name' => 'Souhane',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            296 =>
            array(
                'id' => 297,
                'wilayas_id' => 9,
                'name' => 'Meftah',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            297 =>
            array(
                'id' => 298,
                'wilayas_id' => 9,
                'name' => 'Ouled Selama',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            298 =>
            array(
                'id' => 299,
                'wilayas_id' => 9,
                'name' => 'Boufarik',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            299 =>
            array(
                'id' => 300,
                'wilayas_id' => 9,
                'name' => 'Larbaa',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            300 =>
            array(
                'id' => 301,
                'wilayas_id' => 9,
                'name' => 'Oued Djer',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            301 =>
            array(
                'id' => 302,
                'wilayas_id' => 9,
                'name' => 'Beni Tamou',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            302 =>
            array(
                'id' => 303,
                'wilayas_id' => 9,
                'name' => 'Bouarfa',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            303 =>
            array(
                'id' => 304,
                'wilayas_id' => 9,
                'name' => 'Beni Mered',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            304 =>
            array(
                'id' => 305,
                'wilayas_id' => 9,
                'name' => 'Bougara',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            305 =>
            array(
                'id' => 306,
                'wilayas_id' => 9,
                'name' => 'Guerrouaou',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            306 =>
            array(
                'id' => 307,
                'wilayas_id' => 9,
                'name' => 'Ain Romana',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            307 =>
            array(
                'id' => 308,
                'wilayas_id' => 9,
                'name' => 'Djebabra',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            308 =>
            array(
                'id' => 309,
                'wilayas_id' => 10,
                'name' => 'Bouira',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            309 =>
            array(
                'id' => 310,
                'wilayas_id' => 10,
                'name' => 'El Asnam',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            310 =>
            array(
                'id' => 311,
                'wilayas_id' => 10,
                'name' => 'Guerrouma',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            311 =>
            array(
                'id' => 312,
                'wilayas_id' => 10,
                'name' => 'Souk El Khemis',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            312 =>
            array(
                'id' => 313,
                'wilayas_id' => 10,
                'name' => 'Kadiria',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            313 =>
            array(
                'id' => 314,
                'wilayas_id' => 10,
                'name' => 'Hanif',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            314 =>
            array(
                'id' => 315,
                'wilayas_id' => 10,
                'name' => 'Dirah',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            315 =>
            array(
                'id' => 316,
                'wilayas_id' => 10,
                'name' => 'Ait Laaziz',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            316 =>
            array(
                'id' => 317,
                'wilayas_id' => 10,
                'name' => 'Taghzout',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            317 =>
            array(
                'id' => 318,
                'wilayas_id' => 10,
                'name' => 'Raouraoua',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            318 =>
            array(
                'id' => 319,
                'wilayas_id' => 10,
                'name' => 'Mezdour',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            319 =>
            array(
                'id' => 320,
                'wilayas_id' => 10,
                'name' => 'Haizer',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            320 =>
            array(
                'id' => 321,
                'wilayas_id' => 10,
                'name' => 'Lakhdaria',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            321 =>
            array(
                'id' => 322,
                'wilayas_id' => 10,
                'name' => 'Maala',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            322 =>
            array(
                'id' => 323,
                'wilayas_id' => 10,
                'name' => 'El Hachimia',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            323 =>
            array(
                'id' => 324,
                'wilayas_id' => 10,
                'name' => 'Aomar',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            324 =>
            array(
                'id' => 325,
                'wilayas_id' => 10,
                'name' => 'Chorfa',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            325 =>
            array(
                'id' => 326,
                'wilayas_id' => 10,
                'name' => 'Bordj Oukhriss',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            326 =>
            array(
                'id' => 327,
                'wilayas_id' => 10,
                'name' => 'El Adjiba',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            327 =>
            array(
                'id' => 328,
                'wilayas_id' => 10,
                'name' => 'El Hakimia',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            328 =>
            array(
                'id' => 329,
                'wilayas_id' => 10,
                'name' => 'El Khebouzia',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            329 =>
            array(
                'id' => 330,
                'wilayas_id' => 10,
                'name' => 'Ahl El Ksar',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            330 =>
            array(
                'id' => 331,
                'wilayas_id' => 10,
                'name' => 'Bouderbala',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            331 =>
            array(
                'id' => 332,
                'wilayas_id' => 10,
                'name' => 'Zbarbar',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            332 =>
            array(
                'id' => 333,
                'wilayas_id' => 10,
                'name' => 'Ain El Hadjar',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            333 =>
            array(
                'id' => 334,
                'wilayas_id' => 10,
                'name' => 'Djebahia',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            334 =>
            array(
                'id' => 335,
                'wilayas_id' => 10,
                'name' => 'Aghbalou',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            335 =>
            array(
                'id' => 336,
                'wilayas_id' => 10,
                'name' => 'Taguedit',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            336 =>
            array(
                'id' => 337,
                'wilayas_id' => 10,
                'name' => 'Ain Turk',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            337 =>
            array(
                'id' => 338,
                'wilayas_id' => 10,
                'name' => 'Saharidj',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            338 =>
            array(
                'id' => 339,
                'wilayas_id' => 10,
                'name' => 'Dechmia',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            339 =>
            array(
                'id' => 340,
                'wilayas_id' => 10,
                'name' => 'Ridane',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            340 =>
            array(
                'id' => 341,
                'wilayas_id' => 10,
                'name' => 'Bechloul',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            341 =>
            array(
                'id' => 342,
                'wilayas_id' => 10,
                'name' => 'Boukram',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            342 =>
            array(
                'id' => 343,
                'wilayas_id' => 10,
                'name' => 'Ain Bessam',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            343 =>
            array(
                'id' => 344,
                'wilayas_id' => 10,
                'name' => 'Bir Ghbalou',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            344 =>
            array(
                'id' => 345,
                'wilayas_id' => 10,
                'name' => 'Mchedallah',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            345 =>
            array(
                'id' => 346,
                'wilayas_id' => 10,
                'name' => 'Sour El Ghozlane',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            346 =>
            array(
                'id' => 347,
                'wilayas_id' => 10,
                'name' => 'Maamora',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            347 =>
            array(
                'id' => 348,
                'wilayas_id' => 10,
                'name' => 'Ouled Rached',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            348 =>
            array(
                'id' => 349,
                'wilayas_id' => 10,
                'name' => 'Ain Laloui',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            349 =>
            array(
                'id' => 350,
                'wilayas_id' => 10,
                'name' => 'Hadjera Zerga',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            350 =>
            array(
                'id' => 351,
                'wilayas_id' => 10,
                'name' => 'Ath Mansour',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            351 =>
            array(
                'id' => 352,
                'wilayas_id' => 10,
                'name' => 'El Mokrani',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            352 =>
            array(
                'id' => 353,
                'wilayas_id' => 10,
                'name' => 'Oued El Berdi',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            353 =>
            array(
                'id' => 354,
                'wilayas_id' => 11,
                'name' => 'Tamanghasset',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            354 =>
            array(
                'id' => 355,
                'wilayas_id' => 11,
                'name' => 'Abalessa',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            355 =>
            array(
                'id' => 356,
                'wilayas_id' => 11,
                'name' => 'In Ghar',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            356 =>
            array(
                'id' => 357,
                'wilayas_id' => 11,
                'name' => 'In Guezzam',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            357 =>
            array(
                'id' => 358,
                'wilayas_id' => 11,
                'name' => 'Idles',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            358 =>
            array(
                'id' => 359,
                'wilayas_id' => 11,
                'name' => 'Tazouk',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            359 =>
            array(
                'id' => 360,
                'wilayas_id' => 11,
                'name' => 'Tinzaouatine',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            360 =>
            array(
                'id' => 361,
                'wilayas_id' => 11,
                'name' => 'In Salah',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            361 =>
            array(
                'id' => 362,
                'wilayas_id' => 11,
                'name' => 'In Amguel',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            362 =>
            array(
                'id' => 363,
                'wilayas_id' => 11,
                'name' => 'Foggaret Ezzaouia',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            363 =>
            array(
                'id' => 364,
                'wilayas_id' => 12,
                'name' => 'Tebessa',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            364 =>
            array(
                'id' => 365,
                'wilayas_id' => 12,
                'name' => 'Bir El Ater',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            365 =>
            array(
                'id' => 366,
                'wilayas_id' => 12,
                'name' => 'Cheria',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            366 =>
            array(
                'id' => 367,
                'wilayas_id' => 12,
                'name' => 'Stah Guentis',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            367 =>
            array(
                'id' => 368,
                'wilayas_id' => 12,
                'name' => 'El Aouinet',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            368 =>
            array(
                'id' => 369,
                'wilayas_id' => 12,
                'name' => 'Lahouidjbet',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            369 =>
            array(
                'id' => 370,
                'wilayas_id' => 12,
                'name' => 'Safsaf El Ouesra',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            370 =>
            array(
                'id' => 371,
                'wilayas_id' => 12,
                'name' => 'Hammamet',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            371 =>
            array(
                'id' => 372,
                'wilayas_id' => 12,
                'name' => 'Negrine',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            372 =>
            array(
                'id' => 373,
                'wilayas_id' => 12,
                'name' => 'Bir El Mokadem',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            373 =>
            array(
                'id' => 374,
                'wilayas_id' => 12,
                'name' => 'El Kouif',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            374 =>
            array(
                'id' => 375,
                'wilayas_id' => 12,
                'name' => 'Morsott',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            375 =>
            array(
                'id' => 376,
                'wilayas_id' => 12,
                'name' => 'El Ogla',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            376 =>
            array(
                'id' => 377,
                'wilayas_id' => 12,
                'name' => 'Bir Dheb',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            377 =>
            array(
                'id' => 378,
                'wilayas_id' => 12,
                'name' => 'El Ogla',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            378 =>
            array(
                'id' => 379,
                'wilayas_id' => 12,
                'name' => 'Gorriguer',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            379 =>
            array(
                'id' => 380,
                'wilayas_id' => 12,
                'name' => 'Bekkaria',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            380 =>
            array(
                'id' => 381,
                'wilayas_id' => 12,
                'name' => 'Boukhadra',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            381 =>
            array(
                'id' => 382,
                'wilayas_id' => 12,
                'name' => 'Ouenza',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            382 =>
            array(
                'id' => 383,
                'wilayas_id' => 12,
                'name' => 'El Ma El Biodh',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            383 =>
            array(
                'id' => 384,
                'wilayas_id' => 12,
                'name' => 'Oum Ali',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            384 =>
            array(
                'id' => 385,
                'wilayas_id' => 12,
                'name' => 'Tlidjene',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            385 =>
            array(
                'id' => 386,
                'wilayas_id' => 12,
                'name' => 'Ain Zerga',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            386 =>
            array(
                'id' => 387,
                'wilayas_id' => 12,
                'name' => 'El Meridj',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            387 =>
            array(
                'id' => 388,
                'wilayas_id' => 12,
                'name' => 'Boulhaf Dyr',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            388 =>
            array(
                'id' => 389,
                'wilayas_id' => 12,
                'name' => 'Bedjene',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            389 =>
            array(
                'id' => 390,
                'wilayas_id' => 12,
                'name' => 'El Mazeraa',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            390 =>
            array(
                'id' => 391,
                'wilayas_id' => 12,
                'name' => 'Ferkane',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            391 =>
            array(
                'id' => 392,
                'wilayas_id' => 13,
                'name' => 'Tlemcen',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            392 =>
            array(
                'id' => 393,
                'wilayas_id' => 13,
                'name' => 'Beni Mester',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            393 =>
            array(
                'id' => 394,
                'wilayas_id' => 13,
                'name' => 'Ain Tallout',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            394 =>
            array(
                'id' => 395,
                'wilayas_id' => 13,
                'name' => 'Remchi',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            395 =>
            array(
                'id' => 396,
                'wilayas_id' => 13,
                'name' => 'El Fehoul',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            396 =>
            array(
                'id' => 397,
                'wilayas_id' => 13,
                'name' => 'Sabra',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            397 =>
            array(
                'id' => 398,
                'wilayas_id' => 13,
                'name' => 'Ghazaouet',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            398 =>
            array(
                'id' => 399,
                'wilayas_id' => 13,
                'name' => 'Souani',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            399 =>
            array(
                'id' => 400,
                'wilayas_id' => 13,
                'name' => 'Djebala',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            400 =>
            array(
                'id' => 401,
                'wilayas_id' => 13,
                'name' => 'El Gor',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            401 =>
            array(
                'id' => 402,
                'wilayas_id' => 13,
                'name' => 'Oued Chouly',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            402 =>
            array(
                'id' => 403,
                'wilayas_id' => 13,
                'name' => 'Ain Fezza',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            403 =>
            array(
                'id' => 404,
                'wilayas_id' => 13,
                'name' => 'Ouled Mimoun',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            404 =>
            array(
                'id' => 405,
                'wilayas_id' => 13,
                'name' => 'Amieur',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            405 =>
            array(
                'id' => 406,
                'wilayas_id' => 13,
                'name' => 'Ain Youcef',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            406 =>
            array(
                'id' => 407,
                'wilayas_id' => 13,
                'name' => 'Zenata',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            407 =>
            array(
                'id' => 408,
                'wilayas_id' => 13,
                'name' => 'Beni Snous',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            408 =>
            array(
                'id' => 409,
                'wilayas_id' => 13,
                'name' => 'Bab El Assa',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            409 =>
            array(
                'id' => 410,
                'wilayas_id' => 13,
                'name' => 'Dar Yaghmouracene',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            410 =>
            array(
                'id' => 411,
                'wilayas_id' => 13,
                'name' => 'Fellaoucene',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            411 =>
            array(
                'id' => 412,
                'wilayas_id' => 13,
                'name' => 'Azails',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            412 =>
            array(
                'id' => 413,
                'wilayas_id' => 13,
                'name' => 'Sebbaa Chioukh',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            413 =>
            array(
                'id' => 414,
                'wilayas_id' => 13,
                'name' => 'Terni Beni Hediel',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            414 =>
            array(
                'id' => 415,
                'wilayas_id' => 13,
                'name' => 'Bensekrane',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            415 =>
            array(
                'id' => 416,
                'wilayas_id' => 13,
                'name' => 'Ain Nehala',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            416 =>
            array(
                'id' => 417,
                'wilayas_id' => 13,
                'name' => 'Hennaya',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            417 =>
            array(
                'id' => 418,
                'wilayas_id' => 13,
                'name' => 'Maghnia',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            418 =>
            array(
                'id' => 419,
                'wilayas_id' => 13,
                'name' => 'Hammam Boughrara',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            419 =>
            array(
                'id' => 420,
                'wilayas_id' => 13,
                'name' => 'Souahlia',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            420 =>
            array(
                'id' => 421,
                'wilayas_id' => 13,
                'name' => 'Msirda Fouaga',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            421 =>
            array(
                'id' => 422,
                'wilayas_id' => 13,
                'name' => 'Ain Fetah',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            422 =>
            array(
                'id' => 423,
                'wilayas_id' => 13,
                'name' => 'El Aricha',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            423 =>
            array(
                'id' => 424,
                'wilayas_id' => 13,
                'name' => 'Souk Thlata',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            424 =>
            array(
                'id' => 425,
                'wilayas_id' => 13,
                'name' => 'Sidi Abdelli',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            425 =>
            array(
                'id' => 426,
                'wilayas_id' => 13,
                'name' => 'Sebdou',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            426 =>
            array(
                'id' => 427,
                'wilayas_id' => 13,
                'name' => 'Beni Ouarsous',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            427 =>
            array(
                'id' => 428,
                'wilayas_id' => 13,
                'name' => 'Sidi Medjahed',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            428 =>
            array(
                'id' => 429,
                'wilayas_id' => 13,
                'name' => 'Beni Boussaid',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            429 =>
            array(
                'id' => 430,
                'wilayas_id' => 13,
                'name' => 'Marsa Ben Mhidi',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            430 =>
            array(
                'id' => 431,
                'wilayas_id' => 13,
                'name' => 'Nedroma',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            431 =>
            array(
                'id' => 432,
                'wilayas_id' => 13,
                'name' => 'Sidi Djillali',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            432 =>
            array(
                'id' => 433,
                'wilayas_id' => 13,
                'name' => 'Beni Bahdel',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            433 =>
            array(
                'id' => 434,
                'wilayas_id' => 13,
                'name' => 'El Bouihi',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            434 =>
            array(
                'id' => 435,
                'wilayas_id' => 13,
                'name' => 'Honaine',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            435 =>
            array(
                'id' => 436,
                'wilayas_id' => 13,
                'name' => 'Tianet',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            436 =>
            array(
                'id' => 437,
                'wilayas_id' => 13,
                'name' => 'Ouled Riyah',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            437 =>
            array(
                'id' => 438,
                'wilayas_id' => 13,
                'name' => 'Bouhlou',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            438 =>
            array(
                'id' => 439,
                'wilayas_id' => 13,
                'name' => 'Souk El Khemis',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            439 =>
            array(
                'id' => 440,
                'wilayas_id' => 13,
                'name' => 'Ain Ghoraba',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            440 =>
            array(
                'id' => 441,
                'wilayas_id' => 13,
                'name' => 'Chetouane',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            441 =>
            array(
                'id' => 442,
                'wilayas_id' => 13,
                'name' => 'Mansourah',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            442 =>
            array(
                'id' => 443,
                'wilayas_id' => 13,
                'name' => 'Beni Semiel',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            443 =>
            array(
                'id' => 444,
                'wilayas_id' => 13,
                'name' => 'Ain Kebira',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            444 =>
            array(
                'id' => 445,
                'wilayas_id' => 14,
                'name' => 'Tiaret',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            445 =>
            array(
                'id' => 446,
                'wilayas_id' => 14,
                'name' => 'Medroussa',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            446 =>
            array(
                'id' => 447,
                'wilayas_id' => 14,
                'name' => 'Ain Bouchekif',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            447 =>
            array(
                'id' => 448,
                'wilayas_id' => 14,
                'name' => 'Sidi Ali Mellal',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            448 =>
            array(
                'id' => 449,
                'wilayas_id' => 14,
                'name' => 'Ain Zarit',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            449 =>
            array(
                'id' => 450,
                'wilayas_id' => 14,
                'name' => 'Ain Deheb',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            450 =>
            array(
                'id' => 451,
                'wilayas_id' => 14,
                'name' => 'Sidi Bakhti',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            451 =>
            array(
                'id' => 452,
                'wilayas_id' => 14,
                'name' => 'Medrissa',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            452 =>
            array(
                'id' => 453,
                'wilayas_id' => 14,
                'name' => 'Zmalet El Emir Aek',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            453 =>
            array(
                'id' => 454,
                'wilayas_id' => 14,
                'name' => 'Madna',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            454 =>
            array(
                'id' => 455,
                'wilayas_id' => 14,
                'name' => 'Sebt',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            455 =>
            array(
                'id' => 456,
                'wilayas_id' => 14,
                'name' => 'Mellakou',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            456 =>
            array(
                'id' => 457,
                'wilayas_id' => 14,
                'name' => 'Dahmouni',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            457 =>
            array(
                'id' => 458,
                'wilayas_id' => 14,
                'name' => 'Rahouia',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            458 =>
            array(
                'id' => 459,
                'wilayas_id' => 14,
                'name' => 'Mahdia',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            459 =>
            array(
                'id' => 460,
                'wilayas_id' => 14,
                'name' => 'Sougueur',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            460 =>
            array(
                'id' => 461,
                'wilayas_id' => 14,
                'name' => 'Sidi Abdelghani',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            461 =>
            array(
                'id' => 462,
                'wilayas_id' => 14,
                'name' => 'Ain El Hadid',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            462 =>
            array(
                'id' => 463,
                'wilayas_id' => 14,
                'name' => 'Ouled Djerad',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            463 =>
            array(
                'id' => 464,
                'wilayas_id' => 14,
                'name' => 'Naima',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            464 =>
            array(
                'id' => 465,
                'wilayas_id' => 14,
                'name' => 'Meghila',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            465 =>
            array(
                'id' => 466,
                'wilayas_id' => 14,
                'name' => 'Guertoufa',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            466 =>
            array(
                'id' => 467,
                'wilayas_id' => 14,
                'name' => 'Sidi Hosni',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            467 =>
            array(
                'id' => 468,
                'wilayas_id' => 14,
                'name' => 'Djillali Ben Amar',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            468 =>
            array(
                'id' => 469,
                'wilayas_id' => 14,
                'name' => 'Sebaine',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            469 =>
            array(
                'id' => 470,
                'wilayas_id' => 14,
                'name' => 'Tousnina',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            470 =>
            array(
                'id' => 471,
                'wilayas_id' => 14,
                'name' => 'Frenda',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            471 =>
            array(
                'id' => 472,
                'wilayas_id' => 14,
                'name' => 'Ain Kermes',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            472 =>
            array(
                'id' => 473,
                'wilayas_id' => 14,
                'name' => 'Ksar Chellala',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            473 =>
            array(
                'id' => 474,
                'wilayas_id' => 14,
                'name' => 'Rechaiga',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            474 =>
            array(
                'id' => 475,
                'wilayas_id' => 14,
                'name' => 'Nadorah',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            475 =>
            array(
                'id' => 476,
                'wilayas_id' => 14,
                'name' => 'Tagdemt',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            476 =>
            array(
                'id' => 477,
                'wilayas_id' => 14,
                'name' => 'Oued Lilli',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            477 =>
            array(
                'id' => 478,
                'wilayas_id' => 14,
                'name' => 'Mechraa Safa',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            478 =>
            array(
                'id' => 479,
                'wilayas_id' => 14,
                'name' => 'Hamadia',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            479 =>
            array(
                'id' => 480,
                'wilayas_id' => 14,
                'name' => 'Chehaima',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            480 =>
            array(
                'id' => 481,
                'wilayas_id' => 14,
                'name' => 'Takhemaret',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            481 =>
            array(
                'id' => 482,
                'wilayas_id' => 14,
                'name' => 'Sidi Abderrahmane',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            482 =>
            array(
                'id' => 483,
                'wilayas_id' => 14,
                'name' => 'Serghine',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            483 =>
            array(
                'id' => 484,
                'wilayas_id' => 14,
                'name' => 'Bougara',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            484 =>
            array(
                'id' => 485,
                'wilayas_id' => 14,
                'name' => 'Faidja',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            485 =>
            array(
                'id' => 486,
                'wilayas_id' => 14,
                'name' => 'Tidda',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            486 =>
            array(
                'id' => 487,
                'wilayas_id' => 15,
                'name' => 'Tizi Ouzou',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            487 =>
            array(
                'id' => 488,
                'wilayas_id' => 15,
                'name' => 'Ain El Hammam',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            488 =>
            array(
                'id' => 489,
                'wilayas_id' => 15,
                'name' => 'Akbil',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            489 =>
            array(
                'id' => 490,
                'wilayas_id' => 15,
                'name' => 'Freha',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            490 =>
            array(
                'id' => 491,
                'wilayas_id' => 15,
                'name' => 'Souamaa',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            491 =>
            array(
                'id' => 492,
                'wilayas_id' => 15,
                'name' => 'Mechtrass',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            492 =>
            array(
                'id' => 493,
                'wilayas_id' => 15,
                'name' => 'Irdjen',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            493 =>
            array(
                'id' => 494,
                'wilayas_id' => 15,
                'name' => 'Timizart',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            494 =>
            array(
                'id' => 495,
                'wilayas_id' => 15,
                'name' => 'Makouda',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            495 =>
            array(
                'id' => 496,
                'wilayas_id' => 15,
                'name' => 'Draa El Mizan',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            496 =>
            array(
                'id' => 497,
                'wilayas_id' => 15,
                'name' => 'Tizi Ghenif',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            497 =>
            array(
                'id' => 498,
                'wilayas_id' => 15,
                'name' => 'Bounouh',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            498 =>
            array(
                'id' => 499,
                'wilayas_id' => 15,
                'name' => 'Ait Chaffaa',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            499 =>
            array(
                'id' => 500,
                'wilayas_id' => 15,
                'name' => 'Frikat',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
        ));
        DB::table('communes')->insert(array(
            0 =>
            array(
                'id' => 501,
                'wilayas_id' => 15,
                'name' => 'Beni Aissi',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            1 =>
            array(
                'id' => 502,
                'wilayas_id' => 15,
                'name' => 'Beni Zmenzer',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            2 =>
            array(
                'id' => 503,
                'wilayas_id' => 15,
                'name' => 'Iferhounene',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            3 =>
            array(
                'id' => 504,
                'wilayas_id' => 15,
                'name' => 'Azazga',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            4 =>
            array(
                'id' => 505,
                'wilayas_id' => 15,
                'name' => 'Iloula Oumalou',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            5 =>
            array(
                'id' => 506,
                'wilayas_id' => 15,
                'name' => 'Yakouren',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            6 =>
            array(
                'id' => 507,
                'wilayas_id' => 15,
                'name' => 'Larba Nait Irathen',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            7 =>
            array(
                'id' => 508,
                'wilayas_id' => 15,
                'name' => 'Tizi Rached',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            8 =>
            array(
                'id' => 509,
                'wilayas_id' => 15,
                'name' => 'Zekri',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            9 =>
            array(
                'id' => 510,
                'wilayas_id' => 15,
                'name' => 'Ouaguenoun',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            10 =>
            array(
                'id' => 511,
                'wilayas_id' => 15,
                'name' => 'Ain Zaouia',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            11 =>
            array(
                'id' => 512,
                'wilayas_id' => 15,
                'name' => 'Mkira',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            12 =>
            array(
                'id' => 513,
                'wilayas_id' => 15,
                'name' => 'Ait Yahia',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            13 =>
            array(
                'id' => 514,
                'wilayas_id' => 15,
                'name' => 'Ait Mahmoud',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            14 =>
            array(
                'id' => 515,
                'wilayas_id' => 15,
                'name' => 'Maatka',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            15 =>
            array(
                'id' => 516,
                'wilayas_id' => 15,
                'name' => 'Ait Boumehdi',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            16 =>
            array(
                'id' => 517,
                'wilayas_id' => 15,
                'name' => 'Abi Youcef',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            17 =>
            array(
                'id' => 518,
                'wilayas_id' => 15,
                'name' => 'Beni Douala',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            18 =>
            array(
                'id' => 519,
                'wilayas_id' => 15,
                'name' => 'Illilten',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            19 =>
            array(
                'id' => 520,
                'wilayas_id' => 15,
                'name' => 'Bouzguen',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            20 =>
            array(
                'id' => 521,
                'wilayas_id' => 15,
                'name' => 'Ait Aggouacha',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            21 =>
            array(
                'id' => 522,
                'wilayas_id' => 15,
                'name' => 'Ouadhia',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            22 =>
            array(
                'id' => 523,
                'wilayas_id' => 15,
                'name' => 'Azzefoun',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            23 =>
            array(
                'id' => 524,
                'wilayas_id' => 15,
                'name' => 'Tigzirt',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            24 =>
            array(
                'id' => 525,
                'wilayas_id' => 15,
                'name' => 'Ait Aissa Mimoun',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            25 =>
            array(
                'id' => 526,
                'wilayas_id' => 15,
                'name' => 'Boghni',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            26 =>
            array(
                'id' => 527,
                'wilayas_id' => 15,
                'name' => 'Ifigha',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            27 =>
            array(
                'id' => 528,
                'wilayas_id' => 15,
                'name' => 'Ait Oumalou',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            28 =>
            array(
                'id' => 529,
                'wilayas_id' => 15,
                'name' => 'Tirmitine',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            29 =>
            array(
                'id' => 530,
                'wilayas_id' => 15,
                'name' => 'Akerrou',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            30 =>
            array(
                'id' => 531,
                'wilayas_id' => 15,
                'name' => 'Yatafen',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            31 =>
            array(
                'id' => 532,
                'wilayas_id' => 15,
                'name' => 'Beni Ziki',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            32 =>
            array(
                'id' => 533,
                'wilayas_id' => 15,
                'name' => 'Draa Ben Khedda',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            33 =>
            array(
                'id' => 534,
                'wilayas_id' => 15,
                'name' => 'Ouacif',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            34 =>
            array(
                'id' => 535,
                'wilayas_id' => 15,
                'name' => 'Idjeur',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            35 =>
            array(
                'id' => 536,
                'wilayas_id' => 15,
                'name' => 'Mekla',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            36 =>
            array(
                'id' => 537,
                'wilayas_id' => 15,
                'name' => 'Tizi Nthlata',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            37 =>
            array(
                'id' => 538,
                'wilayas_id' => 15,
                'name' => 'Beni Yenni',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            38 =>
            array(
                'id' => 539,
                'wilayas_id' => 15,
                'name' => 'Aghrib',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            39 =>
            array(
                'id' => 540,
                'wilayas_id' => 15,
                'name' => 'Iflissen',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            40 =>
            array(
                'id' => 541,
                'wilayas_id' => 15,
                'name' => 'Boudjima',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            41 =>
            array(
                'id' => 542,
                'wilayas_id' => 15,
                'name' => 'Ait Yahia Moussa',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            42 =>
            array(
                'id' => 543,
                'wilayas_id' => 15,
                'name' => 'Souk El Thenine',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            43 =>
            array(
                'id' => 544,
                'wilayas_id' => 15,
                'name' => 'Ait Khelil',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            44 =>
            array(
                'id' => 545,
                'wilayas_id' => 15,
                'name' => 'Sidi Naamane',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            45 =>
            array(
                'id' => 546,
                'wilayas_id' => 15,
                'name' => 'Iboudraren',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            46 =>
            array(
                'id' => 547,
                'wilayas_id' => 15,
                'name' => 'Agouni Gueghrane',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            47 =>
            array(
                'id' => 548,
                'wilayas_id' => 15,
                'name' => 'Mizrana',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            48 =>
            array(
                'id' => 549,
                'wilayas_id' => 15,
                'name' => 'Imsouhal',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            49 =>
            array(
                'id' => 550,
                'wilayas_id' => 15,
                'name' => 'Tadmait',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            50 =>
            array(
                'id' => 551,
                'wilayas_id' => 15,
                'name' => 'Ait Bouadou',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            51 =>
            array(
                'id' => 552,
                'wilayas_id' => 15,
                'name' => 'Assi Youcef',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            52 =>
            array(
                'id' => 553,
                'wilayas_id' => 15,
                'name' => 'Ait Toudert',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            53 =>
            array(
                'id' => 554,
                'wilayas_id' => 16,
                'name' => 'Alger Centre',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            54 =>
            array(
                'id' => 555,
                'wilayas_id' => 16,
                'name' => 'Sidi Mhamed',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            55 =>
            array(
                'id' => 556,
                'wilayas_id' => 16,
                'name' => 'El Madania',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            56 =>
            array(
                'id' => 557,
                'wilayas_id' => 16,
                'name' => 'Belouizdad',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            57 =>
            array(
                'id' => 558,
                'wilayas_id' => 16,
                'name' => 'Bab El Oued',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            58 =>
            array(
                'id' => 559,
                'wilayas_id' => 16,
                'name' => 'Bologhine',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            59 =>
            array(
                'id' => 560,
                'wilayas_id' => 16,
                'name' => 'Casbah',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            60 =>
            array(
                'id' => 561,
                'wilayas_id' => 16,
                'name' => 'Oued Koriche',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            61 =>
            array(
                'id' => 562,
                'wilayas_id' => 16,
                'name' => 'Bir Mourad Rais',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            62 =>
            array(
                'id' => 563,
                'wilayas_id' => 16,
                'name' => 'El Biar',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            63 =>
            array(
                'id' => 564,
                'wilayas_id' => 16,
                'name' => 'Bouzareah',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            64 =>
            array(
                'id' => 565,
                'wilayas_id' => 16,
                'name' => 'Birkhadem',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            65 =>
            array(
                'id' => 566,
                'wilayas_id' => 16,
                'name' => 'El Harrach',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            66 =>
            array(
                'id' => 567,
                'wilayas_id' => 16,
                'name' => 'Baraki',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            67 =>
            array(
                'id' => 568,
                'wilayas_id' => 16,
                'name' => 'Oued Smar',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            68 =>
            array(
                'id' => 569,
                'wilayas_id' => 16,
                'name' => 'Bourouba',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            69 =>
            array(
                'id' => 570,
                'wilayas_id' => 16,
                'name' => 'Hussein Dey',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            70 =>
            array(
                'id' => 571,
                'wilayas_id' => 16,
                'name' => 'Kouba',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            71 =>
            array(
                'id' => 572,
                'wilayas_id' => 16,
                'name' => 'Bachedjerah',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            72 =>
            array(
                'id' => 573,
                'wilayas_id' => 16,
                'name' => 'Dar El Beida',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            73 =>
            array(
                'id' => 574,
                'wilayas_id' => 16,
                'name' => 'Bab Azzouar',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            74 =>
            array(
                'id' => 575,
                'wilayas_id' => 16,
                'name' => 'Ben Aknoun',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            75 =>
            array(
                'id' => 576,
                'wilayas_id' => 16,
                'name' => 'Dely Ibrahim',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            76 =>
            array(
                'id' => 577,
                'wilayas_id' => 16,
                'name' => 'El Hammamet',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            77 =>
            array(
                'id' => 578,
                'wilayas_id' => 16,
                'name' => 'Rais Hamidou',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            78 =>
            array(
                'id' => 579,
                'wilayas_id' => 16,
                'name' => 'Djasr Kasentina',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            79 =>
            array(
                'id' => 580,
                'wilayas_id' => 16,
                'name' => 'El Mouradia',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            80 =>
            array(
                'id' => 581,
                'wilayas_id' => 16,
                'name' => 'Hydra',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            81 =>
            array(
                'id' => 582,
                'wilayas_id' => 16,
                'name' => 'Mohammadia',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            82 =>
            array(
                'id' => 583,
                'wilayas_id' => 16,
                'name' => 'Bordj El Kiffan',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            83 =>
            array(
                'id' => 584,
                'wilayas_id' => 16,
                'name' => 'El Magharia',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            84 =>
            array(
                'id' => 585,
                'wilayas_id' => 16,
                'name' => 'Beni Messous',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            85 =>
            array(
                'id' => 586,
                'wilayas_id' => 16,
                'name' => 'Les Eucalyptus',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            86 =>
            array(
                'id' => 587,
                'wilayas_id' => 16,
                'name' => 'Birtouta',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            87 =>
            array(
                'id' => 588,
                'wilayas_id' => 16,
                'name' => 'Tassala El Merdja',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            88 =>
            array(
                'id' => 589,
                'wilayas_id' => 16,
                'name' => 'Ouled Chebel',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            89 =>
            array(
                'id' => 590,
                'wilayas_id' => 16,
                'name' => 'Sidi Moussa',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            90 =>
            array(
                'id' => 591,
                'wilayas_id' => 16,
                'name' => 'Ain Taya',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            91 =>
            array(
                'id' => 592,
                'wilayas_id' => 16,
                'name' => 'Bordj El Bahri',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            92 =>
            array(
                'id' => 593,
                'wilayas_id' => 16,
                'name' => 'Marsa',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            93 =>
            array(
                'id' => 594,
                'wilayas_id' => 16,
                'name' => 'Haraoua',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            94 =>
            array(
                'id' => 595,
                'wilayas_id' => 16,
                'name' => 'Rouiba',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            95 =>
            array(
                'id' => 596,
                'wilayas_id' => 16,
                'name' => 'Reghaia',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            96 =>
            array(
                'id' => 597,
                'wilayas_id' => 16,
                'name' => 'Ain Benian',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            97 =>
            array(
                'id' => 598,
                'wilayas_id' => 16,
                'name' => 'Staoueli',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            98 =>
            array(
                'id' => 599,
                'wilayas_id' => 16,
                'name' => 'Zeralda',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            99 =>
            array(
                'id' => 600,
                'wilayas_id' => 16,
                'name' => 'Mahelma',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            100 =>
            array(
                'id' => 601,
                'wilayas_id' => 16,
                'name' => 'Rahmania',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            101 =>
            array(
                'id' => 602,
                'wilayas_id' => 16,
                'name' => 'Souidania',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            102 =>
            array(
                'id' => 603,
                'wilayas_id' => 16,
                'name' => 'Cheraga',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            103 =>
            array(
                'id' => 604,
                'wilayas_id' => 16,
                'name' => 'Ouled Fayet',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            104 =>
            array(
                'id' => 605,
                'wilayas_id' => 16,
                'name' => 'El Achour',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            105 =>
            array(
                'id' => 606,
                'wilayas_id' => 16,
                'name' => 'Draria',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            106 =>
            array(
                'id' => 607,
                'wilayas_id' => 16,
                'name' => 'Douera',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            107 =>
            array(
                'id' => 608,
                'wilayas_id' => 16,
                'name' => 'Baba Hassen',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            108 =>
            array(
                'id' => 609,
                'wilayas_id' => 16,
                'name' => 'Khracia',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            109 =>
            array(
                'id' => 610,
                'wilayas_id' => 16,
                'name' => 'Saoula',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            110 =>
            array(
                'id' => 611,
                'wilayas_id' => 17,
                'name' => 'Djelfa',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            111 =>
            array(
                'id' => 612,
                'wilayas_id' => 17,
                'name' => 'Moudjebara',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            112 =>
            array(
                'id' => 613,
                'wilayas_id' => 17,
                'name' => 'El Guedid',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            113 =>
            array(
                'id' => 614,
                'wilayas_id' => 17,
                'name' => 'Hassi Bahbah',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            114 =>
            array(
                'id' => 615,
                'wilayas_id' => 17,
                'name' => 'Ain Maabed',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            115 =>
            array(
                'id' => 616,
                'wilayas_id' => 17,
                'name' => 'Sed Rahal',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            116 =>
            array(
                'id' => 617,
                'wilayas_id' => 17,
                'name' => 'Feidh El Botma',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            117 =>
            array(
                'id' => 618,
                'wilayas_id' => 17,
                'name' => 'Birine',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            118 =>
            array(
                'id' => 619,
                'wilayas_id' => 17,
                'name' => 'Bouira Lahdeb',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            119 =>
            array(
                'id' => 620,
                'wilayas_id' => 17,
                'name' => 'Zaccar',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            120 =>
            array(
                'id' => 621,
                'wilayas_id' => 17,
                'name' => 'El Khemis',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            121 =>
            array(
                'id' => 622,
                'wilayas_id' => 17,
                'name' => 'Sidi Baizid',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            122 =>
            array(
                'id' => 623,
                'wilayas_id' => 17,
                'name' => 'M\'Liliha',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            123 =>
            array(
                'id' => 624,
                'wilayas_id' => 17,
                'name' => 'El Idrissia',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            124 =>
            array(
                'id' => 625,
                'wilayas_id' => 17,
                'name' => 'Douis',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            125 =>
            array(
                'id' => 626,
                'wilayas_id' => 17,
                'name' => 'Hassi El Euch',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            126 =>
            array(
                'id' => 627,
                'wilayas_id' => 17,
                'name' => 'Messaad',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            127 =>
            array(
                'id' => 628,
                'wilayas_id' => 17,
                'name' => 'Guettara',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            128 =>
            array(
                'id' => 629,
                'wilayas_id' => 17,
                'name' => 'Sidi Ladjel',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            129 =>
            array(
                'id' => 630,
                'wilayas_id' => 17,
                'name' => 'Had Sahary',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            130 =>
            array(
                'id' => 631,
                'wilayas_id' => 17,
                'name' => 'Guernini',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            131 =>
            array(
                'id' => 632,
                'wilayas_id' => 17,
                'name' => 'Selmana',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            132 =>
            array(
                'id' => 633,
                'wilayas_id' => 17,
                'name' => 'Ain Chouhada',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            133 =>
            array(
                'id' => 634,
                'wilayas_id' => 17,
                'name' => 'Oum Laadham',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            134 =>
            array(
                'id' => 635,
                'wilayas_id' => 17,
                'name' => 'Dar Chouikh',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            135 =>
            array(
                'id' => 636,
                'wilayas_id' => 17,
                'name' => 'Charef',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            136 =>
            array(
                'id' => 637,
                'wilayas_id' => 17,
                'name' => 'Beni Yacoub',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            137 =>
            array(
                'id' => 638,
                'wilayas_id' => 17,
                'name' => 'Zaafrane',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            138 =>
            array(
                'id' => 639,
                'wilayas_id' => 17,
                'name' => 'Deldoul',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            139 =>
            array(
                'id' => 640,
                'wilayas_id' => 17,
                'name' => 'Ain El Ibel',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            140 =>
            array(
                'id' => 641,
                'wilayas_id' => 17,
                'name' => 'Ain Oussera',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            141 =>
            array(
                'id' => 642,
                'wilayas_id' => 17,
                'name' => 'Benhar',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            142 =>
            array(
                'id' => 643,
                'wilayas_id' => 17,
                'name' => 'Hassi Fedoul',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            143 =>
            array(
                'id' => 644,
                'wilayas_id' => 17,
                'name' => 'Amourah',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            144 =>
            array(
                'id' => 645,
                'wilayas_id' => 17,
                'name' => 'Ain Fekka',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            145 =>
            array(
                'id' => 646,
                'wilayas_id' => 17,
                'name' => 'Tadmit',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            146 =>
            array(
                'id' => 647,
                'wilayas_id' => 18,
                'name' => 'Jijel',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            147 =>
            array(
                'id' => 648,
                'wilayas_id' => 18,
                'name' => 'Erraguene',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            148 =>
            array(
                'id' => 649,
                'wilayas_id' => 18,
                'name' => 'El Aouana',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            149 =>
            array(
                'id' => 650,
                'wilayas_id' => 18,
                'name' => 'Ziamma Mansouriah',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            150 =>
            array(
                'id' => 651,
                'wilayas_id' => 18,
                'name' => 'Taher',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            151 =>
            array(
                'id' => 652,
                'wilayas_id' => 18,
                'name' => 'Emir Abdelkader',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            152 =>
            array(
                'id' => 653,
                'wilayas_id' => 18,
                'name' => 'Chekfa',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            153 =>
            array(
                'id' => 654,
                'wilayas_id' => 18,
                'name' => 'Chahna',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            154 =>
            array(
                'id' => 655,
                'wilayas_id' => 18,
                'name' => 'El Milia',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            155 =>
            array(
                'id' => 656,
                'wilayas_id' => 18,
                'name' => 'Sidi Maarouf',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            156 =>
            array(
                'id' => 657,
                'wilayas_id' => 18,
                'name' => 'Settara',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            157 =>
            array(
                'id' => 658,
                'wilayas_id' => 18,
                'name' => 'El Ancer',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            158 =>
            array(
                'id' => 659,
                'wilayas_id' => 18,
                'name' => 'Sidi Abdelaziz',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            159 =>
            array(
                'id' => 660,
                'wilayas_id' => 18,
                'name' => 'Kaous',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            160 =>
            array(
                'id' => 661,
                'wilayas_id' => 18,
                'name' => 'Ghebala',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            161 =>
            array(
                'id' => 662,
                'wilayas_id' => 18,
                'name' => 'Bouraoui Belhadef',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            162 =>
            array(
                'id' => 663,
                'wilayas_id' => 18,
                'name' => 'Djmila',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            163 =>
            array(
                'id' => 664,
                'wilayas_id' => 18,
                'name' => 'Selma Benziada',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            164 =>
            array(
                'id' => 665,
                'wilayas_id' => 18,
                'name' => 'Boussif Ouled Askeur',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            165 =>
            array(
                'id' => 666,
                'wilayas_id' => 18,
                'name' => 'El Kennar Nouchfi',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            166 =>
            array(
                'id' => 667,
                'wilayas_id' => 18,
                'name' => 'Ouled Yahia Khadrouch',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            167 =>
            array(
                'id' => 668,
                'wilayas_id' => 18,
                'name' => 'Boudria Beni Yadjis',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            168 =>
            array(
                'id' => 669,
                'wilayas_id' => 18,
                'name' => 'Kemir Oued Adjoul',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            169 =>
            array(
                'id' => 670,
                'wilayas_id' => 18,
                'name' => 'Texena',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            170 =>
            array(
                'id' => 671,
                'wilayas_id' => 18,
                'name' => 'Djemaa Beni Habibi',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            171 =>
            array(
                'id' => 672,
                'wilayas_id' => 18,
                'name' => 'Bordj T\'her',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            172 =>
            array(
                'id' => 673,
                'wilayas_id' => 18,
                'name' => 'Ouled Rabah',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            173 =>
            array(
                'id' => 674,
                'wilayas_id' => 18,
                'name' => 'Ouadjana',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            174 =>
            array(
                'id' => 675,
                'wilayas_id' => 19,
                'name' => 'Setif',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            175 =>
            array(
                'id' => 676,
                'wilayas_id' => 19,
                'name' => 'Ain El Kebira',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            176 =>
            array(
                'id' => 677,
                'wilayas_id' => 19,
                'name' => 'Beni Aziz',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            177 =>
            array(
                'id' => 678,
                'wilayas_id' => 19,
                'name' => 'Ouled Sidi Ahmed',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            178 =>
            array(
                'id' => 679,
                'wilayas_id' => 19,
                'name' => 'Boutaleb',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            179 =>
            array(
                'id' => 680,
                'wilayas_id' => 19,
                'name' => 'Ain Roua',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            180 =>
            array(
                'id' => 681,
                'wilayas_id' => 19,
                'name' => 'Draa Kebila',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            181 =>
            array(
                'id' => 682,
                'wilayas_id' => 19,
                'name' => 'Bir El Arch',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            182 =>
            array(
                'id' => 683,
                'wilayas_id' => 19,
                'name' => 'Beni Chebana',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            183 =>
            array(
                'id' => 684,
                'wilayas_id' => 19,
                'name' => 'Ouled Tebben',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            184 =>
            array(
                'id' => 685,
                'wilayas_id' => 19,
                'name' => 'Hamma',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            185 =>
            array(
                'id' => 686,
                'wilayas_id' => 19,
                'name' => 'Maaouia',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            186 =>
            array(
                'id' => 687,
                'wilayas_id' => 19,
                'name' => 'Ain Legraj',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            187 =>
            array(
                'id' => 688,
                'wilayas_id' => 19,
                'name' => 'Ain Abessa',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            188 =>
            array(
                'id' => 689,
                'wilayas_id' => 19,
                'name' => 'Dehamcha',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            189 =>
            array(
                'id' => 690,
                'wilayas_id' => 19,
                'name' => 'Babor',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            190 =>
            array(
                'id' => 691,
                'wilayas_id' => 19,
                'name' => 'Guidjel',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            191 =>
            array(
                'id' => 692,
                'wilayas_id' => 19,
                'name' => 'Ain Lahdjar',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            192 =>
            array(
                'id' => 693,
                'wilayas_id' => 19,
                'name' => 'Bousselam',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            193 =>
            array(
                'id' => 694,
                'wilayas_id' => 19,
                'name' => 'El Eulma',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            194 =>
            array(
                'id' => 695,
                'wilayas_id' => 19,
                'name' => 'Djemila',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            195 =>
            array(
                'id' => 696,
                'wilayas_id' => 19,
                'name' => 'Beni Ouartilane',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            196 =>
            array(
                'id' => 697,
                'wilayas_id' => 19,
                'name' => 'Rosfa',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            197 =>
            array(
                'id' => 698,
                'wilayas_id' => 19,
                'name' => 'Ouled Addouane',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            198 =>
            array(
                'id' => 699,
                'wilayas_id' => 19,
                'name' => 'Belaa',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            199 =>
            array(
                'id' => 700,
                'wilayas_id' => 19,
                'name' => 'Ain Arnat',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            200 =>
            array(
                'id' => 701,
                'wilayas_id' => 19,
                'name' => 'Amoucha',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            201 =>
            array(
                'id' => 702,
                'wilayas_id' => 19,
                'name' => 'Ain Oulmane',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            202 =>
            array(
                'id' => 703,
                'wilayas_id' => 19,
                'name' => 'Beidha Bordj',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            203 =>
            array(
                'id' => 704,
                'wilayas_id' => 19,
                'name' => 'Bouandas',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            204 =>
            array(
                'id' => 705,
                'wilayas_id' => 19,
                'name' => 'Bazer Sakhra',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            205 =>
            array(
                'id' => 706,
                'wilayas_id' => 19,
                'name' => 'Hammam Essokhna',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            206 =>
            array(
                'id' => 707,
                'wilayas_id' => 19,
                'name' => 'Mezloug',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            207 =>
            array(
                'id' => 708,
                'wilayas_id' => 19,
                'name' => 'Bir Haddada',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            208 =>
            array(
                'id' => 709,
                'wilayas_id' => 19,
                'name' => 'Serdj El Ghoul',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            209 =>
            array(
                'id' => 710,
                'wilayas_id' => 19,
                'name' => 'Harbil',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            210 =>
            array(
                'id' => 711,
                'wilayas_id' => 19,
                'name' => 'El Ouricia',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            211 =>
            array(
                'id' => 712,
                'wilayas_id' => 19,
                'name' => 'Tizi Nbechar',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            212 =>
            array(
                'id' => 713,
                'wilayas_id' => 19,
                'name' => 'Salah Bey',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            213 =>
            array(
                'id' => 714,
                'wilayas_id' => 19,
                'name' => 'Ain Azal',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            214 =>
            array(
                'id' => 715,
                'wilayas_id' => 19,
                'name' => 'Guenzet',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            215 =>
            array(
                'id' => 716,
                'wilayas_id' => 19,
                'name' => 'Talaifacene',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            216 =>
            array(
                'id' => 717,
                'wilayas_id' => 19,
                'name' => 'Bougaa',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            217 =>
            array(
                'id' => 718,
                'wilayas_id' => 19,
                'name' => 'Beni Fouda',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            218 =>
            array(
                'id' => 719,
                'wilayas_id' => 19,
                'name' => 'Tachouda',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            219 =>
            array(
                'id' => 720,
                'wilayas_id' => 19,
                'name' => 'Beni Mouhli',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            220 =>
            array(
                'id' => 721,
                'wilayas_id' => 19,
                'name' => 'Ouled Sabor',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            221 =>
            array(
                'id' => 722,
                'wilayas_id' => 19,
                'name' => 'Guellal',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            222 =>
            array(
                'id' => 723,
                'wilayas_id' => 19,
                'name' => 'Ain Sebt',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            223 =>
            array(
                'id' => 724,
                'wilayas_id' => 19,
                'name' => 'Hammam Guergour',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            224 =>
            array(
                'id' => 725,
                'wilayas_id' => 19,
                'name' => 'Ait Naoual Mezada',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            225 =>
            array(
                'id' => 726,
                'wilayas_id' => 19,
                'name' => 'Ksar El Abtal',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            226 =>
            array(
                'id' => 727,
                'wilayas_id' => 19,
                'name' => 'Beni Hocine',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            227 =>
            array(
                'id' => 728,
                'wilayas_id' => 19,
                'name' => 'Ait Tizi',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            228 =>
            array(
                'id' => 729,
                'wilayas_id' => 19,
                'name' => 'Maouklane',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            229 =>
            array(
                'id' => 730,
                'wilayas_id' => 19,
                'name' => 'Guelta Zerka',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            230 =>
            array(
                'id' => 731,
                'wilayas_id' => 19,
                'name' => 'Oued El Barad',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            231 =>
            array(
                'id' => 732,
                'wilayas_id' => 19,
                'name' => 'Taya',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            232 =>
            array(
                'id' => 733,
                'wilayas_id' => 19,
                'name' => 'El Ouldja',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            233 =>
            array(
                'id' => 734,
                'wilayas_id' => 19,
                'name' => 'Tella',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            234 =>
            array(
                'id' => 735,
                'wilayas_id' => 20,
                'name' => 'Saida',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            235 =>
            array(
                'id' => 736,
                'wilayas_id' => 20,
                'name' => 'Doui Thabet',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            236 =>
            array(
                'id' => 737,
                'wilayas_id' => 20,
                'name' => 'Ain El Hadjar',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            237 =>
            array(
                'id' => 738,
                'wilayas_id' => 20,
                'name' => 'Ouled Khaled',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            238 =>
            array(
                'id' => 739,
                'wilayas_id' => 20,
                'name' => 'Moulay Larbi',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            239 =>
            array(
                'id' => 740,
                'wilayas_id' => 20,
                'name' => 'Youb',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            240 =>
            array(
                'id' => 741,
                'wilayas_id' => 20,
                'name' => 'Hounet',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            241 =>
            array(
                'id' => 742,
                'wilayas_id' => 20,
                'name' => 'Sidi Amar',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            242 =>
            array(
                'id' => 743,
                'wilayas_id' => 20,
                'name' => 'Sidi Boubekeur',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            243 =>
            array(
                'id' => 744,
                'wilayas_id' => 20,
                'name' => 'El Hassasna',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            244 =>
            array(
                'id' => 745,
                'wilayas_id' => 20,
                'name' => 'Maamora',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            245 =>
            array(
                'id' => 746,
                'wilayas_id' => 20,
                'name' => 'Sidi Ahmed',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            246 =>
            array(
                'id' => 747,
                'wilayas_id' => 20,
                'name' => 'Ain Sekhouna',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            247 =>
            array(
                'id' => 748,
                'wilayas_id' => 20,
                'name' => 'Ouled Brahim',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            248 =>
            array(
                'id' => 749,
                'wilayas_id' => 20,
                'name' => 'Tircine',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            249 =>
            array(
                'id' => 750,
                'wilayas_id' => 20,
                'name' => 'Ain Soltane',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            250 =>
            array(
                'id' => 751,
                'wilayas_id' => 21,
                'name' => 'Skikda',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            251 =>
            array(
                'id' => 752,
                'wilayas_id' => 21,
                'name' => 'Ain Zouit',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            252 =>
            array(
                'id' => 753,
                'wilayas_id' => 21,
                'name' => 'El Hadaik',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            253 =>
            array(
                'id' => 754,
                'wilayas_id' => 21,
                'name' => 'Azzaba',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            254 =>
            array(
                'id' => 755,
                'wilayas_id' => 21,
                'name' => 'Djendel',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            255 =>
            array(
                'id' => 756,
                'wilayas_id' => 21,
                'name' => 'Ain Cherchar',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            256 =>
            array(
                'id' => 757,
                'wilayas_id' => 21,
                'name' => 'Bekkouche Lakhdar',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            257 =>
            array(
                'id' => 758,
                'wilayas_id' => 21,
                'name' => 'Ben Azzouz',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            258 =>
            array(
                'id' => 759,
                'wilayas_id' => 21,
                'name' => 'Es Sebt',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            259 =>
            array(
                'id' => 760,
                'wilayas_id' => 21,
                'name' => 'Collo',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            260 =>
            array(
                'id' => 761,
                'wilayas_id' => 21,
                'name' => 'Beni Zid',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            261 =>
            array(
                'id' => 762,
                'wilayas_id' => 21,
                'name' => 'Kerkera',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            262 =>
            array(
                'id' => 763,
                'wilayas_id' => 21,
                'name' => 'Ouled Attia',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            263 =>
            array(
                'id' => 764,
                'wilayas_id' => 21,
                'name' => 'Oued Zehour',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            264 =>
            array(
                'id' => 765,
                'wilayas_id' => 21,
                'name' => 'Zitouna',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            265 =>
            array(
                'id' => 766,
                'wilayas_id' => 21,
                'name' => 'El Harrouch',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            266 =>
            array(
                'id' => 767,
                'wilayas_id' => 21,
                'name' => 'Zerdazas',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            267 =>
            array(
                'id' => 768,
                'wilayas_id' => 21,
                'name' => 'Ouled Hebaba',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            268 =>
            array(
                'id' => 769,
                'wilayas_id' => 21,
                'name' => 'Sidi Mezghiche',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            269 =>
            array(
                'id' => 770,
                'wilayas_id' => 21,
                'name' => 'Emdjez Edchich',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            270 =>
            array(
                'id' => 771,
                'wilayas_id' => 21,
                'name' => 'Beni Oulbane',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            271 =>
            array(
                'id' => 772,
                'wilayas_id' => 21,
                'name' => 'Ain Bouziane',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            272 =>
            array(
                'id' => 773,
                'wilayas_id' => 21,
                'name' => 'Ramdane Djamel',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            273 =>
            array(
                'id' => 774,
                'wilayas_id' => 21,
                'name' => 'Beni Bachir',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            274 =>
            array(
                'id' => 775,
                'wilayas_id' => 21,
                'name' => 'Salah Bouchaour',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            275 =>
            array(
                'id' => 776,
                'wilayas_id' => 21,
                'name' => 'Tamalous',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            276 =>
            array(
                'id' => 777,
                'wilayas_id' => 21,
                'name' => 'Ain Kechra',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            277 =>
            array(
                'id' => 778,
                'wilayas_id' => 21,
                'name' => 'Oum Toub',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            278 =>
            array(
                'id' => 779,
                'wilayas_id' => 21,
                'name' => 'Bein El Ouiden',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            279 =>
            array(
                'id' => 780,
                'wilayas_id' => 21,
                'name' => 'Filfila',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            280 =>
            array(
                'id' => 781,
                'wilayas_id' => 21,
                'name' => 'Cheraia',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            281 =>
            array(
                'id' => 782,
                'wilayas_id' => 21,
                'name' => 'Kanoua',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            282 =>
            array(
                'id' => 783,
                'wilayas_id' => 21,
                'name' => 'El Ghedir',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            283 =>
            array(
                'id' => 784,
                'wilayas_id' => 21,
                'name' => 'Bouchtata',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            284 =>
            array(
                'id' => 785,
                'wilayas_id' => 21,
                'name' => 'Ouldja Boulbalout',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            285 =>
            array(
                'id' => 786,
                'wilayas_id' => 21,
                'name' => 'Kheneg Mayoum',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            286 =>
            array(
                'id' => 787,
                'wilayas_id' => 21,
                'name' => 'Hamadi Krouma',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            287 =>
            array(
                'id' => 788,
                'wilayas_id' => 21,
                'name' => 'El Marsa',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            288 =>
            array(
                'id' => 789,
                'wilayas_id' => 22,
                'name' => 'Sidi Bel Abbes',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            289 =>
            array(
                'id' => 790,
                'wilayas_id' => 22,
                'name' => 'Tessala',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            290 =>
            array(
                'id' => 791,
                'wilayas_id' => 22,
                'name' => 'Sidi Brahim',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            291 =>
            array(
                'id' => 792,
                'wilayas_id' => 22,
                'name' => 'Mostefa Ben Brahim',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            292 =>
            array(
                'id' => 793,
                'wilayas_id' => 22,
                'name' => 'Telagh',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            293 =>
            array(
                'id' => 794,
                'wilayas_id' => 22,
                'name' => 'Mezaourou',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            294 =>
            array(
                'id' => 795,
                'wilayas_id' => 22,
                'name' => 'Boukhanafis',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            295 =>
            array(
                'id' => 796,
                'wilayas_id' => 22,
                'name' => 'Sidi Ali Boussidi',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            296 =>
            array(
                'id' => 797,
                'wilayas_id' => 22,
                'name' => 'Badredine El Mokrani',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            297 =>
            array(
                'id' => 798,
                'wilayas_id' => 22,
                'name' => 'Marhoum',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            298 =>
            array(
                'id' => 799,
                'wilayas_id' => 22,
                'name' => 'Tafissour',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            299 =>
            array(
                'id' => 800,
                'wilayas_id' => 22,
                'name' => 'Amarnas',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            300 =>
            array(
                'id' => 801,
                'wilayas_id' => 22,
                'name' => 'Tilmouni',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            301 =>
            array(
                'id' => 802,
                'wilayas_id' => 22,
                'name' => 'Sidi Lahcene',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            302 =>
            array(
                'id' => 803,
                'wilayas_id' => 22,
                'name' => 'Ain Thrid',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            303 =>
            array(
                'id' => 804,
                'wilayas_id' => 22,
                'name' => 'Makedra',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            304 =>
            array(
                'id' => 805,
                'wilayas_id' => 22,
                'name' => 'Tenira',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            305 =>
            array(
                'id' => 806,
                'wilayas_id' => 22,
                'name' => 'Moulay Slissen',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            306 =>
            array(
                'id' => 807,
                'wilayas_id' => 22,
                'name' => 'El Hacaiba',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            307 =>
            array(
                'id' => 808,
                'wilayas_id' => 22,
                'name' => 'Hassi Zehana',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            308 =>
            array(
                'id' => 809,
                'wilayas_id' => 22,
                'name' => 'Tabia',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            309 =>
            array(
                'id' => 810,
                'wilayas_id' => 22,
                'name' => 'Merine',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            310 =>
            array(
                'id' => 811,
                'wilayas_id' => 22,
                'name' => 'Ras El Ma',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            311 =>
            array(
                'id' => 812,
                'wilayas_id' => 22,
                'name' => 'Ain Tindamine',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            312 =>
            array(
                'id' => 813,
                'wilayas_id' => 22,
                'name' => 'Ain Kada',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            313 =>
            array(
                'id' => 814,
                'wilayas_id' => 22,
                'name' => 'Mcid',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            314 =>
            array(
                'id' => 815,
                'wilayas_id' => 22,
                'name' => 'Sidi Khaled',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            315 =>
            array(
                'id' => 816,
                'wilayas_id' => 22,
                'name' => 'Ain El Berd',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            316 =>
            array(
                'id' => 817,
                'wilayas_id' => 22,
                'name' => 'Sfissef',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            317 =>
            array(
                'id' => 818,
                'wilayas_id' => 22,
                'name' => 'Ain Adden',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            318 =>
            array(
                'id' => 819,
                'wilayas_id' => 22,
                'name' => 'Oued Taourira',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            319 =>
            array(
                'id' => 820,
                'wilayas_id' => 22,
                'name' => 'Dhaya',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            320 =>
            array(
                'id' => 821,
                'wilayas_id' => 22,
                'name' => 'Zerouala',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            321 =>
            array(
                'id' => 822,
                'wilayas_id' => 22,
                'name' => 'Lamtar',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            322 =>
            array(
                'id' => 823,
                'wilayas_id' => 22,
                'name' => 'Sidi Chaib',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            323 =>
            array(
                'id' => 824,
                'wilayas_id' => 22,
                'name' => 'Sidi Dahou',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            324 =>
            array(
                'id' => 825,
                'wilayas_id' => 22,
                'name' => 'Oued Sbaa',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            325 =>
            array(
                'id' => 826,
                'wilayas_id' => 22,
                'name' => 'Boudjebaa El Bordj',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            326 =>
            array(
                'id' => 827,
                'wilayas_id' => 22,
                'name' => 'Sehala Thaoura',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            327 =>
            array(
                'id' => 828,
                'wilayas_id' => 22,
                'name' => 'Sidi Yacoub',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            328 =>
            array(
                'id' => 829,
                'wilayas_id' => 22,
                'name' => 'Sidi Hamadouche',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            329 =>
            array(
                'id' => 830,
                'wilayas_id' => 22,
                'name' => 'Belarbi',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            330 =>
            array(
                'id' => 831,
                'wilayas_id' => 22,
                'name' => 'Oued Sefioun',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            331 =>
            array(
                'id' => 832,
                'wilayas_id' => 22,
                'name' => 'Teghalimet',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            332 =>
            array(
                'id' => 833,
                'wilayas_id' => 22,
                'name' => 'Ben Badis',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            333 =>
            array(
                'id' => 834,
                'wilayas_id' => 22,
                'name' => 'Sidi Ali Benyoub',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            334 =>
            array(
                'id' => 835,
                'wilayas_id' => 22,
                'name' => 'Chetouane Belaila',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            335 =>
            array(
                'id' => 836,
                'wilayas_id' => 22,
                'name' => 'Bir El Hammam',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            336 =>
            array(
                'id' => 837,
                'wilayas_id' => 22,
                'name' => 'Taoudmout',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            337 =>
            array(
                'id' => 838,
                'wilayas_id' => 22,
                'name' => 'Redjem Demouche',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            338 =>
            array(
                'id' => 839,
                'wilayas_id' => 22,
                'name' => 'Benachiba Chelia',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            339 =>
            array(
                'id' => 840,
                'wilayas_id' => 22,
                'name' => 'Hassi Dahou',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            340 =>
            array(
                'id' => 841,
                'wilayas_id' => 23,
                'name' => 'Annaba',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            341 =>
            array(
                'id' => 842,
                'wilayas_id' => 23,
                'name' => 'Berrahel',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            342 =>
            array(
                'id' => 843,
                'wilayas_id' => 23,
                'name' => 'El Hadjar',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            343 =>
            array(
                'id' => 844,
                'wilayas_id' => 23,
                'name' => 'Eulma',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            344 =>
            array(
                'id' => 845,
                'wilayas_id' => 23,
                'name' => 'El Bouni',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            345 =>
            array(
                'id' => 846,
                'wilayas_id' => 23,
                'name' => 'Oued El Aneb',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            346 =>
            array(
                'id' => 847,
                'wilayas_id' => 23,
                'name' => 'Cheurfa',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            347 =>
            array(
                'id' => 848,
                'wilayas_id' => 23,
                'name' => 'Seraidi',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            348 =>
            array(
                'id' => 849,
                'wilayas_id' => 23,
                'name' => 'Ain Berda',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            349 =>
            array(
                'id' => 850,
                'wilayas_id' => 23,
                'name' => 'Chetaibi',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            350 =>
            array(
                'id' => 851,
                'wilayas_id' => 23,
                'name' => 'Sidi Amer',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            351 =>
            array(
                'id' => 852,
                'wilayas_id' => 23,
                'name' => 'Treat',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            352 =>
            array(
                'id' => 853,
                'wilayas_id' => 24,
                'name' => 'Guelma',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            353 =>
            array(
                'id' => 854,
                'wilayas_id' => 24,
                'name' => 'Nechmaya',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            354 =>
            array(
                'id' => 855,
                'wilayas_id' => 24,
                'name' => 'Bouati Mahmoud',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            355 =>
            array(
                'id' => 856,
                'wilayas_id' => 24,
                'name' => 'Oued Zenati',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            356 =>
            array(
                'id' => 857,
                'wilayas_id' => 24,
                'name' => 'Tamlouka',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            357 =>
            array(
                'id' => 858,
                'wilayas_id' => 24,
                'name' => 'Oued Fragha',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            358 =>
            array(
                'id' => 859,
                'wilayas_id' => 24,
                'name' => 'Ain Sandel',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            359 =>
            array(
                'id' => 860,
                'wilayas_id' => 24,
                'name' => 'Ras El Agba',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            360 =>
            array(
                'id' => 861,
                'wilayas_id' => 24,
                'name' => 'Dahouara',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            361 =>
            array(
                'id' => 862,
                'wilayas_id' => 24,
                'name' => 'Belkhir',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            362 =>
            array(
                'id' => 863,
                'wilayas_id' => 24,
                'name' => 'Ben Djarah',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            363 =>
            array(
                'id' => 864,
                'wilayas_id' => 24,
                'name' => 'Bou Hamdane',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            364 =>
            array(
                'id' => 865,
                'wilayas_id' => 24,
                'name' => 'Ain Makhlouf',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            365 =>
            array(
                'id' => 866,
                'wilayas_id' => 24,
                'name' => 'Ain Ben Beida',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            366 =>
            array(
                'id' => 867,
                'wilayas_id' => 24,
                'name' => 'Khezara',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            367 =>
            array(
                'id' => 868,
                'wilayas_id' => 24,
                'name' => 'Beni Mezline',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            368 =>
            array(
                'id' => 869,
                'wilayas_id' => 24,
                'name' => 'Bou Hachana',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            369 =>
            array(
                'id' => 870,
                'wilayas_id' => 24,
                'name' => 'Guelaat Bou Sbaa',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            370 =>
            array(
                'id' => 871,
                'wilayas_id' => 24,
                'name' => 'Hammam Maskhoutine',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            371 =>
            array(
                'id' => 872,
                'wilayas_id' => 24,
                'name' => 'El Fedjoudj',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            372 =>
            array(
                'id' => 873,
                'wilayas_id' => 24,
                'name' => 'Bordj Sabat',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            373 =>
            array(
                'id' => 874,
                'wilayas_id' => 24,
                'name' => 'Hamman Nbail',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            374 =>
            array(
                'id' => 875,
                'wilayas_id' => 24,
                'name' => 'Ain Larbi',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            375 =>
            array(
                'id' => 876,
                'wilayas_id' => 24,
                'name' => 'Medjez Amar',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            376 =>
            array(
                'id' => 877,
                'wilayas_id' => 24,
                'name' => 'Bouchegouf',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            377 =>
            array(
                'id' => 878,
                'wilayas_id' => 24,
                'name' => 'Heliopolis',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            378 =>
            array(
                'id' => 879,
                'wilayas_id' => 24,
                'name' => 'Houari Boumediene',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            379 =>
            array(
                'id' => 880,
                'wilayas_id' => 24,
                'name' => 'Roknia',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            380 =>
            array(
                'id' => 881,
                'wilayas_id' => 24,
                'name' => 'Salaoua Announa',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            381 =>
            array(
                'id' => 882,
                'wilayas_id' => 24,
                'name' => 'Medjez Sfa',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            382 =>
            array(
                'id' => 883,
                'wilayas_id' => 24,
                'name' => 'Boumahra Ahmed',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            383 =>
            array(
                'id' => 884,
                'wilayas_id' => 24,
                'name' => 'Ain Reggada',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            384 =>
            array(
                'id' => 885,
                'wilayas_id' => 24,
                'name' => 'Oued Cheham',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            385 =>
            array(
                'id' => 886,
                'wilayas_id' => 24,
                'name' => 'Djeballah Khemissi',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            386 =>
            array(
                'id' => 887,
                'wilayas_id' => 25,
                'name' => 'Constantine',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            387 =>
            array(
                'id' => 888,
                'wilayas_id' => 25,
                'name' => 'Hamma Bouziane',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            388 =>
            array(
                'id' => 889,
                'wilayas_id' => 25,
                'name' => 'Ibn Badis',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            389 =>
            array(
                'id' => 890,
                'wilayas_id' => 25,
                'name' => 'Zighoud Youcef',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            390 =>
            array(
                'id' => 891,
                'wilayas_id' => 25,
                'name' => 'Didouche Mourad',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            391 =>
            array(
                'id' => 892,
                'wilayas_id' => 25,
                'name' => 'El Khroub',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            392 =>
            array(
                'id' => 893,
                'wilayas_id' => 25,
                'name' => 'Ain Abid',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            393 =>
            array(
                'id' => 894,
                'wilayas_id' => 25,
                'name' => 'Beni Hamiden',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            394 =>
            array(
                'id' => 895,
                'wilayas_id' => 25,
                'name' => 'Ouled Rahmoune',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            395 =>
            array(
                'id' => 896,
                'wilayas_id' => 25,
                'name' => 'Ain Smara',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            396 =>
            array(
                'id' => 897,
                'wilayas_id' => 25,
                'name' => 'Mesaoud Boudjeriou',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            397 =>
            array(
                'id' => 898,
                'wilayas_id' => 25,
                'name' => 'Ibn Ziad',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            398 =>
            array(
                'id' => 899,
                'wilayas_id' => 26,
                'name' => 'Medea',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            399 =>
            array(
                'id' => 900,
                'wilayas_id' => 26,
                'name' => 'Ouzera',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            400 =>
            array(
                'id' => 901,
                'wilayas_id' => 26,
                'name' => 'Ouled Maaref',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            401 =>
            array(
                'id' => 902,
                'wilayas_id' => 26,
                'name' => 'Ain Boucif',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            402 =>
            array(
                'id' => 903,
                'wilayas_id' => 26,
                'name' => 'Aissaouia',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            403 =>
            array(
                'id' => 904,
                'wilayas_id' => 26,
                'name' => 'Ouled Deide',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            404 =>
            array(
                'id' => 905,
                'wilayas_id' => 26,
                'name' => 'El Omaria',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            405 =>
            array(
                'id' => 906,
                'wilayas_id' => 26,
                'name' => 'Derrag',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            406 =>
            array(
                'id' => 907,
                'wilayas_id' => 26,
                'name' => 'El Guelbelkebir',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            407 =>
            array(
                'id' => 908,
                'wilayas_id' => 26,
                'name' => 'Bouaiche',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            408 =>
            array(
                'id' => 909,
                'wilayas_id' => 26,
                'name' => 'Mezerena',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            409 =>
            array(
                'id' => 910,
                'wilayas_id' => 26,
                'name' => 'Ouled Brahim',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            410 =>
            array(
                'id' => 911,
                'wilayas_id' => 26,
                'name' => 'Tizi Mahdi',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            411 =>
            array(
                'id' => 912,
                'wilayas_id' => 26,
                'name' => 'Sidi Ziane',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            412 =>
            array(
                'id' => 913,
                'wilayas_id' => 26,
                'name' => 'Tamesguida',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            413 =>
            array(
                'id' => 914,
                'wilayas_id' => 26,
                'name' => 'El Hamdania',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            414 =>
            array(
                'id' => 915,
                'wilayas_id' => 26,
                'name' => 'Kef Lakhdar',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            415 =>
            array(
                'id' => 916,
                'wilayas_id' => 26,
                'name' => 'Chelalet El Adhaoura',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            416 =>
            array(
                'id' => 917,
                'wilayas_id' => 26,
                'name' => 'Bouskene',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            417 =>
            array(
                'id' => 918,
                'wilayas_id' => 26,
                'name' => 'Rebaia',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            418 =>
            array(
                'id' => 919,
                'wilayas_id' => 26,
                'name' => 'Bouchrahil',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            419 =>
            array(
                'id' => 920,
                'wilayas_id' => 26,
                'name' => 'Ouled Hellal',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            420 =>
            array(
                'id' => 921,
                'wilayas_id' => 26,
                'name' => 'Tafraout',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            421 =>
            array(
                'id' => 922,
                'wilayas_id' => 26,
                'name' => 'Baata',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            422 =>
            array(
                'id' => 923,
                'wilayas_id' => 26,
                'name' => 'Boghar',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            423 =>
            array(
                'id' => 924,
                'wilayas_id' => 26,
                'name' => 'Sidi Naamane',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            424 =>
            array(
                'id' => 925,
                'wilayas_id' => 26,
                'name' => 'Ouled Bouachra',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            425 =>
            array(
                'id' => 926,
                'wilayas_id' => 26,
                'name' => 'Sidi Zahar',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            426 =>
            array(
                'id' => 927,
                'wilayas_id' => 26,
                'name' => 'Oued Harbil',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            427 =>
            array(
                'id' => 928,
                'wilayas_id' => 26,
                'name' => 'Benchicao',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            428 =>
            array(
                'id' => 929,
                'wilayas_id' => 26,
                'name' => 'Sidi Damed',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            429 =>
            array(
                'id' => 930,
                'wilayas_id' => 26,
                'name' => 'Aziz',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            430 =>
            array(
                'id' => 931,
                'wilayas_id' => 26,
                'name' => 'Souagui',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            431 =>
            array(
                'id' => 932,
                'wilayas_id' => 26,
                'name' => 'Zoubiria',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            432 =>
            array(
                'id' => 933,
                'wilayas_id' => 26,
                'name' => 'Ksar El Boukhari',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            433 =>
            array(
                'id' => 934,
                'wilayas_id' => 26,
                'name' => 'El Azizia',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            434 =>
            array(
                'id' => 935,
                'wilayas_id' => 26,
                'name' => 'Djouab',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            435 =>
            array(
                'id' => 936,
                'wilayas_id' => 26,
                'name' => 'Chahbounia',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            436 =>
            array(
                'id' => 937,
                'wilayas_id' => 26,
                'name' => 'Meghraoua',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            437 =>
            array(
                'id' => 938,
                'wilayas_id' => 26,
                'name' => 'Cheniguel',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            438 =>
            array(
                'id' => 939,
                'wilayas_id' => 26,
                'name' => 'Ain Ouksir',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            439 =>
            array(
                'id' => 940,
                'wilayas_id' => 26,
                'name' => 'Oum El Djalil',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            440 =>
            array(
                'id' => 941,
                'wilayas_id' => 26,
                'name' => 'Ouamri',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            441 =>
            array(
                'id' => 942,
                'wilayas_id' => 26,
                'name' => 'Si Mahdjoub',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            442 =>
            array(
                'id' => 943,
                'wilayas_id' => 26,
                'name' => 'Tlatet Eddouair',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            443 =>
            array(
                'id' => 944,
                'wilayas_id' => 26,
                'name' => 'Beni Slimane',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            444 =>
            array(
                'id' => 945,
                'wilayas_id' => 26,
                'name' => 'Berrouaghia',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            445 =>
            array(
                'id' => 946,
                'wilayas_id' => 26,
                'name' => 'Seghouane',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            446 =>
            array(
                'id' => 947,
                'wilayas_id' => 26,
                'name' => 'Meftaha',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            447 =>
            array(
                'id' => 948,
                'wilayas_id' => 26,
                'name' => 'Mihoub',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            448 =>
            array(
                'id' => 949,
                'wilayas_id' => 26,
                'name' => 'Boughezoul',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            449 =>
            array(
                'id' => 950,
                'wilayas_id' => 26,
                'name' => 'Tablat',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            450 =>
            array(
                'id' => 951,
                'wilayas_id' => 26,
                'name' => 'Deux Bassins',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            451 =>
            array(
                'id' => 952,
                'wilayas_id' => 26,
                'name' => 'Draa Essamar',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            452 =>
            array(
                'id' => 953,
                'wilayas_id' => 26,
                'name' => 'Sidi Errabia',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            453 =>
            array(
                'id' => 954,
                'wilayas_id' => 26,
                'name' => 'Bir Ben Laabed',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            454 =>
            array(
                'id' => 955,
                'wilayas_id' => 26,
                'name' => 'El Ouinet',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            455 =>
            array(
                'id' => 956,
                'wilayas_id' => 26,
                'name' => 'Ouled Antar',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            456 =>
            array(
                'id' => 957,
                'wilayas_id' => 26,
                'name' => 'Bouaichoune',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            457 =>
            array(
                'id' => 958,
                'wilayas_id' => 26,
                'name' => 'Hannacha',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            458 =>
            array(
                'id' => 959,
                'wilayas_id' => 26,
                'name' => 'Sedraia',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            459 =>
            array(
                'id' => 960,
                'wilayas_id' => 26,
                'name' => 'Medjebar',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            460 =>
            array(
                'id' => 961,
                'wilayas_id' => 26,
                'name' => 'Khams Djouamaa',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            461 =>
            array(
                'id' => 962,
                'wilayas_id' => 26,
                'name' => 'Saneg',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            462 =>
            array(
                'id' => 963,
                'wilayas_id' => 27,
                'name' => 'Mostaganem',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            463 =>
            array(
                'id' => 964,
                'wilayas_id' => 27,
                'name' => 'Sayada',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            464 =>
            array(
                'id' => 965,
                'wilayas_id' => 27,
                'name' => 'Fornaka',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            465 =>
            array(
                'id' => 966,
                'wilayas_id' => 27,
                'name' => 'Stidia',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            466 =>
            array(
                'id' => 967,
                'wilayas_id' => 27,
                'name' => 'Ain Nouissy',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            467 =>
            array(
                'id' => 968,
                'wilayas_id' => 27,
                'name' => 'Hassi Maameche',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            468 =>
            array(
                'id' => 969,
                'wilayas_id' => 27,
                'name' => 'Ain Tadles',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            469 =>
            array(
                'id' => 970,
                'wilayas_id' => 27,
                'name' => 'Sour',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            470 =>
            array(
                'id' => 971,
                'wilayas_id' => 27,
                'name' => 'Oued El Kheir',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            471 =>
            array(
                'id' => 972,
                'wilayas_id' => 27,
                'name' => 'Sidi Bellater',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            472 =>
            array(
                'id' => 973,
                'wilayas_id' => 27,
                'name' => 'Kheiredine',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            473 =>
            array(
                'id' => 974,
                'wilayas_id' => 27,
                'name' => 'Sidi Ali',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            474 =>
            array(
                'id' => 975,
                'wilayas_id' => 27,
                'name' => 'Abdelmalek Ramdane',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            475 =>
            array(
                'id' => 976,
                'wilayas_id' => 27,
                'name' => 'Hadjadj',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            476 =>
            array(
                'id' => 977,
                'wilayas_id' => 27,
                'name' => 'Nekmaria',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            477 =>
            array(
                'id' => 978,
                'wilayas_id' => 27,
                'name' => 'Sidi Lakhdar',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            478 =>
            array(
                'id' => 979,
                'wilayas_id' => 27,
                'name' => 'Achaacha',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            479 =>
            array(
                'id' => 980,
                'wilayas_id' => 27,
                'name' => 'Khadra',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            480 =>
            array(
                'id' => 981,
                'wilayas_id' => 27,
                'name' => 'Bouguirat',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            481 =>
            array(
                'id' => 982,
                'wilayas_id' => 27,
                'name' => 'Sirat',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            482 =>
            array(
                'id' => 983,
                'wilayas_id' => 27,
                'name' => 'Ain Sidi Cherif',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            483 =>
            array(
                'id' => 984,
                'wilayas_id' => 27,
                'name' => 'Mesra',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            484 =>
            array(
                'id' => 985,
                'wilayas_id' => 27,
                'name' => 'Mansourah',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            485 =>
            array(
                'id' => 986,
                'wilayas_id' => 27,
                'name' => 'Souaflia',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            486 =>
            array(
                'id' => 987,
                'wilayas_id' => 27,
                'name' => 'Ouled Boughalem',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            487 =>
            array(
                'id' => 988,
                'wilayas_id' => 27,
                'name' => 'Ouled Maallah',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            488 =>
            array(
                'id' => 989,
                'wilayas_id' => 27,
                'name' => 'Mezghrane',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            489 =>
            array(
                'id' => 990,
                'wilayas_id' => 27,
                'name' => 'Ain Boudinar',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            490 =>
            array(
                'id' => 991,
                'wilayas_id' => 27,
                'name' => 'Tazgait',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            491 =>
            array(
                'id' => 992,
                'wilayas_id' => 27,
                'name' => 'Safsaf',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            492 =>
            array(
                'id' => 993,
                'wilayas_id' => 27,
                'name' => 'Touahria',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            493 =>
            array(
                'id' => 994,
                'wilayas_id' => 27,
                'name' => 'El Hassiane',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            494 =>
            array(
                'id' => 995,
                'wilayas_id' => 28,
                'name' => 'Msila',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            495 =>
            array(
                'id' => 996,
                'wilayas_id' => 28,
                'name' => 'Maadid',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            496 =>
            array(
                'id' => 997,
                'wilayas_id' => 28,
                'name' => 'Hammam Dhalaa',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            497 =>
            array(
                'id' => 998,
                'wilayas_id' => 28,
                'name' => 'Ouled Derradj',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            498 =>
            array(
                'id' => 999,
                'wilayas_id' => 28,
                'name' => 'Tarmount',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            499 =>
            array(
                'id' => 1000,
                'wilayas_id' => 28,
                'name' => 'Mtarfa',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
        ));
        DB::table('communes')->insert(array(
            0 =>
            array(
                'id' => 1001,
                'wilayas_id' => 28,
                'name' => 'Khoubana',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            1 =>
            array(
                'id' => 1002,
                'wilayas_id' => 28,
                'name' => 'M\'cif',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            2 =>
            array(
                'id' => 1003,
                'wilayas_id' => 28,
                'name' => 'Chellal',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            3 =>
            array(
                'id' => 1004,
                'wilayas_id' => 28,
                'name' => 'Ouled Madhi',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            4 =>
            array(
                'id' => 1005,
                'wilayas_id' => 28,
                'name' => 'Magra',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            5 =>
            array(
                'id' => 1006,
                'wilayas_id' => 28,
                'name' => 'Berhoum',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            6 =>
            array(
                'id' => 1007,
                'wilayas_id' => 28,
                'name' => 'Ain Khadra',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            7 =>
            array(
                'id' => 1008,
                'wilayas_id' => 28,
                'name' => 'Ouled Addi Guebala',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            8 =>
            array(
                'id' => 1009,
                'wilayas_id' => 28,
                'name' => 'Belaiba',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            9 =>
            array(
                'id' => 1010,
                'wilayas_id' => 28,
                'name' => 'Sidi Aissa',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            10 =>
            array(
                'id' => 1011,
                'wilayas_id' => 28,
                'name' => 'Ain El Hadjel',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            11 =>
            array(
                'id' => 1012,
                'wilayas_id' => 28,
                'name' => 'Sidi Hadjeres',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            12 =>
            array(
                'id' => 1013,
                'wilayas_id' => 28,
                'name' => 'Ouanougha',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            13 =>
            array(
                'id' => 1014,
                'wilayas_id' => 28,
                'name' => 'Bou Saada',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            14 =>
            array(
                'id' => 1015,
                'wilayas_id' => 28,
                'name' => 'Ouled Sidi Brahim',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            15 =>
            array(
                'id' => 1016,
                'wilayas_id' => 28,
                'name' => 'Sidi Ameur',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            16 =>
            array(
                'id' => 1017,
                'wilayas_id' => 28,
                'name' => 'Tamsa',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            17 =>
            array(
                'id' => 1018,
                'wilayas_id' => 28,
                'name' => 'Ben Srour',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            18 =>
            array(
                'id' => 1019,
                'wilayas_id' => 28,
                'name' => 'Ouled Slimane',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            19 =>
            array(
                'id' => 1020,
                'wilayas_id' => 28,
                'name' => 'El Houamed',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            20 =>
            array(
                'id' => 1021,
                'wilayas_id' => 28,
                'name' => 'El Hamel',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            21 =>
            array(
                'id' => 1022,
                'wilayas_id' => 28,
                'name' => 'Ouled Mansour',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            22 =>
            array(
                'id' => 1023,
                'wilayas_id' => 28,
                'name' => 'Maarif',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            23 =>
            array(
                'id' => 1024,
                'wilayas_id' => 28,
                'name' => 'Dehahna',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            24 =>
            array(
                'id' => 1025,
                'wilayas_id' => 28,
                'name' => 'Bouti Sayah',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            25 =>
            array(
                'id' => 1026,
                'wilayas_id' => 28,
                'name' => 'Khettouti Sed Djir',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            26 =>
            array(
                'id' => 1027,
                'wilayas_id' => 28,
                'name' => 'Zarzour',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            27 =>
            array(
                'id' => 1028,
                'wilayas_id' => 28,
                'name' => 'Oued Chair',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            28 =>
            array(
                'id' => 1029,
                'wilayas_id' => 28,
                'name' => 'Benzouh',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            29 =>
            array(
                'id' => 1030,
                'wilayas_id' => 28,
                'name' => 'Bir Foda',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            30 =>
            array(
                'id' => 1031,
                'wilayas_id' => 28,
                'name' => 'Ain Fares',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            31 =>
            array(
                'id' => 1032,
                'wilayas_id' => 28,
                'name' => 'Sidi Mhamed',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            32 =>
            array(
                'id' => 1033,
                'wilayas_id' => 28,
                'name' => 'Ouled Atia',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            33 =>
            array(
                'id' => 1034,
                'wilayas_id' => 28,
                'name' => 'Souamaa',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            34 =>
            array(
                'id' => 1035,
                'wilayas_id' => 28,
                'name' => 'Ain El Melh',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            35 =>
            array(
                'id' => 1036,
                'wilayas_id' => 28,
                'name' => 'Medjedel',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            36 =>
            array(
                'id' => 1037,
                'wilayas_id' => 28,
                'name' => 'Slim',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            37 =>
            array(
                'id' => 1038,
                'wilayas_id' => 28,
                'name' => 'Ain Errich',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            38 =>
            array(
                'id' => 1039,
                'wilayas_id' => 28,
                'name' => 'Beni Ilmane',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            39 =>
            array(
                'id' => 1040,
                'wilayas_id' => 28,
                'name' => 'Oultene',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            40 =>
            array(
                'id' => 1041,
                'wilayas_id' => 28,
                'name' => 'Djebel Messaad',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            41 =>
            array(
                'id' => 1042,
                'wilayas_id' => 29,
                'name' => 'Mascara',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            42 =>
            array(
                'id' => 1043,
                'wilayas_id' => 29,
                'name' => 'Bou Hanifia',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            43 =>
            array(
                'id' => 1044,
                'wilayas_id' => 29,
                'name' => 'Tizi',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            44 =>
            array(
                'id' => 1045,
                'wilayas_id' => 29,
                'name' => 'Hacine',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            45 =>
            array(
                'id' => 1046,
                'wilayas_id' => 29,
                'name' => 'Maoussa',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            46 =>
            array(
                'id' => 1047,
                'wilayas_id' => 29,
                'name' => 'Teghennif',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            47 =>
            array(
                'id' => 1048,
                'wilayas_id' => 29,
                'name' => 'El Hachem',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            48 =>
            array(
                'id' => 1049,
                'wilayas_id' => 29,
                'name' => 'Sidi Kada',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            49 =>
            array(
                'id' => 1050,
                'wilayas_id' => 29,
                'name' => 'Zelmata',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            50 =>
            array(
                'id' => 1051,
                'wilayas_id' => 29,
                'name' => 'Oued El Abtal',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            51 =>
            array(
                'id' => 1052,
                'wilayas_id' => 29,
                'name' => 'Ain Ferah',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            52 =>
            array(
                'id' => 1053,
                'wilayas_id' => 29,
                'name' => 'Ghriss',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            53 =>
            array(
                'id' => 1054,
                'wilayas_id' => 29,
                'name' => 'Froha',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            54 =>
            array(
                'id' => 1055,
                'wilayas_id' => 29,
                'name' => 'Matemore',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            55 =>
            array(
                'id' => 1056,
                'wilayas_id' => 29,
                'name' => 'Makdha',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            56 =>
            array(
                'id' => 1057,
                'wilayas_id' => 29,
                'name' => 'Sidi Boussaid',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            57 =>
            array(
                'id' => 1058,
                'wilayas_id' => 29,
                'name' => 'El Bordj',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            58 =>
            array(
                'id' => 1059,
                'wilayas_id' => 29,
                'name' => 'Ain Fekan',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            59 =>
            array(
                'id' => 1060,
                'wilayas_id' => 29,
                'name' => 'Benian',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            60 =>
            array(
                'id' => 1061,
                'wilayas_id' => 29,
                'name' => 'Khalouia',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            61 =>
            array(
                'id' => 1062,
                'wilayas_id' => 29,
                'name' => 'El Menaouer',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            62 =>
            array(
                'id' => 1063,
                'wilayas_id' => 29,
                'name' => 'Oued Taria',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            63 =>
            array(
                'id' => 1064,
                'wilayas_id' => 29,
                'name' => 'Aouf',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            64 =>
            array(
                'id' => 1065,
                'wilayas_id' => 29,
                'name' => 'Ain Fares',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            65 =>
            array(
                'id' => 1066,
                'wilayas_id' => 29,
                'name' => 'Ain Frass',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            66 =>
            array(
                'id' => 1067,
                'wilayas_id' => 29,
                'name' => 'Sig',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            67 =>
            array(
                'id' => 1068,
                'wilayas_id' => 29,
                'name' => 'Oggaz',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            68 =>
            array(
                'id' => 1069,
                'wilayas_id' => 29,
                'name' => 'Alaimia',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            69 =>
            array(
                'id' => 1070,
                'wilayas_id' => 29,
                'name' => 'El Gaada',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            70 =>
            array(
                'id' => 1071,
                'wilayas_id' => 29,
                'name' => 'Zahana',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            71 =>
            array(
                'id' => 1072,
                'wilayas_id' => 29,
                'name' => 'Mohammadia',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            72 =>
            array(
                'id' => 1073,
                'wilayas_id' => 29,
                'name' => 'Sidi Abdelmoumene',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            73 =>
            array(
                'id' => 1074,
                'wilayas_id' => 29,
                'name' => 'Ferraguig',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            74 =>
            array(
                'id' => 1075,
                'wilayas_id' => 29,
                'name' => 'El Ghomri',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            75 =>
            array(
                'id' => 1076,
                'wilayas_id' => 29,
                'name' => 'Sedjerara',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            76 =>
            array(
                'id' => 1077,
                'wilayas_id' => 29,
                'name' => 'Moctadouz',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            77 =>
            array(
                'id' => 1078,
                'wilayas_id' => 29,
                'name' => 'Bou Henni',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            78 =>
            array(
                'id' => 1079,
                'wilayas_id' => 29,
                'name' => 'Guettena',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            79 =>
            array(
                'id' => 1080,
                'wilayas_id' => 29,
                'name' => 'El Mamounia',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            80 =>
            array(
                'id' => 1081,
                'wilayas_id' => 29,
                'name' => 'El Keurt',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            81 =>
            array(
                'id' => 1082,
                'wilayas_id' => 29,
                'name' => 'Gharrous',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            82 =>
            array(
                'id' => 1083,
                'wilayas_id' => 29,
                'name' => 'Gherdjoum',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            83 =>
            array(
                'id' => 1084,
                'wilayas_id' => 29,
                'name' => 'Chorfa',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            84 =>
            array(
                'id' => 1085,
                'wilayas_id' => 29,
                'name' => 'Ras Ain Amirouche',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            85 =>
            array(
                'id' => 1086,
                'wilayas_id' => 29,
                'name' => 'Nesmot',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            86 =>
            array(
                'id' => 1087,
                'wilayas_id' => 29,
                'name' => 'Sidi Abdeldjebar',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            87 =>
            array(
                'id' => 1088,
                'wilayas_id' => 29,
                'name' => 'Sehailia',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            88 =>
            array(
                'id' => 1089,
                'wilayas_id' => 30,
                'name' => 'Ouargla',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            89 =>
            array(
                'id' => 1090,
                'wilayas_id' => 30,
                'name' => 'Ain Beida',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            90 =>
            array(
                'id' => 1091,
                'wilayas_id' => 30,
                'name' => 'Ngoussa',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            91 =>
            array(
                'id' => 1092,
                'wilayas_id' => 30,
                'name' => 'Hassi Messaoud',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            92 =>
            array(
                'id' => 1093,
                'wilayas_id' => 30,
                'name' => 'Rouissat',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            93 =>
            array(
                'id' => 1094,
                'wilayas_id' => 30,
                'name' => 'Balidat Ameur',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            94 =>
            array(
                'id' => 1095,
                'wilayas_id' => 30,
                'name' => 'Tebesbest',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            95 =>
            array(
                'id' => 1096,
                'wilayas_id' => 30,
                'name' => 'Nezla',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            96 =>
            array(
                'id' => 1097,
                'wilayas_id' => 30,
                'name' => 'Zaouia El Abidia',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            97 =>
            array(
                'id' => 1098,
                'wilayas_id' => 30,
                'name' => 'Sidi Slimane',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            98 =>
            array(
                'id' => 1099,
                'wilayas_id' => 30,
                'name' => 'Sidi Khouiled',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            99 =>
            array(
                'id' => 1100,
                'wilayas_id' => 30,
                'name' => 'Hassi Ben Abdellah',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            100 =>
            array(
                'id' => 1101,
                'wilayas_id' => 30,
                'name' => 'Touggourt',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            101 =>
            array(
                'id' => 1102,
                'wilayas_id' => 30,
                'name' => 'El Hadjira',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            102 =>
            array(
                'id' => 1103,
                'wilayas_id' => 30,
                'name' => 'Taibet',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            103 =>
            array(
                'id' => 1104,
                'wilayas_id' => 30,
                'name' => 'Tamacine',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            104 =>
            array(
                'id' => 1105,
                'wilayas_id' => 30,
                'name' => 'Benaceur',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            105 =>
            array(
                'id' => 1106,
                'wilayas_id' => 30,
                'name' => 'Mnaguer',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            106 =>
            array(
                'id' => 1107,
                'wilayas_id' => 30,
                'name' => 'Megarine',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            107 =>
            array(
                'id' => 1108,
                'wilayas_id' => 30,
                'name' => 'El Allia',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            108 =>
            array(
                'id' => 1109,
                'wilayas_id' => 30,
                'name' => 'El Borma',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            109 =>
            array(
                'id' => 1110,
                'wilayas_id' => 31,
                'name' => 'Oran',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            110 =>
            array(
                'id' => 1111,
                'wilayas_id' => 31,
                'name' => 'Gdyel',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            111 =>
            array(
                'id' => 1112,
                'wilayas_id' => 31,
                'name' => 'Bir El Djir',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            112 =>
            array(
                'id' => 1113,
                'wilayas_id' => 31,
                'name' => 'Hassi Bounif',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            113 =>
            array(
                'id' => 1114,
                'wilayas_id' => 31,
                'name' => 'Es Senia',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            114 =>
            array(
                'id' => 1115,
                'wilayas_id' => 31,
                'name' => 'Arzew',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            115 =>
            array(
                'id' => 1116,
                'wilayas_id' => 31,
                'name' => 'Bethioua',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            116 =>
            array(
                'id' => 1117,
                'wilayas_id' => 31,
                'name' => 'Marsat El Hadjadj',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            117 =>
            array(
                'id' => 1118,
                'wilayas_id' => 31,
                'name' => 'Ain Turk',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            118 =>
            array(
                'id' => 1119,
                'wilayas_id' => 31,
                'name' => 'El Ancar',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            119 =>
            array(
                'id' => 1120,
                'wilayas_id' => 31,
                'name' => 'Oued Tlelat',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            120 =>
            array(
                'id' => 1121,
                'wilayas_id' => 31,
                'name' => 'Tafraoui',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            121 =>
            array(
                'id' => 1122,
                'wilayas_id' => 31,
                'name' => 'Sidi Chami',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            122 =>
            array(
                'id' => 1123,
                'wilayas_id' => 31,
                'name' => 'Boufatis',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            123 =>
            array(
                'id' => 1124,
                'wilayas_id' => 31,
                'name' => 'Mers El Kebir',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            124 =>
            array(
                'id' => 1125,
                'wilayas_id' => 31,
                'name' => 'Bousfer',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            125 =>
            array(
                'id' => 1126,
                'wilayas_id' => 31,
                'name' => 'El Karma',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            126 =>
            array(
                'id' => 1127,
                'wilayas_id' => 31,
                'name' => 'El Braya',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            127 =>
            array(
                'id' => 1128,
                'wilayas_id' => 31,
                'name' => 'Hassi Ben Okba',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            128 =>
            array(
                'id' => 1129,
                'wilayas_id' => 31,
                'name' => 'Ben Freha',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            129 =>
            array(
                'id' => 1130,
                'wilayas_id' => 31,
                'name' => 'Hassi Mefsoukh',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            130 =>
            array(
                'id' => 1131,
                'wilayas_id' => 31,
                'name' => 'Sidi Ben Yabka',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            131 =>
            array(
                'id' => 1132,
                'wilayas_id' => 31,
                'name' => 'Messerghin',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            132 =>
            array(
                'id' => 1133,
                'wilayas_id' => 31,
                'name' => 'Boutlelis',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            133 =>
            array(
                'id' => 1134,
                'wilayas_id' => 31,
                'name' => 'Ain Kerma',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            134 =>
            array(
                'id' => 1135,
                'wilayas_id' => 31,
                'name' => 'Ain Biya',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            135 =>
            array(
                'id' => 1136,
                'wilayas_id' => 32,
                'name' => 'El Bayadh',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            136 =>
            array(
                'id' => 1137,
                'wilayas_id' => 32,
                'name' => 'Rogassa',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            137 =>
            array(
                'id' => 1138,
                'wilayas_id' => 32,
                'name' => 'Stitten',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            138 =>
            array(
                'id' => 1139,
                'wilayas_id' => 32,
                'name' => 'Brezina',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            139 =>
            array(
                'id' => 1140,
                'wilayas_id' => 32,
                'name' => 'Ghassoul',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            140 =>
            array(
                'id' => 1141,
                'wilayas_id' => 32,
                'name' => 'Boualem',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            141 =>
            array(
                'id' => 1142,
                'wilayas_id' => 32,
                'name' => 'El Abiodh Sidi Cheikh',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            142 =>
            array(
                'id' => 1143,
                'wilayas_id' => 32,
                'name' => 'Ain El Orak',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            143 =>
            array(
                'id' => 1144,
                'wilayas_id' => 32,
                'name' => 'Arbaouat',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            144 =>
            array(
                'id' => 1145,
                'wilayas_id' => 32,
                'name' => 'Bougtoub',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            145 =>
            array(
                'id' => 1146,
                'wilayas_id' => 32,
                'name' => 'El Kheither',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            146 =>
            array(
                'id' => 1147,
                'wilayas_id' => 32,
                'name' => 'Kef El Ahmar',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            147 =>
            array(
                'id' => 1148,
                'wilayas_id' => 32,
                'name' => 'Boussemghoun',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            148 =>
            array(
                'id' => 1149,
                'wilayas_id' => 32,
                'name' => 'Chellala',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            149 =>
            array(
                'id' => 1150,
                'wilayas_id' => 32,
                'name' => 'Krakda',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            150 =>
            array(
                'id' => 1151,
                'wilayas_id' => 32,
                'name' => 'El Bnoud',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            151 =>
            array(
                'id' => 1152,
                'wilayas_id' => 32,
                'name' => 'Cheguig',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            152 =>
            array(
                'id' => 1153,
                'wilayas_id' => 32,
                'name' => 'Sidi Ameur',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            153 =>
            array(
                'id' => 1154,
                'wilayas_id' => 32,
                'name' => 'El Mehara',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            154 =>
            array(
                'id' => 1155,
                'wilayas_id' => 32,
                'name' => 'Tousmouline',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            155 =>
            array(
                'id' => 1156,
                'wilayas_id' => 32,
                'name' => 'Sidi Slimane',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            156 =>
            array(
                'id' => 1157,
                'wilayas_id' => 32,
                'name' => 'Sidi Tifour',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            157 =>
            array(
                'id' => 1158,
                'wilayas_id' => 33,
                'name' => 'Illizi',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            158 =>
            array(
                'id' => 1159,
                'wilayas_id' => 33,
                'name' => 'Djanet',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            159 =>
            array(
                'id' => 1160,
                'wilayas_id' => 33,
                'name' => 'Debdeb',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            160 =>
            array(
                'id' => 1161,
                'wilayas_id' => 33,
                'name' => 'Bordj Omar Driss',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            161 =>
            array(
                'id' => 1162,
                'wilayas_id' => 33,
                'name' => 'Bordj El Haouasse',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            162 =>
            array(
                'id' => 1163,
                'wilayas_id' => 33,
                'name' => 'In Amenas',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            163 =>
            array(
                'id' => 1164,
                'wilayas_id' => 34,
                'name' => 'Bordj Bou Arreridj',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            164 =>
            array(
                'id' => 1165,
                'wilayas_id' => 34,
                'name' => 'Ras El Oued',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            165 =>
            array(
                'id' => 1166,
                'wilayas_id' => 34,
                'name' => 'Bordj Zemoura',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            166 =>
            array(
                'id' => 1167,
                'wilayas_id' => 34,
                'name' => 'Mansoura',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            167 =>
            array(
                'id' => 1168,
                'wilayas_id' => 34,
                'name' => 'El Mhir',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            168 =>
            array(
                'id' => 1169,
                'wilayas_id' => 34,
                'name' => 'Ben Daoud',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            169 =>
            array(
                'id' => 1170,
                'wilayas_id' => 34,
                'name' => 'El Achir',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            170 =>
            array(
                'id' => 1171,
                'wilayas_id' => 34,
                'name' => 'Ain Taghrout',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            171 =>
            array(
                'id' => 1172,
                'wilayas_id' => 34,
                'name' => 'Bordj Ghdir',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            172 =>
            array(
                'id' => 1173,
                'wilayas_id' => 34,
                'name' => 'Sidi Embarek',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            173 =>
            array(
                'id' => 1174,
                'wilayas_id' => 34,
                'name' => 'El Hamadia',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            174 =>
            array(
                'id' => 1175,
                'wilayas_id' => 34,
                'name' => 'Belimour',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            175 =>
            array(
                'id' => 1176,
                'wilayas_id' => 34,
                'name' => 'Medjana',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            176 =>
            array(
                'id' => 1177,
                'wilayas_id' => 34,
                'name' => 'Teniet En Nasr',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            177 =>
            array(
                'id' => 1178,
                'wilayas_id' => 34,
                'name' => 'Djaafra',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            178 =>
            array(
                'id' => 1179,
                'wilayas_id' => 34,
                'name' => 'El Main',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            179 =>
            array(
                'id' => 1180,
                'wilayas_id' => 34,
                'name' => 'Ouled Brahem',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            180 =>
            array(
                'id' => 1181,
                'wilayas_id' => 34,
                'name' => 'Ouled Dahmane',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            181 =>
            array(
                'id' => 1182,
                'wilayas_id' => 34,
                'name' => 'Hasnaoua',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            182 =>
            array(
                'id' => 1183,
                'wilayas_id' => 34,
                'name' => 'Khelil',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            183 =>
            array(
                'id' => 1184,
                'wilayas_id' => 34,
                'name' => 'Taglait',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            184 =>
            array(
                'id' => 1185,
                'wilayas_id' => 34,
                'name' => 'Ksour',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            185 =>
            array(
                'id' => 1186,
                'wilayas_id' => 34,
                'name' => 'Ouled Sidi Brahim',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            186 =>
            array(
                'id' => 1187,
                'wilayas_id' => 34,
                'name' => 'Tafreg',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            187 =>
            array(
                'id' => 1188,
                'wilayas_id' => 34,
                'name' => 'Colla',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            188 =>
            array(
                'id' => 1189,
                'wilayas_id' => 34,
                'name' => 'Tixter',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            189 =>
            array(
                'id' => 1190,
                'wilayas_id' => 34,
                'name' => 'El Ach',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            190 =>
            array(
                'id' => 1191,
                'wilayas_id' => 34,
                'name' => 'El Anseur',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            191 =>
            array(
                'id' => 1192,
                'wilayas_id' => 34,
                'name' => 'Tesmart',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            192 =>
            array(
                'id' => 1193,
                'wilayas_id' => 34,
                'name' => 'Ain Tesra',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            193 =>
            array(
                'id' => 1194,
                'wilayas_id' => 34,
                'name' => 'Bir Kasdali',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            194 =>
            array(
                'id' => 1195,
                'wilayas_id' => 34,
                'name' => 'Ghilassa',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            195 =>
            array(
                'id' => 1196,
                'wilayas_id' => 34,
                'name' => 'Rabta',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            196 =>
            array(
                'id' => 1197,
                'wilayas_id' => 34,
                'name' => 'Haraza',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            197 =>
            array(
                'id' => 1198,
                'wilayas_id' => 35,
                'name' => 'Boumerdes',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            198 =>
            array(
                'id' => 1199,
                'wilayas_id' => 35,
                'name' => 'Boudouaou',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            199 =>
            array(
                'id' => 1200,
                'wilayas_id' => 35,
                'name' => 'Afir',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            200 =>
            array(
                'id' => 1201,
                'wilayas_id' => 35,
                'name' => 'Bordj Menaiel',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            201 =>
            array(
                'id' => 1202,
                'wilayas_id' => 35,
                'name' => 'Baghlia',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            202 =>
            array(
                'id' => 1203,
                'wilayas_id' => 35,
                'name' => 'Sidi Daoud',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            203 =>
            array(
                'id' => 1204,
                'wilayas_id' => 35,
                'name' => 'Naciria',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            204 =>
            array(
                'id' => 1205,
                'wilayas_id' => 35,
                'name' => 'Djinet',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            205 =>
            array(
                'id' => 1206,
                'wilayas_id' => 35,
                'name' => 'Isser',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            206 =>
            array(
                'id' => 1207,
                'wilayas_id' => 35,
                'name' => 'Zemmouri',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            207 =>
            array(
                'id' => 1208,
                'wilayas_id' => 35,
                'name' => 'Si Mustapha',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            208 =>
            array(
                'id' => 1209,
                'wilayas_id' => 35,
                'name' => 'Tidjelabine',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            209 =>
            array(
                'id' => 1210,
                'wilayas_id' => 35,
                'name' => 'Chabet El Ameur',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            210 =>
            array(
                'id' => 1211,
                'wilayas_id' => 35,
                'name' => 'Thenia',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            211 =>
            array(
                'id' => 1212,
                'wilayas_id' => 35,
                'name' => 'Timezrit',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            212 =>
            array(
                'id' => 1213,
                'wilayas_id' => 35,
                'name' => 'Corso',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            213 =>
            array(
                'id' => 1214,
                'wilayas_id' => 35,
                'name' => 'Ouled Moussa',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            214 =>
            array(
                'id' => 1215,
                'wilayas_id' => 35,
                'name' => 'Larbatache',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            215 =>
            array(
                'id' => 1216,
                'wilayas_id' => 35,
                'name' => 'Bouzegza Keddara',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            216 =>
            array(
                'id' => 1217,
                'wilayas_id' => 35,
                'name' => 'Taourga',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            217 =>
            array(
                'id' => 1218,
                'wilayas_id' => 35,
                'name' => 'Ouled Aissa',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            218 =>
            array(
                'id' => 1219,
                'wilayas_id' => 35,
                'name' => 'Ben Choud',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            219 =>
            array(
                'id' => 1220,
                'wilayas_id' => 35,
                'name' => 'Dellys',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            220 =>
            array(
                'id' => 1221,
                'wilayas_id' => 35,
                'name' => 'Ammal',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            221 =>
            array(
                'id' => 1222,
                'wilayas_id' => 35,
                'name' => 'Beni Amrane',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            222 =>
            array(
                'id' => 1223,
                'wilayas_id' => 35,
                'name' => 'Souk El Had',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            223 =>
            array(
                'id' => 1224,
                'wilayas_id' => 35,
                'name' => 'Boudouaou El Bahri',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            224 =>
            array(
                'id' => 1225,
                'wilayas_id' => 35,
                'name' => 'Ouled Hedadj',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            225 =>
            array(
                'id' => 1226,
                'wilayas_id' => 35,
                'name' => 'Laghata',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            226 =>
            array(
                'id' => 1227,
                'wilayas_id' => 35,
                'name' => 'Hammedi',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            227 =>
            array(
                'id' => 1228,
                'wilayas_id' => 35,
                'name' => 'Khemis El Khechna',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            228 =>
            array(
                'id' => 1229,
                'wilayas_id' => 35,
                'name' => 'El Kharrouba',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            229 =>
            array(
                'id' => 1230,
                'wilayas_id' => 36,
                'name' => 'El Tarf',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            230 =>
            array(
                'id' => 1231,
                'wilayas_id' => 36,
                'name' => 'Bouhadjar',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            231 =>
            array(
                'id' => 1232,
                'wilayas_id' => 36,
                'name' => 'Ben Mhidi',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            232 =>
            array(
                'id' => 1233,
                'wilayas_id' => 36,
                'name' => 'Bougous',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            233 =>
            array(
                'id' => 1234,
                'wilayas_id' => 36,
                'name' => 'El Kala',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            234 =>
            array(
                'id' => 1235,
                'wilayas_id' => 36,
                'name' => 'Ain El Assel',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            235 =>
            array(
                'id' => 1236,
                'wilayas_id' => 36,
                'name' => 'El Aioun',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            236 =>
            array(
                'id' => 1237,
                'wilayas_id' => 36,
                'name' => 'Bouteldja',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            237 =>
            array(
                'id' => 1238,
                'wilayas_id' => 36,
                'name' => 'Souarekh',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            238 =>
            array(
                'id' => 1239,
                'wilayas_id' => 36,
                'name' => 'Berrihane',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            239 =>
            array(
                'id' => 1240,
                'wilayas_id' => 36,
                'name' => 'Lac Des Oiseaux',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            240 =>
            array(
                'id' => 1241,
                'wilayas_id' => 36,
                'name' => 'Chefia',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            241 =>
            array(
                'id' => 1242,
                'wilayas_id' => 36,
                'name' => 'Drean',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            242 =>
            array(
                'id' => 1243,
                'wilayas_id' => 36,
                'name' => 'Chihani',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            243 =>
            array(
                'id' => 1244,
                'wilayas_id' => 36,
                'name' => 'Chebaita Mokhtar',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            244 =>
            array(
                'id' => 1245,
                'wilayas_id' => 36,
                'name' => 'Besbes',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            245 =>
            array(
                'id' => 1246,
                'wilayas_id' => 36,
                'name' => 'Asfour',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            246 =>
            array(
                'id' => 1247,
                'wilayas_id' => 36,
                'name' => 'Echatt',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            247 =>
            array(
                'id' => 1248,
                'wilayas_id' => 36,
                'name' => 'Zerizer',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            248 =>
            array(
                'id' => 1249,
                'wilayas_id' => 36,
                'name' => 'Zitouna',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            249 =>
            array(
                'id' => 1250,
                'wilayas_id' => 36,
                'name' => 'Ain Kerma',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            250 =>
            array(
                'id' => 1251,
                'wilayas_id' => 36,
                'name' => 'Oued Zitoun',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            251 =>
            array(
                'id' => 1252,
                'wilayas_id' => 36,
                'name' => 'Hammam Beni Salah',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            252 =>
            array(
                'id' => 1253,
                'wilayas_id' => 36,
                'name' => 'Raml Souk',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            253 =>
            array(
                'id' => 1254,
                'wilayas_id' => 37,
                'name' => 'Tindouf',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            254 =>
            array(
                'id' => 1255,
                'wilayas_id' => 37,
                'name' => 'Oum El Assel',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            255 =>
            array(
                'id' => 1256,
                'wilayas_id' => 38,
                'name' => 'Tissemsilt',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            256 =>
            array(
                'id' => 1257,
                'wilayas_id' => 38,
                'name' => 'Bordj Bou Naama',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            257 =>
            array(
                'id' => 1258,
                'wilayas_id' => 38,
                'name' => 'Theniet El Had',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            258 =>
            array(
                'id' => 1259,
                'wilayas_id' => 38,
                'name' => 'Lazharia',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            259 =>
            array(
                'id' => 1260,
                'wilayas_id' => 38,
                'name' => 'Beni Chaib',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            260 =>
            array(
                'id' => 1261,
                'wilayas_id' => 38,
                'name' => 'Lardjem',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            261 =>
            array(
                'id' => 1262,
                'wilayas_id' => 38,
                'name' => 'Melaab',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            262 =>
            array(
                'id' => 1263,
                'wilayas_id' => 38,
                'name' => 'Sidi Lantri',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            263 =>
            array(
                'id' => 1264,
                'wilayas_id' => 38,
                'name' => 'Bordj El Emir Abdelkader',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            264 =>
            array(
                'id' => 1265,
                'wilayas_id' => 38,
                'name' => 'Layoune',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            265 =>
            array(
                'id' => 1266,
                'wilayas_id' => 38,
                'name' => 'Khemisti',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            266 =>
            array(
                'id' => 1267,
                'wilayas_id' => 38,
                'name' => 'Ouled Bessem',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            267 =>
            array(
                'id' => 1268,
                'wilayas_id' => 38,
                'name' => 'Ammari',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            268 =>
            array(
                'id' => 1269,
                'wilayas_id' => 38,
                'name' => 'Youssoufia',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            269 =>
            array(
                'id' => 1270,
                'wilayas_id' => 38,
                'name' => 'Sidi Boutouchent',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            270 =>
            array(
                'id' => 1271,
                'wilayas_id' => 38,
                'name' => 'Larbaa',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            271 =>
            array(
                'id' => 1272,
                'wilayas_id' => 38,
                'name' => 'Maasem',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            272 =>
            array(
                'id' => 1273,
                'wilayas_id' => 38,
                'name' => 'Sidi Abed',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            273 =>
            array(
                'id' => 1274,
                'wilayas_id' => 38,
                'name' => 'Tamalaht',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            274 =>
            array(
                'id' => 1275,
                'wilayas_id' => 38,
                'name' => 'Sidi Slimane',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            275 =>
            array(
                'id' => 1276,
                'wilayas_id' => 38,
                'name' => 'Boucaid',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            276 =>
            array(
                'id' => 1277,
                'wilayas_id' => 38,
                'name' => 'Beni Lahcene',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            277 =>
            array(
                'id' => 1278,
                'wilayas_id' => 39,
                'name' => 'El Oued',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            278 =>
            array(
                'id' => 1279,
                'wilayas_id' => 39,
                'name' => 'Robbah',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            279 =>
            array(
                'id' => 1280,
                'wilayas_id' => 39,
                'name' => 'Oued El Alenda',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            280 =>
            array(
                'id' => 1281,
                'wilayas_id' => 39,
                'name' => 'Bayadha',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            281 =>
            array(
                'id' => 1282,
                'wilayas_id' => 39,
                'name' => 'Nakhla',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            282 =>
            array(
                'id' => 1283,
                'wilayas_id' => 39,
                'name' => 'Guemar',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            283 =>
            array(
                'id' => 1284,
                'wilayas_id' => 39,
                'name' => 'Kouinine',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            284 =>
            array(
                'id' => 1285,
                'wilayas_id' => 39,
                'name' => 'Reguiba',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            285 =>
            array(
                'id' => 1286,
                'wilayas_id' => 39,
                'name' => 'Hamraia',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            286 =>
            array(
                'id' => 1287,
                'wilayas_id' => 39,
                'name' => 'Taghzout',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            287 =>
            array(
                'id' => 1288,
                'wilayas_id' => 39,
                'name' => 'Debila',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            288 =>
            array(
                'id' => 1289,
                'wilayas_id' => 39,
                'name' => 'Hassani Abdelkrim',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            289 =>
            array(
                'id' => 1290,
                'wilayas_id' => 39,
                'name' => 'Hassi Khelifa',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            290 =>
            array(
                'id' => 1291,
                'wilayas_id' => 39,
                'name' => 'Taleb Larbi',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            291 =>
            array(
                'id' => 1292,
                'wilayas_id' => 39,
                'name' => 'Douar El Ma',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            292 =>
            array(
                'id' => 1293,
                'wilayas_id' => 39,
                'name' => 'Sidi Aoun',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            293 =>
            array(
                'id' => 1294,
                'wilayas_id' => 39,
                'name' => 'Trifaoui',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            294 =>
            array(
                'id' => 1295,
                'wilayas_id' => 39,
                'name' => 'Magrane',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            295 =>
            array(
                'id' => 1296,
                'wilayas_id' => 39,
                'name' => 'Beni Guecha',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            296 =>
            array(
                'id' => 1297,
                'wilayas_id' => 39,
                'name' => 'Ourmas',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            297 =>
            array(
                'id' => 1298,
                'wilayas_id' => 39,
                'name' => 'Still',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            298 =>
            array(
                'id' => 1299,
                'wilayas_id' => 39,
                'name' => 'Mrara',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            299 =>
            array(
                'id' => 1300,
                'wilayas_id' => 39,
                'name' => 'Sidi Khellil',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            300 =>
            array(
                'id' => 1301,
                'wilayas_id' => 39,
                'name' => 'Tendla',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            301 =>
            array(
                'id' => 1302,
                'wilayas_id' => 39,
                'name' => 'El Ogla',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            302 =>
            array(
                'id' => 1303,
                'wilayas_id' => 39,
                'name' => 'Mih Ouansa',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            303 =>
            array(
                'id' => 1304,
                'wilayas_id' => 39,
                'name' => 'El Mghair',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            304 =>
            array(
                'id' => 1305,
                'wilayas_id' => 39,
                'name' => 'Djamaa',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            305 =>
            array(
                'id' => 1306,
                'wilayas_id' => 39,
                'name' => 'Oum Touyour',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            306 =>
            array(
                'id' => 1307,
                'wilayas_id' => 39,
                'name' => 'Sidi Amrane',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            307 =>
            array(
                'id' => 1308,
                'wilayas_id' => 40,
                'name' => 'Khenchela',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            308 =>
            array(
                'id' => 1309,
                'wilayas_id' => 40,
                'name' => 'Mtoussa',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            309 =>
            array(
                'id' => 1310,
                'wilayas_id' => 40,
                'name' => 'Kais',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            310 =>
            array(
                'id' => 1311,
                'wilayas_id' => 40,
                'name' => 'Baghai',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            311 =>
            array(
                'id' => 1312,
                'wilayas_id' => 40,
                'name' => 'El Hamma',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            312 =>
            array(
                'id' => 1313,
                'wilayas_id' => 40,
                'name' => 'Ain Touila',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            313 =>
            array(
                'id' => 1314,
                'wilayas_id' => 40,
                'name' => 'Taouzianat',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            314 =>
            array(
                'id' => 1315,
                'wilayas_id' => 40,
                'name' => 'Bouhmama',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            315 =>
            array(
                'id' => 1316,
                'wilayas_id' => 40,
                'name' => 'El Oueldja',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            316 =>
            array(
                'id' => 1317,
                'wilayas_id' => 40,
                'name' => 'Remila',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            317 =>
            array(
                'id' => 1318,
                'wilayas_id' => 40,
                'name' => 'Cherchar',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            318 =>
            array(
                'id' => 1319,
                'wilayas_id' => 40,
                'name' => 'Djellal',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            319 =>
            array(
                'id' => 1320,
                'wilayas_id' => 40,
                'name' => 'Babar',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            320 =>
            array(
                'id' => 1321,
                'wilayas_id' => 40,
                'name' => 'Tamza',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            321 =>
            array(
                'id' => 1322,
                'wilayas_id' => 40,
                'name' => 'Ensigha',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            322 =>
            array(
                'id' => 1323,
                'wilayas_id' => 40,
                'name' => 'Ouled Rechache',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            323 =>
            array(
                'id' => 1324,
                'wilayas_id' => 40,
                'name' => 'El Mahmal',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            324 =>
            array(
                'id' => 1325,
                'wilayas_id' => 40,
                'name' => 'Msara',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            325 =>
            array(
                'id' => 1326,
                'wilayas_id' => 40,
                'name' => 'Yabous',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            326 =>
            array(
                'id' => 1327,
                'wilayas_id' => 40,
                'name' => 'Khirane',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            327 =>
            array(
                'id' => 1328,
                'wilayas_id' => 40,
                'name' => 'Chelia',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            328 =>
            array(
                'id' => 1329,
                'wilayas_id' => 41,
                'name' => 'Souk Ahras',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            329 =>
            array(
                'id' => 1330,
                'wilayas_id' => 41,
                'name' => 'Sedrata',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            330 =>
            array(
                'id' => 1331,
                'wilayas_id' => 41,
                'name' => 'Hanancha',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            331 =>
            array(
                'id' => 1332,
                'wilayas_id' => 41,
                'name' => 'Mechroha',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            332 =>
            array(
                'id' => 1333,
                'wilayas_id' => 41,
                'name' => 'Ouled Driss',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            333 =>
            array(
                'id' => 1334,
                'wilayas_id' => 41,
                'name' => 'Tiffech',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            334 =>
            array(
                'id' => 1335,
                'wilayas_id' => 41,
                'name' => 'Zaarouria',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            335 =>
            array(
                'id' => 1336,
                'wilayas_id' => 41,
                'name' => 'Taoura',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            336 =>
            array(
                'id' => 1337,
                'wilayas_id' => 41,
                'name' => 'Drea',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            337 =>
            array(
                'id' => 1338,
                'wilayas_id' => 41,
                'name' => 'Haddada',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            338 =>
            array(
                'id' => 1339,
                'wilayas_id' => 41,
                'name' => 'Khedara',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            339 =>
            array(
                'id' => 1340,
                'wilayas_id' => 41,
                'name' => 'Merahna',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            340 =>
            array(
                'id' => 1341,
                'wilayas_id' => 41,
                'name' => 'Ouled Moumen',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            341 =>
            array(
                'id' => 1342,
                'wilayas_id' => 41,
                'name' => 'Bir Bouhouche',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            342 =>
            array(
                'id' => 1343,
                'wilayas_id' => 41,
                'name' => 'Mdaourouche',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            343 =>
            array(
                'id' => 1344,
                'wilayas_id' => 41,
                'name' => 'Oum El Adhaim',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            344 =>
            array(
                'id' => 1345,
                'wilayas_id' => 41,
                'name' => 'Ain Zana',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            345 =>
            array(
                'id' => 1346,
                'wilayas_id' => 41,
                'name' => 'Ain Soltane',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            346 =>
            array(
                'id' => 1347,
                'wilayas_id' => 41,
                'name' => 'Quillen',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            347 =>
            array(
                'id' => 1348,
                'wilayas_id' => 41,
                'name' => 'Sidi Fredj',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            348 =>
            array(
                'id' => 1349,
                'wilayas_id' => 41,
                'name' => 'Safel El Ouiden',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            349 =>
            array(
                'id' => 1350,
                'wilayas_id' => 41,
                'name' => 'Ragouba',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            350 =>
            array(
                'id' => 1351,
                'wilayas_id' => 41,
                'name' => 'Khemissa',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            351 =>
            array(
                'id' => 1352,
                'wilayas_id' => 41,
                'name' => 'Oued Keberit',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            352 =>
            array(
                'id' => 1353,
                'wilayas_id' => 41,
                'name' => 'Terraguelt',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            353 =>
            array(
                'id' => 1354,
                'wilayas_id' => 41,
                'name' => 'Zouabi',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            354 =>
            array(
                'id' => 1355,
                'wilayas_id' => 42,
                'name' => 'Tipaza',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            355 =>
            array(
                'id' => 1356,
                'wilayas_id' => 42,
                'name' => 'Menaceur',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            356 =>
            array(
                'id' => 1357,
                'wilayas_id' => 42,
                'name' => 'Larhat',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            357 =>
            array(
                'id' => 1358,
                'wilayas_id' => 42,
                'name' => 'Douaouda',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            358 =>
            array(
                'id' => 1359,
                'wilayas_id' => 42,
                'name' => 'Bourkika',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            359 =>
            array(
                'id' => 1360,
                'wilayas_id' => 42,
                'name' => 'Khemisti',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            360 =>
            array(
                'id' => 1361,
                'wilayas_id' => 42,
                'name' => 'Aghabal',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            361 =>
            array(
                'id' => 1362,
                'wilayas_id' => 42,
                'name' => 'Hadjout',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            362 =>
            array(
                'id' => 1363,
                'wilayas_id' => 42,
                'name' => 'Sidi Amar',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            363 =>
            array(
                'id' => 1364,
                'wilayas_id' => 42,
                'name' => 'Gouraya',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            364 =>
            array(
                'id' => 1365,
                'wilayas_id' => 42,
                'name' => 'Nodor',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            365 =>
            array(
                'id' => 1366,
                'wilayas_id' => 42,
                'name' => 'Chaiba',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            366 =>
            array(
                'id' => 1367,
                'wilayas_id' => 42,
                'name' => 'Ain Tagourait',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            367 =>
            array(
                'id' => 1368,
                'wilayas_id' => 42,
                'name' => 'Cherchel',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            368 =>
            array(
                'id' => 1369,
                'wilayas_id' => 42,
                'name' => 'Damous',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            369 =>
            array(
                'id' => 1370,
                'wilayas_id' => 42,
                'name' => 'Meurad',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            370 =>
            array(
                'id' => 1371,
                'wilayas_id' => 42,
                'name' => 'Fouka',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            371 =>
            array(
                'id' => 1372,
                'wilayas_id' => 42,
                'name' => 'Bou Ismail',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            372 =>
            array(
                'id' => 1373,
                'wilayas_id' => 42,
                'name' => 'Ahmer El Ain',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            373 =>
            array(
                'id' => 1374,
                'wilayas_id' => 42,
                'name' => 'Bou Haroun',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            374 =>
            array(
                'id' => 1375,
                'wilayas_id' => 42,
                'name' => 'Sidi Ghiles',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            375 =>
            array(
                'id' => 1376,
                'wilayas_id' => 42,
                'name' => 'Messelmoun',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            376 =>
            array(
                'id' => 1377,
                'wilayas_id' => 42,
                'name' => 'Sidi Rached',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            377 =>
            array(
                'id' => 1378,
                'wilayas_id' => 42,
                'name' => 'Kolea',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            378 =>
            array(
                'id' => 1379,
                'wilayas_id' => 42,
                'name' => 'Attatba',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            379 =>
            array(
                'id' => 1380,
                'wilayas_id' => 42,
                'name' => 'Sidi Semiane',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            380 =>
            array(
                'id' => 1381,
                'wilayas_id' => 42,
                'name' => 'Beni Milleuk',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            381 =>
            array(
                'id' => 1382,
                'wilayas_id' => 42,
                'name' => 'Hadjerat Ennous',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            382 =>
            array(
                'id' => 1383,
                'wilayas_id' => 43,
                'name' => 'Mila',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            383 =>
            array(
                'id' => 1384,
                'wilayas_id' => 43,
                'name' => 'Ferdjioua',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            384 =>
            array(
                'id' => 1385,
                'wilayas_id' => 43,
                'name' => 'Chelghoum Laid',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            385 =>
            array(
                'id' => 1386,
                'wilayas_id' => 43,
                'name' => 'Oued Athmenia',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            386 =>
            array(
                'id' => 1387,
                'wilayas_id' => 43,
                'name' => 'Ain Mellouk',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            387 =>
            array(
                'id' => 1388,
                'wilayas_id' => 43,
                'name' => 'Telerghma',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            388 =>
            array(
                'id' => 1389,
                'wilayas_id' => 43,
                'name' => 'Oued Seguen',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            389 =>
            array(
                'id' => 1390,
                'wilayas_id' => 43,
                'name' => 'Tadjenanet',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            390 =>
            array(
                'id' => 1391,
                'wilayas_id' => 43,
                'name' => 'Benyahia Abderrahmane',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            391 =>
            array(
                'id' => 1392,
                'wilayas_id' => 43,
                'name' => 'Oued Endja',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            392 =>
            array(
                'id' => 1393,
                'wilayas_id' => 43,
                'name' => 'Ahmed Rachedi',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            393 =>
            array(
                'id' => 1394,
                'wilayas_id' => 43,
                'name' => 'Ouled Khalouf',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            394 =>
            array(
                'id' => 1395,
                'wilayas_id' => 43,
                'name' => 'Tiberguent',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            395 =>
            array(
                'id' => 1396,
                'wilayas_id' => 43,
                'name' => 'Bouhatem',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            396 =>
            array(
                'id' => 1397,
                'wilayas_id' => 43,
                'name' => 'Rouached',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            397 =>
            array(
                'id' => 1398,
                'wilayas_id' => 43,
                'name' => 'Tessala Lamatai',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            398 =>
            array(
                'id' => 1399,
                'wilayas_id' => 43,
                'name' => 'Grarem Gouga',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            399 =>
            array(
                'id' => 1400,
                'wilayas_id' => 43,
                'name' => 'Sidi Merouane',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            400 =>
            array(
                'id' => 1401,
                'wilayas_id' => 43,
                'name' => 'Tassadane Haddada',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            401 =>
            array(
                'id' => 1402,
                'wilayas_id' => 43,
                'name' => 'Derradji Bousselah',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            402 =>
            array(
                'id' => 1403,
                'wilayas_id' => 43,
                'name' => 'Minar Zarza',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            403 =>
            array(
                'id' => 1404,
                'wilayas_id' => 43,
                'name' => 'Amira Arras',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            404 =>
            array(
                'id' => 1405,
                'wilayas_id' => 43,
                'name' => 'Terrai Bainen',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            405 =>
            array(
                'id' => 1406,
                'wilayas_id' => 43,
                'name' => 'Hamala',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            406 =>
            array(
                'id' => 1407,
                'wilayas_id' => 43,
                'name' => 'Ain Tine',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            407 =>
            array(
                'id' => 1408,
                'wilayas_id' => 43,
                'name' => 'El Mechira',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            408 =>
            array(
                'id' => 1409,
                'wilayas_id' => 43,
                'name' => 'Sidi Khelifa',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            409 =>
            array(
                'id' => 1410,
                'wilayas_id' => 43,
                'name' => 'Zeghaia',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            410 =>
            array(
                'id' => 1411,
                'wilayas_id' => 43,
                'name' => 'Elayadi Barbes',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            411 =>
            array(
                'id' => 1412,
                'wilayas_id' => 43,
                'name' => 'Ain Beida Harriche',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            412 =>
            array(
                'id' => 1413,
                'wilayas_id' => 43,
                'name' => 'Yahia Beniguecha',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            413 =>
            array(
                'id' => 1414,
                'wilayas_id' => 43,
                'name' => 'Chigara',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            414 =>
            array(
                'id' => 1415,
                'wilayas_id' => 44,
                'name' => 'Ain Defla',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            415 =>
            array(
                'id' => 1416,
                'wilayas_id' => 44,
                'name' => 'Miliana',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            416 =>
            array(
                'id' => 1417,
                'wilayas_id' => 44,
                'name' => 'Boumedfaa',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            417 =>
            array(
                'id' => 1418,
                'wilayas_id' => 44,
                'name' => 'Khemis Miliana',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            418 =>
            array(
                'id' => 1419,
                'wilayas_id' => 44,
                'name' => 'Hammam Righa',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            419 =>
            array(
                'id' => 1420,
                'wilayas_id' => 44,
                'name' => 'Arib',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            420 =>
            array(
                'id' => 1421,
                'wilayas_id' => 44,
                'name' => 'Djelida',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            421 =>
            array(
                'id' => 1422,
                'wilayas_id' => 44,
                'name' => 'El Amra',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            422 =>
            array(
                'id' => 1423,
                'wilayas_id' => 44,
                'name' => 'Bourached',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            423 =>
            array(
                'id' => 1424,
                'wilayas_id' => 44,
                'name' => 'El Attaf',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            424 =>
            array(
                'id' => 1425,
                'wilayas_id' => 44,
                'name' => 'El Abadia',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            425 =>
            array(
                'id' => 1426,
                'wilayas_id' => 44,
                'name' => 'Djendel',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            426 =>
            array(
                'id' => 1427,
                'wilayas_id' => 44,
                'name' => 'Oued Chorfa',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            427 =>
            array(
                'id' => 1428,
                'wilayas_id' => 44,
                'name' => 'Ain Lechiakh',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            428 =>
            array(
                'id' => 1429,
                'wilayas_id' => 44,
                'name' => 'Oued Djemaa',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            429 =>
            array(
                'id' => 1430,
                'wilayas_id' => 44,
                'name' => 'Rouina',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            430 =>
            array(
                'id' => 1431,
                'wilayas_id' => 44,
                'name' => 'Zeddine',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            431 =>
            array(
                'id' => 1432,
                'wilayas_id' => 44,
                'name' => 'El Hassania',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            432 =>
            array(
                'id' => 1433,
                'wilayas_id' => 44,
                'name' => 'Bir Ouled Khelifa',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            433 =>
            array(
                'id' => 1434,
                'wilayas_id' => 44,
                'name' => 'Ain Soltane',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            434 =>
            array(
                'id' => 1435,
                'wilayas_id' => 44,
                'name' => 'Tarik Ibn Ziad',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            435 =>
            array(
                'id' => 1436,
                'wilayas_id' => 44,
                'name' => 'Bordj Emir Khaled',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            436 =>
            array(
                'id' => 1437,
                'wilayas_id' => 44,
                'name' => 'Ain Torki',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            437 =>
            array(
                'id' => 1438,
                'wilayas_id' => 44,
                'name' => 'Sidi Lakhdar',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            438 =>
            array(
                'id' => 1439,
                'wilayas_id' => 44,
                'name' => 'Ben Allal',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            439 =>
            array(
                'id' => 1440,
                'wilayas_id' => 44,
                'name' => 'Ain Benian',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            440 =>
            array(
                'id' => 1441,
                'wilayas_id' => 44,
                'name' => 'Hoceinia',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            441 =>
            array(
                'id' => 1442,
                'wilayas_id' => 44,
                'name' => 'Barbouche',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            442 =>
            array(
                'id' => 1443,
                'wilayas_id' => 44,
                'name' => 'Djemaa Ouled Chikh',
                'created_at' => '2020-11-09 15:07:05',
                'updated_at' => '2020-11-09 15:07:05',
            ),
            443 =>
            array(
                'id' => 1444,
                'wilayas_id' => 44,
                'name' => 'Mekhatria',
                'created_at' => '2020-11-09 15:07:06',
                'updated_at' => '2020-11-09 15:07:06',
            ),
            444 =>
            array(
                'id' => 1445,
                'wilayas_id' => 44,
                'name' => 'Bathia',
                'created_at' => '2020-11-09 15:07:06',
                'updated_at' => '2020-11-09 15:07:06',
            ),
            445 =>
            array(
                'id' => 1446,
                'wilayas_id' => 44,
                'name' => 'Tachta Zegagha',
                'created_at' => '2020-11-09 15:07:06',
                'updated_at' => '2020-11-09 15:07:06',
            ),
            446 =>
            array(
                'id' => 1447,
                'wilayas_id' => 44,
                'name' => 'Ain Bouyahia',
                'created_at' => '2020-11-09 15:07:06',
                'updated_at' => '2020-11-09 15:07:06',
            ),
            447 =>
            array(
                'id' => 1448,
                'wilayas_id' => 44,
                'name' => 'El Maine',
                'created_at' => '2020-11-09 15:07:06',
                'updated_at' => '2020-11-09 15:07:06',
            ),
            448 =>
            array(
                'id' => 1449,
                'wilayas_id' => 44,
                'name' => 'Tiberkanine',
                'created_at' => '2020-11-09 15:07:06',
                'updated_at' => '2020-11-09 15:07:06',
            ),
            449 =>
            array(
                'id' => 1450,
                'wilayas_id' => 44,
                'name' => 'Belaas',
                'created_at' => '2020-11-09 15:07:06',
                'updated_at' => '2020-11-09 15:07:06',
            ),
            450 =>
            array(
                'id' => 1451,
                'wilayas_id' => 45,
                'name' => 'Naama',
                'created_at' => '2020-11-09 15:07:06',
                'updated_at' => '2020-11-09 15:07:06',
            ),
            451 =>
            array(
                'id' => 1452,
                'wilayas_id' => 45,
                'name' => 'Mechria',
                'created_at' => '2020-11-09 15:07:06',
                'updated_at' => '2020-11-09 15:07:06',
            ),
            452 =>
            array(
                'id' => 1453,
                'wilayas_id' => 45,
                'name' => 'Ain Sefra',
                'created_at' => '2020-11-09 15:07:06',
                'updated_at' => '2020-11-09 15:07:06',
            ),
            453 =>
            array(
                'id' => 1454,
                'wilayas_id' => 45,
                'name' => 'Tiout',
                'created_at' => '2020-11-09 15:07:06',
                'updated_at' => '2020-11-09 15:07:06',
            ),
            454 =>
            array(
                'id' => 1455,
                'wilayas_id' => 45,
                'name' => 'Sfissifa',
                'created_at' => '2020-11-09 15:07:06',
                'updated_at' => '2020-11-09 15:07:06',
            ),
            455 =>
            array(
                'id' => 1456,
                'wilayas_id' => 45,
                'name' => 'Moghrar',
                'created_at' => '2020-11-09 15:07:06',
                'updated_at' => '2020-11-09 15:07:06',
            ),
            456 =>
            array(
                'id' => 1457,
                'wilayas_id' => 45,
                'name' => 'Assela',
                'created_at' => '2020-11-09 15:07:06',
                'updated_at' => '2020-11-09 15:07:06',
            ),
            457 =>
            array(
                'id' => 1458,
                'wilayas_id' => 45,
                'name' => 'Djeniane Bourzeg',
                'created_at' => '2020-11-09 15:07:06',
                'updated_at' => '2020-11-09 15:07:06',
            ),
            458 =>
            array(
                'id' => 1459,
                'wilayas_id' => 45,
                'name' => 'Ain Ben Khelil',
                'created_at' => '2020-11-09 15:07:06',
                'updated_at' => '2020-11-09 15:07:06',
            ),
            459 =>
            array(
                'id' => 1460,
                'wilayas_id' => 45,
                'name' => 'Makman Ben Amer',
                'created_at' => '2020-11-09 15:07:06',
                'updated_at' => '2020-11-09 15:07:06',
            ),
            460 =>
            array(
                'id' => 1461,
                'wilayas_id' => 45,
                'name' => 'Kasdir',
                'created_at' => '2020-11-09 15:07:06',
                'updated_at' => '2020-11-09 15:07:06',
            ),
            461 =>
            array(
                'id' => 1462,
                'wilayas_id' => 45,
                'name' => 'El Biod',
                'created_at' => '2020-11-09 15:07:06',
                'updated_at' => '2020-11-09 15:07:06',
            ),
            462 =>
            array(
                'id' => 1463,
                'wilayas_id' => 46,
                'name' => 'Ain Temouchent',
                'created_at' => '2020-11-09 15:07:06',
                'updated_at' => '2020-11-09 15:07:06',
            ),
            463 =>
            array(
                'id' => 1464,
                'wilayas_id' => 46,
                'name' => 'Chaabet El Ham',
                'created_at' => '2020-11-09 15:07:06',
                'updated_at' => '2020-11-09 15:07:06',
            ),
            464 =>
            array(
                'id' => 1465,
                'wilayas_id' => 46,
                'name' => 'Ain Kihal',
                'created_at' => '2020-11-09 15:07:06',
                'updated_at' => '2020-11-09 15:07:06',
            ),
            465 =>
            array(
                'id' => 1466,
                'wilayas_id' => 46,
                'name' => 'Hammam Bouhadjar',
                'created_at' => '2020-11-09 15:07:06',
                'updated_at' => '2020-11-09 15:07:06',
            ),
            466 =>
            array(
                'id' => 1467,
                'wilayas_id' => 46,
                'name' => 'Bou Zedjar',
                'created_at' => '2020-11-09 15:07:06',
                'updated_at' => '2020-11-09 15:07:06',
            ),
            467 =>
            array(
                'id' => 1468,
                'wilayas_id' => 46,
                'name' => 'Oued Berkeche',
                'created_at' => '2020-11-09 15:07:06',
                'updated_at' => '2020-11-09 15:07:06',
            ),
            468 =>
            array(
                'id' => 1469,
                'wilayas_id' => 46,
                'name' => 'Aghlal',
                'created_at' => '2020-11-09 15:07:06',
                'updated_at' => '2020-11-09 15:07:06',
            ),
            469 =>
            array(
                'id' => 1470,
                'wilayas_id' => 46,
                'name' => 'Terga',
                'created_at' => '2020-11-09 15:07:06',
                'updated_at' => '2020-11-09 15:07:06',
            ),
            470 =>
            array(
                'id' => 1471,
                'wilayas_id' => 46,
                'name' => 'Ain El Arbaa',
                'created_at' => '2020-11-09 15:07:06',
                'updated_at' => '2020-11-09 15:07:06',
            ),
            471 =>
            array(
                'id' => 1472,
                'wilayas_id' => 46,
                'name' => 'Tamzoura',
                'created_at' => '2020-11-09 15:07:06',
                'updated_at' => '2020-11-09 15:07:06',
            ),
            472 =>
            array(
                'id' => 1473,
                'wilayas_id' => 46,
                'name' => 'Chentouf',
                'created_at' => '2020-11-09 15:07:06',
                'updated_at' => '2020-11-09 15:07:06',
            ),
            473 =>
            array(
                'id' => 1474,
                'wilayas_id' => 46,
                'name' => 'Sidi Ben Adda',
                'created_at' => '2020-11-09 15:07:06',
                'updated_at' => '2020-11-09 15:07:06',
            ),
            474 =>
            array(
                'id' => 1475,
                'wilayas_id' => 46,
                'name' => 'Aoubellil',
                'created_at' => '2020-11-09 15:07:06',
                'updated_at' => '2020-11-09 15:07:06',
            ),
            475 =>
            array(
                'id' => 1476,
                'wilayas_id' => 46,
                'name' => 'El Malah',
                'created_at' => '2020-11-09 15:07:06',
                'updated_at' => '2020-11-09 15:07:06',
            ),
            476 =>
            array(
                'id' => 1477,
                'wilayas_id' => 46,
                'name' => 'Sidi Boumediene',
                'created_at' => '2020-11-09 15:07:06',
                'updated_at' => '2020-11-09 15:07:06',
            ),
            477 =>
            array(
                'id' => 1478,
                'wilayas_id' => 46,
                'name' => 'Oued Sabah',
                'created_at' => '2020-11-09 15:07:06',
                'updated_at' => '2020-11-09 15:07:06',
            ),
            478 =>
            array(
                'id' => 1479,
                'wilayas_id' => 46,
                'name' => 'Ouled Boudjemaa',
                'created_at' => '2020-11-09 15:07:06',
                'updated_at' => '2020-11-09 15:07:06',
            ),
            479 =>
            array(
                'id' => 1480,
                'wilayas_id' => 46,
                'name' => 'Ain Tolba',
                'created_at' => '2020-11-09 15:07:06',
                'updated_at' => '2020-11-09 15:07:06',
            ),
            480 =>
            array(
                'id' => 1481,
                'wilayas_id' => 46,
                'name' => 'El Amria',
                'created_at' => '2020-11-09 15:07:06',
                'updated_at' => '2020-11-09 15:07:06',
            ),
            481 =>
            array(
                'id' => 1482,
                'wilayas_id' => 46,
                'name' => 'Hassi El Ghella',
                'created_at' => '2020-11-09 15:07:06',
                'updated_at' => '2020-11-09 15:07:06',
            ),
            482 =>
            array(
                'id' => 1483,
                'wilayas_id' => 46,
                'name' => 'Hassasna',
                'created_at' => '2020-11-09 15:07:06',
                'updated_at' => '2020-11-09 15:07:06',
            ),
            483 =>
            array(
                'id' => 1484,
                'wilayas_id' => 46,
                'name' => 'Ouled Kihal',
                'created_at' => '2020-11-09 15:07:06',
                'updated_at' => '2020-11-09 15:07:06',
            ),
            484 =>
            array(
                'id' => 1485,
                'wilayas_id' => 46,
                'name' => 'Beni Saf',
                'created_at' => '2020-11-09 15:07:06',
                'updated_at' => '2020-11-09 15:07:06',
            ),
            485 =>
            array(
                'id' => 1486,
                'wilayas_id' => 46,
                'name' => 'Sidi Safi',
                'created_at' => '2020-11-09 15:07:06',
                'updated_at' => '2020-11-09 15:07:06',
            ),
            486 =>
            array(
                'id' => 1487,
                'wilayas_id' => 46,
                'name' => 'Oulhaca El Gheraba',
                'created_at' => '2020-11-09 15:07:06',
                'updated_at' => '2020-11-09 15:07:06',
            ),
            487 =>
            array(
                'id' => 1488,
                'wilayas_id' => 46,
                'name' => 'Sidi Ouriache',
                'created_at' => '2020-11-09 15:07:06',
                'updated_at' => '2020-11-09 15:07:06',
            ),
            488 =>
            array(
                'id' => 1489,
                'wilayas_id' => 46,
                'name' => 'El Emir Abdelkader',
                'created_at' => '2020-11-09 15:07:06',
                'updated_at' => '2020-11-09 15:07:06',
            ),
            489 =>
            array(
                'id' => 1490,
                'wilayas_id' => 46,
                'name' => 'El Messaid',
                'created_at' => '2020-11-09 15:07:06',
                'updated_at' => '2020-11-09 15:07:06',
            ),
            490 =>
            array(
                'id' => 1491,
                'wilayas_id' => 47,
                'name' => 'Ghardaia',
                'created_at' => '2020-11-09 15:07:06',
                'updated_at' => '2020-11-09 15:07:06',
            ),
            491 =>
            array(
                'id' => 1492,
                'wilayas_id' => 47,
                'name' => 'El Meniaa',
                'created_at' => '2020-11-09 15:07:06',
                'updated_at' => '2020-11-09 15:07:06',
            ),
            492 =>
            array(
                'id' => 1493,
                'wilayas_id' => 47,
                'name' => 'Dhayet Bendhahoua',
                'created_at' => '2020-11-09 15:07:06',
                'updated_at' => '2020-11-09 15:07:06',
            ),
            493 =>
            array(
                'id' => 1494,
                'wilayas_id' => 47,
                'name' => 'Berriane',
                'created_at' => '2020-11-09 15:07:06',
                'updated_at' => '2020-11-09 15:07:06',
            ),
            494 =>
            array(
                'id' => 1495,
                'wilayas_id' => 47,
                'name' => 'Metlili',
                'created_at' => '2020-11-09 15:07:06',
                'updated_at' => '2020-11-09 15:07:06',
            ),
            495 =>
            array(
                'id' => 1496,
                'wilayas_id' => 47,
                'name' => 'El Guerrara',
                'created_at' => '2020-11-09 15:07:06',
                'updated_at' => '2020-11-09 15:07:06',
            ),
            496 =>
            array(
                'id' => 1497,
                'wilayas_id' => 47,
                'name' => 'El Atteuf',
                'created_at' => '2020-11-09 15:07:06',
                'updated_at' => '2020-11-09 15:07:06',
            ),
            497 =>
            array(
                'id' => 1498,
                'wilayas_id' => 47,
                'name' => 'Zelfana',
                'created_at' => '2020-11-09 15:07:06',
                'updated_at' => '2020-11-09 15:07:06',
            ),
            498 =>
            array(
                'id' => 1499,
                'wilayas_id' => 47,
                'name' => 'Sebseb',
                'created_at' => '2020-11-09 15:07:06',
                'updated_at' => '2020-11-09 15:07:06',
            ),
            499 =>
            array(
                'id' => 1500,
                'wilayas_id' => 47,
                'name' => 'Bounoura',
                'created_at' => '2020-11-09 15:07:06',
                'updated_at' => '2020-11-09 15:07:06',
            ),
        ));
        DB::table('communes')->insert(array(
            0 =>
            array(
                'id' => 1501,
                'wilayas_id' => 47,
                'name' => 'Hassi Fehal',
                'created_at' => '2020-11-09 15:07:06',
                'updated_at' => '2020-11-09 15:07:06',
            ),
            1 =>
            array(
                'id' => 1502,
                'wilayas_id' => 47,
                'name' => 'Hassi Gara',
                'created_at' => '2020-11-09 15:07:06',
                'updated_at' => '2020-11-09 15:07:06',
            ),
            2 =>
            array(
                'id' => 1503,
                'wilayas_id' => 47,
                'name' => 'Mansoura',
                'created_at' => '2020-11-09 15:07:06',
                'updated_at' => '2020-11-09 15:07:06',
            ),
            3 =>
            array(
                'id' => 1504,
                'wilayas_id' => 48,
                'name' => 'Relizane',
                'created_at' => '2020-11-09 15:07:06',
                'updated_at' => '2020-11-09 15:07:06',
            ),
            4 =>
            array(
                'id' => 1505,
                'wilayas_id' => 48,
                'name' => 'Oued Rhiou',
                'created_at' => '2020-11-09 15:07:06',
                'updated_at' => '2020-11-09 15:07:06',
            ),
            5 =>
            array(
                'id' => 1506,
                'wilayas_id' => 48,
                'name' => 'Belaassel Bouzegza',
                'created_at' => '2020-11-09 15:07:06',
                'updated_at' => '2020-11-09 15:07:06',
            ),
            6 =>
            array(
                'id' => 1507,
                'wilayas_id' => 48,
                'name' => 'Sidi Saada',
                'created_at' => '2020-11-09 15:07:06',
                'updated_at' => '2020-11-09 15:07:06',
            ),
            7 =>
            array(
                'id' => 1508,
                'wilayas_id' => 48,
                'name' => 'Ouled Aiche',
                'created_at' => '2020-11-09 15:07:06',
                'updated_at' => '2020-11-09 15:07:06',
            ),
            8 =>
            array(
                'id' => 1509,
                'wilayas_id' => 48,
                'name' => 'Sidi Lazreg',
                'created_at' => '2020-11-09 15:07:06',
                'updated_at' => '2020-11-09 15:07:06',
            ),
            9 =>
            array(
                'id' => 1510,
                'wilayas_id' => 48,
                'name' => 'El Hamadna',
                'created_at' => '2020-11-09 15:07:06',
                'updated_at' => '2020-11-09 15:07:06',
            ),
            10 =>
            array(
                'id' => 1511,
                'wilayas_id' => 48,
                'name' => 'Sidi Mhamed Ben Ali',
                'created_at' => '2020-11-09 15:07:06',
                'updated_at' => '2020-11-09 15:07:06',
            ),
            11 =>
            array(
                'id' => 1512,
                'wilayas_id' => 48,
                'name' => 'Mediouna',
                'created_at' => '2020-11-09 15:07:06',
                'updated_at' => '2020-11-09 15:07:06',
            ),
            12 =>
            array(
                'id' => 1513,
                'wilayas_id' => 48,
                'name' => 'Sidi Khettab',
                'created_at' => '2020-11-09 15:07:06',
                'updated_at' => '2020-11-09 15:07:06',
            ),
            13 =>
            array(
                'id' => 1514,
                'wilayas_id' => 48,
                'name' => 'Ammi Moussa',
                'created_at' => '2020-11-09 15:07:06',
                'updated_at' => '2020-11-09 15:07:06',
            ),
            14 =>
            array(
                'id' => 1515,
                'wilayas_id' => 48,
                'name' => 'Zemmoura',
                'created_at' => '2020-11-09 15:07:06',
                'updated_at' => '2020-11-09 15:07:06',
            ),
            15 =>
            array(
                'id' => 1516,
                'wilayas_id' => 48,
                'name' => 'Beni Dergoun',
                'created_at' => '2020-11-09 15:07:06',
                'updated_at' => '2020-11-09 15:07:06',
            ),
            16 =>
            array(
                'id' => 1517,
                'wilayas_id' => 48,
                'name' => 'Djidiouia',
                'created_at' => '2020-11-09 15:07:06',
                'updated_at' => '2020-11-09 15:07:06',
            ),
            17 =>
            array(
                'id' => 1518,
                'wilayas_id' => 48,
                'name' => 'El Guettar',
                'created_at' => '2020-11-09 15:07:06',
                'updated_at' => '2020-11-09 15:07:06',
            ),
            18 =>
            array(
                'id' => 1519,
                'wilayas_id' => 48,
                'name' => 'Hamri',
                'created_at' => '2020-11-09 15:07:06',
                'updated_at' => '2020-11-09 15:07:06',
            ),
            19 =>
            array(
                'id' => 1520,
                'wilayas_id' => 48,
                'name' => 'El Matmar',
                'created_at' => '2020-11-09 15:07:06',
                'updated_at' => '2020-11-09 15:07:06',
            ),
            20 =>
            array(
                'id' => 1521,
                'wilayas_id' => 48,
                'name' => 'Sidi Mhamed Ben Aouda',
                'created_at' => '2020-11-09 15:07:06',
                'updated_at' => '2020-11-09 15:07:06',
            ),
            21 =>
            array(
                'id' => 1522,
                'wilayas_id' => 48,
                'name' => 'Ain Tarek',
                'created_at' => '2020-11-09 15:07:06',
                'updated_at' => '2020-11-09 15:07:06',
            ),
            22 =>
            array(
                'id' => 1523,
                'wilayas_id' => 48,
                'name' => 'Oued Essalem',
                'created_at' => '2020-11-09 15:07:06',
                'updated_at' => '2020-11-09 15:07:06',
            ),
            23 =>
            array(
                'id' => 1524,
                'wilayas_id' => 48,
                'name' => 'Ouarizane',
                'created_at' => '2020-11-09 15:07:06',
                'updated_at' => '2020-11-09 15:07:06',
            ),
            24 =>
            array(
                'id' => 1525,
                'wilayas_id' => 48,
                'name' => 'Mazouna',
                'created_at' => '2020-11-09 15:07:06',
                'updated_at' => '2020-11-09 15:07:06',
            ),
            25 =>
            array(
                'id' => 1526,
                'wilayas_id' => 48,
                'name' => 'Kalaa',
                'created_at' => '2020-11-09 15:07:06',
                'updated_at' => '2020-11-09 15:07:06',
            ),
            26 =>
            array(
                'id' => 1527,
                'wilayas_id' => 48,
                'name' => 'Ain Rahma',
                'created_at' => '2020-11-09 15:07:06',
                'updated_at' => '2020-11-09 15:07:06',
            ),
            27 =>
            array(
                'id' => 1528,
                'wilayas_id' => 48,
                'name' => 'Yellel',
                'created_at' => '2020-11-09 15:07:06',
                'updated_at' => '2020-11-09 15:07:06',
            ),
            28 =>
            array(
                'id' => 1529,
                'wilayas_id' => 48,
                'name' => 'Oued El Djemaa',
                'created_at' => '2020-11-09 15:07:06',
                'updated_at' => '2020-11-09 15:07:06',
            ),
            29 =>
            array(
                'id' => 1530,
                'wilayas_id' => 48,
                'name' => 'Ramka',
                'created_at' => '2020-11-09 15:07:06',
                'updated_at' => '2020-11-09 15:07:06',
            ),
            30 =>
            array(
                'id' => 1531,
                'wilayas_id' => 48,
                'name' => 'Mendes',
                'created_at' => '2020-11-09 15:07:06',
                'updated_at' => '2020-11-09 15:07:06',
            ),
            31 =>
            array(
                'id' => 1532,
                'wilayas_id' => 48,
                'name' => 'Lahlef',
                'created_at' => '2020-11-09 15:07:06',
                'updated_at' => '2020-11-09 15:07:06',
            ),
            32 =>
            array(
                'id' => 1533,
                'wilayas_id' => 48,
                'name' => 'Beni Zentis',
                'created_at' => '2020-11-09 15:07:06',
                'updated_at' => '2020-11-09 15:07:06',
            ),
            33 =>
            array(
                'id' => 1534,
                'wilayas_id' => 48,
                'name' => 'Souk El Haad',
                'created_at' => '2020-11-09 15:07:06',
                'updated_at' => '2020-11-09 15:07:06',
            ),
            34 =>
            array(
                'id' => 1535,
                'wilayas_id' => 48,
                'name' => 'Dar Ben Abdellah',
                'created_at' => '2020-11-09 15:07:06',
                'updated_at' => '2020-11-09 15:07:06',
            ),
            35 =>
            array(
                'id' => 1536,
                'wilayas_id' => 48,
                'name' => 'El Hassi',
                'created_at' => '2020-11-09 15:07:06',
                'updated_at' => '2020-11-09 15:07:06',
            ),
            36 =>
            array(
                'id' => 1537,
                'wilayas_id' => 48,
                'name' => 'Had Echkalla',
                'created_at' => '2020-11-09 15:07:06',
                'updated_at' => '2020-11-09 15:07:06',
            ),
            37 =>
            array(
                'id' => 1538,
                'wilayas_id' => 48,
                'name' => 'Bendaoud',
                'created_at' => '2020-11-09 15:07:06',
                'updated_at' => '2020-11-09 15:07:06',
            ),
            38 =>
            array(
                'id' => 1539,
                'wilayas_id' => 48,
                'name' => 'El Ouldja',
                'created_at' => '2020-11-09 15:07:06',
                'updated_at' => '2020-11-09 15:07:06',
            ),
            39 =>
            array(
                'id' => 1540,
                'wilayas_id' => 48,
                'name' => 'Merdja Sidi Abed',
                'created_at' => '2020-11-09 15:07:06',
                'updated_at' => '2020-11-09 15:07:06',
            ),
            40 =>
            array(
                'id' => 1541,
                'wilayas_id' => 48,
                'name' => 'Ouled Sidi Mihoub',
                'created_at' => '2020-11-09 15:07:06',
                'updated_at' => '2020-11-09 15:07:06',
            ),
        ));

        $this->command->info('Communes Seeded !');
    }
}
