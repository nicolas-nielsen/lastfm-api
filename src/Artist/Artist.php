<?php

namespace Nielsenn\LastfmApi\Artist;

use Nielsenn\LastfmApi\Stats;
use Nielsenn\LastfmApi\Tag;

class Artist
{
    use ArtistTrait;
    public function __construct(
        string $name,
        array $image,
        string $url,
        private string $mbid,
        private string $streamable,
        private string $onTour,
        private Stats $stats,
        private array $similar,
        private array $tags,
        private Bio $bio,
    ) {
        $this->name = $name;
        $this->image = $image;
        $this->url = $url;
    }

    public function getMbid(): string
    {
        return $this->mbid;
    }

    public function getStreamable(): string
    {
        return $this->streamable;
    }

    public function getOnTour(): string
    {
        return $this->onTour;
    }

    public function getStats(): Stats
    {
        return $this->stats;
    }

    /** @return SimilarArtist[] */
    public function getSimilar(): array
    {
        return $this->similar;
    }

    /** @return Tag[] */
    public function getTags(): array
    {
        return $this->tags;
    }

    public function getBio(): Bio
    {
        return $this->bio;
    }
}