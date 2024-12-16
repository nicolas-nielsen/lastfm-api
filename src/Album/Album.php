<?php

namespace Nielsenn\LastfmApi\Album;

use Nielsenn\LastfmApi\Image;
use Nielsenn\LastfmApi\Tag;

class Album
{
    public function __construct(
        private string $artist,
        private string $mbid,
        private array $tags,
        private string $playcount,
        private array $image,
        private array $tracks,
        private string $url,
        private string $name,
        private string $listeners,
        private Wiki $wiki,
    ) {
    }

    public function getArtist(): string
    {
        return $this->artist;
    }

    public function getMbid(): string
    {
        return $this->mbid;
    }

    /** @return Tag[] */
    public function getTags(): array
    {
        return $this->tags;
    }

    public function getPlaycount(): string
    {
        return $this->playcount;
    }

    /** @return Image[] */
    public function getImage(): array
    {
        return $this->image;
    }

    /** @return Track[] */
    public function getTracks(): array
    {
        return $this->tracks;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getListeners(): string
    {
        return $this->listeners;
    }

    public function getWiki(): Wiki
    {
        return $this->wiki;
    }
}