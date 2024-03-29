<?php

namespace App\Services\GeneticAlgorithm;

use App\Models\Day;

class Timetable
{
    /**
     * Rooms indexed by their IDs
     *
     * @var array
     */
    private $rooms;

    /**
     * Collection of professors indexed by their IDs
     *
     * @var array
     */
    private $professors;

    /**
     * Collection of modules indexed by their IDs
     *
     * @var array
     */
    private $modules;

    /**
     * Collection of class groups indexed by their IDs
     *
     * @var array
     */
    private $groups;

    /**
     * Collection of time slots
     *
     * @var array
     */
    private $timeslots;

    /**
     * Available classes
     *
     * @var array
     */
    public array $classes;

    /**
     * Number of classes scheduled
     *
     * @var int
     */
    private $numClasses;

    /**
     * Maximum slots students can have continuously
     *
     * @var int
     */
    public $maxContinuousSlots;

    /**
     * Create a new instance of this class
     */
    public function __construct($maxContinuousSlots)
    {
        $this->rooms = [];
        $this->professors = [];
        $this->modules = [];
        $this->groups = [];
        $this->timeslots = [];
        $this->numClasses = 0;
        $this->maxContinuousSlots = $maxContinuousSlots;
    }

    /**
     * Get the groups
     *
     * @return array The groups
     */
    public function getGroups()
    {
        return $this->groups;
    }

    /**
     * Get the timeslots
     *
     * @return array The timeslots
     */
    public function getTimeslots()
    {
        return $this->timeslots;
    }

    /**
     * Get the modules
     *
     * @return array The modules
     */
    public function getModules()
    {
        return $this->modules;
    }

    /**
     * Get the professors
     *
     * @return array Collection of professors
     */
    public function getProfessors()
    {
        return $this->professors;
    }

    /**
     * Add a new lecture room
     *
     * @param int $roomId ID of room
     */
    public function addRoom($roomId)
    {
        $this->rooms[$roomId] = new Room($roomId);
    }

    /**
     * Add a professor
     *
     * @param int $professorId Id of professor
     * @param string $unavailableSlots Slots that the professor can't teach
     * @param array $unavailableRooms Rooms that the professor can't teach in
     */
    public function addProfessor($professorId, $unavailableSlots, $unavailableRooms)
    {
        $this->professors[$professorId] = new Professor($professorId, $unavailableSlots, $unavailableRooms);
    }

    /**
     * Add a new module
     *
     * @param int $moduleId Id of module
     * @param array $professorIds Ids of professors
     */
    public function addModule($moduleId, $professorIds, $unavailableRoomsCourses)
    {
        $this->modules[$moduleId] = new Module($moduleId, $professorIds, $unavailableRoomsCourses);
    }

    /**
     * Add a group to this timetable
     *
     * @param int $groupId ID of group
     * @param int $groupSize Size of the group
     * @param array $moduleIds IDs of modules
     */
    public function addGroup($groupId, $moduleIds)
    {
        $this->groups[$groupId] = new Group($groupId, $moduleIds);
        $this->numClasses = 0;
    }

    /**
     * Add a new timeslot
     *
     * @param int $timeslotId ID of time slot
     * @param string $timeslot Timeslot
     */
    public function addTimeslot($timeslotId, $next)
    {
        $this->timeslots[$timeslotId] = new Timeslot($timeslotId, $next);
    }

