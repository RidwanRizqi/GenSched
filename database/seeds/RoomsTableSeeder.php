<?php

use Illuminate\Database\Seeder;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rooms')->insert([
            // R. Praktek Akuntansi :
            [
                'name' => 'AD2.25 : R. Praktek Akuntansi 1',
                'capacity' => 180
            ],
            [
                'name' => 'AD2.26 : R Praktek Akuntansi 2',
                'capacity' => 180
            ],

            // R. Praktek Pengetikan Niaga :

            [
                'name' => 'AD2.28 : R. Pengetikan Niaga',
                'capacity' => 180
            ],

            // R. Praktek Komputer :

            [
                'name' => 'AD2.27 : Lab. ERP',
                'capacity' => 180
            ],
            [
                'name' => 'AD2.20 : Lab Komputer 1',
                'capacity' => 180
            ],
            [
                'name' => 'AD2.21 : Lab Komputer 2',
                'capacity' => 180
            ],
            [
                'name' => 'AD2.23 : Lab. Komputer 3',
                'capacity' => 180
            ],
            [
                'name' => 'AF2.25 : Lab. Pertamina',
                'capacity' => 180
            ],

            // Ruang Kelas dibawah :

            [
                'name' => 'Ae 1.01',
                'capacity' => 180
            ],
            [
                'name' => 'Ae 1.02',
                'capacity' => 180
            ],
            [
                'name' => 'Ae 1.03',
                'capacity' => 180
            ],
            [
                'name' => 'Ae 1.04',
                'capacity' => 180
            ],
            [
                'name' => 'Ae 1.05',
                'capacity' => 180
            ],
            [
                'name' => 'Ae 1.06',
                'capacity' => 180
            ],
            [
                'name' => 'Ae 1.07',
                'capacity' => 180
            ],
            [
                'name' => 'Ae 2.01',
                'capacity' => 180
            ],
            [
                'name' => 'Ae 2.02',
                'capacity' => 180
            ],
            [
                'name' => 'Ae 2.03',
                'capacity' => 180
            ],
            [
                'name' => 'Ae 2.04',
                'capacity' => 180
            ],
            [
                'name' => 'Ae 2.05',
                'capacity' => 180
            ],
            [
                'name' => 'Ae 2.06',
                'capacity' => 180
            ],
            [
                'name' => 'Ae 2.07',
                'capacity' => 180
            ],
            [
                'name' => 'Ae 2.08',
                'capacity' => 180
            ],
            [
                'name' => 'Ae 2.09',
                'capacity' => 180
            ],
            [
                'name' => 'Ae 2.10',
                'capacity' => 180
            ],
            [
                'name' => 'Ad2.24',
                'capacity' => 180
            ],

            // basement

            [
                'name' => 'R.1',
                'capacity' => 180
            ],
            [
                'name' => 'R.2',
                'capacity' => 180
            ],
            [
                'name' => 'R.3',
                'capacity' => 180
            ],
            [
                'name' => 'R.4',
                'capacity' => 180
            ],
            [
                'name' => 'R.5',
                'capacity' => 180
            ],
            [
                'name' => 'R.6',
                'capacity' => 180
            ],
            [
                'name' => 'R.7',
                'capacity' => 180
            ],
            [
                'name' => 'R.8',
                'capacity' => 180
            ],
            [
                'name' => 'R.9',
                'capacity' => 180
            ],

            // Zoom
            [
                'name' => 'RZ 1',
                'capacity' => 180
            ],
            [
                'name' => 'RZ 2',
                'capacity' => 180
            ],
            [
                'name' => 'RZ 3',
                'capacity' => 180
            ],
            [
                'name' => 'RZ 4',
                'capacity' => 180
            ],
            [
                'name' => 'RZ 5',
                'capacity' => 180
            ],
            [
                'name' => 'RZ 6',
                'capacity' => 180
            ],
            [
                'name' => 'RZ 7',
                'capacity' => 180
            ],
            [
                'name' => 'RZ 8',
                'capacity' => 180
            ],
            [
                'name' => 'RZ 9',
                'capacity' => 180
            ],
            [
                'name' => 'RZ 10',
                'capacity' => 180
            ],
        ]);
    }
}
