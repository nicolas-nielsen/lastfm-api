<?php

namespace Nielsenn\LastfmApi\Album;

class Streamable
{
    public function __construct(
        private string $fulltrack,
        private string $text,
    ) {
    }

    public function getFulltrack(): string
    {
        return $this->fulltrack;
    }

    public function getText(): string
    {
        return $this->text;
    }
}