    /**
     * Create classes using individual's chromosomes
     *
     * @param Individual $individual Individual
     */
    public function createClasses($individual)
    {
        $classes = [];

        $chromosome = $individual->getChromosome();
        $chromosomePos = 0;
        $classIndex = 0;

        foreach ($this->groups as $id => $group) {
            $moduleIds = $group->getModuleIds();

            foreach ($moduleIds as $moduleId) {
                $module = $this->getModule($moduleId);

                for ($i = 1; $i <= $module->getSlots($id); $i++) {
                    $classes[$classIndex] = new CollegeClass($classIndex, $group->getId(), $moduleId);

                    // Add timeslot
                    $classes[$classIndex]->addTimeslot($chromosome[$chromosomePos]);
                    $chromosomePos++;

                    // Add room
                    $classes[$classIndex]->addRoom($chromosome[$chromosomePos]);
                    $chromosomePos++;

                    // Add professor
                    $classes[$classIndex]->addProfessor($chromosome[$chromosomePos]);
                    $chromosomePos++;

                    $classIndex++;
                }
            }
        }

        $this->classes = $classes;
    }

    /**
     * Get the string that shows how the timetable chromosome is to be read
     *
     * @return string Chromosome scheme
     */
    public function getScheme()
    {
        $scheme = [];

        foreach ($this->groups as $id => $group) {
            $moduleIds = $group->getModuleIds();

            $scheme[] = 'G' . $id;

            foreach ($moduleIds as $moduleId) {
                $module = $this->getModule($moduleId);

                for ($i = 1; $i <= $module->getSlots($id); $i++) {
                    $scheme[] = $moduleId;
                }
            }
        }

        return implode(",", $scheme);
    }

    /**
     * Get a room by ID
     *
     * @param int $roomId ID of room
     */
    public function getRoom($roomId)
    {
        if (!isset($this->rooms[$roomId])) {
            print "No room with ID " . $roomId;
            return null;
        }

        return $this->rooms[$roomId];
    }

    /**
     * Get all rooms
     *
     * @return array Collection of rooms
     */
    public function getRooms()
    {
        return $this->rooms;
    }

    /**
     * Get a random room
     *
     * @return Room room
     */
    public function getRandomRoom()
    {
        return $this->rooms[array_rand($this->rooms)];
    }

    /**
     * Get professor with given ID
     *
     * @param int $professorId ID of professor
     */
    public function getProfessor($professorId)
    {
        return $this->professors[$professorId];
    }

    /**
     * Get module by Id
     *
     * @param int $moduleId ID of module
     */
    public function getModule($moduleId)
    {
        return $this->modules[$moduleId];
    }

    /**
     * Get modules of a student group with given ID
     *
     * @param int $groupId ID of group
     */
    public function getGroupModules($groupId)
    {
        $group = $this->groups[$groupId];
        return $group->getModuleIds();
    }

    /**
     * Get a group using its group ID
     *
     * @param int $groupId ID of group
     * @return Group A group
     */
    public function getGroup($groupId)
    {
        return $this->groups[$groupId];
    }

    /**
     * Get timeslot with given ID
     *
     * @param int $timeslotId ID Of timeslot
     * @return Timeslot A timeslot
     */
    public function getTimeslot($timeslotId)
    {
        return $this->timeslots[$timeslotId];
    }

    /**
     * Get a random time slot
     *
     * @return Timeslot A timeslot
     */
    public function getRandomTimeslot()
    {
        return $this->timeslots[array_rand($this->timeslots)];
    }

    /**
     * Get a collection of classes
     *
     * @return array Classes
     */
    public function getClasses()
    {
        return $this->classes;
    }

    /**
     * Get number of classes that need scheduling
     *
     * @return int Number of classes
     */
    public function getNumClasses()
    {
        if ($this->numClasses > 0) {
            return $this->numClasses;
        }

        $numClasses = 0;

        foreach ($this->groups as $group) {
            $numClasses += count($group->getModuleIds());
        }

        $this->numClasses = $numClasses;
        return $numClasses;
    }

    /**
     * Get classes scheduled for a given day for a given group
     *
     * @param $dayId ID of day we are getting classes for
     * @param $groupId The ID of the group
     */
    public function getClassesByDay($dayId, $groupId)
    {
        $classes = [];

        foreach ($this->classes as $class) {
            $timeslot = $this->getTimeslot($class->getTimeslotId());

            $classDayId = $timeslot->getDayId();

            if ($dayId == $classDayId && $class->getGroupId() == $groupId) {
                $classes[] = $class;
            }
        }

        return $classes;
    }

