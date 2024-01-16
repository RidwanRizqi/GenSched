<?php

use Illuminate\Database\Seeder;

class ProfessorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('professors')->insert([
            ['id' => 1, 'name' => 'Dr. Aang Afandi, S.E., M.M.'],
            ['id' => 2, 'name' => 'Drs. Ahmad Jarnuzi, Ak., M.SI.'],
            ['id' => 3, 'name' => 'Aisyah Vanadia Rubianto, SST., M.Sc.'],
            ['id' => 4, 'name' => 'Amelia Indah Kusdewanti, S.E.M.S.A'],
            ['id' => 5, 'name' => 'Amelia Yoga Saputri, A.Md.'],
            ['id' => 6, 'name' => 'Andi Asdani, S.E., M.M.'],
            ['id' => 7, 'name' => 'Andi Kusuma Indrawan, S.Kom., M.T.'],
            ['id' => 8, 'name' => 'Dr. Dra. Anik Kusmintarti, M.M.'],
            ['id' => 9, 'name' => 'Anik Kusnawati, S.Pd., M.Pd, Ph.D.'],
            ['id' => 10, 'name' => 'Anna Isrowiyah, S.E., M.SA.'],
            ['id' => 11, 'name' => 'Annisa Fatimah, S.ST., M.SA.'],
            ['id' => 12, 'name' => 'Annisa Fitriana, S.E, M.S.A'],
            ['id' => 13, 'name' => 'Drs. Apit Miharso, Ak., M.Pd'],
            ['id' => 14, 'name' => 'Dr. Ari Kamayanti, S.E, MSA'],
            ['id' => 15, 'name' => 'Arief Zuchrizal Madjid, SE.MM'],
            ['id' => 16, 'name' => 'Atik Andhayani, SE.MSA'],
            ['id' => 17, 'name' => 'Atika Syuliswati, S.E., M.M.'],
            ['id' => 18, 'name' => 'Bakhrudin, S.E., M.E.'],
            ['id' => 19, 'name' => 'Drs. Bambang Budi Prayitno, Ak., M.SI.'],
            ['id' => 20, 'name' => 'Dyah Metha Nurfitriasih, S.Pd, M.Sc'],
            ['id' => 21, 'name' => 'Drs. Edi Winarto, M.SI.'],
            ['id' => 22, 'name' => 'Elvyra Handayani Soedarso, S.E., M.SA.'],
            ['id' => 23, 'name' => 'Endah Suwarni, S.Sos., M.SA.'],
            ['id' => 24, 'name' => 'Erlin Melani, S.E.Ak., M.SA.'],
            ['id' => 25, 'name' => 'Farisa Nur Maula, SST.MSA'],
            ['id' => 26, 'name' => 'Fathimatus Zahro Fazda Oktavia, S.ST., M.Sc.'],
            ['id' => 27, 'name' => 'Dra. Fita Setiati, Ak., M.SI.'],
            ['id' => 28, 'name' => 'Fitrotul Maulidiyah, S.Pd, M.Pd'],
            ['id' => 29, 'name' => 'Drs. Futuh Handoyo, M.Pd'],
            ['id' => 30, 'name' => 'Galuh Kartiko, S.H., M.H.um.'],
            ['id' => 31, 'name' => 'Galuh Prawestri Citra Handani, ST.MT'],
            ['id' => 32, 'name' => 'Drs. Hari Purnomo, Ak., M.SI.'],
            ['id' => 33, 'name' => 'Hesti Wahyuni, S.E.Ak., M.M.'],
            ['id' => 34, 'name' => 'Ima Kristanti, SSTM.Sc'],
            ['id' => 35, 'name' => 'Dra. Indrayati, Ak., M.SA.'],
            ['id' => 36, 'name' => 'Jaswadi, S.E., M.Si., DBA.'],
            ['id' => 37, 'name' => 'Dr. Kartika Dewi Sri Susilowati, S.E., M.BA.'],
            ['id' => 38, 'name' => 'Dra. Kuni Utami Handayawati, M.Pd'],
            ['id' => 39, 'name' => 'Dr. Dra. Kurnia Ekasari, Ak., M.M., CA.'],
            ['id' => 40, 'name' => 'Lia Agustina, S.Pd., M.Pd'],
            ['id' => 41, 'name' => 'Dr. Drs. Ludfi Djajanto, M.BA.'],
            ['id' => 42, 'name' => 'Marlina Magdalena, S.Pd., M.SA'],
            ['id' => 43, 'name' => 'Drs. Mohamad Arief Setiawan, M.KOM'],
            ['id' => 44, 'name' => 'Drs. Muhamad Muwidha, M.SI.'],
            ['id' => 45, 'name' => 'Novi Nugrahani, S.E., M.Ak.'],
            ['id' => 46, 'name' => 'Dr. Novrida Qudsi Lutfillah, S.E.AK., MSA.CA.'],
            ['id' => 47, 'name' => 'Nur Indah Riwajanti, S.E., M.Comm., Ph.D.'],
            ['id' => 48, 'name' => 'Dr. Nurafni Eltivia, S.E., M.SA., Ak.'],
            ['id' => 49, 'name' => 'Padma Adriana Sari, S.E., M.SA.'],
            ['id' => 50, 'name' => 'R. Setiawan, S.Pd., M.Pd'],
            ['id' => 51, 'name' => 'Retno Widiastuti, S.E.Ak., M.SA.'],
            ['id' => 52, 'name' => 'Riana Estasari, SST'],
            ['id' => 53, 'name' => 'Riezky Amalia, S.E., M.SI.'],
            ['id' => 54, 'name' => 'Rika Wijayanti, S.Pd., M.Ak.'],
            ['id' => 55, 'name' => 'Rita Darmayanti, S.S., M.Pd'],
            ['id' => 56, 'name' => 'Rizky Prasetya, S.Akun'],
            ['id' => 57, 'name' => 'Rosy Aprieza Puspita Zandra, S.Pd., M.Ak.'],
            ['id' => 58, 'name' => 'Dr. Drs. Sidik Ismanu, M.SI'],
            ['id' => 59, 'name' => 'Drs. Sigit Budisantoso, M.Pd'],
            ['id' => 60, 'name' => 'Siti Amerieska, S.E., M.SA.'],
            ['id' => 61, 'name' => 'Sri Hudiarini, S.H., M.H.'],
            ['id' => 62, 'name' => 'Dr. Drs. Sumiadji, Ak., M.SA.'],
            ['id' => 63, 'name' => 'Suryan Widati, S.E.Ak., M.SA.'],
            ['id' => 64, 'name' => 'Triesti Candrawati, S.Sos., M.AB.'],
            ['id' => 65, 'name' => 'Vuvut Selviana, S.Pd.M.Pd.'],
            ['id' => 66, 'name' => 'Widi Dwi Ernawati, S.E.Ak., M.SA.'],
            ['id' => 67, 'name' => 'Zainal Abdul Haris, S.E., M.SI.'],
            ['id' => 68, 'name' => 'Peni P'],
            ['id' => 69, 'name' => 'Yunia A'],
            ['id' => 70, 'name' => 'M.Kholisul I'],
            ['id' => 71, 'name'=> 'Sugeng S.']
        ]);


        DB::table('courses_professors')->insert([
            [
                'course_id' => 1,
                'professor_id' => 68
            ],
            [
                'course_id' => 2,
                'professor_id' => 30
            ],
            [
                'course_id' => 3,
                'professor_id' => 30
            ],
            [
                'course_id' => 4,
                'professor_id' => 15
            ],
            [
                'course_id' => 5,
                'professor_id' => 15
            ],
            [
                'course_id' => 6,
                'professor_id' => 69
            ],
            [
                'course_id' => 7,
                'professor_id' => 69
            ],
            [
                'course_id' => 8,
                'professor_id' => 8
            ],
            [
                'course_id' => 9,
                'professor_id' => 8
            ],
            [
                'course_id' => 10,
                'professor_id' => 3
            ],
            [
                'course_id' => 11,
                'professor_id' => 3
            ],
            [
                'course_id' => 12,
                'professor_id' => 17
            ],
            [
                'course_id' => 13,
                'professor_id' => 17
            ],
            [
                'course_id' => 14,
                'professor_id' => 70
            ],
            [
                'course_id' => 15,
                'professor_id' => 70
            ],
            [
                'course_id' => 16,
                'professor_id' => 47
            ],
            [
                'course_id' => 17,
                'professor_id' => 47
            ],
            [
                'course_id' => 18,
                'professor_id' => 71
            ],
            [
                'course_id' => 19,
                'professor_id' => 71
            ],
            [
                'course_id' => 20,
                'professor_id' => 70
            ],
            [
                'course_id' => 21,
                'professor_id' => 70
            ],
            [
                'course_id' => 22,
                'professor_id' => 37
            ],
            [
                'course_id' => 23,
                'professor_id' => 37
            ],
            [
                'course_id' => 24,
                'professor_id' => 1
            ],
            [
                'course_id' => 25,
                'professor_id' => 1
            ],
            [
                'course_id' => 26,
                'professor_id' => 2
            ],
            [
                'course_id' => 27,
                'professor_id' => 2
            ],
            [
                'course_id' => 28,
                'professor_id' => 4
            ],
            [
                'course_id' => 29,
                'professor_id' => 4
            ],
            [
                'course_id' => 30,
                'professor_id' => 5
            ],
            [
                'course_id' => 31,
                'professor_id' => 5
            ],
            [
                'course_id' => 32,
                'professor_id' => 6
            ],
            [
                'course_id' => 33,
                'professor_id' => 6
            ],
            [
                'course_id' => 34,
                'professor_id' => 7
            ],
            [
                'course_id' => 35,
                'professor_id' => 7
            ],
            [
                'course_id' => 36,
                'professor_id' => 9
            ],
            [
                'course_id' => 37,
                'professor_id' => 9
            ],
            [
                'course_id' => 38,
                'professor_id' => 10
            ],
            [
                'course_id' => 39,
                'professor_id' => 10
            ],
            [
                'course_id' => 40,
                'professor_id' => 11
            ],
            [
                'course_id' => 41,
                'professor_id' => 11
            ],
            [
                'course_id' => 42,
                'professor_id' => 12
            ],
            [
                'course_id' => 43,
                'professor_id' => 12
            ],
            [
                'course_id' => 44,
                'professor_id' => 13
            ],
            [
                'course_id' => 45,
                'professor_id' => 13
            ],
            [
                'course_id' => 46,
                'professor_id' => 14
            ],
            [
                'course_id' => 47,
                'professor_id '=> 14
            ],
        ]);

        DB::table('unavailable_timeslots')->insert([
            [
                'professor_id' => 2,
                'day_id' => 1,
                'timeslot_id' => 1
            ],
            [
                'professor_id' => 6,
                'day_id' => 4,
                'timeslot_id' => 2
            ],
            [
                'professor_id' => 3,
                'day_id' => 5,
                'timeslot_id' => 2
            ],
            [
                'professor_id' => 2,
                'day_id' => 1,
                'timeslot_id' => 3
            ]
        ]);
    }
}
