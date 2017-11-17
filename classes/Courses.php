<?php
namespace MFFResources;

class Courses
{
    /** @var Course[] */
    private $courses;

    public function __construct(array $courses)
    {
        $this->courses = $courses;
    }

    public function allDetailsHTML(): string
    {
        $output = "";
        foreach ($this->courses as $course) {
            $output .= $course->detailHTML();
        }

        return $output;
    }
}