    /**
     * Calculate the number of clashes
     *
     * @return string Number of clashes
     */
    public function calcClashes()
    {
        $courses6hoursId = [7, 6, 3];
        $clashes = 0;
        $days = Day::all();

        foreach ($this->classes as $id => $classA) {
            $roomCapacity = $this->getRoom($classA->getRoomId())->getCapacity();
            $groupSize = $this->getGroup($classA->getGroupId())->getSize();
            $professor = $this->getProfessor($classA->getProfessorId());
            $timeslot = $this->getTimeslot($classA->getTimeslotId());
            $module = $this->getModule($classA->getModuleId());

            if ($roomCapacity < $groupSize) {
                $clashes++;
            }

            // Check if we don't have any lecturer forced to teach at his occupied time
            if (in_array($timeslot->getId(), $professor->getOccupiedSlots())) {
                $clashes++;
            }

            // Check if we don't have any lecturer forced to teach at his occupied room
            if (in_array($classA->getRoomId(), $professor->getOccupiedRooms())) {
                $clashes++;
            }

            // Check if we don't have any course forced to be taught at its unavailable room
            if (in_array($classA->getRoomId(), $module->getOccupiedRooms())) {
                $clashes++;
            }

            /// Check if we don't have same group in two classes at same time
            foreach ($this->classes as $id => $classB) {
                if ($classA->getId() != $classB->getId()) {
                    if (($classA->getGroupId() == $classB->getGroupId()) && ($classA->getTimeslotId() == $classB->getTimeslotId())) {
                        $clashes++;

                        // Check if the module has more than one meeting
                        $module = $this->getModule($classA->getModuleId());
                        if ($module->getSlots($classA->getGroupId()) > 1) {
                            // implement logic to ensure Ensure that each course with more than one meeting gets the same day, room, professor, and consecutive timeslots

                        }

                        break;
                    }
                }
            }

            // Check if the module has more than one meeting
            $module = $this->getModule($classA->getModuleId());
            if ($module->getSlots($classA->getGroupId()) > 1) {
                // Get all classes for the same module and group
                $sameModuleClasses = [];
                foreach ($this->classes as $classB) {
                    if ($classA->getModuleId() == $classB->getModuleId() && $classA->getGroupId() == $classB->getGroupId()) {
                        $sameModuleClasses[] = $classB;
                    }
                }

                // Check if all these classes have the same room, professor, and day
                $room = $classA->getRoomId();
                $professor = $classA->getProfessorId();
                $day = $this->getTimeslot($classA->getTimeslotId())->getDayId();
                foreach ($sameModuleClasses as $classB) {
                    if ($room != $classB->getRoomId() || $professor != $classB->getProfessorId() || $day != $this->getTimeslot($classB->getTimeslotId())->getDayId()) {
                        $clashes++;
                        break;
                    }
                }

                // Check if the timeslots for these classes are consecutive
                $timeslots = [];
                foreach ($sameModuleClasses as $classB) {
                    $timeslots[] = $this->getTimeslot($classB->getTimeslotId())->getId();
                }
                if (!$this->areConsecutive($timeslots)) {
                    $clashes++;
                }
            }



            //            // Check if the course has id in $course6hoursId, then the next 2 timeslot id must be left blank and cannot be used.
            //            if (in_array($classA->getModuleId(), $courses6hoursId)) {
            //                $timeslotId = $classA->getTimeslotId();
            //
            //                if ($timeslotId == 'D5T6') {
            //                    $clashes++;
            //                }
            //
            //                if ($timeslotId[strlen($timeslotId) - 1] > 5) {
            //                    $clashes++;
            //                }
            //                for ($i = 1; $i <= 2; $i++) {
            //                    // value of $timeslotId is D5T4, I want to increace the value of "4"
            //                    $nextTimeslotId = substr($timeslotId, 0, -1) . ($timeslotId[strlen($timeslotId) - 1] + $i);
            //                    foreach ($this->classes as $classB) {
            //                        if ($classB->getTimeslotId() == $nextTimeslotId) {
            //                            $clashes++;
            //                            break;
            //                        }
            //                    }
            //                }
            //            }
            //
            //            // Check if the course has memiliki id kecuali dalam array $course6hoursId, then the next 1 timeslot id must be left blank and cannot be used.
            //            if (!in_array($classA->getModuleId(), $courses6hoursId)) {
            //                $timeslotId = $classA->getTimeslotId();
            //
            //                if ($timeslotId == 'D5T6') {
            //                    $clashes++;
            //                }
            //
            //                if ($timeslotId[strlen($timeslotId) - 1] > 6) {
            //                    $clashes++;
            //                }
            //                for ($i = 1; $i <= 1; $i++) {
            //                    // value of $timeslotId is D5T4, I want to increace the value of "4"
            //                    $nextTimeslotId = substr($timeslotId, 0, -1) . ($timeslotId[strlen($timeslotId) - 1] + $i);
            //                    foreach ($this->classes as $classB) {
            //                        if ($classB->getTimeslotId() == $nextTimeslotId) {
            //                            $clashes++;
            //                            break;
            //                        }
            //                    }
            //                }
            //            }

            //            // Check if we don't have same group in two classes at same time
            //            foreach ($this->classes as $id => $classB) {
            //                if ($classA->getId() != $classB->getId()) {
            //                    if (($classA->getGroupId() == $classB->getGroupId()) && ($classA->getTimeslotId() == $classB->getTimeslotId())) {
            //                        $clashes++;
            //
            //                        // Check if the module has more than one meeting
            //                        $module = $this->getModule($classA->getModuleId());
            //                        if ($module->getSlots($classA->getGroupId()) > 1) {
            //                            // implement logic to ensure Ensure that each course with more than one meeting gets the same day, room, professor, and consecutive timeslots
            //
            //                        }
            //
            //                        break;
            //                    }
            //                }
            //            }
            //
            //            // Check if the module has more than one meeting
            //            $module = $this->getModule($classA->getModuleId());
            //            if ($module->getSlots($classA->getGroupId()) > 1) {
            //                // Get all classes for the same module and group
            //                $sameModuleClasses = [];
            //                foreach ($this->classes as $classB) {
            //                    if ($classA->getModuleId() == $classB->getModuleId() && $classA->getGroupId() == $classB->getGroupId()) {
            //                        $sameModuleClasses[] = $classB;
            //                    }
            //                }
            //                print $sameModuleClasses;
            //
            //                // Check if all these classes have the same room, professor, and day
            //                $room = $classA->getRoomId();
            //                $professor = $classA->getProfessorId();
            //                $day = $this->getTimeslot($classA->getTimeslotId())->getDayId();
            //                foreach ($sameModuleClasses as $classB) {
            //                    if ($room != $classB->getRoomId() || $professor != $classB->getProfessorId() || $day != $this->getTimeslot($classB->getTimeslotId())->getDayId()) {
            //                        $clashes++;
            //                        break;
            //                    }
            //                }
            //
            //                // Check if the timeslots for these classes are consecutive
            //                $timeslots = [];
            //                foreach ($sameModuleClasses as $classB) {
            //                    $timeslots[] = $this->getTimeslot($classB->getTimeslotId())->getId();
            //                }
            //                if (!$this->areConsecutive($timeslots)) {
            //                    $clashes++;
            //                }
            //            }

            // Check if room is taken
            foreach ($this->classes as $id => $classB) {
                if ($classA->getId() != $classB->getId()) {
                    if (($classA->getRoomId() == $classB->getRoomId()) && ($classA->getTimeslotId() == $classB->getTimeslotId())) {
                        $clashes++;
                        break;
                    }
                }
            }


            if (in_array($classA->getRoomId(), $this->getGroup($classA->getGroupId())->getUnavailableRooms())) {
                $clashes++;
            }

            // Check if professor is available
            foreach ($this->classes as $id => $classB) {
                if ($classA->getId() != $classB->getId()) {
                    if (($classA->getProfessorId() == $classB->getProfessorId())
                        && ($classA->getTimeslotId() == $classB->getTimeslotId())
                    ) {
                        $clashes++;
                        break;
                    }
                }
            }

            // Check if we don't have same group in two classes at same time
            foreach ($this->classes as $id => $classB) {
                if ($classA->getId() != $classB->getId()) {
                    if (($classA->getGroupId() == $classB->getGroupId()) && ($classA->getTimeslotId() == $classB->getTimeslotId())) {
                        $clashes++;
                        break;
                    }
                }
            }
        }

        // Constraint to ensure that no course occurs at two different locations
        // and or at non-consecutive time slots
        foreach ($days as $day) {
            foreach ($this->getGroups() as $group) {
                $classes = $this->getClassesByDay($day->id, $group->getId());
                $checkedModules = [];

                foreach ($classes as $classA) {
                    if (!in_array($classA->getModuleId(), $checkedModules)) {
                        $moduleTimeslots = [];

                        foreach ($classes as $classB) {
                            if ($classA->getModuleId() == $classB->getModuleId()) {
                                if ($classA->getRoomId() != $classB->getRoomId()) {
                                    $clashes++;
                                }

                                $moduleTimeslots[] = $classB->getTimeslotId();
                            }
                        }

                        if (!$this->areConsecutive($moduleTimeslots)) {
                            $clashes++;
                        }

                        if (count($moduleTimeslots) > 4) {
                            // Handle the case where a class has more than 4 meetings
                            $this->adjustClassSchedule($moduleTimeslots);
                        }


                        $checkedModules[] = $classA->getModuleId();
                    }
                }
            }
        }

        return $clashes;
    }

