<?php

declare(strict_types=1);

namespace App\Domain\Service;

class FormatService
{
    private ?string $tag;

    public function __construct()
    {
        $this->tag = null;
    }

    public function setTag(string $tag): self
    {
        $this->tag = $tag;
        return $this;
    }

    public function format(string $contents): string
    {
        return ($this->tag === null)
            ? $contents
            : sprintf('<%s>%s</%s>', $this->tag, $contents, $this->tag);
    }

}