<?php

namespace Nielsenn\LastfmApi;

class Stats
{
    public function __construct(private string $listeners, private string $playcount)
    {
    }

    public function getListeners(): string
    {
        return $this->listeners;
    }

    public function getPlaycount(): string
    {
        return $this->playcount;
    }
}