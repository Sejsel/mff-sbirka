<?php
namespace MFFResources;

class Resource {
    private $desc;
    /** @var Link[] */
    private $links;
    /** @var Link[] */
    private $backups;

    public function __construct(string $desc, array $links, array $backups)
    {
        $this->desc = $desc;
        $this->links = $links;
        $this->backups = $backups;
    }

    public function toHTML(): string
    {
        $links = [];
        foreach ($this->links as $link) {
            $links[] = $link->toHTML();
        }
        $linksHtml = implode($links, ", ");

        $backups = [];
        foreach ($this->backups as $backup) {
            $backups[] = $backup->toHTML();
        }
        $backupsHtml = implode($backups, ", ");

        return <<<HTML
<div class="resource">
    <div class="desc">
        $this->desc
    </div>
    <div class="links">
        $linksHtml
    </div>
    <div class="backups">
        $backupsHtml
    </div>
</div>
HTML;

    }
}
