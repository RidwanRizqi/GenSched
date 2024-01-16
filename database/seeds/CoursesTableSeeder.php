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
                'name' => 'KEUANGAN SYARIAH 2 | KEU 2A, 2B, 2C (I)',
                'course_code' => 'KEU 224006 | X I',
                'sks' => 1.5,
                'jam' => 3
            ],
            [
                'name' => 'KEUANGAN SYARIAH 2 | KEU 2A, 2B, 2C (II)',
                'course_code' => 'KEU 224006 | X II',
                'sks' => 1.5,
                'jam' => 3
            ],
            [
                'name' => 'PRAKTEK MANAJEMEN KEUANGAN | KEU 2A, 2B, 2C (I)',
                'course_code' => 'KEU 224007 | X I',
                'sks' => 1.5,
                'jam' => 3
            ],
            [
                'name' => 'PRAKTEK MANAJEMEN KEUANGAN | KEU 2A, 2B, 2C (II)',
                'course_code' => 'KEU 224007 | X II',
                'sks' => 1.5,
                'jam' => 3
            ],
            [
                'name' => 'PERENCANAAN KEUANGAN PERSONAL | KEU 3A, 3B, 3C (I)',
                'course_code' => 'KEU 216102 | X I',
                'sks' => 1,
                'jam' => 2
            ],
            [
                'name' => 'PERENCANAAN KEUANGAN PERSONAL | KEU 3A, 3B, 3C (II)',
                'course_code' => 'KEU 216102 | X II',
                'sks' => 1,
                'jam' => 2
            ],
            [
                'name' => 'APPRAISAL | KEU 3A, 3B, 3C (I)',
                'course_code' => 'KEU 216103 | X I',
                'sks' => 1.5,
                'jam' => 3
            ],
            [
                'name' => 'APPRAISAL | KEU 3A, 3B, 3C (II)',
                'course_code' => 'KEU 216103 | X II',
                'sks' => 1.5,
                'jam' => 3
            ],
            [
                'name' => 'KEBIJAKAN PUBLIK | KEU 3A, 3B, 3C (I)',
                'course_code' => 'KEU 216104 | X I',
                'sks' => 1,
                'jam' => 2
            ],
            [
                'name' => 'KEBIJAKAN PUBLIK | KEU 3A, 3B, 3C (II)',
                'course_code' => 'KEU 216104 | X II',
                'sks' => 1,
                'jam' => 2
            ],
            [
                'name' => 'KEUANGAN DESA | KEU 3A, 3B, 3C (I)',
                'course_code' => 'KEU 216105 | X I',
                'sks' => 1,
                'jam' => 2
            ],
            [
                'name' => 'KEUANGAN DESA | KEU 3A, 3B, 3C (II)',
                'course_code' => 'KEU 216105 | X II',
                'sks' => 1,
                'jam' => 2
            ],
            [
                'name' => 'PRAKTEK PASAR MODAL | KEU 3A, 3B, 3C (I)',
                'course_code' => 'KEU 216107 | X I',
                'sks' => 1.5,
                'jam' => 3
            ],
            [
                'name' => 'PRAKTEK PASAR MODAL | KEU 3A, 3B, 3C (II)',
                'course_code' => 'KEU 216107 | X II',
                'sks' => 1.5,
                'jam' => 3
            ],
            [
                'name' => 'MANAJEMEN RESIKO | KEU 3A, 3B, 3C (I)',
                'course_code' => 'KEU 216108 | X I',
                'sks' => 1,
                'jam' => 2
            ],
            [
                'name' => 'MANAJEMEN RESIKO | KEU 3A, 3B, 3C (II)',
                'course_code' => 'KEU 216108 | X II',
                'sks' => 1,
                'jam' => 2
            ],
            [
                'name' => 'PENGEMBANGAN KARIR KEU 4A (I)',
                'course_code' => 'KEU 208001 | I I',
                'sks' => 1,
                'jam' => 2
            ],
            [
                'name' => 'PENGEMBANGAN KARIR KEU 4A (II)',
                'course_code' => 'KEU 208001 | I II',
                'sks' => 1,
                'jam' => 2
            ],
            [
                'name' => 'PENGEMBANGAN KARIR KEU 4B, 4C (I)',
                'course_code' => 'KEU 208001 | II I',
                'sks' => 1,
                'jam' => 2
            ],
            [
                'name' => 'PENGEMBANGAN KARIR KEU 4B, 4C (II)',
                'course_code' => 'KEU 208001 | II II',
                'sks' => 1,
                'jam' => 2
            ],
            [
                'name' => 'AKUNTANSI KEUANGAN | KEU 1A, 1B, 1C (I)',
                'course_code' => 'KEU 232006 | X I',
                'sks' => 1.5,
                'jam' => 3
            ],
            [
                'name' => 'AKUNTANSI KEUANGAN | KEU 1A, 1B, 1C (II)',
                'course_code' => 'KEU 232006 | X II',
                'sks' => 1.5,
                'jam' => 3
            ],
            [
                'name' => 'PERPAJAKAN | KEU 2A, 2B, 2C (I)',
                'course_code' => 'KEU 224005 | X I',
                'sks' => 1.5,
                'jam' => 3
            ],
            [
                'name' => 'PERPAJAKAN | KEU 2A, 2B, 2C (II)',
                'course_code' => 'KEU 224005 | X II',
                'sks' => 1.5,
                'jam' => 3
            ],
            [
                'name' => 'PRAKTEK PERPAJAKAN | KEU 3A, 3B, 3C (I)',
                'course_code' => 'KEU 216106 | X I',
                'sks' => 2,
                'jam' => 4
            ],
            [
                'name' => 'PRAKTEK PERPAJAKAN | KEU 3A, 3B, 3C (II)',
                'course_code' => 'KEU 216106 | X II',
                'sks' => 2,
                'jam' => 4
            ],
            [
                'name' => 'BAHASA INGGRIS BISNIS 1 | KEU 2A, 2B, 2C (I)',
                'course_code' => 'KEU 224001 | X I',
                'sks' => 1,
                'jam' => 2
            ],
            [
                'name' => 'BAHASA INGGRIS BISNIS 1 | KEU 2A, 2B, 2C (II)',
                'course_code' => 'KEU 224001 | X II',
                'sks' => 1,
                'jam' => 2
            ],
            [
                'name' => 'BAHASA INGGRIS MENENGAH | KEU 1A, 1B, 1C (I)',
                'course_code' => 'KEU 232004 | X I',
                'sks' => 1.5,
                'jam' => 3
            ],
            [
                'name' => 'BAHASA INGGRIS MENENGAH | KEU 1A, 1B, 1C (II)',
                'course_code' => 'KEU 232004 | X II',
                'sks' => 1.5,
                'jam' => 3
            ],
            [
                'name' => 'BAHASA INGGRIS BISNIS 3 | KEU 3A, 3B, 3C (I)',
                'course_code' => 'KEU 216101 | X I',
                'sks' => 1,
                'jam' => 2
            ],
            [
                'name' => 'BAHASA INGGRIS BISNIS 3 | KEU 3A, 3B, 3C (II)',
                'course_code' => 'KEU 216101 | X II',
                'sks' => 1,
                'jam' => 2
            ],

            // AKT KODE 2
            // KODE PALING BELAKANG UNTUK DOSEN DAN KELAS, SEBELAH KIRINYA UNTUK PRODI, SEBELAH KIRINYA LAGI KODE MK
            [
                'name' => 'KOMUNIKASI BISNIS AKT 1A, 1B, 1C, 1D, 1E',
                'course_code' => 'AKT 22101621',
                'sks' => 0,
                'jam' => 0
            ],
            [
                'name' => 'METODOLOGI PENELITIAN AKT 2A, 2B',
                'course_code' => 'AKT 22101721',
                'sks' => 0,
                'jam' => 0
            ],
            [
                'name' => 'METODOLOGI PENELITIAN AKT 2C, 2D',
                'course_code' => 'AKT 22101722',
                'sks' => 0,
                'jam' => 0
            ],
            [
                'name' => 'AKM 1 AKT 1C, 1D',
                'course_code' => 'AKT 22101821',
                'sks' => 0,
                'jam' => 0
            ],
            [
                'name' => 'AKM 1 AKT 1A, 1B',
                'course_code' => 'AKT 22101822',
                'sks' => 0,
                'jam' => 0
            ],
            [
                'name' => 'AKM 1 AKT 1E',
                'course_code' => 'AKT 22101823',
                'sks' => 0,
                'jam' => 0
            ],
            [
                'name' => 'PAP JASA DAGANG AKT 1D, 1E',
                'course_code' => 'AKT 22101921',
                'sks' => 0,
                'jam' => 0
            ],
            [
                'name' => 'PAP JASA DAGANG AKT 1A, 1B, 1C',
                'course_code' => 'AKT 22101922',
                'sks' => 0,
                'jam' => 0
            ],
            [
                'name' => 'AKM 3 AKT 2B',
                'course_code' => 'AKT 22102021',
                'sks' => 0,
                'jam' => 0
            ],
            [
                'name' => 'AKM 3 AKT 2A',
                'course_code' => 'AKT 22102022',
                'sks' => 0,
                'jam' => 0
            ],
            [
                'name' => 'AKM 3 AKT 2C, 2D',
                'course_code' => 'AKT 22102023',
                'sks' => 0,
                'jam' => 0
            ],
            [
                'name' => 'AKMAN AKT 2B',
                'course_code' => 'AKT 22102121',
                'sks' => 0,
                'jam' => 0
            ],
            [
                'name' => 'AKMAN AKT 2A',
                'course_code' => 'AKT 22102122',
                'sks' => 0,
                'jam' => 0
            ],
            [
                'name' => 'AKMAN AKT 2C, 2D',
                'course_code' => 'AKT 22102123',
                'sks' => 0,
                'jam' => 0
            ],
            [
                'name' => 'PENGAUDITAN AKT 2D',
                'course_code' => 'AKT 22102221',
                'sks' => 0,
                'jam' => 0
            ],
            [
                'name' => 'PENGAUDITAN AKT 2A, 2B',
                'course_code' => 'AKT 22102222',
                'sks' => 0,
                'jam' => 0
            ],
            [
                'name' => 'PENGAUDITAN AKT 2C',
                'course_code' => 'AKT 22102223',
                'sks' => 0,
                'jam' => 0
            ],
            [
                'name' => 'PRAKTEK PAJAK AKT 2A, 2B',
                'course_code' => 'AKT 22102321',
                'sks' => 0,
                'jam' => 0
            ],
            [
                'name' => 'PRAKTEK PAJAK AKT 2C, 2D',
                'course_code' => 'AKT 22102322',
                'sks' => 0,
                'jam' => 0
            ],
            [
                'name' => 'KOMP AK AKT 2A, 2B, 2C, 2D',
                'course_code' => 'AKT 22102421',
                'sks' => 0,
                'jam' => 0
            ],
            [
                'name' => 'PAP MANUFAKTUR AKT 2A, 2B',
                'course_code' => 'AKT 22102521',
                'sks' => 0,
                'jam' => 0
            ],
            [
                'name' => 'PAP MANUFAKTUR AKT 2C, 2D',
                'course_code' => 'AKT 22102522',
                'sks' => 0,
                'jam' => 0
            ],
            [
                'name' => 'PRAKTEK SIA AKT 2C, 2D',
                'course_code' => 'AKT 22102621',
                'sks' => 0,
                'jam' => 0
            ],
            [
                'name' => 'PRAKTEK SIA AKT 2A, 2B',
                'course_code' => 'AKT 22102622',
                'sks' => 0,
                'jam' => 0
            ],
            [
                'name' => 'PRAKTEK AUDIT AKT 3A, 3B, 3C, 3D, 3E',
                'course_code' => 'AKT 22102721',
                'sks' => 0,
                'jam' => 0
            ],
            [
                'name' => 'PRAKTEK AKM AKT 3D',
                'course_code' => 'AKT 22102821',
                'sks' => 0,
                'jam' => 0
            ],
            [
                'name' => 'PRAKTEK AKM AKT 3A, 3B, 3C',
                'course_code' => 'AKT 22102822',
                'sks' => 0,
                'jam' => 0
            ],
            [
                'name' => 'PRAKTEK AKM AKT 3E',
                'course_code' => 'AKT 22102823',
                'sks' => 0,
                'jam' => 0
            ],
            [
                'name' => 'BHS. INGGRIS BISNIS 1 AKT 1A, 1B, 1C',
                'course_code' => 'AKT 22102921',
                'sks' => 0,
                'jam' => 0
            ],
            [
                'name' => 'BHS. INGGRIS BISNIS 1 AKT 1D',
                'course_code' => 'AKT 22102922',
                'sks' => 0,
                'jam' => 0
            ],

            // AKM KODE 3
            // KODE PALING BELAKANG UNTUK DOSEN DAN KELAS, SEBELAH KIRINYA UNTUK PRODI, SEBELAH KIRINYA LAGI KODE MK
            [
                'name' => 'PENGETIKAN NIAGA AKM 1A, 1B, 1C, 1D, 1E, 1I',
                'course_code' => 'AKT 22101831',
                'sks' => 0,
                'jam' => 0
            ],
            [
                'name' => 'PENGETIKAN NIAGA AKM 1F, 1G, 1H',
                'course_code' => 'AKT 22101832',
                'sks' => 0,
                'jam' => 0
            ],
            [
                'name' => 'MANAJEMEN PEMASARAN AKM 1A, 1B, 1C, 1D, 1E, 1F',
                'course_code' => 'AKT 22101931',
                'sks' => 0,
                'jam' => 0
            ],
            [
                'name' => 'MANAJEMEN PEMASARAN AKM 1G, 1H',
                'course_code' => 'AKT 22101932',
                'sks' => 0,
                'jam' => 0
            ],
            [
                'name' => 'MANAJEMEN PEMASARAN AKM 1I',
                'course_code' => 'AKT 22101933',
                'sks' => 0,
                'jam' => 0
            ],
            [
                'name' => 'MANAJEMEN KEUANGAN AKM 2A, 2B, 2C, 2D',
                'course_code' => 'AKT 22102031',
                'sks' => 0,
                'jam' => 0
            ],
            [
                'name' => 'MANAJEMEN KEUANGAN AKM 2E, 2F, 2G',
                'course_code' => 'AKT 22102032',
                'sks' => 0,
                'jam' => 0
            ],
            [
                'name' => 'MANAJEMEN KEUANGAN AKM 2H',
                'course_code' => 'AKT 22102033',
                'sks' => 0,
                'jam' => 0
            ],
            [
                'name' => 'MANAJEMEN PEMASARAN AKM 3A, 3B',
                'course_code' => 'AKT 22102131',
                'sks' => 0,
                'jam' => 0
            ],
            [
                'name' => 'MANAJEMEN PEMASARAN AKM 3C',
                'course_code' => 'AKT 22102132',
                'sks' => 0,
                'jam' => 0
            ],
            [
                'name' => 'MANAJEMEN PEMASARAN AKM 3D',
                'course_code' => 'AKT 22102133',
                'sks' => 0,
                'jam' => 0
            ],
            [
                'name' => 'MANAJEMEN PEMASARAN AKM 3E',
                'course_code' => 'AKT 22102134',
                'sks' => 0,
                'jam' => 0
            ],
            [
                'name' => 'MANAJEMEN PEMASARAN AKM 3F',
                'course_code' => 'AKT 22102135',
                'sks' => 0,
                'jam' => 0
            ],
            [
                'name' => 'MANAJEMEN PEMASARAN AKM 3G',
                'course_code' => 'AKT 22102136',
                'sks' => 0,
                'jam' => 0
            ],
            [
                'name' => 'MANAJEMEN KEUANGAN AKM 3A, 3B, 3C',
                'course_code' => 'AKT 22102231',
                'sks' => 0,
                'jam' => 0
            ],
            [
                'name' => 'MANAJEMEN KEUANGAN AKM 3D, 3E',
                'course_code' => 'AKT 22102232',
                'sks' => 0,
                'jam' => 0
            ],
            [
                'name' => 'MANAJEMEN KEUANGAN AKM 3F, 3G',
                'course_code' => 'AKT 22102233',
                'sks' => 0,
                'jam' => 0
            ],
            [
                'name' => 'METODOLOGI PENELITIAN AKM 3A',
                'course_code' => 'AKT 22102331',
                'sks' => 0,
                'jam' => 0
            ],
            [
                'name' => 'METODOLOGI PENELITIAN AKM 3B, 3C, 3D',
                'course_code' => 'AKT 22102332',
                'sks' => 0,
                'jam' => 0
            ],
            [
                'name' => 'METODOLOGI PENELITIAN AKM 3E, 3F',
                'course_code' => 'AKT 22102333',
                'sks' => 0,
                'jam' => 0
            ],
            [
                'name' => 'METODOLOGI PENELITIAN AKM 3G',
                'course_code' => 'AKT 22102334',
                'sks' => 0,
                'jam' => 0
            ],
            [
                'name' => 'MANAJEMEN STRATEJIK AKM 3A, 3B, 3C, 3D',
                'course_code' => 'AKT 22102431',
                'sks' => 0,
                'jam' => 0
            ],
            [
                'name' => 'MANAJEMEN STRATEJIK AKM 3E, 3F',
                'course_code' => 'AKT 22102432',
                'sks' => 0,
                'jam' => 0
            ],
            [
                'name' => 'MANAJEMEN STRATEJIK AKM 3G',
                'course_code' => 'AKT 22102433',
                'sks' => 0,
                'jam' => 0
            ],
            [
                'name' => 'AKM 1 AKM 1C, 1D, 1E',
                'course_code' => 'AKT 22102531',
                'sks' => 0,
                'jam' => 0
            ],
            [
                'name' => 'AKM 1 AKM 1F',
                'course_code' => 'AKT 22102532',
                'sks' => 0,
                'jam' => 0
            ],
            [
                'name' => 'AKM 1 AKM 1H, 1I',
                'course_code' => 'AKT 22102533',
                'sks' => 0,
                'jam' => 0
            ],
            [
                'name' => 'AKM 1 AKM 1A, 1B',
                'course_code' => 'AKT 22102534',
                'sks' => 0,
                'jam' => 0
            ],
            [
                'name' => 'AKM 1 AKM 1G',
                'course_code' => 'AKT 22102535',
                'sks' => 0,
                'jam' => 0
            ],
            [
                'name' => 'PAP JASA DAGANG AKM 1H, 1I',
                'course_code' => 'AKT 22102631',
                'sks' => 0,
                'jam' => 0
            ],
            [
                'name' => 'PAP JASA DAGANG AKM 1A, 1B',
                'course_code' => 'AKT 22102632',
                'sks' => 0,
                'jam' => 0
            ],
            [
                'name' => 'PAP JASA DAGANG AKM 1C, 1D',
                'course_code' => 'AKT 22102633',
                'sks' => 0,
                'jam' => 0
            ],
            [
                'name' => 'PAP JASA DAGANG AKM 1E, 1F, 1G',
                'course_code' => 'AKT 22102634',
                'sks' => 0,
                'jam' => 0
            ],
            [
                'name' => 'AKM 3 AKM 2C, 2D',
                'course_code' => 'AKT 22102731',
                'sks' => 0,
                'jam' => 0
            ],
            [
                'name' => 'AKM 3 AKM 2H',
                'course_code' => 'AKT 22102732',
                'sks' => 0,
                'jam' => 0
            ],
            [
                'name' => 'AKM 3 AKM 2E, 2F, 2G',
                'course_code' => 'AKT 22102733',
                'sks' => 0,
                'jam' => 0
            ],
            [
                'name' => 'AKM 3 AKM 2A, 2B',
                'course_code' => 'AKT 22102734',
                'sks' => 0,
                'jam' => 0
            ],
            [
                'name' => 'AKMAN AKM 2E, 2F',
                'course_code' => 'AKT 22102831',
                'sks' => 0,
                'jam' => 0
            ],
            [
                'name' => 'AKMAN AKM 2G, 2H',
                'course_code' => 'AKT 22102832',
                'sks' => 0,
                'jam' => 0
            ],
            [
                'name' => 'AKMAN AKM 2C, 2D',
                'course_code' => 'AKT 22102833',
                'sks' => 0,
                'jam' => 0
            ],
            [
                'name' => 'AKMAN AKM 2A, 2B',
                'course_code' => 'AKT 22102834',
                'sks' => 0,
                'jam' => 0
            ],
            [
                'name' => 'PRAK PERPAJAKAN AKM 2G, 2H',
                'course_code' => 'AKT 22102931',
                'sks' => 0,
                'jam' => 0
            ],
            [
                'name' => 'PRAK PERPAJAKAN AKM 2F',
                'course_code' => 'AKT 22102932',
                'sks' => 0,
                'jam' => 0
            ],
            [
                'name' => 'PRAK PERPAJAKAN AKM 2A, 2B, 2C',
                'course_code' => 'AKT 22102933',
                'sks' => 0,
                'jam' => 0
            ],
            [
                'name' => 'PRAK PERPAJAKAN AKM 2D, 2E',
                'course_code' => 'AKT 22102934',
                'sks' => 0,
                'jam' => 0
            ],
            [
                'name' => 'PA MANUFAKTUR AKM 2D, 2E, 2F',
                'course_code' => 'AKT 22103031',
                'sks' => 0,
                'jam' => 0
            ],
            [
                'name' => 'PA MANUFAKTUR AKM 2G, 2H',
                'course_code' => 'AKT 22103032',
                'sks' => 0,
                'jam' => 0
            ],
            [
                'name' => 'PA MANUFAKTUR AKM 2A, 2B, 2C',
                'course_code' => 'AKT 22103033',
                'sks' => 0,
                'jam' => 0
            ],
            [
                'name' => 'PRAKTEK SIA AKM 2A, 2B, 2C',
                'course_code' => 'AKT 22103131',
                'sks' => 0,
                'jam' => 0
            ],
            [
                'name' => 'PRAKTEK SIA AKM 2D, 2E, 2F, 2G',
                'course_code' => 'AKT 22103132',
                'sks' => 0,
                'jam' => 0
            ],
            [
                'name' => 'PRAKTEK SIA AKM 2H',
                'course_code' => 'AKT 22103133',
                'sks' => 0,
                'jam' => 0
            ],
            [
                'name' => 'PENGAUDITAN AKM 2E, 2F',
                'course_code' => 'AKT 22103231',
                'sks' => 0,
                'jam' => 0
            ],
            [
                'name' => 'PENGAUDITAN AKM 2D',
                'course_code' => 'AKT 22103232',
                'sks' => 0,
                'jam' => 0
            ],
            [
                'name' => 'PENGAUDITAN AKM 2G, 2H',
                'course_code' => 'AKT 22103233',
                'sks' => 0,
                'jam' => 0
            ],
            [
                'name' => 'PENGAUDITAN AKM 2A, 2B, 2C',
                'course_code' => 'AKT 22103234',
                'sks' => 0,
                'jam' => 0
            ],
            [
                'name' => 'AK PERPAJAKAN AKM 3C, 3D',
                'course_code' => 'AKT 22103331',
                'sks' => 0,
                'jam' => 0
            ],
            [
                'name' => 'AK PERPAJAKAN AKM 3A, 3B',
                'course_code' => 'AKT 22103332',
                'sks' => 0,
                'jam' => 0
            ],
            [
                'name' => 'AK PERPAJAKAN AKM 3E, 3F, 3G',
                'course_code' => 'AKT 22103333',
                'sks' => 0,
                'jam' => 0
            ],
            [
                'name' => 'AKL 2 AKM 3E',
                'course_code' => 'AKT 22103431',
                'sks' => 0,
                'jam' => 0
            ],
            [
                'name' => 'AKL 2 AKM 3F, 3G',
                'course_code' => 'AKT 22103432',
                'sks' => 0,
                'jam' => 0
            ],
            [
                'name' => 'AKL 2 AKM 3C, 3D',
                'course_code' => 'AKT 22103433',
                'sks' => 0,
                'jam' => 0
            ],
            [
                'name' => 'AKL 2 AKM 3A, 3B',
                'course_code' => 'AKT 22103434',
                'sks' => 0,
                'jam' => 0
            ],
            [
                'name' => 'AUDIT MANAJEMEN AKM 3A, 3B, 3C',
                'course_code' => 'AKT 22103531',
                'sks' => 0,
                'jam' => 0
            ],
            [
                'name' => 'AUDIT MANAJEMEN AKM 3F, 3G',
                'course_code' => 'AKT 22103532',
                'sks' => 0,
                'jam' => 0
            ],
            [
                'name' => 'AUDIT MANAJEMEN AKM 3D, 3E',
                'course_code' => 'AKT 22103533',
                'sks' => 0,
                'jam' => 0
            ],
            [
                'name' => 'PRAK AK MANAJEMEN AKM 3F, 3G',
                'course_code' => 'AKT 22103631',
                'sks' => 0,
                'jam' => 0
            ],
            [
                'name' => 'PRAK AK MANAJEMEN AKM 3D, 3E',
                'course_code' => 'AKT 22103632',
                'sks' => 0,
                'jam' => 0
            ],
            [
                'name' => 'PRAK AK MANAJEMEN AKM 3A, 3B, 3C',
                'course_code' => 'AKT 22103633',
                'sks' => 0,
                'jam' => 0
            ],
            [
                'name' => 'TABK AKM 4E, 4F, 4G, 4H',
                'course_code' => 'AKT 22103731',
                'sks' => 0,
                'jam' => 0
            ],
            [
                'name' => 'TABK AKM 4A, 4B, 4C, 4D',
                'course_code' => 'AKT 22103732',
                'sks' => 0,
                'jam' => 0
            ],
            [
                'name' => 'BHS. INGGRIS BISNIS 1 AKM 1A',
                'course_code' => 'AKT 22103831',
                'sks' => 0,
                'jam' => 0
            ],
            [
                'name' => 'BHS. INGGRIS BISNIS 1 AKM 1B',
                'course_code' => 'AKT 22103832',
                'sks' => 0,
                'jam' => 0
            ],
            [
                'name' => 'BHS. INGGRIS BISNIS 1 AKM 1E, 1F, 1G, 1H',
                'course_code' => 'AKT 22103833',
                'sks' => 0,
                'jam' => 0
            ],
            [
                'name' => 'BHS. INGGRIS BISNIS 1 AKM 1C',
                'course_code' => 'AKT 22103834',
                'sks' => 0,
                'jam' => 0
            ]
        ]);
    }
}
