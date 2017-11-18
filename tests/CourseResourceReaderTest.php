<?php

use MFFResources\CourseResourceReader;
use PHPUnit\Framework\TestCase;

/**
 * @covers \MFFResources\CourseResourceReader
 * @covers \MFFResources\ResourceJSONParser
 */
final class CourseResourceReaderTest extends TestCase
{
    public function testCanParseTestFile(): void
    {
        $ex = null;
        try {
            $parser = new CourseResourceReader(__DIR__ . "/test.json");
            $parser->getCourses();
        } catch (\Exception $ex) {
        }

        $this->assertNull($ex, "An exception was thrown while trying to read and parse test.json");
    }
}
