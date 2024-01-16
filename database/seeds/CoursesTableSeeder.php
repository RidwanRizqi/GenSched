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
        DB::table('courses')->insert([
            // KEU KODE 1
            // KODE PALING BELAKANG UNTUK DOSEN DAN KELAS, SEBELAH KIRINYA UNTUK PRODI, SEBELAH KIRINYA LAGI KODE MK
            [
                'name' => 'BAHASA INDONESIA | KEU 1A, 1B, 1C',
                'course_code' => 'KEU 232002 | X X',
                'sks' => 2,
                'jam' => 2
            ],
            [
                'name' => 'ASPEK HUKUM DALAM BISNIS | KEU 1A, 1B, 1C (I)',
                'course_code' => 'KEU 232007 | X I',
                'sks' => 1.5,
                'jam' => 3
            ],
            [
                'name' => 'ASPEK HUKUM DALAM BISNIS | KEU 1A, 1B, 1C (II)',
                'course_code' => 'KEU 232007 | X II',
                'sks' => 1.5,
                'jam' => 3
            ],
            [
                'name' => 'PENGANTAR ILMU EKONOMI TERAPAN | KEU 1A, 1B, 1C (I)',
                'course_code' => 'KEU 232005 | X I',
                'sks' => 1,
                'jam' => 2
            ],
            [
                'name' => 'PENGANTAR ILMU EKONOMI TERAPAN | KEU 1A, 1B, 1C (II)',
                'course_code' => 'KEU 232005 | X II',
                'sks' => 1,
                'jam' => 2
            ],
            [
                'name' => 'KOMUNIKASI BISNIS | KEU 1A, 1B, 1C, 1D, 1E (I)',
                'course_code' => 'KEU 232008 | X I',
                'sks' => 1.5,
                'jam' => 3
            ],
            [
                'name' => 'KOMUNIKASI BISNIS | KEU 1A, 1B, 1C, 1D, 1E (II)',
                'course_code' => 'KEU 232008 | X II',
                'sks' => 1.5,
                'jam' => 3
            ],
            [
                'name' => 'KEWIRAUSAHAAN | KEU 2A, 2B, 2C (I)',
                'course_code' => 'KEU 224002 | X I',
                'sks' => 1.5,
                'jam' => 3
            ],
            [
                'name' => 'KEWIRAUSAHAAN | KEU 2A, 2B, 2C (II)',
                'course_code' => 'KEU 224002 | X II',
                'sks' => 1.5,
                'jam' => 3
            ],
            [
                'name' => 'MANAJEMEN INVESTASI DAN PASAR MODAL | KEU 2A, 2B (I)',
                'course_code' => 'KEU 224003 | I I',
                'sks' => 1.5,
                'jam' => 3
            ],
            [
                'name' => 'MANAJEMEN INVESTASI DAN PASAR MODAL | KEU 2A, 2B (II)',
                'course_code' => 'KEU 224003 | I II',
                'sks' => 1.5,
                'jam' => 3
            ],
            [
                'name' => 'MANAJEMEN INVESTASI DAN PASAR MODAL | KEU 2C (I)',
                'course_code' => 'KEU 224003 | II I',
                'sks' => 1.5,
                'jam' => 3
            ],
            [
                'name' => 'MANAJEMEN INVESTASI DAN PASAR MODAL | KEU 2C (II)',
                'course_code' => 'KEU 224003 | II II',
                'sks' => 1.5,
                'jam' => 3
            ],
            [
                'name' => 'KEUANGAN NEGARA | KEU 2A, 2B, 2C (I)',
                'course_code' => 'KEU 224004 | X I',
                'sks' => 1,
                'jam' => 2
            ],
            [
                'name' => 'KEUANGAN NEGARA | KEU 2A, 2B, 2C (II)',
                'course_code' => 'KEU 224004 | X II',
                'sks' => 1,
                'jam' => 2
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
                'name' => 'AK KEU KEU 1A, 1B, 1C',
                'course_code' => 'AKT 22100111'
            ],
            [
                'name' => 'PJK KEU 2A, 2B, 2C',
                'course_code' => 'AKT 22100211'
            ],
            [
                'name' => 'PRAK PJK KEU 3A, 3B, 3C',
                'course_code' => 'AKT 22100311'
            ],
            [
                'name' => 'BHS. INGGRIS BISNIS 1 KEU 2A, 2B, 2C',
                'course_code' => 'AKT 22100411'
            ],
            [
                'name' => 'BHS. INGGRIS MENENGAH KEU 1A, 1B, 1C',
                'course_code' => 'AKT 22100511'
            ],
            [
                'name' => 'BHS. INGGRIS BISNIS 3 KEU 3A, 3B, 3C',
                'course_code' => 'AKT 22100611'
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
            [
                'name' => 'AKM 1 AKT 1C, 1D',
                'course_code' => 'AKT 22101821'
            ],
            [
                'name' => 'AKM 1 AKT 1A, 1B',
                'course_code' => 'AKT 22101822'
            ],
            [
                'name' => 'AKM 1 AKT 1E',
                'course_code' => 'AKT 22101823'
            ],
            [
                'name' => 'PAP JASA DAGANG AKT 1D, 1E',
                'course_code' => 'AKT 22101921'
            ],
            [
                'name' => 'PAP JASA DAGANG AKT 1A, 1B, 1C',
                'course_code' => 'AKT 22101922'
            ],
            [
                'name' => 'AKM 3 AKT 2B',
                'course_code' => 'AKT 22102021'
            ],
            [
                'name' => 'AKM 3 AKT 2A',
                'course_code' => 'AKT 22102022'
            ],
            [
                'name' => 'AKM 3 AKT 2C, 2D',
                'course_code' => 'AKT 22102023'
            ],
            [
                'name' => 'AKMAN AKT 2B',
                'course_code' => 'AKT 22102121'
            ],
            [
                'name' => 'AKMAN AKT 2A',
                'course_code' => 'AKT 22102122'
            ],
            [
                'name' => 'AKMAN AKT 2C, 2D',
                'course_code' => 'AKT 22102123'
            ],
            [
                'name' => 'PENGAUDITAN AKT 2D',
                'course_code' => 'AKT 22102221'
            ],
            [
                'name' => 'PENGAUDITAN AKT 2A, 2B',
                'course_code' => 'AKT 22102222'
            ],
            [
                'name' => 'PENGAUDITAN AKT 2C',
                'course_code' => 'AKT 22102223'
            ],
            [
                'name' => 'PRAKTEK PAJAK AKT 2A, 2B',
                'course_code' => 'AKT 22102321'
            ],
            [
                'name' => 'PRAKTEK PAJAK AKT 2C, 2D',
                'course_code' => 'AKT 22102322'
            ],
            [
                'name' => 'KOMP AK AKT 2A, 2B, 2C, 2D',
                'course_code' => 'AKT 22102421'
            ],
            [
                'name' => 'PAP MANUFAKTUR AKT 2A, 2B',
                'course_code' => 'AKT 22102521'
            ],
            [
                'name' => 'PAP MANUFAKTUR AKT 2C, 2D',
                'course_code' => 'AKT 22102522'
            ],
            [
                'name' => 'PRAKTEK SIA AKT 2C, 2D',
                'course_code' => 'AKT 22102621'
            ],
            [
                'name' => 'PRAKTEK SIA AKT 2A, 2B',
                'course_code' => 'AKT 22102622'
            ],
            [
                'name' => 'PRAKTEK AUDIT AKT 3A, 3B, 3C, 3D, 3E',
                'course_code' => 'AKT 22102721'
            ],
            [
                'name' => 'PRAKTEK AKM AKT 3D',
                'course_code' => 'AKT 22102821'
            ],
            [
                'name' => 'PRAKTEK AKM AKT 3A, 3B, 3C',
                'course_code' => 'AKT 22102822'
            ],
            [
                'name' => 'PRAKTEK AKM AKT 3E',
                'course_code' => 'AKT 22102823'
            ],
            [
                'name' => 'BHS. INGGRIS BISNIS 1 AKT 1A, 1B, 1C',
                'course_code' => 'AKT 22102921'
            ],
            [
                'name' => 'BHS. INGGRIS BISNIS 1 AKT 1D',
                'course_code' => 'AKT 22102922'
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
            [
                'name' => 'AKM 1 AKM 1C, 1D, 1E',
                'course_code' => 'AKT 22102531'
            ],
            [
                'name' => 'AKM 1 AKM 1F',
                'course_code' => 'AKT 22102532'
            ],
            [
                'name' => 'AKM 1 AKM 1H, 1I',
                'course_code' => 'AKT 22102533'
            ],
            [
                'name' => 'AKM 1 AKM 1A, 1B',
                'course_code' => 'AKT 22102534'
            ],
            [
                'name' => 'AKM 1 AKM 1G',
                'course_code' => 'AKT 22102535'
            ],
            [
                'name' => 'PAP JASA DAGANG AKM 1H, 1I',
                'course_code' => 'AKT 22102631'
            ],
            [
                'name' => 'PAP JASA DAGANG AKM 1A, 1B',
                'course_code' => 'AKT 22102632'
            ],
            [
                'name' => 'PAP JASA DAGANG AKM 1C, 1D',
                'course_code' => 'AKT 22102633'
            ],
            [
                'name' => 'PAP JASA DAGANG AKM 1E, 1F, 1G',
                'course_code' => 'AKT 22102634'
            ],
            [
                'name' => 'AKM 3 AKM 2C, 2D',
                'course_code' => 'AKT 22102731'
            ],
            [
                'name' => 'AKM 3 AKM 2H',
                'course_code' => 'AKT 22102732'
            ],
            [
                'name' => 'AKM 3 AKM 2E, 2F, 2G',
                'course_code' => 'AKT 22102733'
            ],
            [
                'name' => 'AKM 3 AKM 2A, 2B',
                'course_code' => 'AKT 22102734'
            ],
            [
                'name' => 'AKMAN AKM 2E, 2F',
                'course_code' => 'AKT 22102831'
            ],
            [
                'name' => 'AKMAN AKM 2G, 2H',
                'course_code' => 'AKT 22102832'
            ],
            [
                'name' => 'AKMAN AKM 2C, 2D',
                'course_code' => 'AKT 22102833'
            ],
            [
                'name' => 'AKMAN AKM 2A, 2B',
                'course_code' => 'AKT 22102834'
            ],
            [
                'name' => 'PRAK PERPAJAKAN AKM 2G, 2H',
                'course_code' => 'AKT 22102931'
            ],
            [
                'name' => 'PRAK PERPAJAKAN AKM 2F',
                'course_code' => 'AKT 22102932'
            ],
            [
                'name' => 'PRAK PERPAJAKAN AKM 2A, 2B, 2C',
                'course_code' => 'AKT 22102933'
            ],
            [
                'name' => 'PRAK PERPAJAKAN AKM 2D, 2E',
                'course_code' => 'AKT 22102934'
            ],
            [
                'name' => 'PA MANUFAKTUR AKM 2D, 2E, 2F',
                'course_code' => 'AKT 22103031'
            ],
            [
                'name' => 'PA MANUFAKTUR AKM 2G, 2H',
                'course_code' => 'AKT 22103032'
            ],
            [
                'name' => 'PA MANUFAKTUR AKM 2A, 2B, 2C',
                'course_code' => 'AKT 22103033'
            ],
            [
                'name' => 'PRAKTEK SIA AKM 2A, 2B, 2C',
                'course_code' => 'AKT 22103131'
            ],
            [
                'name' => 'PRAKTEK SIA AKM 2D, 2E, 2F, 2G',
                'course_code' => 'AKT 22103132'
            ],
            [
                'name' => 'PRAKTEK SIA AKM 2H',
                'course_code' => 'AKT 22103133'
            ],
            [
                'name' => 'PENGAUDITAN AKM 2E, 2F',
                'course_code' => 'AKT 22103231'
            ],
            [
                'name' => 'PENGAUDITAN AKM 2D',
                'course_code' => 'AKT 22103232'
            ],
            [
                'name' => 'PENGAUDITAN AKM 2G, 2H',
                'course_code' => 'AKT 22103233'
            ],
            [
                'name' => 'PENGAUDITAN AKM 2A, 2B, 2C',
                'course_code' => 'AKT 22103234'
            ],
            [
                'name' => 'AK PERPAJAKAN AKM 3C, 3D',
                'course_code' => 'AKT 22103331'
            ],
            [
                'name' => 'AK PERPAJAKAN AKM 3A, 3B',
                'course_code' => 'AKT 22103332'
            ],
            [
                'name' => 'AK PERPAJAKAN AKM 3E, 3F, 3G',
                'course_code' => 'AKT 22103333'
            ],
            [
                'name' => 'AKL 2 AKM 3E',
                'course_code' => 'AKT 22103431'
            ],
            [
                'name' => 'AKL 2 AKM 3F, 3G',
                'course_code' => 'AKT 22103432'
            ],
            [
                'name' => 'AKL 2 AKM 3C, 3D',
                'course_code' => 'AKT 22103433'
            ],
            [
                'name' => 'AKL 2 AKM 3A, 3B',
                'course_code' => 'AKT 22103434'
            ],
            [
                'name' => 'AUDIT MANAJEMEN AKM 3A, 3B, 3C',
                'course_code' => 'AKT 22103531'
            ],
            [
                'name' => 'AUDIT MANAJEMEN AKM 3F, 3G',
                'course_code' => 'AKT 22103532'
            ],
            [
                'name' => 'AUDIT MANAJEMEN AKM 3D, 3E',
                'course_code' => 'AKT 22103533'
            ],
            [
                'name' => 'PRAK AK MANAJEMEN AKM 3F, 3G',
                'course_code' => 'AKT 22103631'
            ],
            [
                'name' => 'PRAK AK MANAJEMEN AKM 3D, 3E',
                'course_code' => 'AKT 22103632'
            ],
            [
                'name' => 'PRAK AK MANAJEMEN AKM 3A, 3B, 3C',
                'course_code' => 'AKT 22103633'
            ],
            [
                'name' => 'TABK AKM 4E, 4F, 4G, 4H',
                'course_code' => 'AKT 22103731'
            ],
            [
                'name' => 'TABK AKM 4A, 4B, 4C, 4D',
                'course_code' => 'AKT 22103732'
            ],
            [
                'name' => 'BHS. INGGRIS BISNIS 1 AKM 1A',
                'course_code' => 'AKT 22103831'
            ],
            [
                'name' => 'BHS. INGGRIS BISNIS 1 AKM 1B',
                'course_code' => 'AKT 22103832'
            ],
            [
                'name' => 'BHS. INGGRIS BISNIS 1 AKM 1E, 1F, 1G, 1H',
                'course_code' => 'AKT 22103833'
            ],
            [
                'name' => 'BHS. INGGRIS BISNIS 1 AKM 1C',
                'course_code' => 'AKT 22103834'
            ]
        ]);
    }
}
