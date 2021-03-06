<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DriverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('drivers')->insert([
            'name'=>'Charles Leclerc',
            'age'=>'24',
            'nationality' => 'Monegasco',
            'points'=>'71',
            'scuderia'=>'Ferrari',
            'number'=>'16',
            'value'=>'800000',
        ]);

        DB::table('drivers')->insert([
            'name'=>'Carlos Sainz',
            'age'=>'27',
            'nationality' => 'Español',
            'points'=>'33',
            'scuderia'=>'Ferrari',
            'number'=>'55',
            'value'=>'600000',
        ]);

        DB::table('drivers')->insert([
            'name'=>'Max Verstappen',
            'age'=>'24',
            'nationality' => 'Nerlandes',
            'points'=>'25',
            'scuderia'=>'Red Bull',
            'number'=>'1',
            'value'=>'800000',
        ]);

        DB::table('drivers')->insert([
            'name'=>'Sergio Perez',
            'age'=>'31',
            'nationality' => 'Mexicano',
            'points'=>'30',
            'scuderia'=>'Red Bull',
            'number'=>'11',
            'value'=>'600000',
        ]);

        DB::table('drivers')->insert([
            'name'=>'George Rusell',
            'age'=>'23',
            'nationality' => 'Ingles',
            'points'=>'37',
            'scuderia'=>'Mercedes',
            'number'=>'63',
            'value'=>'600000',
        ]);

        DB::table('drivers')->insert([
            'name'=>'Lewis Hamilton',
            'age'=>'37',
            'nationality' => 'Ingles',
            'points'=>'28',
            'scuderia'=>'Mercedes',
            'number'=>'44',
            'value'=>'800000',
        ]);

        DB::table('drivers')->insert([
            'name'=>'Esteban Ocon',
            'age'=>'25',
            'nationality' => 'Frances',
            'points'=>'20',
            'scuderia'=>'Alpine',
            'number'=>'31',
            'value'=>'500000',
        ]);

        DB::table('drivers')->insert([
            'name'=>'Fernando Alonso',
            'age'=>'40',
            'nationality' => 'Español',
            'points'=>'2',
            'scuderia'=>'Alpine',
            'number'=>'14',
            'value'=>'500000',
        ]);

        DB::table('drivers')->insert([
            'name'=>'Kevin Magnussen',
            'age'=>'29',
            'nationality' => 'Danes',
            'points'=>'12',
            'scuderia'=>'Haas',
            'number'=>'20',
            'value'=>'300000',
        ]);

        DB::table('drivers')->insert([
            'name'=>'Mick Schumacher',
            'age'=>'22',
            'nationality' => 'Aleman',
            'points'=>'0',
            'scuderia'=>'Haas',
            'number'=>'47',
            'value'=>'200000',
        ]);

        DB::table('drivers')->insert([
            'name'=>'Valtteri Bottas',
            'age'=>'32',
            'nationality' => 'Finlandes',
            'points'=>'12',
            'scuderia'=>'Alfa Romeo',
            'number'=>'77',
            'value'=>'400000',
        ]);

        DB::table('drivers')->insert([
            'name'=>'Guanyu Zhou',
            'age'=>'22',
            'nationality' => 'Chino',
            'points'=>'1',
            'scuderia'=>'Alfa Romeo',
            'number'=>'24',
            'value'=>'100000',
        ]);

        DB::table('drivers')->insert([
            'name'=>'Lando Norris',
            'age'=>'22',
            'nationality' => 'Ingles',
            'points'=>'16',
            'scuderia'=>'McLaren',
            'number'=>'4',
            'value'=>'500000',
        ]);

        DB::table('drivers')->insert([
            'name'=>'Daniel Ricciardo',
            'age'=>'32',
            'nationality' => 'Australiano',
            'points'=>'8',
            'scuderia'=>'McLaren',
            'number'=>'3',
            'value'=>'500000',
        ]);

        DB::table('drivers')->insert([
            'name'=>'Pierre Gasly',
            'age'=>'25',
            'nationality' => 'Frances',
            'points'=>'6',
            'scuderia'=>'AlphaTauri',
            'number'=>'10',
            'value'=>'400000',
        ]);

        DB::table('drivers')->insert([
            'name'=>'Yuki Tsunoda',
            'age'=>'21',
            'nationality' => 'Japones',
            'points'=>'4',
            'scuderia'=>'AlphaTauri',
            'number'=>'22',
            'value'=>'200000',
        ]);

        DB::table('drivers')->insert([
            'name'=>'Lance Stroll',
            'age'=>'23',
            'nationality' => 'Canadiense',
            'points'=>'0',
            'scuderia'=>'Aston Martin',
            'number'=>'18',
            'value'=>'200000',
        ]);

        DB::table('drivers')->insert([
            'name'=>'Sebastian Vettel',
            'age'=>'34',
            'nationality' => 'Aleman',
            'points'=>'0',
            'scuderia'=>'Aston Martin',
            'number'=>'5',
            'value'=>'300000',
        ]);

        DB::table('drivers')->insert([
            'name'=>'Alexander Albon',
            'age'=>'25',
            'nationality' => 'Tailandes',
            'points'=>'1',
            'scuderia'=>'Williams',
            'number'=>'23',
            'value'=>'200000',
        ]);

        DB::table('drivers')->insert([
            'name'=>'Nicholas Latifi',
            'age'=>'26',
            'nationality' => 'Canadiense',
            'points'=>'0',
            'scuderia'=>'Williams',
            'number'=>'6',
            'value'=>'100000',
        ]);
    }
}
