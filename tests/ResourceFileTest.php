<?php
require __DIR__ . "/../vendor/autoload.php";

use MFFResources\CourseResourceReader;
use PHPUnit\Framework\TestCase;

final class ResourceFileTest extends TestCase
{
    public function testCanParseMainResourceFile(): void
    {
        $parser = new CourseResourceReader(__DIR__ . "/../sbirka.json");
        $courses = $parser->getCourses();

        $this->assertNotNull($courses, "null returned instead of Courses when reading sbirka.json");
    }
}

