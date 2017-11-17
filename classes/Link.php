<?php
namespace MFFResources;

class Link {
    private $url;
    private $linkTitle;
    private $date;

    public function __construct(string $url, string $linkTitle, string $date)
    {
        $this->url = $url;
        $this->linkTitle = $linkTitle;
        $this->date = $date;
    }

    public function hasDate(): bool
    {
        return !self::isEmptyOrWhitespace($this->date);
    }

    private function hasTitle(): bool
    {
        return !self::isEmptyOrWhitespace($this->linkTitle);
    }

    private function getTitle(): string
    {
        return $this->hasTitle() ? $this->linkTitle : $this->url;
    }

    private static function isEmptyOrWhitespace(string $str): bool
    {
        return ctype_space($str) || $str == "";
    }

    public function toHTML(): string
    {
        $date =  $this->hasDate() ? " ($this->date)" : "";

        $output = "<a href='$this->url'>{$this->getTitle()}</a>$date";

        return $output;
    }
}
