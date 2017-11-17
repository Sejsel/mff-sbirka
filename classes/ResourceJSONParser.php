<?php
namespace MFFResources;

class ResourceJSONParser
{
    public function parse(string $json): Courses
    {
        $decoded = json_decode($json);
        if ($decoded === NULL) {
            throw new \Exception("Failed to decode JSON.");
        }

        $courses = [];
        foreach ($decoded as $code => $course) {
            if (!isset($course->name)) {
                throw new \Exception("Course $code is missing a name.");
            }

            $resources = [];
            foreach ($course->resources ?? [] as $res) {
                if (!isset($res->desc)) {
                    throw new \Exception("Resource within course $code is missing a description.");
                }

                $links = [];

                foreach ($res->links ?? [] as $link) {
                    $links[] = $this->parseLink($link, $code);
                }

                $backups = [];
                foreach ($res->backups ?? [] as $backup) {
                    $b = $this->parseLink($backup, $code);
                    if (!$b->hasDate()) {
                        throw new \Exception("Backup within course $code is missing a date.");
                    }

                    $backups[] = $b;
                }

                $resources[] = new Resource($res->desc, $links, $backups);
            }

            $courses[] = new Course($code, $course->name, $resources);
        }

        return new Courses($courses);
    }

    private function parseLink($link, string $courseCode): Link
    {
        if (!isset($link->url)) {
            throw new \Exception("Link within course $courseCode is missing a url.");
        }

        return new Link($link->url, $link->link_title ?? "", $link->date ?? "");
    }
}
