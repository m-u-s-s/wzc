<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GohySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('gohies')->insert([
            [
                'name' => 'WEGWERPSCHEERMESJES, 2 MESJES, VOOR HET GEZICHT',
                'number' => '142.200', 
                'stock' => '10',
                'sort' => 'medisch',
                'url' => 'http://gohy.be/Photos-120/142.200_1.jpg'
            ],
            [
                'name' => 'ZAKJE VAN 100 WATTENSTAAFJES',
                'number' => '690.010', 
                'stock' => '10',
                'sort' => 'medisch',
                'url' => 'http://gohy.be/Photos-120/690.010_1.jpg'
            ],
            [
                'name' => 'PROCARE BODY MILK
                PER FLACON VAN 500 ML',
                'number' => '235.601', 
                'stock' => '10',
                'sort' => 'medisch',
                'url' => 'http://gohy.be/Photos-120/235.601_1.jpg'
            ],
            [
                'name' => 'PRO CARE HAND CREAM, VERZORGENDE HANDCRÈME
                TUBE VAN 100 ML',
                'number' => '235.701', 
                'stock' => '10',
                'sort' => 'medisch',
                'url' => 'http://gohy.be/Photos-120/235.701_1.jpg'
            ],
            [
                'name' => 'VERZORGINGSHANDSCHOENEN NITRIL, NIET-GEPOEDERD, BLAUW, MEDIUM 7-8',
                'number' => '517.501', 
                'stock' => '10',
                'sort' => 'medisch',
                'url' => 'http://gohy.be/Photos-120/517.501_1.jpg'
            ],
            [
                'name' => 'VERZORGINGSHANDSCHOENEN NITRIL, NIET-GEPOEDERD, BLAUW, LARGE 8-9',
                'number' => '519.501', 
                'stock' => '10',
                'sort' => 'medisch',
                'url' => 'http://gohy.be/Photos-120/519.501_1.jpg'
            ],
            [
                'name' => 'VERZORGINGSHANDSCHOENEN "SENSITIVE", NIET-GEPOEDERD, VINYL, SMALL 6-7.',
                'number' => '473.701', 
                'stock' => '10',
                'sort' => 'medisch',
                'url' => 'http://gohy.be/Photos-120/473.701_1.jpg'
            ],
            [
                'name' => 'VERZORGINGSHANDSCHOENEN "SENSITIVE", VINYL, NIET GEPOEDERD, MEDIUM 7-8.',
                'number' => '475.701', 
                'stock' => '10',
                'sort' => 'medisch',
                'url' => 'http://gohy.be/Photos-120/475.701_1.jpg'
            ],
            [
                'name' => 'VERZORGINGSHANDSCHOENEN "SENSITIVE", NIET-GEPOEDERD, VINYL, LARGE 8-9.',
                'number' => '477.701', 
                'stock' => '10',
                'sort' => 'medisch',
                'url' => 'http://gohy.be/Photos-120/477.701_1.jpg'
            ],
            [
                'name' => 'VERZORGINGSHANDSCHOENEN "SENSITIVE", NIET-GEPOEDERD, VINYL, X-LARGE 9-10.',
                'number' => '479.701', 
                'stock' => '10',
                'sort' => 'medisch',
                'url' => 'http://gohy.be/Photos-120/479.701_1.jpg'
            ],
            [
                'name' => 'VERZORGINGSHANDSSCHOENEN, VINYL, NIET GEPOEDERD, SMALL 6-7.',
                'number' => '473.601', 
                'stock' => '10',
                'sort' => 'medisch',
                'url' => 'http://gohy.be/Photos-120/473.601_1.jpg'
            ],
            [
                'name' => 'VERZORGINGSHANDSSCHOENEN, VINYL, NIET GEPOEDERD, MEDIUM 7-8.',
                'number' => '475.601', 
                'stock' => '10',
                'sort' => 'medisch',
                'url' => 'http://gohy.be/Photos-120/475.601_1.jpg'
            ],
            [
                'name' => 'VERZORGINGSHANDSSCHOENEN, VINYL, NIET GEPOEDERD, LARGE 8-9.',
                'number' => '477.601', 
                'stock' => '10',
                'sort' => 'medisch',
                'url' => 'http://gohy.be/Photos-120/477.601_1.jpg'
            ],
            [
                'name' => 'DOOS MET 15 PORTACATH WINGED SURECAN - 20G X 25 MM.',
                'number' => 'S781.301', 
                'stock' => '10',
                'sort' => 'medisch',
                'url' => 'http://gohy.be/Photos-120/S781.301_1.jpg'
            ],
            [
                'name' => 'ALCOHOLDEPPERS',
                'number' => 'S601.200', 
                'stock' => '10',
                'sort' => 'medisch',
                'url' => 'http://gohy.be/Photos-120/S601.200_2.jpg'
            ],
            [
                'name' => 'BD MICROTAINER CONTACT ACTIVATED LANCETTEN - PAARS - 30G',
                'number' => 'S626.400', 
                'stock' => '10',
                'sort' => 'medisch',
                'url' => 'http://gohy.be/Photos-120/S626.400_1.jpg'
            ],
            [
                'name' => 'SPUITEN CATHETER BD PLASTIPAK, 50 ML, STERIEL',
                'number' => 'S751.050', 
                'stock' => '10',
                'sort' => 'medisch',
                'url' => 'http://gohy.be/Photos-120/S751.050_1.jpg'
            ],
            [
                'name' => '3 IN 1 SPUIT - SONDEVOEDING - KATHETER - LUER SLIP TIP, 50 ML',
                'number' => 'S751.200', 
                'stock' => '10',
                'sort' => 'medisch',
                'url' => 'http://gohy.be/Photos-120/S751.200_1.jpg'
            ],
            [
                'name' => 'HECHTPLEISTER MICROPORE SURGICAL TAPE, 1,25 CM X 9,15 M',
                'number' => 'S505.150', 
                'stock' => '10',
                'sort' => 'medisch',
                'url' => 'http://gohy.be/Photos-120/S505.150_1.jpg'
            ],
            [
                'name' => 'HECHTPLEISTER TRANSPORE SURGICAL TAPE, 1,25 CM X 9,15 M,',
                'number' => 'S506.100', 
                'stock' => '10',
                'sort' => 'medisch',
                'url' => 'http://gohy.be/Photos-120/S506.100_1.jpg'
            ],
            [
                'name' => 'EVOCARE TRANSPARANTE HECHTPLEISTER PE, 2,50 CM X 9,15 M',
                'number' => 'S506.209', 
                'stock' => '10',
                'sort' => 'medisch',
                'url' => 'http://gohy.be/Photos-120/S506.209_1.jpg'
            ],
            [
                'name' => 'NORMORS KINSTEUN, MÉDIUM',
                'number' => '628.002', 
                'stock' => '10',
                'sort' => 'medisch',
                'url' => 'http://gohy.be/Photos-120/628.002_1.jpg'
            ],
            [
                'name' => 'EVOCARE ELASTISCHE GAASVERBANDEN, 7 CM X 4 M',
                'number' => 'S526.209', 
                'stock' => '10',
                'sort' => 'medisch',
                'url' => 'http://gohy.be/Photos-120/S526.209_3.jpg'
            ],
            [
                'name' => 'NIERBEKKENS UIT PULPKARTON',
                'number' => '066.005', 
                'stock' => '10',
                'sort' => 'medisch',
                'url' => 'http://gohy.be/Photos-120/066.005_1.jpg'
            ],
            [
                'name' => 'KLINION ABSORBERENDE VERBANDEN, 10 X 10 CM',
                'number' => 'S120.125', 
                'stock' => '10',
                'sort' => 'medisch',
                'url' => 'http://gohy.be/Photos-120/S120.125_1.jpg'
            ],
            [
                'name' => 'KLINION ABSORBERENDE VERBANDEN, 10 X 20 CM,',
                'number' => 'S120.225', 
                'stock' => '10',
                'sort' => 'medisch',
                'url' => 'http://gohy.be/Photos-120/S120.225_1.jpg'
            ],
            [
                'name' => 'EVOCARE GAASKOMPRESSEN, 5 X 5 CM',
                'number' => 'S110.109', 
                'stock' => '10',
                'sort' => 'medisch',
                'url' => 'http://gohy.be/Photos-120/S110.109_3.jpg'
            ],
            [
                'name' => 'EVOCARE GAASKOMPRESSEN, 7,5 X 7,5 CM',
                'number' => 'S110.209', 
                'stock' => '10',
                'sort' => 'medisch',
                'url' => 'http://gohy.be/Photos-120/S110.209_3.jpg'
            ],
            [
                'name' => 'EVOCARE NIET INKLEVEND KOMPRES, 5 X 5 CM',
                'number' => 'S113.112', 
                'stock' => '10',
                'sort' => 'medisch',
                'url' => 'http://gohy.be/Photos-120/S113.112_1.jpg'
            ],
            [
                'name' => 'MELOLIN KOMPRESSEN, NIET INKLEVEND, NON WOVEN, 5 X 5 CM',
                'number' => 'S113.150', 
                'stock' => '10',
                'sort' => 'medisch',
                'url' => 'http://gohy.be/Photos-120/S113.150_1.jpg'
            ],
            [
                'name' => 'EVOCARE NIET INKLEVEND KOMPRES, 10 X 10 CM',
                'number' => 'S113.312', 
                'stock' => '10',
                'sort' => 'medisch',
                'url' => 'http://gohy.be/Photos-120/S113.312_1.jpg'
            ],
            [
                'name' => 'MELOLIN KOMPRESSEN, NIET INKLEVEND, NON WOVEN, 10 X 10',
                'number' => 'S113.350', 
                'stock' => '10',
                'sort' => 'medisch',
                'url' => 'http://gohy.be/Photos-120/S113.350_1.jpg'
            ],
            [
                'name' => 'EVOCARE HYDROFIELE GAASKOMPRESSEN, 5 X 5 CM',
                'number' => 'S112.116', 
                'stock' => '10',
                'sort' => 'medisch',
                'url' => 'http://gohy.be/Photos-120/S112.116_1.jpg'
            ],
            [
                'name' => 'EVOCARE HYDROFIELE GAASKOMPRESSEN, 7,5 X 7,5 CM',
                'number' => 'S112.219', 
                'stock' => '10',
                'sort' => 'medisch',
                'url' => 'http://gohy.be/Photos-120/S112.219_1.jpg'
            ],
            [
                'name' => 'TRANSPARANTE ZELFKLEVENDE FILM OPSITE FLEXIFIX, 10 CM X 10 M',
                'number' => 'S205.500', 
                'stock' => '10',
                'sort' => 'medisch',
                'url' => 'http://gohy.be/Photos-site/S205.500_1.jpg'
            ],
            [
                'name' => 'OP-SITE FLEXIFIX 5 CM X 10 M',
                'number' => 'S205.502', 
                'stock' => '10',
                'sort' => 'medisch',
                'url' => 'http://gohy.be/Photos-site/S205.502_1.jpg'
            ],
            [
                'name' => 'KLINIPLAST BORDER KLEEFSTOF WONDPLEISTER, 7 X 5 CM',
                'number' => 'S160.121', 
                'stock' => '10',
                'sort' => 'medisch',
                'url' => 'http://gohy.be/Photos-120/S160.121_1.jpg'
            ],
            [
                'name' => 'POREFIX HECHTPLEISTERS, 7 X 5 CM',
                'number' => 'S160.155', 
                'stock' => '10',
                'sort' => 'medisch',
                'url' => 'http://gohy.be/Photos-120/S160.155_1.jpg'
            ],
            [
                'name' => 'EVOCARE ELASTISCHE FIXATIEPLEISTER, 5CM X 10M',
                'number' => 'S510.109', 
                'stock' => '10',
                'sort' => 'medisch',
                'url' => 'http://gohy.be/Photos-site/S510.109_1.jpg'
            ],
            [
                'name' => 'EVOCARE ELASTISCHE FIXATIEPLEISTER, 10CMX 10M',
                'number' => 'S510.209', 
                'stock' => '10',
                'sort' => 'medisch',
                'url' => 'http://gohy.be/Photos-site/S510.209_1.jpg'
            ],
            [
                'name' => 'SCHAAR RECHT MET STOMPE PUNTEN, 14 CM',
                'number' => '460.008', 
                'stock' => '10',
                'sort' => 'medisch',
                'url' => 'http://gohy.be/Photos-120/460.008_1.jpg'
            ],
            [
                'name' => 'SCHAAR RECHT MET SCHERPE EN STOMPE PUNT, 14 CM',
                'number' => '460.009', 
                'stock' => '10',
                'sort' => 'medisch',
                'url' => 'http://gohy.be/Photos-site/460.009_1.jpg'
            ],
            [
                'name' => 'NAGELKNIPPER, 8 CM',
                'number' => '460.023', 
                'stock' => '10',
                'sort' => 'medisch',
                'url' => 'http://gohy.be/Photos-site/460.023_1.jpg'
            ],
            [
                'name' => 'KLINIPLAST STANDARD TEXTILE, 6 CM X 5 M',
                'number' => 'S102.153', 
                'stock' => '10',
                'sort' => 'medisch',
                'url' => 'http://gohy.be/Photos-site/S102.153_1.jpg'
            ],
            [
                'name' => 'EVOCARE VERBANDSET NR 6',
                'number' => 'S170.209', 
                'stock' => '10',
                'sort' => 'medisch',
                'url' => 'http://gohy.be/Photos-120/S170.209_2.jpg'
            ],
            [
                'name' => 'RAUCOSET GEVOUWEN VELD, 38 X 45 CM',
                'number' => 'S170.550', 
                'stock' => '10',
                'sort' => 'medisch',
                'url' => 'http://gohy.be/Photos-site/S170.550_1.jpg'
            ],
            [
                'name' => 'STERIELE SET KNOPSONDE',
                'number' => 'S173.409', 
                'stock' => '10',
                'sort' => 'medisch',
                'url' => 'http://gohy.be/Photos-site/S173.409_1.jpg'
            ],
            [
                'name' => 'STERIEL TONGSPATELS EVOCARE',
                'number' => 'S650.115', 
                'stock' => '10',
                'sort' => 'medisch',
                'url' => 'http://gohy.be/Photos-site/S650.115_1.jpg'
            ],
            [
                'name' => 'AUTOTEST COVID -NEWGENE',
                'number' => '324.206N', 
                'stock' => '10',
                'sort' => 'medisch',
                'url' => 'http://gohy.be/Photos-site/324.206N_1.jpg'
            ],
            [
                'name' => 'NAALDEN VOOR ALPHACHEK SOFT - 31G X 8 MM',
                'number' => 'S625.043', 
                'stock' => '10',
                'sort' => 'medisch',
                'url' => 'http://gohy.be/Photos-site/S625.043_1.jpg'
            ],
            [
                'name' => 'BLOEDDRUKMETER ARM ROSSMAX X3',
                'number' => '334.416', 
                'stock' => '10',
                'sort' => 'medisch',
                'url' => 'http://gohy.be/Photos-site/334.416_1.jpg'
            ],
            [
                'name' => 'ROSSMAX BLOEDDRUKMETER MET LEPEL + STETHOSCOOP',
                'number' => '334.501', 
                'stock' => '10',
                'sort' => 'medisch',
                'url' => 'http://gohy.be/Photos-site/334.501_1.jpg'
            ],
            [
                'name' => 'SLABBEN, ÉÉNMALIG GEBRUIK, 3 LAGEN',
                'number' => '541.200', 
                'stock' => '10',
                'sort' => 'medisch',
                'url' => 'http://gohy.be/Photos-site/541.200_1.jpg'
            ],
            [
                'name' => 'HANDYCUP G-CARE KANTELBEKER, 220 CC, MET 2 HANDGREPEN, TRANSPARANT',
                'number' => '063.010', 
                'stock' => '10',
                'sort' => 'medisch',
                'url' => 'http://gohy.be/Photos-site/063.010_1.jpg'
            ],
            [
                'name' => 'RILLENBEKER, BLAUW.',
                'number' => '063.051', 
                'stock' => '10',
                'sort' => 'medisch',
                'url' => 'http://gohy.be/Photos-site/063.051_1.jpg'
            ],
            [
                'name' => 'ZAK MET 50 BEKERS 25-30 CC TRANSPARANT',
                'number' => '184.751', 
                'stock' => '10',
                'sort' => 'medisch',
                'url' => 'http://gohy.be/Photos-site/184.751_1.jpg'
            ],
            [
                'name' => 'ZAK MET 500 WITTE DEKSELS VOOR BEKERS 25-30 CC',
                'number' => '184.761', 
                'stock' => '10',
                'sort' => 'medisch',
                'url' => 'http://gohy.be/Photos-site/184.761_1.jpg'
            ],
        ]);
    }
}
