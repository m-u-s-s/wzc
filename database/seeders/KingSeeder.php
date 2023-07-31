<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */



    public function run(): void
    {
        DB::table('kings')->insert([
            // Toilet en opschik
            [
                'name' => 'TANDPASTA SIGNAL',
                'number' => '080624', 
                'stock' => '10',
                'sort' => 'toilet',
                'url' => 'https://d213yzj61vi89h.cloudfront.net/Bunzl-KBE-Site/images/3XL/080624.jpg'
            ],

            [
                'name' => 'VOCHTIG DOEKJE ADULTA BATHING WIPES',
                'number' => '650109/75', 
                'stock' => '10',
                'sort' => 'toilet',
                'url' => 'https://d213yzj61vi89h.cloudfront.net/Bunzl-KBE-Site/images/3XL/650109-75.jpg'
            ],
            [
                'name' => 'INSTANT FOAM COMPLETE-BE-REG-00378',
                'number' => '650161', 
                'stock' => '10',
                'sort' => 'toilet',
                'url' => 'https://d213yzj61vi89h.cloudfront.net/Bunzl-KBE-Site/images/3XL/650161.jpg'
            ],
            [
                'name' => 'INSTANT FOAM COMPLETE MET POMP-BE-REG-00378',
                'number' => '650165', 
                'stock' => '10',
                'sort' => 'toilet',
                'url' => 'https://d213yzj61vi89h.cloudfront.net/Bunzl-KBE-Site/images/3XL/650165.jpg'
            ],
            [
                'name' => 'HYGIËNISCHE ZAKJES PE TORK WIT 8X25CM B5',
                'number' => '700204/041', 
                'stock' => '10',
                'sort' => 'toilet',
                'url' => 'https://d213yzj61vi89h.cloudfront.net/Bunzl-KBE-Site/images/3XL/700204-041.jpg'
            ],
            [
                'name' => 'SERVET PAPIER WIT 33X33CM 2LGS 1/4',
                'number' => '703470/100', 
                'stock' => '10',
                'sort' => 'toilet',
                'url' => 'https://d213yzj61vi89h.cloudfront.net/Bunzl-KBE-Site/images/3XL/703470-100.jpg'
            ],
            [
                'name' => 'ONTGEURDER URIWAVE SANICLIP TUTTI FRUTTI-ROOD',
                'number' => '060677', 
                'stock' => '10',
                'sort' => 'toilet',
                'url' => 'https://d213yzj61vi89h.cloudfront.net/Bunzl-KBE-Site/images/3XL/060677.jpg'
            ],
            [
                'name' => 'FACIAL TISSUE EVI EXTRA SOFT WIT 2LGS 20X21CM',
                'number' => '702140/EVI2', 
                'stock' => '10',
                'sort' => 'toilet',
                'url' => 'https://d213yzj61vi89h.cloudfront.net/Bunzl-KBE-Site/images/3XL/702140-evi2.jpg'
            ],
            [
                'name' => 'DOUCHEGEL TORK PREMIUM ZEEP HAIR&BODY S1',
                'number' => '705420/601', 
                'stock' => '10',
                'sort' => 'toilet',
                'url' => 'https://d213yzj61vi89h.cloudfront.net/Bunzl-KBE-Site/images/3XL/705420-601.jpg'
            ],
            [
                'name' => 'DOUCHEGEL TORK PREMIUM MINI HAIR&BODY S2',
                'number' => '705420/602', 
                'stock' => '10',
                'sort' => 'toilet',
                'url' => 'https://d213yzj61vi89h.cloudfront.net/Bunzl-KBE-Site/images/3XL/705420-602.jpg'
            ],
            [
                'name' => 'ONTGEURDER URIWAVE CURVE COTTON BLOSSOM-BLAUW',
                'number' => '060685', 
                'stock' => '10',
                'sort' => 'toilet',
                'url' => 'https://d213yzj61vi89h.cloudfront.net/Bunzl-KBE-Site/images/3XL/060685.jpg'
            ],
            [
                'name' => 'URIWAVE CURVE HOUDER',
                'number' => '060687', 
                'stock' => '10',
                'sort' => 'toilet',
                'url' => 'https://d213yzj61vi89h.cloudfront.net/Bunzl-KBE-Site/images/3XL/060687.jpg'
            ],
            [
                'name' => 'TOILETPAPIER TORK TRADITIONEEL PREMIUM EXT.ZACHT 4LGS 9.7X12.5CM 150VEL T4',
                'number' => '700110/405', 
                'stock' => '10',
                'sort' => 'toilet',
                'url' => 'https://d213yzj61vi89h.cloudfront.net/Bunzl-KBE-Site/images/3XL/700110-405.jpg'
            ],
            [
                'name' => 'ONTGEURDER URIWAVE CURVE MANGO-TRANSPARANT',
                'number' => '060683', 
                'stock' => '10',
                'sort' => 'toilet',
                'url' => 'https://d213yzj61vi89h.cloudfront.net/Bunzl-KBE-Site/images/3XL/060683.jpg'
            ],
            [
                'name' => 'ONTGEURDER URIWAVE SANICLIP OCEAN MIST-BLAUW',
                'number' => '060679', 
                'stock' => '10',
                'sort' => 'toilet',
                'url' => 'https://d213yzj61vi89h.cloudfront.net/Bunzl-KBE-Site/images/3XL/060679.jpg'
            ],
            [
                'name' => 'HANDDOEK TORK XPRESS ADVANCED SOFT MULTIFOLD 4P 2LGS 21X34CM H2',
                'number' => '709120/288', 
                'stock' => '10',
                'sort' => 'toilet',
                'url' => 'https://d213yzj61vi89h.cloudfront.net/Bunzl-KBE-Site/images/3XL/709120-288.jpg'
            ],


            // Investering
            [
                'name' => 'DEKSEL VOOR AFVALBAK TORK ELEVATION WIT 50L-778563/000 B1',
                'number' => '778205/630', 
                'stock' => '10',
                'sort' => 'investering',
                'url' => 'https://d213yzj61vi89h.cloudfront.net/Bunzl-KBE-Site/images/3XL/778205-630.jpg'
            ],
            [
                'name' => 'MOP TASKI MICROEASY SCRUB 46X16CM',
                'number' => 'LE516116', 
                'stock' => '10',
                'sort' => 'investering',
                'url' => 'https://d213yzj61vi89h.cloudfront.net/Bunzl-KBE-Site/images/3XL/le516116.jpg'
            ],
            [
                'name' => 'MOP TASKI MICROEASY MULTI 46X16CM',
                'number' => 'LE516118', 
                'stock' => '10',
                'sort' => 'investering',
                'url' => 'https://d213yzj61vi89h.cloudfront.net/Bunzl-KBE-Site/images/3XL/le516118.jpg'
            ],
            [
                'name' => 'MICROVEZELDOEK TASKI JM ULTRA XL ROOD 40X40CM',
                'number' => 'LE517507', 
                'stock' => '10',
                'sort' => 'investering',
                'url' => 'https://d213yzj61vi89h.cloudfront.net/Bunzl-KBE-Site/images/3XL/le517507.jpg'
            ],
            [
                'name' => 'MICROVEZELDOEK TASKI JM ULTRA XL BLAUW 40X40CM',
                'number' => 'LE517508', 
                'stock' => '10',
                'sort' => 'investering',
                'url' => 'https://d213yzj61vi89h.cloudfront.net/Bunzl-KBE-Site/images/3XL/le517508.jpg'
            ],
            [
                'name' => 'STOFWISDOEK HERBRUIKBAAR TASKI FLORTEX II 60 70X22CM',
                'number' => 'LE7505180', 
                'stock' => '10',
                'sort' => 'investering',
                'url' => 'https://d213yzj61vi89h.cloudfront.net/Bunzl-KBE-Site/images/3XL/le7505180.jpg'
            ],
            [
                'name' => 'VEGER COCO ONGELAKT HOUT-ZWAAR 40CM-FSC',
                'number' => '061040', 
                'stock' => '10',
                'sort' => 'investering',
                'url' => 'https://d213yzj61vi89h.cloudfront.net/Bunzl-KBE-Site/images/3XL/061040.jpg'
            ],
            [
                'name' => 'STEELKLEM KUNSTSTOF ECOLAB',
                'number' => 'HM272590', 
                'stock' => '10',
                'sort' => 'investering',
                'url' => 'https://d213yzj61vi89h.cloudfront.net/Bunzl-KBE-Site/images/3XL/hm272590.jpg'
            ],
            [
                'name' => 'DEKSEL VOOR SPANRAAM 2X70L',
                'number' => 'HM272550', 
                'stock' => '10',
                'sort' => 'investering',
                'url' => 'https://d213yzj61vi89h.cloudfront.net/Bunzl-KBE-Site/images/3XL/hm272550.jpg'
            ],

                // novatio producten
            [
                'name' => 'LUCHT EN VRIES SPUITBUS NOVAIR 500ML',
                'number' => 'NT46320', 
                'stock' => '10',
                'sort' => 'novatio',
                'url' => 'https://d213yzj61vi89h.cloudfront.net/Bunzl-KBE-Site/images/3XL/nt46320.jpg'
            ],


            // keuken
            [
                'name' => 'VITROCLEN MET SPROEIKOP 450ML',
                'number' => '050503/00', 
                'stock' => '10',
                'sort' => 'keuken',
                'url' => 'https://d213yzj61vi89h.cloudfront.net/Bunzl-KBE-Site/images/3XL/050503-00.jpg'
            ],
            [
                'name' => 'KEUKENROL TORK PREMIUM CELLULOSE WIT 2LGS - 64 VELLEN',
                'number' => '701120/269', 
                'stock' => '10',
                'sort' => 'keuken',
                'url' => 'https://d213yzj61vi89h.cloudfront.net/Bunzl-KBE-Site/images/3XL/701120-269.jpg'
            ],
            [
                'name' => 'VAATWASTABLETTEN SUN PROF. ALL-IN-ONE 200ST',
                'number' => 'LE515858', 
                'stock' => '10',
                'sort' => 'keuken',
                'url' => 'https://d213yzj61vi89h.cloudfront.net/Bunzl-KBE-Site/images/3XL/le515858.jpg'
            ],
            [
                'name' => 'SPOELGLANSMIDDEL SUN PROFESSIONAL 1L',
                'number' => 'LE7490', 
                'stock' => '10',
                'sort' => 'keuken',
                'url' => 'https://d213yzj61vi89h.cloudfront.net/Bunzl-KBE-Site/images/3XL/le7490.jpg'
            ],
            [
                'name' => 'SPOELGLANSMIDDEL SUN PROFESSIONAL 5L',
                'number' => 'LE80403', 
                'stock' => '10',
                'sort' => 'keuken',
                'url' => 'https://d213yzj61vi89h.cloudfront.net/Bunzl-KBE-Site/images/3XL/le80403.jpg'
            ],
            [
                'name' => 'VAATWASMIDDEL SUN PRO FORMULA VLOEIBAAR 10L',
                'number' => 'LE903034', 
                'stock' => '10',
                'sort' => 'keuken',
                'url' => 'https://d213yzj61vi89h.cloudfront.net/Bunzl-KBE-Site/images/3XL/le903034.jpg'
            ],
            [
                'name' => 'HANDAFWASMIDDEL PRIMESOURCE CITROEN 1L',
                'number' => 'PS10164', 
                'stock' => '10',
                'sort' => 'keuken',
                'url' => 'https://d213yzj61vi89h.cloudfront.net/Bunzl-KBE-Site/images/3XL/ps10164.jpg'
            ],
            [
                'name' => 'SCHUURSPONS GLITZI VISCOSE',
                'number' => '060312', 
                'stock' => '10',
                'sort' => 'keuken',
                'url' => 'https://d213yzj61vi89h.cloudfront.net/Bunzl-KBE-Site/images/3XL/060312.jpg'
            ],
            [
                'name' => 'GREASECUTTER FAST FOAM',
                'number' => '160026', 
                'stock' => '10',
                'sort' => 'keuken',
                'url' => 'https://d213yzj61vi89h.cloudfront.net/Bunzl-KBE-Site/images/3XL/160026.jpg'
            ],
            [
                'name' => 'KOFFIETAS CUINOX HOLLANDIA WIT 200ML',
                'number' => 'EL8643', 
                'stock' => '10',
                'sort' => 'keuken',
                'url' => 'https://d213yzj61vi89h.cloudfront.net/Bunzl-KBE-Site/images/3XL/el8643.jpg'
            ],
            [
                'name' => 'LIME-A-WAY SPECIAL ONTKALKER 1L',
                'number' => '160008/00', 
                'stock' => '10',
                'sort' => 'keuken',
                'url' => 'https://d213yzj61vi89h.cloudfront.net/Bunzl-KBE-Site/images/3XL/160008-00.jpg'
            ],
            [
                'name' => 'ONDERTAS CUINOX HOLLANDIA WIT D.140MM VOOR TAS 200ML',
                'number' => 'EL8644', 
                'stock' => '10',
                'sort' => 'keuken',
                'url' => 'https://d213yzj61vi89h.cloudfront.net/Bunzl-KBE-Site/images/3XL/el8644.jpg'
            ],
            [
                'name' => 'AANSLAGVERWIJDERAAR CLEANER ZAKJE 15GR',
                'number' => '050090/09', 
                'stock' => '10',
                'sort' => 'keuken',
                'url' => 'https://d213yzj61vi89h.cloudfront.net/Bunzl-KBE-Site/images/3XL/050090-09.jpg'
            ],
            [
                'name' => 'SCHOONMAAKAZIJN 1L',
                'number' => '051029', 
                'stock' => '10',
                'sort' => 'keuken',
                'url' => 'https://d213yzj61vi89h.cloudfront.net/Bunzl-KBE-Site/images/3XL/051029.jpg'
            ],
            [
                'name' => 'KOFFIELEPEL PINTINOX STRESA 18/10 2MM',
                'number' => 'EL10384', 
                'stock' => '10',
                'sort' => 'keuken',
                'url' => 'https://d213yzj61vi89h.cloudfront.net/Bunzl-KBE-Site/images/3XL/el10384.jpg'
            ],
            [
                'name' => 'TAFELMES GESTAMPT PINTINOX STRESA 18/0 2MM',
                'number' => 'EL10379', 
                'stock' => '10',
                'sort' => 'keuken',
                'url' => 'https://d213yzj61vi89h.cloudfront.net/Bunzl-KBE-Site/images/3XL/el10379.jpg'
            ],
            [
                'name' => 'TAFELVORK PINTINOX STRESA 18/10 2MM',
                'number' => 'EL10376', 
                'stock' => '10',
                'sort' => 'keuken',
                'url' => 'https://d213yzj61vi89h.cloudfront.net/Bunzl-KBE-Site/images/3XL/el10376.jpg'
            ],
            [
                'name' => 'SPATEL POLYGLASS WIT 220°C 30CM',
                'number' => 'EL602737', 
                'stock' => '10',
                'sort' => 'keuken',
                'url' => 'https://d213yzj61vi89h.cloudfront.net/Bunzl-KBE-Site/images/3XL/el602737.jpg'
            ],
            [
                'name' => 'SPATEL LACOR ZWART NYLON 315MM',
                'number' => 'EL620715', 
                'stock' => '10',
                'sort' => 'keuken',
                'url' => 'https://d213yzj61vi89h.cloudfront.net/Bunzl-KBE-Site/images/3XL/el620715.jpg'
            ],
            [
                'name' => 'AFWASBORSTEL NYLON PLASTIEK STEEL',
                'number' => '061413/01', 
                'stock' => '10',
                'sort' => 'keuken',
                'url' => 'https://d213yzj61vi89h.cloudfront.net/Bunzl-KBE-Site/images/3XL/061413-01.jpg'
            ],
            [
                'name' => 'DIEPVRIESTHERMOMETER -40°C TOT +40°C',
                'number' => 'EL2592', 
                'stock' => '10',
                'sort' => 'keuken',
                'url' => 'https://d213yzj61vi89h.cloudfront.net/Bunzl-KBE-Site/images/3XL/el2592.jpg'
            ],
            [
                'name' => 'ALCOHOLAZIJN 7% ST.MARTINUS',
                'number' => '051032/01', 
                'stock' => '10',
                'sort' => 'keuken',
                'url' => 'https://d213yzj61vi89h.cloudfront.net/Bunzl-KBE-Site/images/3XL/051032-01.jpg'
            ],
            [
                'name' => 'ONTHARDINGSZOUT SUN PRO FORMULA -DIKKE KORREL 2KG',
                'number' => 'LE848994', 
                'stock' => '10',
                'sort' => 'keuken',
                'url' => 'https://d213yzj61vi89h.cloudfront.net/Bunzl-KBE-Site/images/3XL/le848994.jpg'
            ],
            [
                'name' => 'ONTKALKER RENEGITE ZAKJE 50GR',
                'number' => '050534/06', 
                'stock' => '10',
                'sort' => 'keuken',
                'url' => 'https://d213yzj61vi89h.cloudfront.net/Bunzl-KBE-Site/images/3XL/050534-06.jpg'
            ],
            [
                'name' => 'GLAS STAPELBAAR TUMBLER NEXT D.72 H.84MM 200ML',
                'number' => 'EL620966/00', 
                'stock' => '10',
                'sort' => 'keuken',
                'url' => 'https://d213yzj61vi89h.cloudfront.net/Bunzl-KBE-Site/images/3XL/el620966-00.jpg'
            ],
            [
                'name' => 'SODAKRISTALLEN 2KG',
                'number' => '020311', 
                'stock' => '10',
                'sort' => 'keuken',
                'url' => 'https://d213yzj61vi89h.cloudfront.net/Bunzl-KBE-Site/images/3XL/020311.jpg'
            ],

                // schoonmaak

            [
                'name' => 'VLOERTREKKER COMPACT JONMASTER 51CM',
                'number' => 'LE889512', 
                'stock' => '10',
                'sort' => 'schoonmaak',
                'url' => 'https://d213yzj61vi89h.cloudfront.net/Bunzl-KBE-Site/images/3XL/le889512.jpg'
            ],
            // [
            //     'name' => 'TASKI SANI CID QS 2,5L',
            //     'number' => 'LE1107729', 
            //     'stock' => '10',
            //     'sort' => 'schoonmaak',
            //     'url' => 'https://d213yzj61vi89h.cloudfront.net/Bunzl-KBE-Site/images/3XL/le1107729.jpg'
            // ],
            [
                'name' => 'TASKI JONTEC 300 QS',
                'number' => '040530', 
                'stock' => '10',
                'sort' => 'schoonmaak',
                'url' => 'https://d213yzj61vi89h.cloudfront.net/Bunzl-KBE-Site/images/3XL/040530.jpg'
            ],
            [
                'name' => 'LUCHTVERFRISSER TORK PREMIUM AEROSOL CITRUS 75ML A1',
                'number' => '705236/050', 
                'stock' => '10',
                'sort' => 'schoonmaak',
                'url' => 'https://d213yzj61vi89h.cloudfront.net/Bunzl-KBE-Site/images/3XL/705236-050.jpg'
            ],
            [
                'name' => 'POETSROL JUMBO EVI TISSUE BLAUW 3LGS 37CMX380M 1100 VELLEN',
                'number' => '708102/02EVI', 
                'stock' => '10',
                'sort' => 'schoonmaak',
                'url' => 'https://d213yzj61vi89h.cloudfront.net/Bunzl-KBE-Site/images/3XL/708102-02evi.jpg'
            ],
            [
                'name' => 'POETSDOEK TORK IND.HEAVY-DUTY FOLDED 3LGS BLAUW 32X39CM W4',
                'number' => '708130/082', 
                'stock' => '10',
                'sort' => 'schoonmaak',
                'url' => 'https://d213yzj61vi89h.cloudfront.net/Bunzl-KBE-Site/images/3XL/708130-082.jpg'
            ],
            [
                'name' => 'POETSDOEK WYPALL X50 WERKDOEK FOLDED 1LGS GROEN',
                'number' => '708744/20', 
                'stock' => '10',
                'sort' => 'schoonmaak',
                'url' => 'https://d213yzj61vi89h.cloudfront.net/Bunzl-KBE-Site/images/3XL/708744-20.jpg'
            ],
            [
                'name' => 'FRESH (AIR) LEMON',
                'number' => 'WM713075', 
                'stock' => '10',
                'sort' => 'schoonmaak',
                'url' => 'https://d213yzj61vi89h.cloudfront.net/Bunzl-KBE-Site/images/3XL/wm713075.jpg'
            ],
            [
                'name' => 'SCHUURSPONS GLITZI GEEL/WIT',
                'number' => '060305', 
                'stock' => '10',
                'sort' => 'schoonmaak',
                'url' => 'https://d213yzj61vi89h.cloudfront.net/Bunzl-KBE-Site/images/3XL/060305.jpg'
            ],
            [
                'name' => 'DWEIL VISCOSE BLAUW 60X70CM',
                'number' => '060719', 
                'stock' => '10',
                'sort' => 'schoonmaak',
                'url' => 'https://d213yzj61vi89h.cloudfront.net/Bunzl-KBE-Site/images/3XL/060719.jpg'
            ],
            [
                'name' => 'SCHUURSPONS GLITZI BLAUW/WIT',
                'number' => '060305B', 
                'stock' => '10',
                'sort' => 'schoonmaak',
                'url' => 'https://d213yzj61vi89h.cloudfront.net/Bunzl-KBE-Site/images/3XL/060305b.jpg'
            ],
            [
                'name' => 'SCHUURSPONS GLITZI ROOD/WIT',
                'number' => '060305R', 
                'stock' => '10',
                'sort' => 'schoonmaak',
                'url' => 'https://d213yzj61vi89h.cloudfront.net/Bunzl-KBE-Site/images/3XL/060305r.jpg'
            ],
            [
                'name' => 'VAATDOEK WIPRO GEEL ANTIBAC',
                'number' => '060495G', 
                'stock' => '10',
                'sort' => 'schoonmaak',
                'url' => 'https://d213yzj61vi89h.cloudfront.net/Bunzl-KBE-Site/images/3XL/060495g.jpg'
            ],
            [
                'name' => 'MICROVEZELDOEK POLIFIX MICROCLIN BLAUW',
                'number' => 'HG25400/00', 
                'stock' => '10',
                'sort' => 'schoonmaak',
                'url' => 'https://d213yzj61vi89h.cloudfront.net/Bunzl-KBE-Site/images/3XL/hg25400-00.jpg'
            ],
            [
                'name' => 'MICROVEZELDOEK POLIFIX MICROCLIN ROOD',
                'number' => 'HG25402/00', 
                'stock' => '10',
                'sort' => 'schoonmaak',
                'url' => 'https://d213yzj61vi89h.cloudfront.net/Bunzl-KBE-Site/images/3XL/hg25402-00.jpg'
            ],
            [
                'name' => 'MOP RASANT COMBITEX 40CM WIT',
                'number' => 'HM273170', 
                'stock' => '10',
                'sort' => 'schoonmaak',
                'url' => 'https://d213yzj61vi89h.cloudfront.net/Bunzl-KBE-Site/images/3XL/hm273170.jpg'
            ],
            [
                'name' => 'TELESCOOPSTEEL TASKI ULTRA PLUS 100-170CM',
                'number' => 'LE520277', 
                'stock' => '10',
                'sort' => 'schoonmaak',
                'url' => 'https://d213yzj61vi89h.cloudfront.net/Bunzl-KBE-Site/images/3XL/le520277.jpg'
            ],
            [
                'name' => 'STOFWISDOEK TASKI WITEX WIT OP ROL 62X18CM 50VEL',
                'number' => 'LE100790', 
                'stock' => '10',
                'sort' => 'schoonmaak',
                'url' => 'https://d213yzj61vi89h.cloudfront.net/Bunzl-KBE-Site/images/3XL/le100790.jpg'
            ],
            [
                'name' => 'REINIGINGSSPONS TASKI NIET ABRASIEF ROOD',
                'number' => 'LE7515479', 
                'stock' => '10',
                'sort' => 'schoonmaak',
                'url' => 'https://d213yzj61vi89h.cloudfront.net/Bunzl-KBE-Site/images/3XL/le7515479.jpg'
            ],
            [
                'name' => 'REINIGINGSSPONS TASKI NIET ABRASIEF BLAUW',
                'number' => 'LE7515480', 
                'stock' => '10',
                'sort' => 'schoonmaak',
                'url' => 'https://d213yzj61vi89h.cloudfront.net/Bunzl-KBE-Site/images/3XL/le7515480.jpg'
            ],
            [
                'name' => 'CIF PRO FORMULA GLAS EN INTERIEURREINIGER',
                'number' => 'LE1101906', 
                'stock' => '10',
                'sort' => 'schoonmaak',
                'url' => 'https://d213yzj61vi89h.cloudfront.net/Bunzl-KBE-Site/images/3XL/le1101906.jpg'
            ],
            [
                'name' => 'SPROEIFLACON 500ML SANI CID MET SCHUIMKOP',
                'number' => 'LE513960', 
                'stock' => '10',
                'sort' => 'schoonmaak',
                'url' => 'https://d213yzj61vi89h.cloudfront.net/Bunzl-KBE-Site/images/3XL/le513960.jpg'
            ],
            [
                'name' => 'MOP TASKI MICROEASY MULTI 46X16CM',
                'number' => 'LE516118', 
                'stock' => '10',
                'sort' => 'schoonmaak',
                'url' => 'https://d213yzj61vi89h.cloudfront.net/Bunzl-KBE-Site/images/3XL/le516118.jpg'
            ],
            [
                'name' => 'TASKI JONTEC 300 ID',
                'number' => 'LE515721', 
                'stock' => '10',
                'sort' => 'schoonmaak',
                'url' => 'https://d213yzj61vi89h.cloudfront.net/Bunzl-KBE-Site/images/3XL/le515721.jpg'
            ],
            [
                'name' => 'SANI CLONET PUR-ECO',
                'number' => 'LE515245', 
                'stock' => '10',
                'sort' => 'schoonmaak',
                'url' => 'https://d213yzj61vi89h.cloudfront.net/Bunzl-KBE-Site/images/3XL/le515245.jpg'
            ],
            [
                'name' => 'TASKI JONTEC FORWARD ID 1,5L',
                'number' => 'LE515722', 
                'stock' => '10',
                'sort' => 'schoonmaak',
                'url' => 'https://d213yzj61vi89h.cloudfront.net/Bunzl-KBE-Site/images/3XL/le515722.jpg'
            ],
            [
                'name' => 'REINIGINGSSPONS TASKI NIET ABRASIEF GEEL',
                'number' => 'LE515481', 
                'stock' => '10',
                'sort' => 'schoonmaak',
                'url' => 'https://d213yzj61vi89h.cloudfront.net/Bunzl-KBE-Site/images/3XL/le515481.jpg'
            ],
            [
                'name' => 'TASKI JONTEC FORWARD QS 2,5L',
                'number' => 'LE517107', 
                'stock' => '10',
                'sort' => 'schoonmaak',
                'url' => 'https://d213yzj61vi89h.cloudfront.net/Bunzl-KBE-Site/images/3XL/le517107.jpg'
            ],
            [
                'name' => 'SPROEIFLACON 500ML SPRINT 200 MET SPROEIKOP',
                'number' => 'LE513961', 
                'stock' => '10',
                'sort' => 'schoonmaak',
                'url' => 'https://d213yzj61vi89h.cloudfront.net/Bunzl-KBE-Site/images/3XL/le513961.jpg'
            ],
            [
                'name' => 'TASKI SPRINT 200 QS 2,5L',
                'number' => 'LE517096', 
                'stock' => '10',
                'sort' => 'schoonmaak',
                'url' => 'https://d213yzj61vi89h.cloudfront.net/Bunzl-KBE-Site/images/3XL/le517096.jpg'
            ],
            [
                'name' => 'STOFWISDOEK GEÏMPREGNEERDE WIT-VLIESDOEKEN OP ROL 60X22CM',
                'number' => 'H10010500', 
                'stock' => '10',
                'sort' => 'schoonmaak',
                'url' => 'https://d213yzj61vi89h.cloudfront.net/Bunzl-KBE-Site/images/3XL/h10010500.jpg'
            ],
            // [
            //     'name' => 'STOFBLIK HYGIENIC MET STRIP+HANDVEGER PBT GROEN',
            //     'number' => 'K06172255', 
            //     'stock' => '10',
            //     'sort' => 'schoonmaak',
            //     'url' => 'https://d213yzj61vi89h.cloudfront.net/Bunzl-KBE-Site/images/3XL/k06172255.jpg'
            // ],
            [
                'name' => 'STOFWISDOEK STATISCH WIT TASKI 60 OP ROL 60X20CM 100VEL',
                'number' => 'LE523490', 
                'stock' => '10',
                'sort' => 'schoonmaak',
                'url' => 'https://d213yzj61vi89h.cloudfront.net/Bunzl-KBE-Site/images/3XL/le523490.jpg'
            ],
            [
                'name' => 'SCHUURCREME R7',
                'number' => 'LE1105988', 
                'stock' => '10',
                'sort' => 'schoonmaak',
                'url' => 'https://d213yzj61vi89h.cloudfront.net/Bunzl-KBE-Site/images/3XL/le1105988.jpg'
            ],
            [
                'name' => 'AFVALZAK HD RECYCLED T12 50X51CM WIT-TRANSPARANT',
                'number' => '090702/05', 
                'stock' => '10',
                'sort' => 'schoonmaak',
                'url' => 'https://d213yzj61vi89h.cloudfront.net/Bunzl-KBE-Site/images/3XL/090702-05.jpg'
            ],
            [
                'name' => 'AFVALZAK HD RECYCLED T20 64X80+5CM MET TREKBAND (PMD) 80L BLAUW-TRANSP',
                'number' => '090800', 
                'stock' => '10',
                'sort' => 'schoonmaak',
                'url' => 'https://d213yzj61vi89h.cloudfront.net/Bunzl-KBE-Site/images/3XL/090800.jpg'
            ],



                // wasserij
            [
                'name' => 'CALGON POEDER 3-IN-1 60 DOS. 1.5KG',
                'number' => '020213/00', 
                'stock' => '10',
                'sort' => 'wasserij',
                'url' => 'https://d213yzj61vi89h.cloudfront.net/Bunzl-KBE-Site/images/3XL/020213-00.jpg'
            ],
            [
                'name' => 'WASPOEDER CLAX MICROWASH FORTE PUR-ECO 9KG',
                'number' => 'LE514055', 
                'stock' => '10',
                'sort' => 'wasserij',
                'url' => 'https://d213yzj61vi89h.cloudfront.net/Bunzl-KBE-Site/images/3XL/le514055.jpg'
            ],
            [
                'name' => 'CLAX REVOFLOW PRO MICRO',
                'number' => 'LE514539', 
                'stock' => '10',
                'sort' => 'wasserij',
                'url' => 'https://d213yzj61vi89h.cloudfront.net/Bunzl-KBE-Site/images/3XL/le514539.jpg'
            ],
            [
                'name' => 'CLAX REVOFLOW ENZI',
                'number' => 'LE514542', 
                'stock' => '10',
                'sort' => 'wasserij',
                'url' => 'https://d213yzj61vi89h.cloudfront.net/Bunzl-KBE-Site/images/3XL/le514542.jpg'
            ],
            [
                'name' => 'CLAX REVOFLOW OXI PUR ECO',
                'number' => 'LE514543', 
                'stock' => '10',
                'sort' => 'wasserij',
                'url' => 'https://d213yzj61vi89h.cloudfront.net/Bunzl-KBE-Site/images/3XL/le514543.jpg'
            ],
            [
                'name' => 'WASVERZACHTER CLAX REVOFLOW DEOSOFT BREEZE',
                'number' => 'LE521157', 
                'stock' => '10',
                'sort' => 'wasserij',
                'url' => 'https://d213yzj61vi89h.cloudfront.net/Bunzl-KBE-Site/images/3XL/le521157.jpg'
            ],
            [
                'name' => 'OMO PROF. COLOR VLOEIBAAR CONC. BIB. 100 DOS 7.5L',
                'number' => 'LE514882', 
                'stock' => '10',
                'sort' => 'wasserij',
                'url' => 'https://d213yzj61vi89h.cloudfront.net/Bunzl-KBE-Site/images/3XL/le514882.jpg'
            ],
            [
                'name' => 'WASVERZACHTER ROBIJN PRO FORMULA MORGENFRIS 5L',
                'number' => 'LE891217', 
                'stock' => '10',
                'sort' => 'wasserij',
                'url' => 'https://d213yzj61vi89h.cloudfront.net/Bunzl-KBE-Site/images/3XL/le891217.jpg'
            ],
            [
                'name' => 'TAXAT LIQUID 5L',
                'number' => '020206/00', 
                'stock' => '10',
                'sort' => 'wasserij',
                'url' => 'https://d213yzj61vi89h.cloudfront.net/Bunzl-KBE-Site/images/3XL/020206-00.jpg'
            ],
            [
                'name' => 'HANDSCHOEN MULTIPURPOSE GEEL LARGE',
                'number' => '030797L', 
                'stock' => '10',
                'sort' => 'wasserij',
                'url' => 'https://d213yzj61vi89h.cloudfront.net/Bunzl-KBE-Site/images/3XL/030797l.jpg'
            ],
            [
                'name' => 'CLAX MAGIC PROTEIN 70B2',
                'number' => 'LE883031', 
                'stock' => '10',
                'sort' => 'wasserij',
                'url' => 'https://d213yzj61vi89h.cloudfront.net/Bunzl-KBE-Site/images/3XL/le883031.jpg'
            ],
        ]);
    }
}
