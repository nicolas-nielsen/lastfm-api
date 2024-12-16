<?php

namespace Nielsenn\LastfmApi;

class Link
{
    public function __construct(private string $text, private string $rel, private string $href)
    {
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function getRel(): string
    {
        return $this->rel;
    }

    public function getHref(): string
    {
        return $this->href;
    }
}