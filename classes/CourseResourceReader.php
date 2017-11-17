<?php
namespace MFFResources;

class CourseResourceReader
{
    private $file;
    private $parser;

    public function __construct(string $file)
    {
        $this->file = $file;
        $this->parser = new ResourceJSONParser();
    }

    public function getCourses(): Courses
    {
        $json = file_get_contents($this->file);
        if ($json === false) {
            throw new \Exception("Reading the resource file failed.");
        }

        return $this->parser->parse($json);
    }
}
