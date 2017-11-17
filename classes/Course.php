<?php
namespace MFFResources;

class Course
{
    private $code;
    private $name;
    /** @var Resource[] */
    private $resources;

    public function __construct(string $code, string $name, array $resources)
    {
        $this->code = $code;
        $this->name = $name;
        $this->resources = $resources;
    }

    public function detailHTML(): string
    {
        $resourcesHtml = "";
        foreach ($this->resources as $res) {
            $resourcesHtml .= $res->toHTML();
        }

        $output = <<<HTML
<div>
<h2>$this->name ($this->code)</h2>
$resourcesHtml
</div>
HTML;
        return $output;
    }
}
