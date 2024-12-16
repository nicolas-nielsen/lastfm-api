<?php

namespace Nielsenn\LastfmApi\Album;

class Wiki
{
    public function __construct(
        private string $published,
        private string $summary,
    ) {
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