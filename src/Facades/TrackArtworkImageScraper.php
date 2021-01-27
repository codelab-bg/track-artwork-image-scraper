<?php

namespace CodelabBg\TrackArtworkImageScraper\Facades;

use Illuminate\Support\Facades\Facade;

class TrackArtworkImageScraper extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'track-artwork-image-scraper';
    }
}
