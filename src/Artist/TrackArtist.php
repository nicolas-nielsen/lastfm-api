<?php

namespace Nielsenn\LastfmApi\Artist;

class TrackArtist
{
    use ArtistTrait;

    public function __construct(
        string $name,
        string $url,
        private string $mbid
    ) {
        $this->name = $name;
        $this->url = $url;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function getMbid(): string
    {
        return $this->mbid;
    }
}