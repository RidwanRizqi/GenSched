<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('courses')->insert([
        //     [
        //         'name' => 'PENGANTAR AKUNTANSI',
        //         'course_code' => 'AKT 221001'
        //     ],
        //     [
        //         'name' => 'PENGANTAR BISNIS',
        //         'course_code' => 'AKT 221002'
        //     ],
        //     [
        //         'name' => 'PENGANTAR EKONOMI',
        //         'course_code' => 'AKT 221003'
        //     ],
        //     [
        //         'name' => 'APLIKASI  KOMPUTER BISNIS 1',
        //         'course_code' => 'AKT 221004'
        //     ],
        //     [
        //         'name' => 'BAHASA  INGGRIS  DASAR',
        //         'course_code' => 'AKT 221005'
        //     ],
        //     [
        //         'name' => 'PENGETIKAN NIAGA',
        //         'course_code' => 'AKT 221006'
        //     ],
        //     [
        //         'name' => 'PENDIDIKAN PANCASILA',
        //         'course_code' => 'AKT 221007'
        //     ],
        //     [
        //         'name' => 'MATEMATIKA KEUANGAN',
        //         'course_code' => 'AKT 221008'
        //     ],
        //     [
        //         'name' => 'AKUNTANSI BIAYA',
        //         'course_code' => 'AKT 223001'
        //     ],
        //     [
        //         'name' => 'AKUNTANSI KEUANGAN MENENGAH 2',
        //         'course_code' => 'AKT 223002'
        //     ],
        //     [
        //         'name' => 'SISTEM  INFORMASI AKUNTANSI',
        //         'course_code' => 'AKT 223003'
        //     ],
        //     [
        //         'name' => 'AKUNTANSI SEKTOR  PUBLIK',
        //         'course_code' => 'AKT 223004'
        //     ],
        //     [
        //         'name' => 'PERPAJAKAN',
        //         'course_code' => 'AKT 223005'
        //     ],
        //     [
        //         'name' => 'APLIKASI KOMPUTER BISNIS 3',
        //         'course_code' => 'AKT 223006'
        //     ],
        //     [
        //         'name' => 'BAHASA INGGRIS BISNIS 2',
        //         'course_code' => 'AKT 223007'
        //     ],
        //     [
        //         'name' => 'BAHASA  INDONESIA',
        //         'course_code' => 'AKT 223008'
        //     ],
        //     [
        //         'name' => 'AKUNTANSI KEUANGAN LANJUTAN',
        //         'course_code' => 'AKT 215001'
        //     ],
        //     [
        //         'name' => 'PRAKTIKUM SISTEM INFORMASI AKUNTANSI',
        //         'course_code' => 'AKT 215002'
        //     ],
        //     [
        //         'name' => 'AKUNTANSI SEKTOR PUBLIK',
        //         'course_code' => 'AKT 215003'
        //     ],
        //     [
        //         'name' => 'TEKNIK AUDIT BERBANTUAN KOMPUTER',
        //         'course_code' => 'AKT 215004'
        //     ],
        //     [
        //         'name' => 'MANAJEMEN KEUANGAN',
        //         'course_code' => 'AKT 215005'
        //     ],
        //     [
        //         'name' => 'PENGANGGARAN',
        //         'course_code' => 'AKT 215006'
        //     ],
        //     [
        //         'name' => 'BAHASA INGGRIS BISNIS 2',
        //         'course_code' => 'AKT 215007'
        //     ],
        //     [
        //         'name' => 'ASPEK HUKUM DALAM BISNIS',
        //         'course_code' => 'AKT 215008'
        //     ],
        //     [
        //         'name' => 'PENGANTAR AKUNTANSI',
        //         'course_code' => 'AKM 231001'
        //     ]
        // ]);

        DB::table('courses')->insert([
            // KEU KODE 1
            // KODE PALING BELAKANG UNTUK DOSEN DAN KELAS, SEBELAH KIRINYA UNTUK PRODI, SEBELAH KIRINYA LAGI KODE MK
            [
                'name' => 'BAHASA INDONESIA KEU 1A, 1B, 1C',
                'course_code' => 'AKTKEU 22100111'
            ],
            [
                'name' => 'ASPEK HUKUM DALAM BISNIS KEU 1A, 1B, 1C',
                'course_code' => 'AKT 22100211'
            ],
            [
                'name' => 'PENGANTAR ILMU EKONOMI TERAPAN KEU 1A, 1B, 1C',
                'course_code' => 'AKT 22100311'
            ],
            [
                'name' => 'KEWIRAUSAHAAN KEU 2A, 2B, 2C',
                'course_code' => 'AKT 22100411'
            ],
            [
                'name' => 'MANAJEMEN INVESTASI DAN PASAR MODAL KEU 2A, 2B',
                'course_code' => 'AKT 22100511'
            ],
            [
                'name' => 'MANAJEMEN INVESTASI DAN PASAR MODAL KEU 2C',
                'course_code' => 'AKT 22100512'
            ],
            [
                'name' => 'KEUANGAN NEGARA KEU 2A, 2B, 2C',
                'course_code' => 'AKT 22100611'
            ],
            [
                'name' => 'KEUANGAN SYARIAH 2 KEU 2A, 2B, 2C',
                'course_code' => 'AKT 22100711'
            ],
            [
                'name' => 'PRAKTEK MANAJEMEN KEUANGAN KEU 2A, 2B, 2C',
                'course_code' => 'AKT 22100811'
            ],
            [
                'name' => 'PERENCANAAN KEUANGAN PERSONAL KEU 3A, 3B, 3C',
                'course_code' => 'AKT 22100911'
            ],
            [
                'name' => 'APPRAISAL KEU 3A, 3B, 3C',
                'course_code' => 'AKT 22101011'
            ],
            [
                'name' => 'KEBIJAKAN PUBLIK KEU 3A, 3B, 3C',
                'course_code' => 'AKT 22101111'
            ],
            [
                'name' => 'KEUANGAN DESA KEU 3A, 3B, 3C',
                'course_code' => 'AKT 22101211'
            ],
            [
                'name' => 'PRAKTEK PASAR MODAL KEU 3A, 3B, 3C',
                'course_code' => 'AKT 22101311'
            ],
            [
                'name' => 'MANAJEMEN RESIKO KEU 3A, 3B, 3C',
                'course_code' => 'AKT 22101411'
            ],
            [
                'name' => 'PENGEMBANGAN KARIR KEU 4A',
                'course_code' => 'AKT 22101511'
            ],
            [
                'name' => 'PENGEMBANGAN KARIR KEU 4B, 4C',
                'course_code' => 'AKT 22101512'
            ],
            [
                'name' => 'KOMUNIKASI BISNIS KEU 1A, 1B, 1C',
                'course_code' => 'AKT 22101611'
            ],

            // AKT KODE 2
            // KODE PALING BELAKANG UNTUK DOSEN DAN KELAS, SEBELAH KIRINYA UNTUK PRODI, SEBELAH KIRINYA LAGI KODE MK
            [
                'name' => 'KOMUNIKASI BISNIS AKT 1A, 1B, 1C, 1D, 1E',
                'course_code' => 'AKT 22101621'
            ],
            [
                'name' => 'METODOLOGI PENELITIAN AKT 2A, 2B',
                'course_code' => 'AKT 22101721'
            ],
            [
                'name' => 'METODOLOGI PENELITIAN AKT 2C, 2D',
                'course_code' => 'AKT 22101722'
            ],

            // AKM KODE 3
            // KODE PALING BELAKANG UNTUK DOSEN DAN KELAS, SEBELAH KIRINYA UNTUK PRODI, SEBELAH KIRINYA LAGI KODE MK
            [
                'name' => 'PENGETIKAN NIAGA AKM 1A, 1B, 1C, 1D, 1E, 1I',
                'course_code' => 'AKT 22101831'
            ],
            [
                'name' => 'PENGETIKAN NIAGA AKM 1F, 1G, 1H',
                'course_code' => 'AKT 22101832'
            ],
            [
                'name' => 'MANAJEMEN PEMASARAN AKM 1A, 1B, 1C, 1D, 1E, 1F',
                'course_code' => 'AKT 22101931'
            ],
            [
                'name' => 'MANAJEMEN PEMASARAN AKM 1G, 1H',
                'course_code' => 'AKT 22101932'
            ],
            [
                'name' => 'MANAJEMEN PEMASARAN AKM 1I',
                'course_code' => 'AKT 22101933'
            ],
            [
                'name' => 'MANAJEMEN KEUANGAN AKM 2A, 2B, 2C, 2D',
                'course_code' => 'AKT 22102031'
            ],
            [
                'name' => 'MANAJEMEN KEUANGAN AKM 2E, 2F, 2G',
                'course_code' => 'AKT 22102032'
            ],
            [
                'name' => 'MANAJEMEN KEUANGAN AKM 2H',
                'course_code' => 'AKT 22102033'
            ],
            [
                'name' => 'MANAJEMEN PEMASARAN AKM 3A, 3B',
                'course_code' => 'AKT 22102131'
            ],
            [
                'name' => 'MANAJEMEN PEMASARAN AKM 3C',
                'course_code' => 'AKT 22102132'
            ],
            [
                'name' => 'MANAJEMEN PEMASARAN AKM 3D',
                'course_code' => 'AKT 22102133'
            ],
            [
                'name' => 'MANAJEMEN PEMASARAN AKM 3E',
                'course_code' => 'AKT 22102134'
            ],
            [
                'name' => 'MANAJEMEN PEMASARAN AKM 3F',
                'course_code' => 'AKT 22102135'
            ],
            [
                'name' => 'MANAJEMEN PEMASARAN AKM 3G',
                'course_code' => 'AKT 22102136'
            ],
            [
                'name' => 'MANAJEMEN KEUANGAN AKM 3A, 3B, 3C',
                'course_code' => 'AKT 22102231'
            ],
            [
                'name' => 'MANAJEMEN KEUANGAN AKM 3D, 3E',
                'course_code' => 'AKT 22102232'
            ],
            [
                'name' => 'MANAJEMEN KEUANGAN AKM 3F, 3G',
                'course_code' => 'AKT 22102233'
            ],
            [
                'name' => 'METODOLOGI PENELITIAN AKM 3A',
                'course_code' => 'AKT 22102331'
            ],
            [
                'name' => 'METODOLOGI PENELITIAN AKM 3B, 3C, 3D',
                'course_code' => 'AKT 22102332'
            ],
            [
                'name' => 'METODOLOGI PENELITIAN AKM 3E, 3F',
                'course_code' => 'AKT 22102333'
            ],
            [
                'name' => 'METODOLOGI PENELITIAN AKM 3G',
                'course_code' => 'AKT 22102334'
            ],
            [
                'name' => 'MANAJEMEN STRATEJIK AKM 3A, 3B, 3C, 3D',
                'course_code' => 'AKT 22102431'
            ],
            [
                'name' => 'MANAJEMEN STRATEJIK AKM 3E, 3F',
                'course_code' => 'AKT 22102432'
            ],
            [
                'name' => 'MANAJEMEN STRATEJIK AKM 3G',
                'course_code' => 'AKT 22102433'
            ],
        ]);
    }
}