    /**
     * Determine whether a given set of numbers are
     * consecutive
     */
    public function areConsecutive($numbers)
    {
        sort($numbers);

        $min = $numbers[0];
        $max = $numbers[count($numbers) - 1];

        for ($i = $min; $i <= $max; $i++) {
            if (!in_array($i, $numbers)) {
                return false;
            }
        }

        return true;
    }

    private function adjustClassSchedule($moduleTimeslots)
    {
        // Divide the timeslots into two groups
        $group1 = array_slice($moduleTimeslots, 0, 2);
        $group2 = array_slice($moduleTimeslots, 2);

        // Update the timeslots in the classes accordingly
        // For example, set the timeslots for the first two classes to $group1
        // and the timeslots for the next two classes to $group2
        $class1 = $this->getClassByTimeslot($group1[0]);
        $class2 = $this->getClassByTimeslot($group1[1]);
        $class3 = $this->getClassByTimeslot($group2[0]);
        $class4 = $this->getClassByTimeslot($group2[1]);

        // Assign new rooms based on your logic
        $class1->setRoomId($this->getNewRoomId());
        $class2->setRoomId($this->getNewRoomId());
        $class3->setRoomId($this->getNewRoomId());
        $class4->setRoomId($this->getNewRoomId());

        // Update clashes accordingly
        // $clashes += ...;
    }

    // Function to get a class by timeslot ID
    private function getClassByTimeslot($timeslotId)
    {
        foreach ($this->classes as $class) {
            if ($class->getTimeslotId() == $timeslotId) {
                return $class;
            }
        }

        return null;
    }

    private function getNewRoomId()
    {
        // Implement your logic to get a new room ID
        // For example, you can randomly select a room or use a specific rule
        return $this->getRandomRoom()->getId();
    }
}
