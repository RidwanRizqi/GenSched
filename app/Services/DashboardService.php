<?php

namespace App\Services;

use App\Models\Room;
use App\Models\Course;
use App\Models\Professor;
use App\Models\CollegeClass;

class DashboardService
{
    /**
     * Get data for display on the dashboard
     *
     * @return array Data
     */
    public function getData()
    {
        $roomsCount = Room::count();
        $coursesCount = Course::count();
        $professorsCount = Professor::count();
        $classesCount = CollegeClass::count();

        $data = [
            'cards' => [
                [
                    'title' => 'Ruang',
                    'icon' => 'home',
                    'value' => $roomsCount
                ],
                [
                    'title' => 'Mata Kuliah',
                    'icon' => 'book',
                    'value' => $coursesCount
                ],
                [
                    'title' => 'Dosen',
                    'icon' => 'graduation-cap',
                    'value' => $professorsCount
                ],
                [
                    'title' => 'Kelas',
                    'icon' => 'users',
                    'value' => $classesCount
                ]
            ]
        ];

        return $data;
    }
}