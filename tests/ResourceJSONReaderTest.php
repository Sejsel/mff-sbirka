<?php
require __DIR__ . "/../vendor/autoload.php";

use MFFResources\ResourceJSONParser;
use PHPUnit\Framework\TestCase;

/**
 * @covers \MFFResources\ResourceJSONParser
 */
final class ResourceJSONReaderTest extends TestCase
{
    public function testCanParseExample(): void
    {
        $json = <<<JSON
{
  "NTIN060": {
    "name": "Algoritmy a datové struktury I",
    "resources": [
      {
        "desc": "Description",
        "links": [
          {
            "link_title": "GitHub",
            "url": "https://github.com/"
          }
        ],
        "backups": [
          {
            "date": "2016-01-02",
            "link_title": "backup",
            "url": "/backup.pdf"
          }
        ]
      }
    ]
  }
}
JSON;
        $parser = new ResourceJSONParser();
        $courses = $parser->parse($json);

        $this->assertNotNull($courses);
    }
}
