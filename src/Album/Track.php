<?php

namespace Nielsenn\LastfmApi\Album;

use Nielsenn\LastfmApi\Artist\TrackArtist;

class Track
{
    public function __construct(
        private Streamable $streamable,
        private ?int $duration,
        private string $url,
        private string $name,
        private int $rank,
        private TrackArtist $trackArtist
    ) {
    }

    public function getStreamable(): Streamable
    {
        return $this->streamable;
    }

    public function getDuration(): ?int
    {
        return $this->duration;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getRank(): int
    {
        return $this->rank;
    }

    public function getTrackArtist(): TrackArtist
    {
        return $this->trackArtist;
    }
}