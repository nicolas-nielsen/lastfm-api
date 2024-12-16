<?php

namespace Nielsenn\LastfmApi;

class Image
{
    public function __construct(private string $size, private string $text)
    {
    }

    public function getSize(): string
    {
        return $this->size;
    }

    public function getText(): string
    {
        return $this->text;
    }
}
