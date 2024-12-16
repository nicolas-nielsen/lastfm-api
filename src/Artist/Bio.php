<?php

namespace Nielsenn\LastfmApi\Artist;

use Nielsenn\LastfmApi\Link;

class Bio
{
    public function __construct(
        private array $links,
        private string $published,
        private string $summary
    ) {
    }

    /** @return Link[] */
    public function getLinks(): array
    {
        return $this->links;
    }

    public function getPublished(): string
    {
        return $this->published;
    }

    public function getSummary(): string
    {
        return $this->summary;
    }
}