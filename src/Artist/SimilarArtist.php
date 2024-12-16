<?php

namespace Nielsenn\LastfmApi\Artist;

class SimilarArtist
{
    use ArtistTrait;

    public function __construct(
        string $name,
        string $url,
        private array $image
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

    /** return Image[] */
    public function getImage(): array
    {
        return $this->image;
    }
}